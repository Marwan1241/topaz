<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/navbar.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>">Topaz</a>
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
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT . 'pages/login'; ?>">Register</a>
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
            <ul type="none">
              <li></li>
            </ul>
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