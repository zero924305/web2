<?php include_once "partials/header.php"?>
<div class="container marketing">
  <hr class="featurette-divider">
    <section class="col-md-7">
      <article>
        <?php
          $sqlQuery = "SELECT * FROM product";
          $statement = $db->prepare($sqlQuery);
          $statement->execute(array());
          while($row=$statement->fetch())
          {
            echo '<section class="col-md-4">';
            echo "<h3>".$row["product_name"]."</h3>";
            echo '<hr />'; ?> <img src="<?php echo $row["product_image"]; ?>" class="" height="100%" width="100%" >
            <?php echo "<br />";
            echo "Product Price: &pound;".$row["product_price"]; echo "<br />";
            echo "Product Quantity: ".$row["product_quantity"];
            echo '<p><a class="btn btn-lg btn-primary" role="button" disabled="disabled">Add to basket &raquo;</a></p>';
            echo '</section>';
          }
        ?>
      </article>
    </section>
</div>
</div>
<?php include_once "partials.footer.php"?>
