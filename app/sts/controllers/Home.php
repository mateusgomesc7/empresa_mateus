<?php

namespace Sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Home {  

    private $Dados;

    public function index(){

        $home = new \Sts\models\StsHome;
        $this->Dados = $home->index();

        $carregarView = new \Core\ConfigView("sts/views/home/home", $this->Dados);
        $carregarView->renderizar();
    }
}