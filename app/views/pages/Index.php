<?php
class Index extends View
{
  public function output()
  {
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    // $user_id = $_SESSION['user_id'];
    // $user_name = $_SESSION['user_name'];

   
    
    require APPROOT . '/views/inc/footer.php';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>css/style.css">
  <title>Topaz Silver</title>
</head>
<body>
  <?php  
  require APPROOT . '/views/inc/header.php'; 
  ?>

  <div class="hero">
    <h1 class="" style="text-align: center;">CHECK OUT OUR COLLECTION FROM <br> TOPAZ SILVER JEWELLERY</h1>

    <div class="cards">
      <div class="card">
        <p class="card-text">Shop our products with ease</p>
        <button type="button" class="btn btn-light buy-btn">Buy Now</button>
      </div>
    </div>
  </div>
  
</body>
</html>
