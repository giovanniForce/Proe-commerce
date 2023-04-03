from django.db import models, transaction

class Category(models.Model):


    date_created = models.DateTimeField(auto_now_add=True)
    date_updated = models.DateTimeField(auto_now=True)

    name = models.CharField(max_length=255)
    description = models.TextField(blank=True)
    active = models.BooleanField(default=False)

    def __str__(self):
        return self.name
    
    @transaction.atomic
    def disable(self):
        if self.active is False:
        # Ne faisons rien si la catégorie est déjà désactivée
            return
        self.active = False
        self.save()
        self.products.update(active=False)


class Product(models.Model):

    date_created = models.DateTimeField(auto_now_add=True)
    date_updated = models.DateTimeField(auto_now=True)

    name = models.CharField(max_length=255)
    description = models.TextField(blank=True)
    active = models.BooleanField(default=False)

    category = models.ForeignKey('ecommerce.Category', on_delete=models.CASCADE, related_name='products')

    def __str__(self):
        return self.name
    
    @transaction.atomic
    def disable(self):
        if self.active is False:
            return
        self.active = False
        self.save()
        self.articles.update(active=False)


class Article(models.Model):

    date_created = models.DateTimeField(auto_now_add=True)
    date_updated = models.DateTimeField(auto_now=True)

    name = models.CharField(max_length=255)
    description = models.TextField(blank=True)
    active = models.BooleanField(default=False)
    color = models.CharField(max_length=255, default='white')
    price = models.IntegerField()
    photo = models.ImageField(upload_to='', default='')

    product = models.ForeignKey('ecommerce.Product', on_delete=models.CASCADE, related_name='articles')

    def __str__(self):
        return self.name
    

