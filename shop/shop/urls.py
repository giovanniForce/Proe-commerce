"""shop URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path, include
from rest_framework import routers


from ecommerce.views import ArticleViewset, CategoryViewset, ProductViewset, \
    AdminCategoryViewset, AdminArticleViewset, AdminProductViewset

    # Ici nous créons notre routeur
router = routers.SimpleRouter()
# Puis lui déclarons une url basée sur le mot clé ‘category’ et notre view
# afin que l’url générée soit celle que nous souhaitons ‘/api/category/’
router.register('category', CategoryViewset, basename='category'),
router.register('product', ProductViewset, basename='product'),
router.register('article', ArticleViewset, basename='article'),


router.register('admin/category', AdminCategoryViewset, basename='admin-category')
router.register('admin/article', AdminArticleViewset, basename='admin-article')
router.register('admin/product', AdminProductViewset, basename='admin-product')


 
urlpatterns = [
    path('admin/', admin.site.urls),
    path('api-auth/', include('rest_framework.urls')),
    path('api/', include(router.urls))  # Il faut bien penser à ajouter les urls du router dans la liste des urls disponibles.
]
