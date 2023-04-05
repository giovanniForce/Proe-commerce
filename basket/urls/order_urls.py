from rest_framework import routers
from basket.views import BasketView
router = routers.DefaultRouter()
router.register(r'',BasketView, basename='basket')
urlpatterns = router.urls
