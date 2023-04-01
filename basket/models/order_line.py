from django.db import models
from ecommerce.models.models import Article
from .order import Basket
import uuid

class Line(models.Model):
    """
    """
    id = models.UUIDField(primary_key=True, editable=False, default=uuid.uuid4)
    Article = models.ForeignKey(Article, on_delete=models.CASCADE)
    basket = models.ForeignKey(Basket, on_delete=models.CASCADE)
    quantity = models.IntegerField(default=0)
    unit_price = models.FloatField()
    total_price = models.FloatField()
    