<?php

namespace core\models;

use core\classes\Store;
use core\classes\Database;

class Clientes
{
    public function teste()
    {
        echo "teste";
    }

    public function verificar_email_existe($email)
    {
        //novo cliente
        $bd = new Database();
        $params = [
            ':e' => strtolower(trim($email))
        ];
        $result = $bd->read("SELECT email FROM clientes WHERE email = :e", $params);
        if (count($result) != 0) {
            return true;
        }else{
            return false;
        }
    }

    public function registra_cliente(){
        $bd = new Database();
        
        $purl = Store::criarHash();

        $parameter = [
            ':email' => strtolower(trim($_POST['mail'])),
            ':nome' => trim($_POST['nome_completo']),
            ':senha' => password_hash(trim($_POST['senha_1']), PASSWORD_DEFAULT),
            ':endereco' => trim($_POST['endereco']),
            ':cidade' => trim($_POST['cidade']),
            ':bairro' => trim($_POST['bairro']),
            ':cep' => trim($_POST['cep']),
            ':telefone' => trim($_POST['telefone']),
            ':estado' => trim($_POST['estado']),
            ':complemento' => trim($_POST['complemento']),
            ':hash_validacao' => $purl,
            ':ativo' => 0,
        ];
        $bd->create("INSERT INTO clientes VALUES(0, :nome, :email, :senha, :endereco, :cidade, :bairro, :cep, :telefone, :estado, :complemento, :hash_validacao, :ativo, NOW(), NOW(), null)", $parameter);

        return $purl;
    }
}
