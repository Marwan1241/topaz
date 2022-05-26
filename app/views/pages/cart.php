<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/about.css">
  <title>Products</title>
</head>
<?php
class Cart extends view
{


  public function output(){
    $cart = $this->model->getcart();
    print_r($cart);
    // $product = $products[0];
require APPROOT . '/views/inc/header.php';
      $page = <<<EOD
      

<body style="background-color: white !important;">
  <header class="aboutHeader">
    <h1>cart</h1>
  </header>
  <main class="aboutMain">
  </main>
  

  <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
EOD;
    echo $page;
  }
}

?>
</html>
