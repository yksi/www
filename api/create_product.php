<?php
  include '../classes/product.php';
  if(isset($_POST['title']) && isset($_POST['content']))
  {
    $product = new Product(1, $_POST['title'], $_POST['content']);
    echo $product->save();
  }
?>