<?php
    $HiddenId = $_POST['HiddenId'];
    $EditNameProd = $_POST['EditNameProd'];//name

    $uploadFile = "../img/".$_FILES['EditImgProd']['name'];//Прописываем путь для загрузки файла
    move_uploaded_file($_FILES['EditImgProd']['tmp_name'], $uploadFile);//Перемещаем файл в нужную папку

    $EditProdDesc = $_POST['EditProdDesc'];//shortDesc

    $EditDescription = $_POST['EditDescription'];//desc

    //Characteristics
    $EditChar = $_POST['nameCharactiristic'];
    $EditProp = $_POST['namePropertie'];
    $table = "<table>";
    for($i = 0; $i < count($EditChar); $i++){
        $table .= "<tr ><td class=\'list-punct\'>$EditChar[$i]</td><td class=\'list-punct1\'>$EditProp[$i]</td></td></tr>";
    }
    $table .= "</table>";
    $EditPrice = $_POST['EditPrice'];

    //ConnectDb
    $hostDb = "localhost";
    $userDb = "root";
    $passDb = "";
    $nameDb = "GameZone";
    $link = mysqli_connect($hostDb, $userDb, $passDb, $nameDb);
    $sql = "UPDATE `products` SET `name` = '$EditNameProd',`img` = '$uploadFile',`ProdDesc` = '$EditProdDesc',
            `description` = '$EditDescription',`specifications` = '$table',`price` = '$EditPrice'
            WHERE `id` = $HiddenId";
    $result = mysqli_query($link, $sql) or die ("Ошибка " . mysqli_error($link));
    mysqli_close($link);
    /*header('location:admin.php');*/
print_r($_POST);
?>