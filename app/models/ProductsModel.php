<?php

class ProductsModel extends model {
    public $products;
    public function __construct(){
        parent::__construct();
        
    }

    public function init(){
        $this->dbh->query('SELECT * from product');
        $record = $this->dbh->resultSet();
        $this->products = $record;
    }

}