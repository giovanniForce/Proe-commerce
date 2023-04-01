from django.shortcuts import render
from rest_framework.response import Response
from rest_framework.decorators import action

# Create your views here.

from rest_framework.viewsets import ReadOnlyModelViewSet, ModelViewSet
from rest_framework.response import Response
from  models.ecom_models import Panier, VAT, Client, OrderDetail, Order
 
from ecommerce.models.models import Article, Category, Product
from ecommerce.serializers.Serializers import ArticleSerializer, CategoryDetailSerializer, CategoryListSerializer, ProductDetailSerializer, ProductListSerializer



