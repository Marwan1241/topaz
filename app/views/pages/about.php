<?php
class About extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/about.css">
  <title>About Us</title>
</head>
<body style="background-color: white !important;">
  <?php require APPROOT . '/views/inc/header.php'; ?>
  <header class="aboutHeader">
    <h1>About Topaz</h1>
  </header>

  <main class="aboutMain">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae voluptatem cumque excepturi commodi harum officiis, atque voluptate quia quos quod quidem laudantium accusamus, voluptatibus mollitia alias. Assumenda, aut cupiditate! Excepturi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, maiores qui eos cupiditate repellat nulla? Nulla id quae, quisquam omnis quaerat reiciendis adipisci soluta maxime debitis beatae nostrum saepe eum.</p>
  </main>
  

  <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>
