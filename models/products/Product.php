<?php

require_once __DIR__ . '/Category.php';

class Product
{
    protected $id;
    protected $name;
    protected $image;
    protected $price;
    protected Category $category;

    public function __construct($id, $name, $image, $price, Category $category)
    {
    $this->id = $id;
    $this->name = $name;
    $this->image = $image;
    $this->price = $price;
    $this->category = $category;

    }

// Id
    private function setId(){
        $this->$id = uniqid();
    }
    public function getId(){
        return $this->$id;
    }

    // Name
    public function setName($name){
        $this->$name;
    }
    public function getName(){
        return $this->$name;
    }

    public function setImage($image){
        $this->$image;
    }
    public function getImage(){
        return $this->$image;
    }

    public function setPrice($price){
        $this->$price;
    }
    public function getPrice(){
        return $this->$price;
    
    }


}