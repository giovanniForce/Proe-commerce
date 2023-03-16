from django.conf import settings
from rest_framework import status
from django.contrib.auth import logout as django_logout
from django.core.exceptions import ObjectDoesNotExist
from django.utils.translation import gettext_lazy as _
from rest_framework.permissions import AllowAny
from rest_framework.response import Response
from rest_framework.views import APIView
from utils.delete_token_on_logout import archives_access_token
from oauth2_provider.models import Application
from rest_framework.response import Response
from django.core.exceptions import ValidationError


class LogoutView(APIView):
    """
    Once called, it expires the Token object
    assigned to the current User object. Note
    that the client (Client Application ID) should be
    send as a param on the request Headers.
    """

    permission_classes = (AllowAny,)
    throttle_scope = "dj_rest_auth"

    def get(self, request, *args, **kwargs):
        # Get the Application Client
        client_app = request.headers.get("Client-Id")
        if not client_app:
            return Response(
                {"detail": _("Application client ID should be provided")},
                status=status.HTTP_400_BAD_REQUEST,
            )
        else:
            try:
                client_app = Application.objects.get(client_id=client_app)
            except Application.DoesNotExist:
                return Response(
                    {"detail": _("Application client is not registered")},
                    status=status.HTTP_400_BAD_REQUEST,
                )

        if getattr(settings, "OAUTH2_PROVIDER_APPLICATION_MODEL", False):
            response = self.logout(request, client_app)

        elif getattr(settings, "ACCOUNT_LOGOUT_ON_GET", False):
            response = self.logout(request)
        else:
            response = self.http_method_not_allowed(request, *args, **kwargs)

        return self.finalize_response(request, response, *args, **kwargs)

    def post(self, request, *args, **kwargs):
        # Get the Application Client
        client_app = request.headers.get("Client-Id")
        if not client_app:
            return Response(
                {"detail": _("Application client ID should be provided")},
                status=status.HTTP_400_BAD_REQUEST,
            )
        else:
            try:
                client_app = Application.objects.get(client_id=client_app)
            except Application.DoesNotExist:
                return Response(
                    {"detail": _("Application client is not registered")},
                    status=status.HTTP_400_BAD_REQUEST,
                )
        return self.logout(request, client_app)

    def logout(self, request, client_app):
        # Expires all tokens on logout
        try:
            archives_access_token(request.user, client_app)
        except (AttributeError, ObjectDoesNotExist):
            pass
        except ValidationError:
            pass

        if getattr(settings, "REST_SESSION_LOGIN", True):
            django_logout(request)

        response = Response(
            {"detail": _("Successfully logged out.")}, status=status.HTTP_200_OK
        )

        if getattr(settings, "REST_USE_JWT", False):
            # NOTE: this import occurs here rather than at the top level
            # because JWT support is optional, and if `REST_USE_JWT` isn't
            # True we shouldn't need the dependency
            from rest_framework_simplejwt.exceptions import TokenError
            from rest_framework_simplejwt.tokens import RefreshToken

            cookie_name = getattr(settings, "JWT_AUTH_COOKIE", None)
            if cookie_name:
                response.delete_cookie(cookie_name)
            refresh_cookie_name = getattr(settings, "JWT_AUTH_REFRESH_COOKIE", None)
            if refresh_cookie_name:
                response.delete_cookie(refresh_cookie_name)

            if "rest_framework_simplejwt.token_blacklist" in settings.INSTALLED_APPS:
                # add refresh token to blacklist
                try:
                    token = RefreshToken(request.data["refresh"])
                    token.blacklist()
                except KeyError:
                    response.data = {
                        "detail": _("Refresh token was not included in request data.")
                    }
                    response.status_code = status.HTTP_401_UNAUTHORIZED
                except (TokenError, AttributeError, TypeError) as error:
                    if hasattr(error, "args"):
                        if (
                            "Token is blacklisted" in error.args
                            or "Token is invalid or expired" in error.args
                        ):
                            response.data = {"detail": _(error.args[0])}
                            response.status_code = status.HTTP_401_UNAUTHORIZED
                        else:
                            response.data = {"detail": _("An error has occurred.")}
                            response.status_code = status.HTTP_500_INTERNAL_SERVER_ERROR

                    else:
                        response.data = {"detail": _("An error has occurred.")}
                        response.status_code = status.HTTP_500_INTERNAL_SERVER_ERROR

            else:
                message = _(
                    "Neither cookies or blacklist are enabled, so the token "
                    "has not been deleted server side. Please make sure the token is deleted client side."
                )
                response.data = {"detail": message}
                response.status_code = status.HTTP_200_OK
        return response
