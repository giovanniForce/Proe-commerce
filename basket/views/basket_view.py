from rest_framework import generics, viewsets, permissions
from basket.serializers import BasketSerializer
from basket.models import Basket

class BasketView(viewsets.ModelViewSet):
    """
    """
    permission_classes = (permissions.IsAuthenticated,)
    serializer_class = BasketSerializer
    queryset = Basket.objects.all()
    