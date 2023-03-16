from oauth2_provider.models import Application, AccessToken, RefreshToken
from django.utils import timezone
from datetime import timedelta
from django.conf import settings
from oauthlib import common


def generate_access_token(user, client_app):

    expires_in = timezone.now() + timedelta(
        seconds=settings.OAUTH2_PROVIDER["ACCESS_TOKEN_EXPIRE_SECONDS"]
    )
    access_token = AccessToken.objects.create(
        application=client_app,
        user=user,
        scope=settings.OAUTH2_PROVIDER["SCOPES"],
        expires=expires_in,
        token=common.generate_token(),
    )
    reflesh_token = RefreshToken.objects.create(
        user=user,
        token=common.generate_token(),
        application=client_app,
        access_token=access_token,
    )
    return access_token, reflesh_token
