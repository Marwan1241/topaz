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

    public function Sign()
    {
        $viewPath = VIEWS_PATH . 'pages/Sign.php';
        require_once $viewPath;
        $loginView = new Sign($this->getModel(), $this);
        $loginView->output();
    }

}
