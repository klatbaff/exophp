

<body>
<main>

<?php
require_once('../exoreprise/controller.php'); 


 foreach($orders as $order){ ?>
    <article class='commandes'>
   <h2>Client :<?php echo $order['customer']; ?></h2> 
   <p>montant :<?php echo $order['amount']; ?></p> 
   <p>Catégorie :<?php echo $order['id']; ?></p> 
   <?php foreach($order['products'] as $product){?>
              <p>Produits : <?php echo $product;} ?></p>
   
   <?php $CreatedDatetime = new DateTime($order['createdAt']);?>
   <p>Date de création : <?php echo $CreatedDatetime->format('d/M');?></p>

   </article>
<?php } ?>

</main>
</body>