from rest_framework import generics, viewsets, permissions, response, status
from basket.serializers import BasketSerializer, BasketLineSerializer
from rest_framework.decorators import action
from basket.models import Basket, Line

class BasketView(viewsets.ModelViewSet):
    """
    """
    permission_classes = (permissions.IsAuthenticated,)
    serializer_class = BasketSerializer
    queryset = Basket.objects.all()

    @action(detail=True, methods=['get'])
    def get_line(self, request, *args, **kwargs):
        '''
            getting lines related to a basket
        '''
        
        object = self.get_object()
        data = Line.objects.filter(basket=object)
        serializer = BasketLineSerializer(data=data, many=True)
        return response.Response(status=status.HTTP_200_OK, data=serializer.data)