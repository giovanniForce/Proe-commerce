import copy
from django.core.exceptions import PermissionDenied
from django.contrib.auth.mixins import PermissionRequiredMixin
from rest_framework import status    
from rest_framework.permissions import DjangoModelPermissions
from rest_framework.response import Response
from django.http import HttpResponse
from django.shortcuts import resolve_url
from urllib.parse import urlparse


class CheckManagerPermissionMixin:
    def dispatch(selt, request, *args, **kwargs):
        if request.user.groups.filter(name="manager").exists():
            return super.dispatch(request, *args, **kwargs)
        else:
            raise PermissionDenied


# class CheckUserPermissionMixin(PermissionRequiredMixin):
    
    
#     def has_permission(self) -> bool:
#         perms = self.get_permission_required()
#         print(perms)
#         method = self.request.method
#         print(method)
#         if method== "POST":
#             for perm in perms:
#                 if 'add' in perm:
#                     permission = perm
#                     break
#         elif method == "PUT":
#             for perm in perms:
#                 if 'change' in perm:
#                     permission = perm
#                     break
#         elif method == "DELETE":
#             for perm in perms:
#                 if 'delete' in perm:
#                     permission = perm
#                     break
#         elif method == "GET":
#             for perm in perms:
#                 if 'view' in perm:
#                     permission = perm
#                     break
#         print("Permission {}".format(permission))
#         print(self.request.user)
#         print("Has permission {}".format(self.request.user.has_perm(permission)))
#         return self.request.user.has_perm(permission)

#     def handle_no_permission(self):
#         if self.raise_exception or self.request.user.is_authenticated:
#             return HttpResponse(status=status.HTTP_403_FORBIDDEN)
#         path = self.request.build_absolute_uri()
#         resolved_login_url = resolve_url(self.get_login_url())
#         login_scheme, login_netloc = urlparse(resolved_login_url)[:2]
#         current_scheme, current_netloc = urlparse(path)[:2]
#         if (
#             (not login_scheme or login_scheme == current_scheme) and
#             (not login_netloc or login_netloc == current_netloc)
#         ):
#             path = self.request.get_full_path()
#         resolved_login_url = resolve_url(self.get_login_url())
#         return HttpResponse(status=status.HTTP_401_UNAUTHORIZED)


class CustomPermission(DjangoModelPermissions):
    
    def get_required_permissions(self, method, model_cls):
        pass
    
    def has_permission(self, request, view):
        actual_permission = ""
        app_label = self._queryset(view).model._meta.app_label
        object_name = (self._queryset(view).model._meta.object_name).lower()
        print("Object name {}\n\n".format(object_name))
        if request.method=="POST":
            actual_permission = "{}.add_{}".format(app_label,object_name)
        if request.method=="GET":
            actual_permission = "{}.view_{}".format(app_label,object_name)
        if request.method=="PUT":
            actual_permission = "{}.change_{}".format(app_label,object_name)
        if request.method=="PATCH":
            actual_permission = "{}.change_{}".format(app_label,object_name)
        if request.method=="DELETE":
            actual_permission = "{}s.delete_{}".format(app_label,object_name)
        print("{} can {} {}\n\n".format(request.user,actual_permission,request.user.has_perm(actual_permission)))
        return request.user.has_perm(actual_permission)


class AllowAnyOnPostOnly(DjangoModelPermissions):
    """
        allows any user event anonymous ones to perform post but only those with the approprate permissons can perform other actions
    """
    def has_permission(self, request, view):
        """ the post method is allowed for any user"""
        if request.method == 'POST':
            return True

        """ for other users, we check their group"""
        actual_permission = ""
        app_label = self._queryset(view).model._meta.app_label
        object_name = (self._queryset(view).model._meta.object_name).lower()
        if request.method=="GET":
            actual_permission = "{}.view_{}".format(app_label,object_name)
        if request.method=="PUT":
            actual_permission = "{}.change_{}".format(app_label,object_name)
        if request.method=="PATCH":
            actual_permission = "{}.change_{}".format(app_label,object_name)
        if request.method=="DELETE":
            actual_permission = "{}s.delete_{}".format(app_label,object_name)
        return request.user.has_perm(actual_permission)