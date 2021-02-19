<?php 

namespace core\controladores;

use core\classes\Store;

class Main{
    public function index(){

        $dados = [
            'titulo'=> 'Este é o titulo!!!!',
            'clientes'=> ['Markus', 'Juju', 'Eu']
        ];

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'inicio',
            'layouts/footer',
            'layouts/html_footer',
        ], $dados);

    }

    public function loja(){
        $dados = [
            'titulo'=> 'Este é o titulo!!!!',
            'clientes'=> ['Markus', 'Juju', 'Eu']
        ];

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'loja',
            'layouts/footer',
            'layouts/html_footer',
        ], $dados);
    }

        public function novo_cliente(){
      
            //verifica se tem seccao aberta
            if(Store::clienteLogado()){
                $this->index();
                return;
            }


        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'loja',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

    public function login(){
        echo 'login';
    }
}
