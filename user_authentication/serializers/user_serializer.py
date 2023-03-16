from rest_framework import serializers
from django.contrib.auth import get_user_model

User = get_user_model()

# class UserSerializer(serializers.HyperlinkedModelSerializer):
#     class Meta:
#         model = User

class UserSerializer(serializers.ModelSerializer):
    # image = serializers.SerializerMethodField()
    image_url = serializers.SerializerMethodField('get_image_url')
    class Meta:
        model = User
        exclude = ('password',)
        
    def get_image_url(self, obj):
        return obj.image.url if obj.image else None
    
    # def get_image(self, obj):
    #     return obj.get_image()


class UserDetailsSerializer(serializers.ModelSerializer):
    class Meta:
        model = User
        exclude = ('password',)
        depth = 2


class AuthSerializer(serializers.ModelSerializer):
    class Meta:
        model = User
        fields = '__all__'