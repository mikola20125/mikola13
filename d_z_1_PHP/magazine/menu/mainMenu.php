<?php
$hostDb = "localhost";
$userDb = "root";
$passDb = "";
$nameDb = "GameZone";
$link = mysqli_connect($hostDb,$userDb,$passDb,$nameDb);
$sql = "SELECT * FROM `menu`";
$result = mysqli_query($link,$sql);
?>
<?php
while($menu = mysqli_fetch_assoc($result)){
    echo "<a href='$menu[path]' id = '$menu[id]'>$menu[name]</a>";
}
?>