from rest_framework import routers
from basket.views import LineView
router = routers.DefaultRouter()
router.register(r'', LineView, basename="basket_lines")
urlpatterns = router.urls
