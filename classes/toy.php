<?php
include_once __DIR__ . '/products.php';

class Toy extends Products {
    public $material;
    public $colour;
    public $petSize;


    function __construct(Array $_category,String $_name , String $_brand, String $_price, String $_description, String $_image, String $_material, String $_colour, String $_petSize){
        parent::__construct($category, $name, $brand, $price, $description, $image);
        $this->material = $_material;
        $this->colour = $_colour;
        $this->petSize = $_petSize;

    }
}



?>