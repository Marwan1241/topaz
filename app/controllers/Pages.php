<?php

class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
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
        $viewPath = VIEWS_PATH . 'pages/products.php';
        require_once $viewPath;
        $productsView = new Products($this->getModel(), $this);
        $productsView->output();
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
        $viewPath = VIEWS_PATH . 'pages/necklaces.php';
        require_once $viewPath;
        $necklacesView = new Necklaces($this->getModel(), $this);
        $necklacesView->output();
    }
}
