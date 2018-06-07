<?php
    $title = "<title>PHP Page</title>";
    $h1 = "<h1>Lorem ipsum dolor sit amet.</h1>";
    $date = date("l ds of Y h:i:s A");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php echo $title ?>
    <style>
        span{
            font-size: 18px;
            color: antiquewhite;
        }
    </style>
</head>
<body>
<?php
    echo $h1."<br>".
        $date;

?>
</body>
</html>
