<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?php echo URLROOT; ?>css/necklaces.css">
   <title>Rings</title>
</head>


<?php
    require APPROOT . '/views/inc/header.php'; 


class Rings extends view
{

  public function output()
  {
    $bracelets = $this->model->init();

    $page = <<<EOD
    <body>
   <h1>THE BEST DEALS <br> IN THIS SEASON</h1>
   <hr>
   <table>
   EOD;
   $URLroot = URLROOT;
   $rows = '';
    for($i = 0; $i < count((array)$bracelets) ; $i++)
    {
      $image = $bracelets[$i]->image;
      $name = $bracelets[$i]->name;
      $description = $bracelets[$i]->description;
      $price = $bracelets[$i]->price;
      $id = $bracelets[$i]->productID;
          $new_row =<<<EOD
            <tr>
              <form method="post" action="$URLroot/pages/rings">
                <td class="product-img"><img src="$image"></td>
                <td class="product-name">$name</td>
                <td class="product-desc">$description</td>
                <td class="product-price"> $ $price</td>
                <input type="hidden" name="index" value=$id />
                <input type="hidden" name="price" value=$price />
<<<<<<< HEAD
                <td><button class="add-to-cart"type="submit">Add To Cart </button></td>
=======
                <button type="submit">Add To Cart </button>
>>>>>>> 3aae9b5c6398cf99f4e44649c39cf7aa1fdbd35d
              </form>
            </tr>
            EOD;
      $rows= $rows.$new_row;
    }
    echo $page;
    echo $rows;

  }

}
// $sql = "SELECT * FROM necklaces ORDER BY names DESC ";
// $result = $mysqli->query($sql);
// $mysqli->close(); 
?>
</table>

<!-- <?php //require APPROOT . '/views/inc/footer.php'; ?> -->
</body>
</html>

 
