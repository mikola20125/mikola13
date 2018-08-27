<?php
if(isset($_POST['ProdId'])) {
    $del = $_POST['ProdId'];
//ConnectDb
    $hostDb = "localhost";
    $userDb = "root";
    $passDb = "";
    $nameDb = "GameZone";
    $link = mysqli_connect($hostDb, $userDb, $passDb, $nameDb);
    $sql = "DELETE FROM `products` WHERE `id` = $del";
    $result = mysqli_query($link, $sql) or die ("Ошибка " . mysqli_error($link));
    mysqli_close($link);

    header('location:admin.php');
}else{
    print_r($_POST);
}
?>