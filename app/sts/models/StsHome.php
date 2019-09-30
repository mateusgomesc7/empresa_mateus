<?php

namespace Sts\models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class StsHome {
    public function index() {
        // echo "Listar dados <br>";
        // $conexao = new \Sts\models\helper\StsConn();
        // $conexao->getConn();
        $listar = new \Sts\models\helper\StsRead;
        $listar->exeRead('sts_carousels', 'WHERE adms_situacao_id =:adms_situacao_id LIMIT :limit', 'adms_situacao_id=1&limit=4');

    }
}
