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

    def list(self, request, *args, **kwargs):
        self.queryset = Basket.objects.filter(owner=request.user, status='BASKET')
        return super().list(request, *args, **kwargs)

    def create(self, request, *args, **kwargs):
        data = self.request.data.copy()
        data['owner'] = self.request.user.id
        serializer = BasketSerializer(data=data)
        serializer.is_valid(raise_exception=True)
        saved = serializer.save()
        return response.Response(BasketSerializer(saved).data, status=status.HTTP_201_CREATED)

    @action(detail=True, methods=['get'])
    def get_line(self, request, *args, **kwargs):
        '''
            getting lines related to a basket
        '''
        
        object = self.get_object()
        data = Line.objects.filter(basket=object)
        queryset = self.filter_queryset(data)
        paged_queryset = self.paginate_queryset(queryset)
        serializer_class = BasketLineSerializer
        serializer = serializer_class(paged_queryset, many=True)
        return self.get_paginated_response(serializer.data)
    

    @action(detail=True, methods=['put'])
    def validate(self, request, *args, **kwargs):
        """
            validates a command and turns it into an order
        """
        object = self.get_object()
        object.status = 'ORDER'
        object.save()
        return response.Response(status=status.HTTP_200_OK)
    
    @action(detail=False, methods=['get'])
    def orders(self, request, *args, **kwargs):
        """
            returns the list of the orders the user has placed 
            (that is the baskets he has validated so far)
        """
        self.queryset = Basket.objects.filter(owner=request.user, status='ORDER')
        return super().list(request, *args, **kwargs)