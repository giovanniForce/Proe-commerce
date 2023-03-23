from rest_framework import status
from rest_framework import generics, serializers
from rest_framework.response import Response
from django.contrib.auth.models import User
from django.utils.translation import gettext_lazy as _

from utils.password_valid import is_password_valid
from user_authentication.serializers import UpdatePasswordSerializer
from rest_framework.permissions import IsAuthenticated   

class UpdatePasswordView(generics.CreateAPIView):
        """
            Update user password 
        """
        serializer_class = UpdatePasswordSerializer
        model = User
        permission_classes = (IsAuthenticated,)

        def get_object(self, queryset=None):
            obj = self.request.user
            return obj

        def create(self, request, *args, **kwargs):
            self.object = self.get_object()
            serializer = self.get_serializer(data=request.data)

            if serializer.is_valid():
                # Check old password
                if not self.object.check_password(serializer.data.get("previous_password")):
                    return Response({"detail": "Wrong password."}, status=status.HTTP_400_BAD_REQUEST)
                # set_password also hashes the password that the user will get
                
                response = {
                    'status': 'success',
                    'code': status.HTTP_200_OK,
                    'detail': 'Password updated successfully',
                    'data': []
                }

                if not is_password_valid(serializer.data.get("new_password")):
                    raise serializers.ValidationError(
                        {
                            "detail": _(
                                "The password must contain at least 1 uppercase letter, 1 special character and a minimum length of 8 characters"
                            )
                        }
                    )
                else:
                    self.object.set_password(serializer.data.get("new_password"))
                    self.object.save()

                return Response(response)

            if not serializer.is_valid():
                data_errors = {}
                data_message = str("")
                for P, M in serializer.errors.items():
                    data_message += P + ": " + M[0].replace(".", "") + ", "
                data_errors["detail"] = data_message
                return Response(data_errors, status=status.HTTP_400_BAD_REQUEST)

            return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)