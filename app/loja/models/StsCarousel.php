<?php

namespace Sts\models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class StsCarousel {

    private $Resultado;

    public function listar() {
        // echo "Listar dados <br>";
        // $conexao = new \Sts\models\helper\StsConn();
        // $conexao->getConn();
        $listar = new \Sts\models\helper\StsRead;
        //$listar->exeRead('sts_carousels', 'WHERE adms_situacao_id =:adms_situacao_id LIMIT :limit', 'adms_situacao_id=1&limit=4');
        $listar->fullRead('SELECT car.id, car.nome, car.imagem, car.titulo, car.descricao, car.posicao_text, car.titulo_botao, car.link,
        cors.cor 
        FROM sts_carousels car
        INNER JOIN adms_cors cors
        ON cors.id=car.adms_cor_id
        WHERE adms_situacao_id =:adms_situacao_id 
        ORDER BY ordem ASC
        LIMIT :limit', 'adms_situacao_id=1&limit=4');
        $this->Resultado['sts_carousels'] = $listar->getResultado();
        return $this->Resultado['sts_carousels'];
    }
}
