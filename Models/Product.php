<?php


require __DIR__ . '/Category.php';

class Product
{
    public $name;
    public $img;
    public $price;
    public $description;
    public $category;


    public function __construct($name, $img, $price, Category $category, $description)
    {
        $this->name = $name;
        $this->img = $img;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
    }
}
