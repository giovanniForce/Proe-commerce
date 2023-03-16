from decouple import config
from django.http import HttpResponseRedirect
from rest_framework import status
from allauth.account.views import ConfirmEmailView
from dj_rest_auth.registration.serializers import VerifyEmailSerializer
from django.conf import settings
from django.utils.decorators import method_decorator
from django.utils.translation import gettext_lazy as _
from django.views.decorators.debug import sensitive_post_parameters
from rest_framework.exceptions import NotFound, MethodNotAllowed
from rest_framework.permissions import AllowAny, IsAuthenticated
from rest_framework.response import Response
from rest_framework.views import APIView

sensitive_post_parameters_m = method_decorator(
    sensitive_post_parameters("password1", "password2")
)


class VerifyEmailView(APIView, ConfirmEmailView):
    """
    Confirms a user's email address
    Accept the following POST parameters: code key
    Note that the User is not automatically logged in!
    """

    permission_classes = (AllowAny,)
    allowed_methods = ("POST", "OPTIONS", "HEAD")

    def get_serializer(self, *args, **kwargs):
        return VerifyEmailSerializer(*args, **kwargs)

    def get(self, *args, **kwargs):
        raise MethodNotAllowed("GET")

    def post(self, request, *args, **kwargs):
        serializer = self.get_serializer(data=request.data)
        serializer.is_valid(raise_exception=True)
        self.kwargs["key"] = serializer.validated_data["key"]
        confirmation = self.get_object()
        confirmation.confirm(self.request)
        return Response(
            {"detail": _("You have successfully confirmed your Email")},
            status=status.HTTP_200_OK,
        )


class CustomConfirmEmailView(APIView, ConfirmEmailView):
    """
    Confirms a user's email address
    Accept the following POST parameters: code key
    Note that the User is not automatically logged in!
    """

    permission_classes = (AllowAny,)
    allowed_methods = ("GET", "OPTIONS", "HEAD")

    def get_serializer(self, *args, **kwargs):
        return VerifyEmailSerializer(*args, **kwargs)

    def get(self, request, *args, **kwargs):
        # here may be placed additional operations for
        # extracting id of the object and using reverse()
        # print("request ====>", request.path_info)
        return HttpResponseRedirect(redirect_to="{}{}".format( config("FRONTEND_ADMIN_URL") ,request.path_info))
        

    def post(self, request, *args, **kwargs):
        # serializer = self.get_serializer(data=request.data)
        # serializer.is_valid(raise_exception=True)
        # self.kwargs["key"] = serializer.validated_data["key"]
        # confirmation = self.get_object()
        # confirmation.confirm(self.request)
        # return Response(
        #     {"detail": _("You have successfully confirmed your Email")},
        #     status=status.HTTP_200_OK,
        # )
        raise MethodNotAllowed("GET")
