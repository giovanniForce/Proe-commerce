from django.contrib import admin
from .models import Basket, Line
# Register your models here.
admin.site.register([Basket, Line])