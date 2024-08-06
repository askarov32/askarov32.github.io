<?php
class Product {
    public $id;
    public $name;
    public $price;
    public $image;
    public $description;
    public $details;

    public function __construct($id, $name, $price, $image, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->description = $description;
    }

    public static function getAllProducts() {
        return [
            new Product(1, 'Daily 3.0', 48990, 'assets/img/DSC_8900 1 (1).png', 'Описание товара'),
            new Product(2, 'Adidas Campus', 74990, 'assets/img/DSC_9001.JPG', 'Описание товара'),
            new Product(3, 'Adidas Stellasport Yvori', 46990, 'assets/img/DSC_8998.JPG', 'Описание товара'),
        ];
    }
}
?>
