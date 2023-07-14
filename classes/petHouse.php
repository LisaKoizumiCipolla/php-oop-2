<?php
include_once __DIR__ . '/products.php';

class PetHouse extends Products {
    public $dimension;
    public $style;

    function __construct(Array $_category,String $_name , String $_brand, String $_price, String $_description, String $_image, String $_dimension, String $_style){
        parent::__construct($category, $name, $brand, $price, $description, $image);
        $this->dimension = $_dimension;
        $this->style = $_style;
    }

}

?>