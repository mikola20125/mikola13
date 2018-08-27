<?php
if(isset($_POST['nameUser']) && isset($_POST['reviewUser'])){
    $nameUser = $_POST['nameUser'];
    $reviewUser = $_POST['reviewUser'];
    $hostDb = "localhost";
    $userDb = "root";
    $passDb = "";
    $nameDb = "GameZone";
    $link = mysqli_connect($hostDb,$userDb,$passDb,$nameDb);
    $sql = "INSERT INTO `reviews` (`NameUser`,`review`) VALUES ('$nameUser', '$reviewUser')";
    $result = mysqli_query($link,$sql);
    header('location:reviews.php');
}
?>