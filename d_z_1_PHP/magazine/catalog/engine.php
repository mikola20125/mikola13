<?php
include "class_Product.php";

$hostDb = "localhost";
$userDb = "root";
$passDb = "";
$nameDb = "GameZone";
$link = mysqli_connect($hostDb,$userDb,$passDb,$nameDb);
$sql = "SELECT * FROM `products`";
$result = mysqli_query($link,$sql);

while ($prod = mysqli_fetch_assoc($result)){
    $ProdId = $prod[id];
    $product = new Product;
    $product->makeProduct($ProdId);
    $product->showProduct();
};
?>