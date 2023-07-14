

<?php

class Products{
    public $category;
    public $name;
    public $brand;
    public $price;
    public $description;
    public $image;

    function __construct(String $_category, String $_name, String $_brand, String $_price, String $_description, String $_image){
        $this->category = $_category;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->description = $_description;
        $this->image = $_image;
    }
}
//$prodotto = new Products ([new Category ('cane'), new Category('gatto')], 'brand', 'price', 'description')

?>
