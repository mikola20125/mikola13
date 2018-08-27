<?php
$hostDb = "localhost";
$userDb = "root";
$passDb = "";
$nameDb = "GameZone";
$link = mysqli_connect($hostDb,$userDb,$passDb,$nameDb);
$sql = "SELECT * FROM `products` WHERE `id` = $ProdId";
$result = mysqli_query($link,$sql);
?>