from django.db import models, transaction
from models.models import Article
from user_authentication.models.user_model import User



  
class Client(models.Model):
    """
    Un client est une personne inscrite au site dans le but d'effectuer une commande.
    """
    user = models.ForeignKey(User, verbose_name="Utilisateur associé")
    default_shipping_address = models.ForeignKey("Address",
                                                 related_name="default_shipping_address",
                                                 null=True,
                                                 verbose_name="Adresse de livraison par défaut"
                                                 )
    default_invoicing_address = models.ForeignKey("Address",
                                                  related_name="default_invoicing_address",
                                                  null=True,
                                                  verbose_name="Adresse de facturation par défaut"
                                                  )

   

class VAT(models.Model):
    """
    Les différents taux de TVA sont associés à des produits.
    """
    percent = models.FloatField(verbose_name="Taux de TVA (décimal)")

    class Meta:
        verbose_name = 'Taux de TVA'
        verbose_name_plural = 'Taux de TVA'

    def __unicode__(self):
        return str(self.percent * 100) + " %"
    


class Order(models.Model):
    """
    Une commande est passée par un client et comprend des lignes de commandes ainsi que des adresses.
    """
    client = models.ForeignKey(Client, verbose_name="Client ayant passé commande")
    Article = models.ForeignKey(Article)


    order_date = models.DateField(verbose_name="Date de la commande", auto_now=True)
    shipping_date = models.DateField(verbose_name="Date de l'expédition", null=True)
    WAITING = 'W'
    PAID = 'P'
    SHIPPED = 'S'
    CANCELED = 'C'
    STATUS = (
        (WAITING, 'En attente de validation'),
        (PAID, 'Payée'),
        (SHIPPED, 'Expédiée'),
        (CANCELED, 'Annulée'),
    )
    status = models.CharField(max_length=1, choices=STATUS, default=WAITING, verbose_name="Statut de la commande")
    stripe_charge_id = models.CharField(max_length=30, verbose_name="Identifiant de transaction Stripe", blank=True)

    class Meta:
        verbose_name = 'Commande'
        verbose_name_plural = 'Commandes'

    @property
    def total(self):
        total = 0
        order_details = OrderDetail.objects.filter(order_id=self.id)
        for order_detail in order_details:
            total += order_detail.total()
        return round(total,2)

    def article_qty(self):
        order_details = OrderDetail.objects.filter(order_id=self.id)
        return len(order_details)



class OrderDetail(models.Model):
    """
    Une ligne de commande référence un produit, la quantité commandée ainsi que les prix associés.
    Elle est liée à une commande.
    """
    order = models.ForeignKey(Order, verbose_name="Commande associée")
    Article = models.ForeignKey(Article)


    qty = models.IntegerField(verbose_name="Quantité")
    product_unit_price = models.FloatField(verbose_name="Prix unitaire de l'article")
    vat = models.FloatField(verbose_name="Taux de TVA")

    class Meta:
        verbose_name = 'Ligne d\'une commande'
        verbose_name_plural = 'Lignes de commandes'

    def total_ht(self):
        return round(self.product_unit_price * float(self.qty), 2)

    def total_vat(self):
        return round(self.product_unit_price * float(self.qty) * self.vat, 2)

    def total(self):
        return round((self.product_unit_price * float(self.qty)) +
                     (self.product_unit_price * float(self.qty) * self.vat), 2)



class Panier(models.Model):
  
  id = models.UUIDField(default=uuid.uuid4, editable=False, primary_key=True)
  created = models.DateTimeField(auto_now_add=True)

  def __str__(self):
        return str(self.cart_id)
      