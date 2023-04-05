from typing import Iterable, Optional
from django.db import models, transaction
from django.utils.timezone import now
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


    def save(self, force_insert: bool = False, force_update: bool = ..., using: Optional[str] = ..., update_fields: Optional[Iterable[str]] = ...) -> None:
        # self.price = self.price + (self.price_bt*self.vat)
        self.date_updated = now()
        return super().save()

    class Meta:
        db_table = 'baskets'

    def __str__(self) -> str:
        return "{} -- {} -- {}".format(self.status,self.id, self.date_created)