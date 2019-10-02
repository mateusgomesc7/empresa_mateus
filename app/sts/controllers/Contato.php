<?php

namespace Sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Contato {

    private $Dados;

    public function index(){
        $this->Dados = [
            'nome' => 'Mateus',
            'email' => 'mateus@gomes.com',
            'assunto' => 'teste1',
            'mensagem' => 'msg teste 1',
            'created' => date('Y-m-d H:i:s')
            ];
        // var_dump($this->Dados);
        $cadContato = new \Sts\models\StsContato;
        $cadContato->cadContato($this->Dados);
    }
}