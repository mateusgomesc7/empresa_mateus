<?php
session_start(); //inicializar a sessão
ob_start(); // Limpar o Buffer de direcionamento

define('URL', 'http://localhost:8095/empresa_mateus/'); //quando alterar de servidor, apenas alterar o caminho aqui
define('URLADM', 'http://localhost:8095/empresa_mateus/adm/');

define('CONTROLLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'celke');