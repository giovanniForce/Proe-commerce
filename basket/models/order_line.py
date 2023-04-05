from typing import Any, Dict, Iterable, Optional, Tuple
from django.db import models
from ecommerce.models.models import Article
from .order import Basket
import uuid

class Line(models.Model):
    """
    """
    id = models.UUIDField(primary_key=True, editable=False, default=uuid.uuid4)
    article = models.ForeignKey(Article, on_delete=models.CASCADE)
    basket = models.ForeignKey(Basket, on_delete=models.CASCADE)
    quantity = models.IntegerField()
    unit_price = models.FloatField()
    total_price = models.FloatField(default=0)
    
    def __str__(self) -> str:
        return "{} {} {}".format(self.basket.date_created, self.article.name, self.quantity)