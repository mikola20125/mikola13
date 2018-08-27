    <?php include('header.php'); ?>
    <nav>
        <div class='topnav' id='myTopnav'>
            <a href="#">Menu</a>
            <?php include('../menu/mainMenu.php');?>
            <a id='menu' class='icon' href='#'>Menu &#9776;</a>
        </div>
    </nav>
        <h1 class="form-title">Контакты</h1>
        <form action="#" class="message">
            <fieldset>
                <legend><b>Напишите нам</b></legend>
                <p>
                    <label for="first">Имя:</label>
                    <input type="text" name="textField" id="first" placeholder="Введите имя">
                </p>
                <p>
                    <label for="second">E-mail:</label>
                    <input type="email" name="textField" id="second" placeholder="Введите E-mail">
                </p>
                <p>
                    <label for="theme">Тема:</label>
                    <input type="text" name="textField" id="theme" placeholder="Тема сообщения">
                </p>
                <p>
                    <label for="message">Суть вашего письма:</label><br>
                    <textarea placeholder="Введите текст" id="message"></textarea>
                </p>
                <br>

                <input type="submit" id="sub">
            </fieldset>
        </form>
        <br>
        <h2 id="contacts">Адрес</h2>
        <b>Телефон:</b> +7(899)392453;<br>
        <b>Адрес:</b> г.Ростов-на-Дону, просп. Ленина 43;<br>
        <b>E-mail:</b> contacts@mnail.ruc.

        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab702f1cc926a8e9e8e8436f3cb9d145e82f61e2a8bb9597816c5042e249bc563&amp;width=100%&amp;height=374px&amp;lang=ru_RU&amp;scroll=true">

        </script>
        <br>
        <hr>
    <?php  include('footer.php'); ?>