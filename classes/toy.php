<?php
include_once __DIR__ . '/products.php';

class Toy extends Products {
    public $material;
    public $colour;
    public $breedSuggestion;


    function __construct(Array $_category, String $_brand, String $_price, String $_description, String $_image, String $_material, String $_colour, String $_breedSuggestion){
        parent::__construct($category, $brand, $price, $description, $image);
        $this->material = $_material;
        $this->colour = $_colour;
        $this->breedSuggestion = $_breedSuggestion;

    }
}



?>