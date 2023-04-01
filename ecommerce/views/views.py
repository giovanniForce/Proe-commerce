from django.shortcuts import render
from rest_framework.response import Response
from rest_framework.decorators import action
from django_filters.rest_framework import DjangoFilterBackend
from rest_framework.filters import SearchFilter

# Create your views here.

from rest_framework.viewsets import ReadOnlyModelViewSet, ModelViewSet
from rest_framework.response import Response
 
from ecommerce.models.models import Article, Category, Product
from ecommerce.serializers.Serializers import ArticleSerializer, CategoryDetailSerializer, CategoryListSerializer, ProductDetailSerializer, ProductListSerializer


class MultipleSerializerMixin:

    detail_serializer_class = None

    def get_serializer_class(self):
        if self.action == 'retrieve' and self.detail_serializer_class is not None:
            return self.detail_serializer_class
        return super().get_serializer_class()
    

 
class CategoryViewset(ReadOnlyModelViewSet):
 
    serializer_class = CategoryListSerializer
    #filter_backends=[DjangoFilterBackend]
    #filterset_fields = ['Category_id']
    filter_backends=[SearchFilter]
    search_fields = ['name', 'description']


    # Ajoutons un attribut de classe qui nous permet de définir notre serializer de détail
    detail_serializer_class = CategoryDetailSerializer
 
    def get_queryset(self):
        return Category.objects.filter(active=True)
    
    #def get_serializer_class(self):
    # Si l'action demandée est retrieve nous retournons le serializer de détail
       # if self.action == 'retrieve':
            #return self.detail_serializer_class
        #return super().get_serializer_class()
    
    @action(detail=True, methods=['post'])
    def disable(self, request, pk):
     # Nous pouvons maintenant simplement appeler la méthode disable
        self.get_object().disable()
        return Response()
    

    
class ProductViewset(ReadOnlyModelViewSet): #récupérer les produits d’une catégorie grâce à un appel fait à notre API
 
    serializer_class = ProductListSerializer
    detail_serializer_class = ProductDetailSerializer
    filter_backends=[SearchFilter]
    search_fields = ['name', 'description']
 
    def get_queryset(self):
    # Nous récupérons tous les produits dans une variable nommée queryset
        queryset = Product.objects.filter(active=True)
        # Vérifions la présence du paramètre ‘category_id’ dans l’url et si oui alors appliquons notre filtre
        category_id = self.request.GET.get('category_id')
        if category_id is not None:
            queryset = queryset.filter(category_id=category_id)
        return queryset
    
    @action(detail=True, methods=['post'])
    def disable(self, request, pk):
        self.get_object().disable()
        return Response()
    

class ArticleViewset(ReadOnlyModelViewSet):

    serializer_class = ArticleSerializer
    filter_backends=[SearchFilter]
    search_fields = ['name', 'description']

    def get_queryset(self):
        queryset = Article.objects.filter(active=True)
        product_id = self.request.GET.get('product_id')
        if product_id is not None:
            queryset = queryset.filter(product_id=product_id)
        return queryset
    



class AdminCategoryViewset(MultipleSerializerMixin, ModelViewSet):

     serializer_class = CategoryListSerializer
     filter_backends=[SearchFilter]
     search_fields = ['name', 'description']
     detail_serializer_class = CategoryDetailSerializer
     queryset = Category.objects.all()

class AdminProductViewset(MultipleSerializerMixin, ModelViewSet):

     serializer_class = ProductListSerializer
     filter_backends=[SearchFilter]
     search_fields = ['name', 'description']
     detail_serializer_class = ProductDetailSerializer
     queryset = Product.objects.all()



class AdminArticleViewset(ModelViewSet):

     serializer_class = ArticleSerializer
     filter_backends=[SearchFilter]
     search_fields = ['name', 'description']
     queryset = Article.objects.all()