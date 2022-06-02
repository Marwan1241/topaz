<?php
class RingsModel extends model
{

        protected $rings;

        public function __construct(){
                parent::__construct();
                
        }

        public function getRings(){
                return $this->rings;
        }
        public function setRings($rings){
                $this->rings = $rings;
        }
        
        public function init(){
                $this->dbh->query("SELECT * from products where `type`='rings'");
                $record = $this->dbh->resultSet();

                return $record;
        }

        public function addToCart($productID,$price){
                $email = $_SESSION['email'];
                $this->dbh->query("SELECT * FROM cart where `userEmail`=:email");
                $this->dbh->bind(':email', $email);
                $record = $this->dbh->resultSet();
                $products = $record[0]->productID;
                $new_products = unserialize($products);
                if($products === ""){
                        $new_products = [$productID];
                }else{
                        $new_products[] = $productID;
                }
                $qty = count($new_products);
                $totalPrice = $record[0]->totalPrice + $price;

                
                $this->dbh->query("UPDATE `cart` SET `productID`=:products,`qauntity`=:qty,`totalPrice`=:totalPrice WHERE `userEmail`=:email");
                $this->dbh->bind(':email', $email);
                $this->dbh->bind(':products', serialize($new_products));
                $this->dbh->bind(':qty', $qty);
                $this->dbh->bind(':totalPrice', $totalPrice);
                $this->dbh->execute();
        }
}
