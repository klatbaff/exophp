<?php require_once('../controller/productsController.php'); ?>
<?php require_once('../partials/header.php'); ?>

<main>
    <h2>Créer un article : </h2>
    <form>
        <select name="category">
            <optgroup label="Categories :">
                <option selected disabled>- choisis ta catégorie -</option>
                    <?php foreach($categories as $category){ 
                        echo "<option value=".$category.">".$category."</option>";
                    } ?>
            </optgroup>
        </select> 

            <label>Prix Minimum :</label>
                    <input type="number" name="pricemin" min="<?php echo $productPricemin; ?>">

            <label>Prix Maximum :</label>
                    <input type="number" name="pricemax" max="<?php echo $productPricemax; ?>">
        

        <select name="sort">
            <option value="">Par défaut</option>
            <option value="price">Prix</option>
            <option value="date"> Date de création</option>
        </select>
        <input type="submit" value="Filtrer"/>
        <button href="http://localhost/Corrig%C3%A9/views/products.php">Reset</button>
    </form>

    <section class='shop'>
        
        <?php foreach($products as $product){ ?>
            <article class='produits'>
           <h2>Nom :<?php echo $product['name']; ?></h2> 
           <p>Prix :<?php echo $product['price']; ?></p> 
           <p>Catégorie :<?php echo $product['category']; ?></p> 
           <p>Description :<?php echo $product['description']; ?></p>
           
           <?php $CreatedDatetime = new DateTime($product['createdAt']);?>
           <p>Date de création : <?php echo $CreatedDatetime->format('d/M/Y');?></p>

           </article>
        <?php } ?>
        
    </section>
</main>

<?php require_once('../partials/sidebar.php'); ?>
<?php require_once('../partials/footer.php'); ?>