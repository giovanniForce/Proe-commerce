from django.shortcuts import render
from rest_framework import viewsets
from django.contrib.auth.models import Group, Permission
from user_authentication.serializers import GroupListSerializer, PermissionListSerializer
from rest_framework.permissions import IsAuthenticated
from utils.permission_mixins import CustomPermission
from django.contrib.auth.mixins import PermissionRequiredMixin

# Create your views here.
class GroupViews(viewsets.ModelViewSet):
    permission_classes = (IsAuthenticated, CustomPermission)
    serializer_class = GroupListSerializer
    queryset = Group.objects.all()
    def list(self, request, *args, **kwargs):
        print("listing "*50)
        return super().list(request, *args, **kwargs)

class PermissionView(viewsets.ModelViewSet):
    # permission_required = (IsAuthenticated, CustomPermission)
    permission_classes = (IsAuthenticated, CustomPermission)
    serializer_class = PermissionListSerializer
    queryset = Permission.objects.all()