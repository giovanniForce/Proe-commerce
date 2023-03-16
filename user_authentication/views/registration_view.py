from allauth.account import app_settings as allauth_settings
from allauth.account.utils import complete_signup
from dj_rest_auth.app_settings import JWTSerializer, TokenSerializer, create_token
from dj_rest_auth.models import TokenModel
from dj_rest_auth.utils import jwt_encode
from django.conf import settings
from django.contrib.auth import get_user_model
from django.utils.decorators import method_decorator
from django.utils.translation import gettext_lazy as _
from django.views.decorators.debug import sensitive_post_parameters
from rest_framework import status
from rest_framework.generics import CreateAPIView
from rest_framework.response import Response
from dj_rest_auth.registration.app_settings import register_permission_classes
from user_authentication.serializers import UserRegistrationSerializer
from rest_framework.permissions import IsAuthenticated, AllowAny

sensitive_post_parameters_m = method_decorator(
    sensitive_post_parameters("password1", "password2")
)


class UserRegistrationView(CreateAPIView):
    """
    Creates a new user instance. Accept the following POST parameters:
    first_name, last_name, email, password, password2 and 
    Note that the referral_code equals 8 characters string 
    And a Confirmation Email is sent to the New created User.
    """

    serializer_class = UserRegistrationSerializer
    queryset = get_user_model().objects.all()
    permission_classes = [AllowAny]
    # permission_classes = [IsAuthenticated]
    token_model = TokenModel
    throttle_scope = "dj_rest_auth"

    @sensitive_post_parameters_m
    def dispatch(self, *args, **kwargs):
        return super(UserRegistrationView, self).dispatch(*args, **kwargs)

    def get_response_data(self, user):
        if (
            allauth_settings.EMAIL_VERIFICATION
            == allauth_settings.EmailVerificationMethod.MANDATORY
        ):
            return {"detail": _("Verification e-mail sent.")}

        if getattr(settings, "REST_USE_JWT", False):
            data = {
                "user": user,
                "access_token": self.access_token,
                "refresh_token": self.refresh_token,
            }
            return JWTSerializer(data, context=self.get_serializer_context()).data
        else:
            return TokenSerializer(
                user.auth_token, context=self.get_serializer_context()
            ).data

    def perform_create(self, serializer):
        user = serializer.save(self.request)
        if (
            allauth_settings.EMAIL_VERIFICATION
            != allauth_settings.EmailVerificationMethod.MANDATORY
        ):
            if getattr(settings, "REST_USE_JWT", False):
                self.access_token, self.refresh_token = jwt_encode(user)
            else:
                create_token(self.token_model, user, serializer)

        complete_signup(
            self.request._request, user, allauth_settings.EMAIL_VERIFICATION, None
        )
        user.is_active = True
        user.save()
        return user

    def create(self, request, *args, **kwargs):
        
        serializer = self.get_serializer(data=request.data)

        if not serializer.is_valid():
            data_errors = {}
            data_message = str("")
            for P, M in serializer.errors.items():
                data_message += P + ": " + M[0].replace(".", "") + ", "
            data_errors["detail"] = data_message
            return Response(data_errors, status=status.HTTP_400_BAD_REQUEST)

        user = self.perform_create(serializer)

        headers = self.get_success_headers(serializer.data)
        return Response(
            {
                "detail": _(
                    "Registration successfully completed. Please check your email to activate your account"
                )
            },
            status=status.HTTP_201_CREATED,
        )
