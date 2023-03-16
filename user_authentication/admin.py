from django.contrib import admin

# Register your models here.
from user_authentication.models import User
admin.site.register(User)