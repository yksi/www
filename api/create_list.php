<?php
  include '../classes/product.php';
  $products = Product::all();
  foreach ($products as $key => $product) {
    $_GET['content'] = $product->content;
    $_GET['title'] = $product->title;
    $_GET['id'] = $product->id;
    include 'list_item.php';
  }
?>