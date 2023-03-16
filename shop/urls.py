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

from drf_yasg.views import get_schema_view
from drf_yasg import openapi
from rest_framework import permissions
from django.conf.urls.static import static
import oauth2_provider.views as oauth2_views
from django.conf import settings
# Swagger configurations

schema_view = get_schema_view(
   openapi.Info(
        title="M2N backend app",
        default_version='v0',
        description="M2N backend app",
        terms_of_service="",
        contact=openapi.Contact(email="vincent_nronald@yahoo.com"),
        license=openapi.License(name="MIT"),
    ),
   public=True,
   permission_classes=(permissions.AllowAny,), 
)

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
    path('', schema_view.with_ui(cache_timeout=0), name='schema-json'),
    path('redoc', schema_view.with_ui('redoc', cache_timeout=0), name='schema-redoc'),
    # App routes
    path('admin/', admin.site.urls),
    # path('api-auth/', include('rest_framework.urls')),
    # path('api/', include(router.urls))  # Il faut bien penser à ajouter les urls du router dans la liste des urls disponibles.
    path('auth/', include('user_authentication.urls.auth_urls')),
    path('users/', include('user_authentication.urls.user_urls')),
]+ static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)

