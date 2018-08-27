<!DOCTYPE html>
<html>
<head>
    <title>Добро пожаловать, администратор.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JQueryForm/jquery.min.js"></script>
    <script src="JQueryForm/tabs.js"></script>
    <link href="JQueryForm/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <script src="self.js"></script>
    <script src="code.js"></script>
</head>

<body style="">

<h1>Вы вошли как администратор.</h1>

<div class="tabs">

    <ul class="tabs__caption">
        <li class="active">Добавить товар</li>
        <li>Удалить товар</li>
        <li>Редактировать товар</li>
        <li>Червертая вкладка</li>
    </ul>
    <!--Форма добавления товара-->
    <div class="tabs__content  active" id="addit">
        <form action="engine.php" class="AddProduct" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend><b>Добавление товара</b></legend>
                <p>
                    <label for="first">Название товара:</label>
                    <input type="text" name="AddnameProd" id="first" placeholder="Введите имя">
                </p>
                <p>
                    <label for="first">Изображение:</label>
                    <input type="file" name="AddimgProd" id="first" placeholder="Введите имя">
                </p>
                <p>
                    <label for="message">Краткое описание:</label><br>
                    <textarea id="message" placeholder="Краткое описание" cols="40" rows="5" name="AddProdDesc"></textarea>
                </p>
                <p>
                    <label for="message">Описание:</label><br>
                    <textarea name="description" placeholder="Введите текст" id="message" cols="80" rows="10"></textarea>
                </p>
                    <table name="AddSpecifications" style="text-align: center; margin: 0 auto;" id="AddSpecifications">
                        <tr class="row">
                            <td class='list-punct'>
                                <input type="text" placeholder="Название характеристики" name="nameCharactiristic[]">
                            </td>
                            <td class='list-punct1'>
                                <input type="text" placeholder="Свойство" name="namePropertie[]">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"  style="background-color: #61AF6A;">
                                <button id="button">Добавить характеристики</button>
                            </td>
                        </tr>
                    </table>
                <br>
                <p>
                    <label for="first">Цена товара:</label>
                    <input type="text" name="Addprice" id="first">
                </p>
                <br>
                <p>
                    <input type="submit" id="AddSub" value="Добавить">
                </p>
            </fieldset>
        </form>
    </div>

    <!--Форма удаления товара-->
    <div class="tabs__content">
        <!-- блок аккордеон -->
        <?php include('GetProd.php');?>
        <!-- конец блока аккордеон -->
    </div>

    <!--Форма редактирования товара-->
    <div class="tabs__content">
        <!-- блок аккордеон -->
        <?php include('Edit_Get_Prod.php');?>
        <!-- конец блока аккордеон -->
    </div>

    <div class="tabs__content">

    </div>

</div>
<script type="text/javascript">
    ! function(i) {
        var o, n;
        i(".title_block").on("click", function() {
            o = i(this).parents(".accordion_item"), n = o.find(".info"),
                o.hasClass("active_block") ? (o.removeClass("active_block"),
                    n.slideUp()) : (o.addClass("active_block"), n.stop(!0, !0).slideDown(),
                    o.siblings(".active_block").removeClass("active_block").children(
                        ".info").stop(!0, !0).slideUp())
        })
    }(jQuery);
</script>

</body>
</html>