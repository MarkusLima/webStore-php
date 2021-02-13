<?php

use core\classes\Store;

// $_SESSION['cliente'] = 'Markus';
// unset( $_SESSION['cliente']);
?>

<?php

if (Store::clienteLogado()) : ?>
    <p>Sim</p>
<?php else : ?>
    <p>Não</p>
<?php endif; ?>

<i class="fab fa-500px"></i>

<ul>
    <?php foreach ($clientes as $cliente) : ?>
        <li><?= $cliente ?></li>
    <?php endforeach; ?>
</ul>