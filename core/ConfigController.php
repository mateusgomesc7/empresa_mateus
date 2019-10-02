<?php

namespace Core;

class ConfigController{

    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlParametro;
    private static $Format;

    public function __construct(){
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->Url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            $this->limparUrl();
            $this->UrlConjunto = explode("/", $this->Url);

            if (isset($this->UrlConjunto[0])){
               $this->UrlController = $this->slugController($this->UrlConjunto[0]);
            } else {
                echo "oi <br>";
                $this->UrlController = CONTROLLER;
            }
            if (isset($this->UrlConjunto[1])){
                $this->UrlParametro = $this->UrlConjunto[1];
            } else {
                $this->UrlParametro = null;
            }
            // echo "URL: {$this->Url} <br>";
            // echo "Controller: {$this->UrlController} <br>";
        } else {
            $this->UrlController = CONTROLLER;
            $this->UrlParametro = null;
        } 
    }

    // Para limpar a URL, sem ter caractres especiais
    private function limparUrl(){
        //Eliminar as tags
        $this->Url = strip_tags($this->Url);
        //Eliminar espaços em branco
        $this->Url = trim($this->Url);
        //Eliminar a barra no final da URL
        $this->Url = rtrim($this->Url, "/");

        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr--------------------------------';
        $this->Url = strtr(utf8_decode($this->Url), utf8_decode(self::$Format['a']), self::$Format['b']);
    }

    // Deixa em a primeira letra maiúscula,
    // pois se refere a classe
    private function slugController($slugController){
        // $UrlController = strtolower($slugController);
        // $UrlController = explode("-", $UrlController);
        // $UrlController = implode(" ", $UrlController);
        // $UrlController = ucwords($UrlController);
        // $UrlController = str_replace(" ", "", $UrlController);
        $UrlController = str_replace(" ", "", ucwords(implode(" ", explode("-", strtolower($slugController)))));

        return $UrlController;
    }

    public function carregar(){
        $classe = "\\Sts\\controllers\\"  . $this->UrlController;
        $classeCarregar = new $classe; // Intanciando a classe que veio pela url
        $classeCarregar->index();
    }

}