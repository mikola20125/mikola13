<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menustyle.css">
</head>
<body>
<?=
"<h3>
6. В имеющемся шаблоне сайта заменить статичное меню (ul - li)<br>
на генерируемое через PHP. Необходимо представить пункты меню<br>
как элементы массива и вывести их циклом. Подумать, как можно<br>
реализовать меню с вложенными подменю? Попробовать его реализовать.
</h3><br>
<p>
  Решение:
</p>";
?>

<header>
    <nav>
        <div class="topnav" id="myTopnav">
            <?php
            for($i = 1; $i <= 5; $i++){
                if($i == 5){
                    echo "<a href='#' id = 'menu' class='icon'>&#9776;</a>";
                }
                $a = "<a href='#'>Text_".$i."</a>";
                echo $a;
            }
            ?>
        </div>
    </nav>
</header>



<script type="text/javascript">
    menu.onclick = function myFunction() {
        var x = document.getElementById("myTopnav");

        if (x.className === "topnav") {
            x.className += " responsive";
        }else {
            x.className = "topnav";
        }
    }
</script>
</body>
</html>