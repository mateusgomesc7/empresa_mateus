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

        $listar_servicos = new \Sts\models\StsServicos;
        $this->Dados['sts_servicos'] = $listar_servicos->listar();

        $listar_video = new \Sts\models\StsVideo;
        $this->Dados['sts_video'] = $listar_video->listar();

        $carregarView = new \Core\ConfigView("sts/views/home/home", $this->Dados);
        $carregarView->renderizar();
    }
}