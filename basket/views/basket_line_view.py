from rest_framework import generics, viewsets, permissions
from basket.serializers import BasketLineSerializer
from basket.models import Line

class LineView(viewsets.ModelViewSet):
    """
    """
    permission_classes = (permissions.IsAuthenticated,)
    serializer_class = BasketLineSerializer
    queryset = Line.objects.all()
