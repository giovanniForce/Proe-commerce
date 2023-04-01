from django.contrib import admin

# Register your models here.
from ecommerce.models.models import Category
from ecommerce.models.models import Product
from ecommerce.models.models import Article

admin.site.register(Category)
admin.site.register(Product)
admin.site.register(Article)