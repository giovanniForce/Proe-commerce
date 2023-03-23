from __future__ import absolute_import, unicode_literals
import django
from rest_framework import serializers
from django.contrib.auth.models import Permission


class PermissionListSerializer(serializers.ModelSerializer):
    class Meta:
        model = Permission
        fields = ["id", "name", "codename"]


class PermissionSerializer(serializers.ModelSerializer):
    class Meta:
        model = Permission
        fields = ["id", "codename"]


class PermissionViewSerializer(serializers.ModelSerializer):
    class Meta:
        model = Permission
        fields = ["id", "name"]


class AssignRoleToUserSerializer(serializers.ModelSerializer):
    user_id = serializers.CharField(style={"input_type": "user_id"}, write_only=True)
    group_name = serializers.CharField(
        style={"input_type": "group_name"}, write_only=True
    )

    class Meta:
        model = Permission
        fields = ["user_id", "group_name"]


class AssignPermissionToUserSerializer(serializers.ModelSerializer):
    user_id = serializers.CharField(style={"input_type": "user_id"}, write_only=True)
    permission_name = serializers.CharField(
        style={"input_type": "permission_name"}, write_only=True
    )

    class Meta:
        model = Permission
        fields = ["user_id", "permission_name"]


class AssignPermissionToGroupSerializer(serializers.ModelSerializer):
    group_name = serializers.CharField(
        style={"input_type": "group_name"}, write_only=True
    )
    permission_name = serializers.CharField(
        style={"input_type": "permission_name"}, write_only=True
    )

    class Meta:
        model = Permission
        fields = ["group_name", "permission_name"]