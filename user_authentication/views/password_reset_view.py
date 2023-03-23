from rest_framework import status
from django.db.models.functions import Lower
from django.contrib.auth import get_user_model
from django.utils.decorators import method_decorator
from django.utils.translation import gettext_lazy as _
from django.views.decorators.debug import sensitive_post_parameters
from rest_framework.generics import GenericAPIView
from rest_framework.permissions import AllowAny
from rest_framework.response import Response

# from users.serializers.user_password_reset import PasswordResetSerializer
from dj_rest_auth.app_settings import PasswordResetSerializer
from django.contrib.auth import get_user_model

UserAuth = get_user_model()

sensitive_post_parameters_m = method_decorator(
    sensitive_post_parameters(
        "password", "old_password", "new_password1", "new_password2"
    )
)


class PasswordResetView(GenericAPIView):
    """
    Accepts the following POST parameters: email
    and sends email with password reset link
    Returns the success/fail message.
    """

    serializer_class = PasswordResetSerializer
    permission_classes = (AllowAny,)
    throttle_scope = "dj_rest_auth"

    def post(self, request, *args, **kwargs):
        # Create a serializer with request.data
        serializer = self.get_serializer(data=request.data)
        if not serializer.is_valid():
            data_errors = {}
            data_message = str("")
            for P, M in serializer.errors.items():
                data_message += P + ": " + M[0].replace(".", "") + ", "
            data_errors["detail"] = data_message
            return Response(data_errors, status=status.HTTP_400_BAD_REQUEST)

        if not UserAuth.objects.annotate(
            email_lower=Lower("email".replace(" ", ""))
        ).filter(email_lower=request.data["email"].lower().replace(" ", "")):

            return Response(
                {"detail": _("There is no account registered with your email address")},
                status=status.HTTP_400_BAD_REQUEST,
            )
        else:
            serializer.save()
            # Return the success message with OK HTTP status
            return Response(
                {"detail": _("Password reset e-mail has been sent.")},
                status=status.HTTP_200_OK,
            )
