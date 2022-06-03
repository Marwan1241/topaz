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

  <div class="hero main">
    <h1 class="" style="text-align: center;">CHECK OUT OUR COLLECTION FROM <br> TOPAZ SILVER JEWELLERY</h1>

    <div class="cards">
      <div class="card crd-1">
        <p class="card-text">Shop our silver bracelets</p>
        <button type="button" class="btn btn-light buy-btn" id="bracelets">Buy Now</button>
      </div>
      <div class="card crd-2">
        <p class="card-text">Check our silver earrings</p>
        <button type="button" class="btn btn-light buy-btn" id="earrings">Buy Now</button>
      </div>
      <div class="card crd-3  ">
        <p class="card-text">check our silver necklaces</p>
        <button type="button" class="btn btn-light buy-btn" id="necklaces">Buy Now</button>
      </div>
      <div class="card crd-4">
        <p class="card-text">check our wedding rings</p>
        <button type="button" class="btn btn-light buy-btn" id="rings">Buy Now</button>
      </div>
   
    </div>
  </div>

  <div class="about main">

    <div class="left">
       <h1 style="font-size: 74px">About Us</h1>
          <p class="about-text" style="font-size: 25px; width : 90%;">
          Topaz is a company that sells silver Jewelry , we provide our customers with the highest quality products and we make sure that our vendors are well known and trust worthy if you like to read more about us , check out our about page.
        </p>

    <button type="button" class="btn btn-secondary" style="font-size: 25px; width:fit-content">Read More</button>
    </div>

    <img src="https://images.unsplash.com/photo-1638382874010-aa4e76fe267d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1582&q=80" alt="model wearing a ring">

  </div>


  <div class="reviews main">
    <h1>Here are some reviews from our customers !</h1>

       <div class="review-cards">
            <div class="review-card" style="width: 18rem">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="nameRating">
                        <h5 class="card-title" style="margin-right:10px;">Jane Austin</h5>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <p class="review-card-text" style="text-align:center">"Really Amazing products , I definitely recommend it for everyone !"</p>
                </div>
              </div>

            <div class="review-card" style="width: 18rem;">
                <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="nameRating">
                        <h5 class="card-title" style="margin-right:10px;">John Doe</h5>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <p class="review-card-text" style="text-align:center">"I got a bracelet for my fiance and she absolutely loves it !"</p>
                </div>
              </div>

            <div class="review-card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2076&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="nameRating">
                        <h5 class="card-title" style="margin-right:10px;">Angelina Stone</h5>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <p class="review-card-text" style="text-align:center">"Really amazing service , and the shipping was really fast , I will get more products soon !"</p>
                </div>
            </div>
       </div>

  </div>
  <script type="text/javascript">
    document.getElementById("rings").onclick = function () {
        location.href = "<?php echo URLROOT.'pages/rings' ?>";
    };
    document.getElementById("bracelets").onclick = function () {
        location.href = "<?php echo URLROOT.'pages/bracelets' ?>";
    };
    document.getElementById("earrings").onclick = function () {
        location.href = "<?php echo URLROOT.'pages/earrings' ?>";
    };
    document.getElementById("necklaces").onclick = function () {
        location.href = "<?php echo URLROOT.'pages/necklaces' ?>";
    };
</script>
</body>
</html>
