from django.utils import timezone
from user_authentication.serializers import TokenSerializer, TokenRefreshSerializer
from rest_framework import generics, status
from rest_framework.response import Response
from django.utils.translation import gettext_lazy as _
from oauth2_provider.models import Application, AccessToken, RefreshToken

def is_expired(token):
        """
        Check token expiration with timezone awareness
        """
        if not token.expires:
            return True
        return timezone.now() >= token.expires
        
class TokenRefreshView(generics.GenericAPIView):
    """
    Takes a refresh token and returns an access
    token if the refresh token is valid.
    """

    permission_classes = ()
    authentication_classes = ()
    serializer_class = TokenRefreshSerializer
    www_authenticate_realm = "api"

    def post(self, request, *args, **kwargs):
        serializer = self.get_serializer(data=request.data)
        if not serializer.is_valid():
            data_errors = {}
            data_message = str("")
            for P, M in serializer.errors.items():
                data_message += P + ": " + M[0].replace(".", "") + ", "
            data_errors["detail"] = data_message

        if bool(serializer.validated_data):
            return Response(serializer.validated_data, status=status.HTTP_200_OK)
        else:
            return Response(
                {"detail": _("Invalid Refresh Token")},
                status=status.HTTP_400_BAD_REQUEST,
            )


class TokenVerifyView(generics.GenericAPIView):
    """
    Takes a token and indicates if it is valid. This view provides no
    information about a token's fitness for a particular use.
    It returns an OK message if the token is valid
    """

    permission_classes = ()
    authentication_classes = ()
    serializer_class = TokenSerializer
    www_authenticate_realm = "api"

    def post(self, request, *args, **kwargs):
        try:
            token = AccessToken.objects.get(token=request.data["access_token"])
            if not is_expired(token):
                return Response({"detail": _("OK")}, status=status.HTTP_200_OK)
            return Response(
                {"detail": _("Token is invalid or expired")},
                status=status.HTTP_400_BAD_REQUEST,
            )
        except AccessToken.DoesNotExist:
            return Response(
                {"detail": _("Token is invalid or expired")},
                status=status.HTTP_400_BAD_REQUEST,
            )
