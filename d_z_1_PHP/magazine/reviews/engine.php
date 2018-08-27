<?php
$hostDb = "localhost";
$userDb = "root";
$passDb = "";
$nameDb = "GameZone";
$link = mysqli_connect($hostDb,$userDb,$passDb,$nameDb);
$sql = "SELECT * FROM `reviews`";
$result = mysqli_query($link,$sql);

while($rev = mysqli_fetch_assoc($result)){
    echo "<div>
            <p>
               $rev[NameUser]
            </p>
            <p>
                $rev[review]
            </p>
            <span>$rev[date]</span>
         </div>
         <hr>";
}
?>