<?php

//abre a sessao

use core\classes\Database;

session_start();

// carreg o config
// require_once('../config.php');

//carrega todas as classes do prjeto
require_once('../vendor/autoload.php');

// echo 'teste';
// $bd = new Database();
// $clientes = $bd->read("select * from clientes");

// echo '<pre>';

// print_r($clientes);

// carrega o sistema de rotas

require_once('../core/routes.php');

echo APP_NAME;

