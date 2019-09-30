<?php

namespace Sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Contato {

    public function index(){
        echo "Página sobre o Contato <br>";
    }
}