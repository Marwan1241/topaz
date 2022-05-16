<?php
class Contact extends view
{

  public function output()
  {
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;

  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <link rel="stylesheet" href="<?php echo URLROOT; ?>css/contact.css">
  <title>Contact Us</title>
</head>
<body>
  <?php  require APPROOT . '/views/inc/header.php'; ?>

  <main>
  <header>
    <h1>We'd Love to hear from you !</h1>
    <p>Shoot us a message here , or you can email us at topaz-support@email.com</p>
    <br><br>
    <form class="form-contact" action="">
      <label for="nameInput">Enter Your Name</label>
      <br>
      <input type="text" id="nameInput">
      <br><br>
      <label for="emailInput">Enter Your Email</label>
      <br>
      <input type="email" id="emailInput">
      <br><br>
      <button class="btn-primaryy">Submit</button>
    </form>
  </header>
 

    <aside>
      <h2>Our Social Media</h2>
      <i class="fa-brands fa-facebook">   Facebook</i>
      <i class="fa-brands fa-instagram">   Instagram</i>
      <i class="fa-brands fa-twitter">   Twitter</i>
    </aside>
  </main>
      
  <?php  require APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>

