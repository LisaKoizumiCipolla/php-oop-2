<?php
include_once __DIR__ . '/category.php';

class Products extends Category{
    public $brand;
    public $price;
    public $description;
    public $image;

    function __construct(Array $_category, String $_brand, String $_price, String $_description, String $_image){
        parent::construct($category)
        $this->brand = $_brand;
        $this->price = $_price;
        $this->description = $_description;
        $this->image = $_image;
    }
}

//$prodotto = new Products ([new Category ('cane'), new Category('gatto')], 'brand', 'price', 'description')

?>
