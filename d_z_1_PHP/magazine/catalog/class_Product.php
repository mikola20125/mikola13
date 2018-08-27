<?php
class Product{
    var $id;
    var $name;
    var $price;
    var $img;
    var $description;
    var $shortDescription;

    function makeProduct($ProdId){

        include "connect_db.php";

        $prod = mysqli_fetch_assoc($result);
        $this->id =  $prod[id];
        $this->name = "<h3 class = 'name-product'>".$prod[name]."</h3>";
        $this->price = $prod[price];
        $this->img = "<img src = '$prod[img]' alt = '$prod[name]' class = 'img-product'/>";
        $this->shortDescription = "<i>".$prod[ProdDesc]."</i>";
        $this->description = "<i>".$prod[description]."</i>";
        $this->specifications = $prod[specifications];$this->description = $prod[description];
    }

    function showProduct(){
        $product = "<div class='product-container'>".
            $this->name.
            "<div class = 'container_images-cat'>".
            $this->img.
            "</div>
                    <p>".
            $this->shortDescription.
            "</p>
                    <a href = '../products/product.php?id=$this->id'id ='".$this->id."'>Podrobnee</a>
                </div>";
        echo $product;
    }
}
?>