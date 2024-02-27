<?php

require_once __DIR__ . '/Product.php';

class FoodProduct extends Product
{
    private $ingredients;
    private $expiration;
    public static $type = 'food'; 
    public static $icon = 'fas fa-bowl-food'; 

    public function __construct($id, $name, $image, $price, Category $category, $ingredients, $expiration)
    {
        parent::__construct($name, $image, $price, $category);
        $this->setIngredients($ingredients);
        $this->setExpiration($expiration);
    }

    // Ingredients
    public function setIngredients($ingredients){
        $this->$ingredients;
    }

    public function getIngredients(){
        return $this->$ingredients;
    }

    // Expiration
    public function setExpiration(string $expiration){
        $this->$expiration = strtotime($expiration);

    //! Controllo se il prodotto è scaduto
    public function isExpired(){
        $today = strtotime(date('d-m-Y'));
        return $this->expiration > $today;
    }
    }

    public function getExpiration($as_string = true){
       if($as_string) return date('d-m-Y', $this->expiration);
       return $this->expiration;
    }


}