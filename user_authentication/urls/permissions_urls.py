from django.urls import path, include
from rest_framework import routers

from user_authentication.views import PermissionView, GroupViews
router = routers.SimpleRouter()
router2 = routers.SimpleRouter()

router.register(r'', PermissionView, basename="permissions")
router2.register(r'groups', GroupViews, basename="groups")

urlpatterns = [
    path('', include(router.urls)),
    path('groups/', include(router2.urls))
]
# +router2.urls