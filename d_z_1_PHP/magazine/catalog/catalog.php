    <?php include('header.php'); ?>
    <nav>
        <div class='topnav' id='myTopnav'>
            <a href="#">Menu</a>
            <?php include('mainMenu.php');?>
            <a id='menu' class='icon' href='#'>Menu &#9776;</a>
        </div>
    </nav>
    <div class="catalog">
        <h1 class="title-catalog">Каталог</h1>
        <?php
            include ('engine.php');
        ?>
    </div>
        <hr>
    <?php include('footer.php');?>


