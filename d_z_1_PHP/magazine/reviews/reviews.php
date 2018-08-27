<?php include('header.php'); ?>
    <nav>
        <div class='topnav' id='myTopnav'>
            <a href="#">Menu</a>
            <?php include('../menu/mainMenu.php');?>
            <a id='menu' class='icon' href='#'>Menu &#9776;</a>
        </div>
    </nav>
    <h1 class="form-title">Отзывы</h1>
    <?php include ('engine.php'); ?>
    <form action="addReview.php" class="message" method="post">
        <fieldset>
            <legend><b>Напишите отзыв</b></legend>
            <p>
                <label for="first">Имя:</label>
                <input type="text" name="nameUser" id="first" placeholder="Введите имя">
            </p>
            <p>
                <label for="message">Ваш отзыв:</label><br>
                <textarea name="reviewUser" placeholder="Введите текст" id="message" cols="80" rows="10"></textarea>
            </p>
            <br>
            <input type="submit" id="sub">
        </fieldset>
    </form>
<?php include('footer.php'); ?>