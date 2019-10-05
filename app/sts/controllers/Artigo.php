<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Artigo {

    private $Dados;
    private $Artigo;

    public function index($Artigo = null){
        $this->Artigo = (string) $Artigo;
        // echo "<br><br><br> {$this->Artigo}";

        $visualizarArt = new \Sts\models\StsArtigo;
        $this->Dados['sts_artigos'] = $visualizarArt->visualizarArtigo($this->Artigo);

        $carregarView = new \Core\ConfigView('sts/views/blog/artigo',$this->Dados);
        $carregarView->renderizar();

    }
}