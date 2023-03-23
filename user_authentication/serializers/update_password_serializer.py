from rest_framework import serializers
from django.contrib.auth.models import User

class UpdatePasswordSerializer(serializers.Serializer):
    model = User

    """
    Serializer for password change endpoint.
    """
    previous_password = serializers.CharField(required=True)
    new_password = serializers.CharField(required=True)