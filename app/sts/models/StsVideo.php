<?php

namespace Sts\models;

if (!defined('URL')) {
    header("Location: /");
    exit ();
}

class StsVideo {
    private $Resultado;

    public function listar(){
        $listar = new \Sts\models\helper\StsRead;
        $listar->exeRead('sts_videos','LIMIT :limit','limit=1');
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;
    }
}