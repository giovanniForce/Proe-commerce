from oauth2_provider.models import Application, AccessToken, RefreshToken
from django.utils import timezone
from django.conf import settings


def archives_access_token(user, client_app):
    access_token = AccessToken.objects.filter(
        application=client_app, user=user, expires__gte=timezone.now()
    ).update(expires=timezone.now())
    return
