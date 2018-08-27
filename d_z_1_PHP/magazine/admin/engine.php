<?php
    $AddnameProd = $_POST['AddnameProd'];//name

    $uploadFile = "../img/".$_FILES['AddimgProd']['name'];//Прописываем путь для загрузки файла
    move_uploaded_file($_FILES['AddimgProd']['tmp_name'], $uploadFile);//Перемещаем файл в нужную папку

    $AddProdDesc = $_POST['AddProdDesc'];//shortDesc

    $description = $_POST['description'];//desc

    //Characteristics
    $char = $_POST['nameCharactiristic'];
    $prop = $_POST['namePropertie'];
    $table = "<table>";
    for($i = 0; $i < count($char); $i++){
        $table .= "<tr ><td class=\'list-punct\'>$char[$i]</td><td class=\'list-punct1\'>$prop[$i]</td></td></tr>";
    }
    $table .= "</table>";


    $Addprice = $_POST['Addprice'];

    //ConnectDb
    $hostDb = "localhost";
    $userDb = "root";
    $passDb = "";
    $nameDb = "GameZone";
    $link = mysqli_connect($hostDb, $userDb, $passDb, $nameDb);
    $sql = "INSERT INTO `products`(`name`, `img`, `ProdDesc`, `description`, `specifications`, `price`)
        VALUES ('$AddnameProd','$uploadFile','$AddProdDesc','$description','$table','$Addprice')";
    $result = mysqli_query($link, $sql) or die ("Ошибка " . mysqli_error($link));
    mysqli_close($link);
    header('location:admin.php');
?>