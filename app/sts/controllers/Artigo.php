<?php

namespace App\sts\controllers;

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

        $listarArtRecente = new \Sts\models\StsArtRecente();
        $this->Dados['artRecente'] = $listarArtRecente->listarArtRecente();

        $listarArtDestaque = new \Sts\models\StsArtDestaque();
        $this->Dados['artDestaque'] = $listarArtDestaque->listarArtDestaque();

        $visSobreAutor = new \Sts\models\StsSobreAutor();
        $this->Dados['sobreAutor'] = $visSobreAutor->sobreAutor();

        if(!empty($this->Dados['sts_artigos'][0])){
            $artProximoAnt = new \Sts\Models\StsArtProxAnt;
            $this->Dados['artProximo'] = $artProximoAnt->artigoProximo($this->Dados['sts_artigos'][0]['id']);
            $this->Dados['artAnterior'] = $artProximoAnt->artigoAnterior($this->Dados['sts_artigos'][0]['id']);
        }

        $carregarView = new \Core\ConfigView('sts/views/blog/artigo',$this->Dados);
        $carregarView->renderizar();

    }
}