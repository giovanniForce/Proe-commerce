
from rest_framework import routers
from django.urls import include, path
from ecommerce.views.views import ArticleViewset, CategoryViewset, ProductViewset, \
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
    path("", include(router.urls))
]