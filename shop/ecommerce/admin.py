from django.contrib import admin

# Register your models here.
from ecommerce.models import Category
from ecommerce.models import Product
from ecommerce.models import Article

admin.site.register(Category)
admin.site.register(Product)
admin.site.register(Article)