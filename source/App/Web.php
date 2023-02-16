<?php

namespace Source\App;
require "./source/autoload.php";

use League\Plates\Engine;

class Web {
    private $view;

    public function __construct() {
        $this->view = new Engine(CONF_VIEW_WEB,'php');
    }

    public function login(){
        echo $this->view->render("login");
    }

    public function register(){
        echo $this->view->render("register");
    }

    public function error(array $data) : void
    {
        echo $this->view->render("404");
    }
}