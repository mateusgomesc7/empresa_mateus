<?php

namespace Sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class SobreEmpresa {
    
    public function index(){
        echo "Página sobre empresa <br>";
    }
}