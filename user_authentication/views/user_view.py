
from rest_framework import viewsets, generics, status, response
from oauth2_provider.views.generic import ProtectedResourceView
from django.contrib.auth import get_user_model

from rest_framework import filters
from django_filters.rest_framework import DjangoFilterBackend
from rest_framework.permissions import IsAuthenticated
from user_authentication.serializers import UserSerializer



User = get_user_model()

class UserViewSet(viewsets.ModelViewSet, ProtectedResourceView):

    queryset = User.objects.all()
    serializer_class = UserSerializer
    filter_backends = [
        DjangoFilterBackend,
        filters.SearchFilter
    ]
    filter_fields = {
        "email": ["exact"],
        "first_name": ["icontains"],
        "last_name": ["icontains"],
    }
    permission_classes = [IsAuthenticated,]
    search_fields = ["^first_name", "^last_name", "^email", "id"]

