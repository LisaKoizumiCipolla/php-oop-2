<?php
include_once __DIR__ . '/category.php';

class Products extends Category{
    public $name;
    public $brand;
    public $price;
    public $description;
    public $image;

    function __construct(Array $_category, String $_name, String $_brand, String $_price, String $_description, String $_image){
        parent::construct($category)
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->description = $_description;
        $this->image = $_image;
    }
}

?>
