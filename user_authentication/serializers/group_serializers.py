from __future__ import absolute_import, unicode_literals
import django
from rest_framework import serializers
from django.contrib.auth.models import Group
from .permission_serializer import PermissionListSerializer


class GroupAddSerializer(serializers.ModelSerializer):
    class Meta:
        model = Group
        fields = ["name"]


class GroupListSerializer(serializers.ModelSerializer):
    permissions = PermissionListSerializer(many=True, read_only=True)

    class Meta:
        model = Group
        fields = ["id", "name", "permissions"]


class GroupEditSerializer(serializers.ModelSerializer):
    class Meta:
        model = Group
        fields = ["id", "name"]


class GroupReadSerializer(serializers.ModelSerializer):
    permissions = PermissionListSerializer(many=True, read_only=True)

    class Meta:
        model = Group
        fields = ["id", "name", "permissions"]