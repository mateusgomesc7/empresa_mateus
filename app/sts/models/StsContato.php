<?php

namespace Sts\models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class StsContato {
    
    private $Resultado;
    private $Dados;

    public function cadContato(array $Dados) {
        $this->Dados = $Dados;
        $cadContato = new \Sts\models\helper\StsCreate;
        $cadContato->exeCreate('sts_contatos', $this->Dados);
    }
}