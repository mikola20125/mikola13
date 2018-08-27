<?php
if(isset($_GET['id'])) {
    $ProdId = $_GET['id'];
    $hostDb = "localhost";
    $userDb = "root";
    $passDb = "";
    $nameDb = "GameZone";
    $link = mysqli_connect($hostDb, $userDb, $passDb, $nameDb);
    $sql = "SELECT * FROM `products` WHERE `id` = $ProdId";
    $result = mysqli_query($link, $sql);
    $prod = mysqli_fetch_assoc($result);
}
?>