<?php
  include '../classes/product.php';
  Product::remove($_GET['id']);
?>