<?php

namespace App\sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class SobreEmpresa {

    private $Dados;
    
    public function index(){
        $listarMenu= new \Sts\models\StsMenu();
        $this->Dados['menu'] = $listarMenu->listarMenu();

        $listarSeo = new \Sts\Models\StsSeo();
        $this->Dados['seo'] = $listarSeo->listarSeo();

        $listarSobEmp = new \Sts\models\StsSobEmp;
        $this->Dados['sts_sobs_emps'] = $listarSobEmp->listarSobEmp();

        $carregarView = new \Core\ConfigView('sts/views/sobEmp/sobEmp', $this->Dados);
        $carregarView->renderizar();
    }
}