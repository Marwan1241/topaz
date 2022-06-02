<?php
class IndexModel extends model
{
     public $title = 'MIU SE305 Blog ' . APP_VERSION;
     public $subtitle = 'Example of MVC PHP framework for SE305';


     public function deleteFromCart($productID,$price){
          $email = $_SESSION['email'];
          $this->dbh->query("SELECT * FROM cart where `userEmail`=:email");
          $this->dbh->bind(':email', $email);
          $record = $this->dbh->resultSet();
          $products = $record[0]->productID;
          $new_products = unserialize($products);
          $to_remove = array($productID);
          $new_products = array_diff($new_products, $to_remove);
          $qty = count($new_products);
          $totalPrice = $record[0]->totalPrice - $price;

          $this->dbh->query("UPDATE `cart` SET `productID`=:products,`qauntity`=:qty,`totalPrice`=:totalPrice WHERE `userEmail`=:email");
          $this->dbh->bind(':email', $email);
          $this->dbh->bind(':products', serialize($new_products));
          $this->dbh->bind(':qty', $qty);
          $this->dbh->bind(':totalPrice', $totalPrice);
          $this->dbh->execute();
     }
}
