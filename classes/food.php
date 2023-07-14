<?php
include_once __DIR__ . '/products.php';

class Food extends Products {
    public $ingredients;
    public $calories;
    public $allergens;

    function __construct(Array $_category,String $_name , String $_brand, String $_price, String $_description, String $_image, String $_ingredients, String $_calories, String $_allergens){
        parent::__construct($category, $name, $brand, $price, $description, $image);
        $this->ingredients = $_ingredients;
        $this->calories = $_calories;
        $this->allergens = $_allergens;

    }

}

?>