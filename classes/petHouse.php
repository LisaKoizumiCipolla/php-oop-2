<?php
include_once __DIR__ . '/products.php';

class PetHouse extends Products {
    public $dimension;
    public $style;

    function __construct(Category $_category, String $_name , String $_brand, String $_price, String $_description, String $_image, String $_dimension, String $_style){
        parent::__construct($_category, $_name, $_brand, $_price, $_description, $_image);
        $this->dimension = $_dimension;
        $this->style = $_style;
    }

}

?>