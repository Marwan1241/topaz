<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/navbar.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Topaz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT . 'public'; ?>">Home</a>
        </li>
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT . 'pages/about'; ?>">About</a>
        </li>
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT . 'pages/contact'; ?>">Contact Us</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT . 'pages/login'; ?>">Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         <i id="shop-btn" class="fa-solid fa-store">Shop</i>
          </a>
          <div id="shop-menu">
            <ul type="none">
              <li><a href="#">Necklace</a></li>
              <li><a href="#">Rings</a></li>
              <li><a href="">Bracelets</a></li>
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
    <i class="nav-link fa-solid fa-cart-shopping">Cart</i>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<style>
  #shop-menu{
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

shopbtn.addEventListener("click", function(){
  if(document.querySelector('#shop-menu').style.display == 'none'){
    document.querySelector('#shop-menu').style.display = 'block';
  } else {
    document.querySelector('#shop-menu').style.display = 'none';
  }
});

</script>