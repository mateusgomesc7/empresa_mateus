<?php

namespace Sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Blog {

    private $Dados;

    public function index(){
        $listar_art = new \Sts\models\StsBlog;
        $this->Dados['artigos'] = $listar_art->listarArtigos();

        $carregarView = new \Core\ConfigView('sts/views/blog/blog', $this->Dados);
        $carregarView->renderizar();
    }
}