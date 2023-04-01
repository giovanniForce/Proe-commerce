from django.db import models, transaction
from user_authentication.models import User
import uuid

# Create your models here.
class Basket(models.Model):
    """
    """
    BASKET_STATE = (
        ('BASKET','basket'),
        ('ORDER','order')
    )
    id = models.UUIDField(primary_key=True, editable=False, default=uuid.uuid4)
    owner = models.ForeignKey(User, on_delete=models.CASCADE)
    price_bt = models.FloatField(default=0.0)
    price = models.FloatField(default=0.0)
    vat = models.FloatField(default=0.0)
    status = models.CharField(choices=BASKET_STATE, default='BASKET', max_length=10)

    date_created = models.DateTimeField(auto_now_add=True)
    date_updated = models.DateTimeField(auto_now=True)

    @transaction.atomic
    def disable(self):
        if self.active is False:
            return
        self.active = False
        self.save()
