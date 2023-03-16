
from rest_framework import routers
from django.urls import include, path
from user_authentication.views import UserViewSet

router = routers.SimpleRouter()
router.register(r'', UserViewSet)
urlpatterns = [
    path("", include(router.urls))
]