<?php
include '../catalog/class_Product.php';
class FullProduct extends Product{

    function showFullProduct()
    {
        $fullProduct = "<div>
                <div>
                    <div class='container_images'>
                        <a href='$prod[img]' target='_blank'>" .
            $this->img .
            "</a>
                    </div>
                    <div class='short-description'>
                        <p class='product-description'>
                            Краткое описание:
                        </p>
                        <p>" .
            $this->shortDescription .
            "</p>
                        <button class='button'>
                            Купить
                        </button>
                    </div>
                </div>
                <div class='characteristics'>
                    <p class='product-description'>
                        Характеристики:
                    </p>".
            $this->specifications.
            "</div>
                <p class='product-description'>Подробное описание:</p>
                <p class='first-letter'>" .
            $this->description .
            "</p>
            </div>";

        echo $fullProduct;
    }
}
?>