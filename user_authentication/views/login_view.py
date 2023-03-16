from django.conf import settings
from django.utils import timezone
from rest_framework import status
from dj_rest_auth.models import TokenModel
from dj_rest_auth.utils import jwt_encode
from rest_framework.response import Response
from django.contrib.auth import login as django_login
from django.utils.decorators import method_decorator
from django.utils.translation import gettext_lazy as _
from django.views.decorators.debug import sensitive_post_parameters
from rest_framework.generics import GenericAPIView
from rest_framework.permissions import AllowAny
from dj_rest_auth.app_settings import (
    JWTSerializer,
    LoginSerializer,
    TokenSerializer,
    create_token,
)
from user_authentication.serializers import Oauth2ProviderLoginSerializer
from oauth2_provider.models import Application
from rest_framework.response import Response

sensitive_post_parameters_m = method_decorator(
    sensitive_post_parameters(
        "password", "old_password", "new_password1", "new_password2"
    )
)
from utils.create_login_token import generate_access_token


class LoginView(GenericAPIView):
    """
    Check the credentials and returns Oauth2 Pair Tokens Object
    if the credentials are valid and authenticated.
    Accept the following POST parameters: email, password,
    and client app as a param in request headers.
    """

    permission_classes = (AllowAny,)
    serializer_class = LoginSerializer
    token_model = TokenModel
    throttle_scope = "dj_rest_auth"
 
    @sensitive_post_parameters_m
    def dispatch(self, *args, **kwargs):
        return super(LoginView, self).dispatch(*args, **kwargs)

    def process_login(self):
        django_login(self.request, self.user)

    def get_response_serializer(self):
        if getattr(settings, "OAUTH2_PROVIDER_APPLICATION_MODEL", False):
            response_serializer = Oauth2ProviderLoginSerializer
        elif getattr(settings, "REST_USE_JWT", False):
            response_serializer = JWTSerializer
        else:
            response_serializer = TokenSerializer
        return response_serializer

    def login(self, client_app):

        self.user = self.serializer.validated_data["user"]

        # ----------------------- default Settings---------------------
        current_profile = self.user
        
        # for Oauth2 Auth  Pair Tokens
        if getattr(settings, "OAUTH2_PROVIDER_APPLICATION_MODEL", False):
            # Generate an oauth2 pair of access tokens for the user
            self.access_token, self.refresh_token = generate_access_token(
                self.user, client_app
            )
        # for JWT Auth Pair Tokens
        elif getattr(settings, "REST_USE_JWT", False):
            self.access_token, self.refresh_token = jwt_encode(self.user)

        # for Simple REST Auth Token
        else:
            self.token = create_token(self.token_model, self.user, self.serializer)

        if getattr(settings, "REST_SESSION_LOGIN", True):
            self.process_login()

    def get_response(self):
        serializer_class = self.get_response_serializer()
        access_token_expiration = None
        refresh_token_expiration = None
        if getattr(settings, "OAUTH2_PROVIDER_APPLICATION_MODEL", False):

            data = {
                "user": self.user,
                "access_token": self.access_token,
                "refresh_token": self.refresh_token,
                "expires_in": settings.OAUTH2_PROVIDER["ACCESS_TOKEN_EXPIRE_SECONDS"],
                "token_type": "Bearer",
            }
            serializer = serializer_class(
                instance=data, context=self.get_serializer_context()
            )
        elif getattr(settings, "REST_USE_JWT", False):
            from rest_framework_simplejwt.settings import api_settings as jwt_settings

            access_token_expiration = (
                timezone.now() + jwt_settings.ACCESS_TOKEN_LIFETIME
            )
            refresh_token_expiration = (
                timezone.now() + jwt_settings.REFRESH_TOKEN_LIFETIME
            )
            return_expiration_times = getattr(
                settings, "JWT_AUTH_RETURN_EXPIRATION", False
            )

            data = {
                "user": self.user,
                "access_token": self.access_token,
                "refresh_token": self.refresh_token,
            }
            print("data os ",data)
            serializer = serializer_class(
                instance=data, context=self.get_serializer_context()
            )
        else:
            serializer = serializer_class(
                instance=self.token, context=self.get_serializer_context()
            )

        response = Response(serializer.data, status=status.HTTP_200_OK)
        if getattr(settings, "REST_USE_JWT", False):
            cookie_name = getattr(settings, "JWT_AUTH_COOKIE", None)
            refresh_cookie_name = getattr(settings, "JWT_AUTH_REFRESH_COOKIE", None)
            refresh_cookie_path = getattr(settings, "JWT_AUTH_REFRESH_COOKIE_PATH", "/")
            cookie_secure = getattr(settings, "JWT_AUTH_SECURE", False)
            cookie_httponly = getattr(settings, "JWT_AUTH_HTTPONLY", True)
            cookie_samesite = getattr(settings, "JWT_AUTH_SAMESITE", "Lax")

            if cookie_name:
                response.set_cookie(
                    cookie_name,
                    self.access_token,
                    expires=access_token_expiration,
                    secure=cookie_secure,
                    httponly=cookie_httponly,
                    samesite=cookie_samesite,
                )

            if refresh_cookie_name:
                response.set_cookie(
                    refresh_cookie_name,
                    self.refresh_token,
                    expires=refresh_token_expiration,
                    secure=cookie_secure,
                    httponly=cookie_httponly,
                    samesite=cookie_samesite,
                    path=refresh_cookie_path,
                )
        return response

    def post(self, request, *args, **kwargs):
        client_app = request.headers.get("Client-Id")
        if client_app:
            try:
                client_app = Application.objects.get(client_id=client_app)
            except Application.DoesNotExist:
                return Response(
                    {"detail": _("Application client is not registered")},
                    status=status.HTTP_400_BAD_REQUEST,
                )
        else:
            try:
                client_app = Application.objects.get(id=1)
            except Application.DoesNotExist:
                return Response(
                    {
                        "detail": _(
                            "Please make sure Oauth2 Application is registered from the Admin Panel"
                        )
                    },
                    status=status.HTTP_400_BAD_REQUEST,
                )
        self.request = request
        self.serializer = self.get_serializer(data=self.request.data)
        if not self.serializer.is_valid():
            data_errors = {}
            data_message = str("")
            for P, M in self.serializer.errors.items():
                data_message += P + ": " + M[0].replace(".", "") + ", "
            data_errors["detail"] = data_message
            return Response(data_errors, status=status.HTTP_400_BAD_REQUEST)

        self.login(client_app)
        return self.get_response()
