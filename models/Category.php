<?php

class Category
{
    private $label;
    private $icon;

public __construct($label, $icon){
    $this->setName($name);
    $this->setIcon($icon);
}

}

public function setLabel($label){
    $this->$label;
}
public function getLabel(){
    return $this->$label;
}

public function setIcon($icon){
    $this->$icon;
}

public function getIcon(){
    return $this->$icon;
}