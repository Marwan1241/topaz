<?php

class Product {

    public $name;
    public $description;
    public $price;
    public $image;
    public $cost;
    public $type;
    public $productId;

    public function __construct($name,$description,$price,$image,$cost,$type){
        $this->name = $name;
        $this->description= $description;
        $this->price= $price;
        $this->image=$image;
        $this->cost=$cost;
        $this->type=$type;
        $this->productId=$productId;
    }

}