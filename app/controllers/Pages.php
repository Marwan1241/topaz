<?php

class Pages extends Controller
{

    public function index()
    {
        $model = $this->getModel();
        if(isset($_GET['remove'])){
            $model->deleteFromCart($_GET['remove'],$_GET['price']);
            
        }
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($model, $this);
        $indexView->output();
    }

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/about.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }

    public function login()
    {
        $viewPath = VIEWS_PATH . 'pages/login.php';
        require_once $viewPath;
        $loginView = new Login($this->getModel(), $this);
        $loginView->output();
    }

    public function contact(){
        $viewPath = VIEWS_PATH . 'pages/contact.php';
        require_once $viewPath;
        $contactView = new Contact($this->getModel(), $this);
        $contactView->output();
    }

    Public function products(){
        $model = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $model->searchForProducts($_POST['search']);
            $viewPath = VIEWS_PATH . 'pages/products.php';
            require_once $viewPath;
            $productsView = new Products($model, $this);
            $productsView->output();
        }
        // $viewPath = VIEWS_PATH . 'pages/products.php';
        // require_once $viewPath;
        // $productsView = new Products($model, $this);
        // $productsView->output();
    }

     
    public function cart(){
        $viewPath = VIEWS_PATH . 'pages/cart.php';
        require_once $viewPath;
        $contactView = new cart($this->getModel(), $this);
        $contactView->output();
    }

    public function admin(){
        $viewPath = VIEWS_PATH . 'admin-panel/index.php';
        require_once $viewPath;
        $adminView = new admin($this->getModel(), $this);
        $adminView->output();
    }

    Public function necklaces(){
        $model = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $model->addToCart($_POST['index'],$_POST['price']);
        }
        $viewPath = VIEWS_PATH . 'pages/necklaces.php';
        require_once $viewPath;
        $necklacesView = new Necklaces($model, $this);
        $necklacesView->output();
    }
    Public function rings(){
        $model = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo $model->addToCart($_POST['index'],$_POST['price']);
        }
      $viewPath = VIEWS_PATH . 'pages/rings.php';
      require_once $viewPath;
      $necklacesView = new Rings($model, $this);
      $necklacesView->output();
  }
  Public function bracelets(){
    $model = $this->getModel();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo $model->addToCart($_POST['index'],$_POST['price']);
    }
    $viewPath = VIEWS_PATH . 'pages/bracelets.php';
    require_once $viewPath;
    $necklacesView = new Bracelets($model, $this);
    $necklacesView->output();
  }
  Public function earrings(){
    $model = $this->getModel();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo $model->addToCart($_POST['index'],$_POST['price']);
    }
    $viewPath = VIEWS_PATH . 'pages/earrings.php';
    require_once $viewPath;
    $necklacesView = new Earrings($model, $this);
    $necklacesView->output();
  }
}
