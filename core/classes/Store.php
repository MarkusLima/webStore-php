<?php

namespace core\classes;

use Exception;

class Store
{
    public static function Layout($estruturas, $dados = null){
        //verifica se estruturas é um array
        if(!is_array($estruturas)){
            throw new Exception("Coleção de estruturas inválidas");
        }

        //variáveis 
        if(!empty($dados) && is_array($dados)){
            extract($dados);
        }

        //apresentar as views da aplicacao 
        foreach($estruturas as $estrutura){
            include("../core/views/$estrutura.php");
        }

    }

    public static function clienteLogado(){
        return isset($_SESSION['cliente']);

    }

    public static function criarHash($qtd_caracter = 20){
        $char = "01234567890123456789abcdefghijklmnopqrstuvxzywabcdefghijklmnopqrstuvxzywABCDEFGHIJKLMNOPQRSTUVXYZWABCDEFGHIJKLMNOPQRSTUVXYZW";
        return substr(str_shuffle($char), 0, $qtd_caracter);
    }
}
