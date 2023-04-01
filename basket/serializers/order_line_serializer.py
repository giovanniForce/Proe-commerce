from basket.models import Line
from rest_framework import serializers

class BasketLineSerializer(serializers.ModelSerializer):
    class Meta:
        model = Line
        fields = '__all__'