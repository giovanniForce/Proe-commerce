from rest_framework import serializers
from django.utils.translation import gettext_lazy as _
from django.contrib.auth import get_user_model
from utils.password_valid import is_password_valid


UserAuth = get_user_model()

class UserRegistrationSerializer(serializers.ModelSerializer):
    first_name = serializers.CharField(
        style={"input_type": "first_name"}, write_only=True
    )
    last_name = serializers.CharField(
        style={"input_type": "last_name"}, write_only=True
    )
    password2 = serializers.CharField(style={"input_type": "password"}, write_only=True)
    is_admin = serializers.BooleanField(default=False, style={"input_type": "is_advisor"}, write_only=True)

    class Meta:
        model = UserAuth
        fields = ["first_name", "last_name", "email", "password", "password2", "is_superuser", "is_admin"]
        extra_kwargs = {"password": {"write_only": True}}

    def save(self, request):
        user = UserAuth(email=self.validated_data["email"],
        first_name=self.validated_data["first_name"],
        last_name=self.validated_data["last_name"],
        is_superuser=self.validated_data["is_superuser"],
        is_admin=self.validated_data["is_admin"],
        is_shop_owner= False,
        created_by=self.validated_data["created_by"],
        )
        password = self.validated_data["password"]
        password2 = self.validated_data["password2"]

        if not is_password_valid(self.validated_data["password"]):
            raise serializers.ValidationError(
                {
                    "detail": _(
                        "The password must contain at least 1 uppercase letter, 1 special character and a minimum length of 8 characters"
                    )
                }
            )

        if password != password2:
            raise serializers.ValidationError(
                _("The two password fields didn't match.")
            )
        user.set_password(password)
        
        user.is_active = True
        user.save()

        return user
