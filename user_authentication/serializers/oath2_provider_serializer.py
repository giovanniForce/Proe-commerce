from django.conf import settings
from django.contrib.auth import authenticate, get_user_model
from django.contrib.auth.forms import PasswordResetForm, SetPasswordForm
from django.contrib.auth.tokens import default_token_generator
from django.utils.encoding import force_str
from django.utils.http import urlsafe_base64_decode as uid_decoder
from django.utils.module_loading import import_string
from rest_framework import exceptions, serializers
from rest_framework.exceptions import ValidationError
from django.utils.translation import gettext_lazy as _
# from permissions.serializers.group import GroupListSerializer


# Get the UserModel
UserModel = get_user_model()


class Oauth2ProviderLoginSerializer(serializers.Serializer):
    """
    Serializer for Oauth2Provider authentication.
    """

    access_token = serializers.CharField()
    refresh_token = serializers.CharField()
    expires_in = serializers.CharField()
    token_type = serializers.CharField()
    user = serializers.SerializerMethodField()
    # groups = serializers.SerializerMethodField()

    def get_user(self, obj):
        """
        Required to allow using custom USER_DETAILS_SERIALIZER in
        Oauth2ProviderLoginSerializer. Defining it here to avoid circular imports
        """
        rest_auth_serializers = getattr(settings, "REST_AUTH_SERIALIZERS", {})

        Oauth2ProviderUserDetailsSerializer = import_string(
            rest_auth_serializers.get(
                "USER_DETAILS_SERIALIZER",
                "dj_rest_auth.serializers.UserDetailsSerializer",
            )
        )
        user_data = Oauth2ProviderUserDetailsSerializer(
            obj["user"], context=self.context
        ).data
        return user_data

    # def get_groups(self, obj):
    #     groups = obj["user"].groups.all()
    #     serializer = GroupListSerializer(instance=groups, many=True)
    #     return serializer.data
