from rest_framework import generics, viewsets, permissions, response, status
from basket.serializers import BasketLineSerializer
from basket.models import Line, Basket
from ecommerce.models.models import Article

class LineView(viewsets.ModelViewSet):
    """
    """
    permission_classes = (permissions.IsAuthenticated,)
    serializer_class = BasketLineSerializer
    queryset = Line.objects.all()

    def create(self, request, *args, **kwargs):
        """
        when adding a line, we need to modify the information in the basket
        """
        data = request.data.copy()
        total_price = float(data['quantity'])*float(data['unit_price'])
        data['total_price'] = total_price
        serializer = BasketLineSerializer(data=data)
        serializer.is_valid(raise_exception=True)
        basket = Basket.objects.get(id=request.data['basket'])
        try:
            saved = serializer.save()
            basket.price_bt = float(basket.price_bt) + total_price
            basket.price = float(basket.price) + total_price + float(basket.price_bt)*basket.vat
            basket.save()
            return response.Response(data=BasketLineSerializer(saved).data,status=status.HTTP_201_CREATED)
        except:
            return response.Response(status=status.HTTP_400_BAD_REQUEST)
        # return super().create(request, *args, **kwargs)
    
    def update(self, request, *args, **kwargs):
        line = self.get_object()
        prev_line = self.get_object()
        basket = line.basket
        line.article= Article.objects.get(id=request.data['article']) if 'article' in request.data.keys() else line.article
        line.basket= Basket.objects.get(id=request.data['basket']) if 'basket' in request.data.keys() else line.basket
        line.quantity= request.data['quantity'] if 'quantity' in request.data.keys() else line.quantity
        
        if ('unit_price' in request.data.keys()):
            total_price = float(request.data['unit_price'])*int(line.quantity)
            line.total_price = total_price
            prev_price = float(prev_line.unit_price)*int(prev_line.quantity)
            print("Previous price: ",prev_price)
            basket.price_bt = float(basket.price_bt) - prev_price + total_price
            basket.save()
            line.unit_price= request.data['unit_price']
        elif('quantity' in request.data.keys()):
            print("previous: {}, new: {}".format(prev_line.quantity, request.data['quantity']))
            total_price = int(request.data['quantity'])*float(line.unit_price)
            line.total_price = total_price
            price_bt = float(basket.price_bt) - float(prev_line.unit_price)*int(prev_line.quantity) + total_price
            print(price_bt)
            basket.price_bt = price_bt
            print(basket.price_bt)
            basket.save()
        saved = line.save()
        basket.price = float(basket.price_bt)+float(basket.price_bt)*float(basket.vat)
        basket.save()
        return response.Response(data=BasketLineSerializer(saved).data,status=status.HTTP_200_OK)
    
    def destroy(self, request, *args, **kwargs):
        line = self.get_object()
        basket = line.basket
        basket.price_bt = float(basket.price_bt) - line.unit_price*line.quantity
        basket.price = float(basket.price_bt)+float(basket.price_bt)*float(basket.vat)
        basket.save()
        return super().destroy(request, *args, **kwargs)