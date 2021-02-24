<?php

namespace core\controladores;

use core\classes\Database;
use core\classes\Store;

class Main
{
    public function index()
    {

        $dados = [
            'titulo' => 'Este é o titulo!!!!',
            'clientes' => ['Markus', 'Juju', 'Eu']
        ];

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'inicio',
            'layouts/footer',
            'layouts/html_footer',
        ], $dados);
    }

    public function loja()
    {
        $dados = [
            'titulo' => 'Este é o titulo!!!!',
            'clientes' => ['Markus', 'Juju', 'Eu']
        ];

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'loja',
            'layouts/footer',
            'layouts/html_footer',
        ], $dados);
    }


    public function novo_cliente()
    {

        //verifica se ja existe secao aberta
        if (Store::clienteLogado()) {
            $this->index();
            return;
        }
        $dados = [
            'titulo' => 'Este é o titulo!!!!',
            'clientes' => ['Markus', 'Juju', 'Eu']
        ];

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'criar_cliente',
            'layouts/footer',
            'layouts/html_footer',
        ], $dados);
    }

    public function criar_cliente()
    {
        // echo '<pre>';
        // print_r($_POST);

        if (Store::clienteLogado()) {
            $this->index();
            return;
        }

        //verifica se houve submiussao
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            $this->index();
            return;
        }

        if ($_POST['senha_1'] !== $_POST['senha_2']) {
            $_SESSION['erro'] = 'As senhas não estão iguais.';
            $this->novo_cliente();
            return;
        }

        //novo cliente
        $bd = new Database();
        $params = [
            ':e' => strtolower(trim($_POST['mail']))
        ];
        $result = $bd->read("SELECT email FROM clientes WHERE email = :e", $params);
        if (count($result) != 0) {
            $_SESSION['erro'] = 'Ja existe';
            $this->novo_cliente();
            return;
        }
    }
}
