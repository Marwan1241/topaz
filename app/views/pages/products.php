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
class Products extends view
{


  public function output(){
    $this->model->init();
    $products = $this->model->products;
    print_r($products);
    $product = $products[0];
require APPROOT . '/views/inc/header.php';
      $page = <<<EOD
      

<body style="background-color: white !important;">
  <header class="aboutHeader">
    <h1>Products</h1>
  </header>
  <main class="aboutMain">
    <h4>$product->name</h4>
    <h4>$ $product->price</h4>
  </main>
  

  <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
EOD;
    echo $page;
  }
}

?>
</html>
