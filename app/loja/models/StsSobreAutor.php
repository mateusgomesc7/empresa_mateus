<?php

namespace Sts\models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class StsSobreAutor {
    private $Resultado;

    public function sobreAutor(){
        $visSobreAutor = new \Sts\models\helper\StsRead;
        $visSobreAutor->fullRead('SELECT id, titulo, descricao, imagem
        FROM sts_sobres
        WHERE adms_sit_id =:adms_sit_id
        AND id =:id
        LIMIT :limit', "adms_sit_id=1&id=1&limit=1");

        $this->Resultado = $visSobreAutor->getResultado();
        return $this->Resultado;
    }
}