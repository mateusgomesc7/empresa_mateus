<?php

namespace Sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class SobreEmpresa {

    private $Dados;
    
    public function index(){
        $listarSobEmp = new \Sts\models\StsSobEmp;
        $this->Dados['sts_sobs_emps'] = $listarSobEmp->listarSobEmp();

        $carregarView = new \Core\ConfigView('sts/views/sobEmp/sobEmp', $this->Dados);
        $carregarView->renderizar();
    }
}