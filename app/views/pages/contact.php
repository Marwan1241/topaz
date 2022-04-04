<?php
class Contact extends view
{

  public function output()
  {
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 title"> $title</h1>
      <h2 class="display-4 text"> $subtitle</h>
      <br/>
      <br/>
      <form action="contact.php" method="post">
        Your name<br>
        <input type="text" name="cf_name"><br>
        Your e-mail<br>
        <input type="text" name="cf_email"><br>
        Message<br>
        <textarea name="cf_message"></textarea><br>
        <input type="submit" value="Send">
        <input type="reset" value="Clear">
      </form>
    </div>
  </div>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}

