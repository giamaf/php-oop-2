<?php

require_once __DIR__ . '/Product.php';

class KennelProduct extends Product
{
    private $color;
    private $size;
    public static $type = 'kennel'; 
    public static $icon = 'fas fa-bone'; 

    public function __construct($id, $name, $image, $price, Category $category, $color, $size)
    {
        parent::__construct($name, $image, $price, $category);
        $this->setColor($color);
        $this->setSize($size);
    }

    // Color
    public function setColor($color){
        $this->$color;
    }

    public function getColor(){
        $this->$color;
    }

    // Size
    public function setSize($size){
        $this->$size;
    }

    public function getSize(){
        $this->$size;
    }




}