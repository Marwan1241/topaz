<?php

class Rings extends view
{

  public function output()
  {
    $title = $this->model->title;

  }
}
// $sql = "SELECT * FROM necklaces ORDER BY names DESC ";
// $result = $mysqli->query($sql);
// $mysqli->close(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?php echo URLROOT; ?>css/necklaces.css">
   <title>Rings</title>
</head>
<body>
<?php  
  require APPROOT . '/views/inc/header.php'; 
  ?>
   <h1>THE BEST DEALS <br> IN THIS SEASON</h1>
   <hr>
   <table>
        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
                <td class="product-image"><?php echo $rows['product-img'];?></td>
                <td class="product-name"><?php echo $rows['product-name'];?></td>
                <td class="product-desc"><?php echo $rows['product-desc'];?></td>
                <td class="product-price"> $ <?php echo $rows['product-price'];?></td>
            </tr>
            
            <?php
                }
             ?>
        </table>
</body>
</html>