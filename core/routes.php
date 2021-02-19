<?php 

var_dump($_GET['url']);

$rotas = [
    'inicio' => 'main@index',
    'loja' => 'main@loja',
    'carrinho' => 'loja@carrinho',
    'novo_cliente' => 'main@novo_cliente',
    'login' => 'main@login'
];

$acao = 'inicio';

//verifica se a acao na query string
if(isset($_GET['a'])){
    ////verifica se a acao existe nas rotas
    if(!key_exists($_GET['a'], $rotas)){
        $acao = 'inicio';
    }else{
        $acao = $_GET['a'];
    }
}

//trata a definicao da rota
$partes = explode('@', $rotas[$acao]);

$controlador = 'core\\controladores\\'.ucfirst($partes[0]); //pega a primeira parte e dá lawercase na primera letra
$metodo = $partes[1];

$ctr = new $controlador();
$ctr->$metodo();


