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
                    <form action='Edit_prod_engine.php' class='EditProduct' method='post' enctype='multipart/form-data'>
            <fieldset>
                <legend><b>Редактирование товара</b></legend>
                    <input type='hidden' name='HiddenId' value='$prod[id]'>
                <p>
                    <label for='first'>Название товара:</label>
                    <input type='text' name='EditNameProd' id='first' placeholder='$prod[name]'>
                </p>
                <p>
                    <label for='first'>Изображение:</label>
                    <input type='file' name='EditImgProd' id='first' placeholder='Введите имя'>
                </p>
                <p>
                    <label for='message'>Краткое описание:</label><br>
                    <textarea id='message' placeholder='Краткое описание' cols='40' rows='5' name='EditProdDesc'>
                        $prod[ProdDesc]
                    </textarea>
                </p>
                <p>
                    <label for='message'>Описание:</label><br>
                    <textarea name='EditDescription' placeholder='Введите текст' id='message' cols='80' rows='10'>
                        $prod[description]
                    </textarea>
                </p>
                <div style=' display:table; margin: 0 auto;'>
                    <p>Старые характеристики</p>
                    $prod[specifications]
                </div>
                <p>Новые характеристики</p>
                <table style='text-align: center; margin: 0 auto;' id='EditSpecifications'>
                        <tr class='row'>
                            <td class='list-punct'>
                                <input type='text' placeholder='Название характеристики' name='nameCharactiristic[]'>
                            </td>
                            <td class='list-punct1'>
                                <input type='text' placeholder='Свойство' name='namePropertie[]'>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='2'  style='background-color: #61AF6A;'>
                                <button id='but1'>Добавить характеристики</button>
                            </td>
                        </tr>
                    </table>
                <br>
                </p>
                <br>
                <p>
                   Старая цена: $prod[price]
                </p>
                <p>
                    <label for='first'>Цена товара:</label>
                    <input type='text' name='EditPrice' id='first'>
                </p>
                <br>
                <p>
                    <input type='submit' id='EditSub' value='Редактировать'>
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
<!--<script defer="defer" type="text/javascript">
    $('#but1').on('click',function () {
    event.preventDefault();
$('#EditSpecifications').prepend("<tr>" +
    "<td class='list-punct'>" +
        "<input type='text' placeholder='Название характеристики' name='EditCharactiristic[]'>" +
        "</td>" +
    "<td class='list-punct1'>" +
        "<input type='text' placeholder='Свойство' name='EditPropertie[]'>" +
        "</td>" +
    "</tr>"
);
});
</script>-->