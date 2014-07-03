<?php
    include '../classes/product.php';
    $product = Product::find($_GET['id']);
    header('Content-type: text/html; charset=utf-8');
    $_GET['title'] = $_GET['id'];
    $_GET['content'] = $product->content;
?>