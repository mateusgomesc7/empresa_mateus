<?php

namespace Sts\models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class StsBlog {
    private $Resultado;

    public function listarArtigos(){
        $listar = new \Sts\models\helper\StsRead;
        $listar->fullRead('SELECT id, titulo, descricao, imagem, slug
        FROM sts_artigos
        WHERE adms_sit_id =:adms_sit_id
        ORDER BY id DESC
        LIMIT :limit','adms_sit_id=1&limit=5');
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;
    }
}