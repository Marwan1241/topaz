<?php 

class CartModel extends model {

    protected $productId;
    protected $quantity;
    protected $shippingPrice;
    protected $totalPrice;
    protected $cartId;


    function __construct($productId,$quantity,$shippingPrice,$totalPrice,$carId,$SaveCart){

    $this-> productId= $productId;
    $this-> quantity= $quantity;
    $this-> shippingPrice= $shippingPrice;
    $this-> totalPrice= $totalPrice
    $this-> cartId= $cartId;

    }
    public function setproductId($productId){
        $this-> productId= $productId;
    }
    public function getproductId(){
        return $this-> productId;
    }
    public function setquantity($quantity){
        $this-> quantity= $quantity;
    }
    public function getquantity(){
        return $this-> quantity;
    }
    public function setshippingPrice($shippingPrice){
        $this-> shippingPrice= $shippingPrice;
    }
    public function getshippingPrice(){
        return $this-> shippingPrice;
    }
    public function settotalPrice($totalPrice){
        $this-> totalPrice= $totalPrice;
    }
    public function gettotalPrice(){
        return $this-> totalPrice;
    }
    public function setcartId($cartId){
        $this-> cartId= $cartId;
    }
    public function getcartId(){
        return $this-> cartId;
    }
 
    public function SaveCart($cartId,$productId){
        //TODO save cart to database


    }


}






