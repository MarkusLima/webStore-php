<?php 

namespace core\controladores;

use core\classes\Store;

class Loja{
    public function carrinho(){
        $dados = [
            'titulo'=> 'Este é o titulo!!!!',
            'clientes'=> ['Markus', 'Juju', 'Eu']
        ];

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'carrinho',
            'layouts/footer',
            'layouts/html_footer',
        ], $dados);

    }

}
