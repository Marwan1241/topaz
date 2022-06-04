<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/navbar.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>"><img style="width:20%; margin-right: -100px" src="<?php echo URLROOT . 'logo.png'; ?>" alt="topaz logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT . 'pages/about'; ?>">About</a>
        </li>
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT . 'pages/contact'; ?>">Contact Us</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT . 'users/login'; ?>">Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         <i id="shop-btn" class="fa-solid fa-store">Shop</i>
          </a>
          <div id="shop-menu">  
            <ul type="none">
              <li><a href="<?php echo URLROOT . 'pages/necklaces'; ?>">Necklace</a></li>
              <li><a href="<?php echo URLROOT . 'pages/rings'; ?>">Rings</a></li>
              <li><a href="<?php echo URLROOT . 'pages/bracelets'; ?>">Bracelets</a></li>
              <li><a href="<?php echo URLROOT . 'pages/earrings'; ?>">earrings</a></li>
            </ul>
          </div>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <ul>
        </ul>
      </ul>
      <a><i id="cart-btn" class="nav-link fa-solid fa-cart-shopping">Cart</i></a>
          <div id="cart-menu">
            <table type="none">              
              <thead>
              <tr>
              <th>Name</th>
              <th>Image</th>
              <th>Price</th>
              <th>Delete</th>
              </tr>
              </thead>
              <tbody>

              <?php

                $i = 0;
                $email =$_SESSION['email'];
                $con = mysqli_connect("localhost","root","","topaz");

                $get_pro = "select * from cart where userEmail='$email'";
                $pds = '';
                $result = $con->query($get_pro);
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $pds = $row['productID'];
                  }
              }
                $pds = unserialize($pds);
                if($pds){
                foreach($pds as $id){
                  $get_product = "Select * from products where productID='$id'";
                  $result = $con->query($get_product);

                
                while($row=mysqli_fetch_array($result)){

                $pro_id = $row['productID'];
                
                $pro_title = $row['name'];

                $pro_image = $row['image'];

                $pro_price = $row['price'];

                $pro_type = $row['type'];

                $i++;

                ?>

                <tr>


                <td><?php echo $pro_title; ?></td>

                <td><img src="<?php echo $pro_image; ?>" width="60" height="60"></td>

                <td>$ <?php echo $pro_price; ?></td>

                <!-- <td> -->
                <?php

                // $get_sold = "select * from pending_orders where product_id='$pro_id'";
                // $run_sold = mysqli_query($con,$get_sold);
                // $count = mysqli_num_rows($run_sold);
                // echo $count;
                ?>
                <!-- </td> -->



                <td>

                <a href="<?php echo URLROOT.'pages/?remove='.$pro_id."&price=".$pro_price ?>">

                <i class="fa fa-trash-o"> </i> remove

                </a>

                </td>
                </tr>

                <?php } }}?>



              </tbody>

            </table>
          </div>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<style>
  #shop-menu , #cart-menu{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    
   z-index: 5;
   position: absolute;
   background-color: rgba(252, 218, 217 , 98%) ;
   width: 150px;
   padding : 20px 20px 20px 12px;
   border-radius: 20px;
   clip-path: polygon(
     0% 0%,
     0% 100%,
     100% 100%,
     100% 7%
   );

   display: none;
}

#cart-menu{
  margin : 86px 0 0 65%;
}

#cart-btn:hover{
  cursor : pointer;
}

#shop-menu ul li a{
     color:#5C4A5A;
     font-size: 18px;
     text-decoration : none;
}

#shop-menu ul li{
     transition-duration: 0.2s;
}

#shop-menu ul li:hover{
  transform : scale(1.2);
}
</style>

<script>
  var shopbtn = document.querySelector('#shop-btn');
  var cartbtn = document.querySelector('#cart-btn');

shopbtn.addEventListener("click", function(){
  if(document.querySelector('#shop-menu').style.display == 'none'){
    document.querySelector('#shop-menu').style.display = 'block';
  } else {
    document.querySelector('#shop-menu').style.display = 'none';
  }
});

cartbtn.addEventListener("click", function(){
  if(document.querySelector('#cart-menu').style.display == 'none'){
    document.querySelector('#cart-menu').style.display = 'block';
  } else {
    document.querySelector('#cart-menu').style.display = 'none';
  }
});

</script>