<?php

namespace Sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Home {  
    public function index(){

        $home = new \Sts\models\StsHome;
        $home->index();

        $carregarView = new \Core\ConfigView("sts/views/home/home");
        $carregarView->renderizar();
    }
}