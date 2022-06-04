<?php

class ProductsModel extends model {
    public $products;
    public function __construct(){
        parent::__construct();
        
    }

    public function getProducts(){
        return $this->products;
    }

    public function searchForProducts($search){
        $this->dbh->query("SELECT * from products where `name` LIKE '%$search%'");
        $record = $this->dbh->resultSet();
        $this->products = $record;
        return $record;
    }

}