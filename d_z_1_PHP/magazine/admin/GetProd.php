<?= "
<head>
    <meta charset='utf-8'/>
</head>
";?>

<?php
//ConnectDb
$hostDb = "localhost";
$userDb = "root";
$passDb = "";
$nameDb = "GameZone";
$link = mysqli_connect($hostDb, $userDb, $passDb, $nameDb);
$sql = "SELECT * FROM `products`";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));

//Вывод товара из БД
//блок аккордеон
$accor = "<div class='accordion'>";
while($prod = mysqli_fetch_assoc($result)){
$accor .= "<section class='accordion_item'>
                <h3 class='title_block'>
                    <img src='$prod[img]' alt='$prod[name]' height='50px' width='50px'>
                    $prod[name]
                </h3>
                <div class='info'>
                    <form action='DeleteProd.php' method='POST' id='DelProd'>
                        <fieldset style='width: 100%; height: 100%;'>
                            <legend><b>Удаление товара</b></legend>
                            <p>
                                <label for='idprod'>Id товара:</label>
                                <input type='text' readonly value='$prod[id]' id='idprod' name='ProdId'>
                            </p>
                            <p>
                                <label for='img'>Адрес изображения товара:</label>
                                <input  type='text' readonly value='$prod[img]' id='img'>
                            </p>
                            <p>
                                <label for='desc'>Краткое описание товара:</label>
                                <input type='text' readonly value='$prod[ProdDesc]' id='desc' size='100'>
                            </p>
                            <p>
                                <label for='FullDesc'>Описание товара:</label>
                                <input type='text' readonly value='$prod[description]' id='FullDesc' size='100'>
                            </p>
                            <p>
                                <label for='spec'>Характеристики товара:</label><br>
                                <textarea  readonly rows='10' cols='50' id='spec'>
                                $prod[specifications]
                                </textarea>
                            </p>
                            <p>
                                <label for='price'>Цена товара:</label>
                                <input type='text' readonly value='$prod[price]'>
                            </p>
                            <p>
                                <input type='submit' value='Удалить' name='DeleteProd' id='subdel'>
                            </p>
                        </fieldset>
                    </form>
                </div>
            </section>";
};
$accor .= "</div>";
echo $accor;
//конец блока аккордеон
?>



