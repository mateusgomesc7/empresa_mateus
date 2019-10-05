<?php

namespace App\sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Contato {

    private $Dados;

    public function index(){

        $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        //echo "<br><br><br>";
        //var_dump($this->Dados);
        if(!empty($this->Dados['CadMsgCont'])){
            unset($this->Dados['CadMsgCont']); // Destruir a conluna CadMsgCont, utilizada apenas para verificar se o usuário clicou no botão
            $cadContato = new \Sts\models\StsContato;
            $cadContato->cadContato($this->Dados);
            if($cadContato->getResultado()){
                $this->Dados['form'] = null;
            } else {
                $this->Dados['form'] = $this->Dados;
            }

        }
        
        $carregarView = new \Core\ConfigView('sts/views/contato/contato', $this->Dados);
        $carregarView->renderizar();

    }
}