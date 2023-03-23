from rest_framework import serializers
from django.utils.translation import gettext_lazy as _
from oauth2_provider.models import AccessToken, RefreshToken
from utils.create_login_token import generate_access_token


class TokenRefreshSerializer(serializers.Serializer):
    """
    Implements an endpoint to provide access tokens
    The endpoint accepts refresh Token as parameter
    and returns a valid access token web json object
    """

    refresh_token = serializers.CharField()

    def validate(self, attrs):
        token = attrs["refresh_token"]
        try:
            refresh = RefreshToken.objects.get(token=token)

            if refresh:
                access_token, refresh_token = generate_access_token(
                    refresh.user, refresh.application
                )
                data = {"access_token": access_token.token}
            return data
        except RefreshToken.DoesNotExist:
            return {}


class TokenSerializer(serializers.Serializer):
    access_token = serializers.CharField()

    class Meta:
        model = AccessToken
        fields = ["access_token"]
