<?php

namespace Sts\controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Blog {

    public function index(){
        echo "Página sobre o Blog <br>";
    }
}