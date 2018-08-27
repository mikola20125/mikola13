<?php
include 'class_FullProduct.php';
/*if(isset($_GET['id'])){
    $ProdId = $_GET['id'];
    $hostDb = "localhost";
    $userDb = "root";
    $passDb = "";
    $nameDb = "GameZone";
    $link = mysqli_connect($hostDb,$userDb,$passDb,$nameDb);
    $sql = "SELECT * FROM `products` WHERE `id` = $ProdId";
    $result = mysqli_query($link,$sql);

    while($prod = mysqli_fetch_assoc($result)) {
        echo "<div>
                <div>
                    <div class='container_images'>
                        <a href='$prod[img]' target='_blank'>
                            <img src='$prod[img]' alt='akracing' title='$prod[name]' class='img-product'/>
                        </a>
                    </div>
                    <div class='short-description'>
                        <p class='product-description'>
                            Краткое описание:
                        </p>
                        <p>
                            <i>
                                $prod[ProdDesc]
                            </i>
                        </p>
                        <button class='button'>
                            Купить
                        </button>
                    </div>
                </div>
                <div class='characteristics'>
                    <p class='product-description'>
                        Характеристики:
                    </p>
                    $prod[specifications]
                </div>
                <p class='product-description'>Подробное описание:</p>
                <p class='first-letter'>
                    <i>
                        $prod[description]
                    </i>
                </p>
            </div>";
    }
}*/
?>
<?php
$fullProduct = new FullProduct;
$fullProduct->makeProduct($_GET[id]);
$fullProduct->showFullProduct();

?>