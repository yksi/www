<?php
  include '../classes/product.php';
  $product = Product::find($_GET['id']);
?>
<div class="product-preview" title="<?php echo $product->title ?>">
  <p class="text"><?php echo $product->content ?></p>
  <br>
  <button data-id="<?php echo $_GET['id'] ?>" class="rproduct">Remove</button>
</div>
