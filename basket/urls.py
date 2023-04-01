from rest_framework import routers
from basket.views import BasketView, LineView
router = routers.DefaultRouter()
router.register(r'',BasketView, basename='basket')
router.register(r'lines', LineView, basename="basket_lines")
urlpatterns = router.urls
