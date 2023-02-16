<?php

namespace Source\App;
use League\Plates\Engine;

class Adm {
    private $view;

    public function __construct() {
        $this->view = new Engine(CONF_VIEW_ADMIN,'php');
    }

    public function home(){
        echo $this->view->render("home");
    }

    public function list(){
        echo $this->view->render("lists");
    }
}