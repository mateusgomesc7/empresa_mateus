<?php

namespace Sts\models\helper;

use PDO;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class StsRead extends StsConn {
    private $Select;
    private $Values;
    private $Resultado;
    private $Query;
    private $Conn;

    function getResultado() {
        return $this->Resultado;
    }

    public function exeRead($Tabela, $Termos = null, $ParseString = null) {
        if(!empty($ParseString)){
            parse_str($ParseString, $this->Values);
        }
        $this->Select = "SELECT * FROM {$Tabela} {$Termos} ";
        echo "{$this->Select}";
        $this->exeInstrucao();
    }

    public function exeInstrucao() {
        $this->conexao();
    }

    public function conexao() {
        $this->Conn = parent::getConn();
        $this->Query = $this->Conn->prepare($this->Select);
        $this->Query->setFetchMode(PDO::FETCH_ASSOC);
    }

}