from basket.models import Basket
from rest_framework import serializers

class BasketSerializer(serializers.ModelSerializer):
    class Meta:
        model = Basket
        fields = '__all__'