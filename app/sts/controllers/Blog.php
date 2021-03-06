<?php

namespace App\sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Blog {

    private $Dados;
    private $PageId;

    public function index(){
        $listarMenu= new \Sts\models\StsMenu();
        $this->Dados['menu'] = $listarMenu->listarMenu();

        $listarSeo = new \Sts\Models\StsSeo();
        $this->Dados['seo'] = $listarSeo->listarSeo();

        $this->PageId = filter_input(INPUT_GET, 'pg', FILTER_SANITIZE_NUMBER_INT);
        $this->PageId = $this->PageId ? $this->PageId : 1; // Manter na página 1, quando for nulo
        // echo "<br><br><br> {$this->PageId}";
        $listar_art = new \Sts\models\StsBlog();
        $this->Dados['artigos'] = $listar_art->listarArtigos($this->PageId);
        $this->Dados['paginacao'] = $listar_art->getResultadoPg();

        $listarArtRecente = new \Sts\models\StsArtRecente();
        $this->Dados['artRecente'] = $listarArtRecente->listarArtRecente();

        $listarArtDestaque = new \Sts\models\StsArtDestaque();
        $this->Dados['artDestaque'] = $listarArtDestaque->listarArtDestaque();

        $visSobreAutor = new \Sts\models\StsSobreAutor();
        $this->Dados['sobreAutor'] = $visSobreAutor->sobreAutor();

        $carregarView = new \Core\ConfigView('sts/views/blog/blog', $this->Dados);
        $carregarView->renderizar();
    }
}