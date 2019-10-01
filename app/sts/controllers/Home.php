<?php

namespace Sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Home {  

    private $Dados;

    public function index(){

        $listar_carousel = new \Sts\models\StsCarousel;
        $this->Dados['sts_carousels'] = $listar_carousel->listar();

        $carregarView = new \Core\ConfigView("sts/views/home/home", $this->Dados);
        $carregarView->renderizar();
    }
}