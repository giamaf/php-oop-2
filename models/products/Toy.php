<?php

require_once __DIR__ . '/Product.php';

class ToyProduct extends Product
{
    private $materials;
    private $color;
    public static $type = 'toy'; 
    public static $icon = 'fas fa-bone'; 

    public function __construct($id, $name, $image, $price, Category $category, $materials, $color)
    {
        parent::__construct($name, $image, $price, $category);
        $this->setColor($color);
        $this->setMaterials($materials);
    }

    // Color
    public function setColor($color){
        $this->$color;
    }

    public function getColor(){
        $this->$color;
    }

    // Materials
    public function setMaterials($materials){
        $this->$materials;
    }

    public function getMaterials(){
        $this->$materials;
    }



}