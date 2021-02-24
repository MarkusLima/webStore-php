<?php

use core\classes\Store;

//$_SESSION['cliente'] = 'Markus';
unset( $_SESSION['cliente']);
?>

<div class="container-fluid navegacao">
    <div class="row">
        <div class="col-6 p-3">
            <a href="?a=inicio">
                <?= APP_NAME ?>
            </a>
        </div>
        <div class="col-6 p-3 text-end">
            <a href="?a=inicio">Inicio</a>
            <a href="?a=loja">Loja</a>
            <?php

            if (Store::clienteLogado()) : ?>
                <a href="?a=logout">Logout</a>
                <a href="?a=loja">A minha conta</a>
            <?php else : ?>
                <a href="?a=inicio">Login</a>
                <a href="?a=novo_cliente">Criar conta</a>
            <?php endif; ?>


            <a href="?a=carrinho"><i class="fas fa-shopping-cart"></i></a>
            <span class="badge bg-warning">10</span>

        </div>
    </div>
</div>