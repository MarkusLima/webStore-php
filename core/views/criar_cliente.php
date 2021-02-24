<div class="container">
    <div class="row mp-5">
        <div class="col-sm-6 offset-sm-3">
            <h3 class="text-center">Registro de Novo Cliente</h3>

            <form action="?a=criar_cliente" method="post">
                <div class="my-3">
                    <label for="">Email</label>
                    <input type="email" name="mail" placeholder="E-mail" class="form-control" required>
                </div>

                <div class="my-3">
                    <label for="">Senha</label>
                    <input type="password" name="senha_1" placeholder="Senha" class="form-control" required>
                </div>

                <div class="my-3">
                    <label for="">Repetir a senha</label>
                    <input type="password" name="senha_2" placeholder="Repetir" class="form-control" required>
                </div>

                <div class="my-3">
                    <label for="">Nome completo</label>
                    <input type="text" name="nome_completo" placeholder="Nome completo" class="form-control" required>
                </div>

                <div class="my-3">
                    <label for="">Endereço</label>
                    <input type="text" name="endereco" placeholder="Endereço" class="form-control" required>
                </div>

                <div class="my-3">
                    <label for="">Cidade</label>
                    <input type="text" name="cidade" placeholder="Cidade" class="form-control" required>
                </div>

                <div class="my-3">
                    <label for="">Bairro</label>
                    <input type="text" name="bairro" placeholder="Bairro" class="form-control" required>
                </div>

                <div class="my-3">
                    <label for="">Cep</label>
                    <input type="text" name="cep" placeholder="Cep" class="form-control" required>
                </div>

                <div class="my-3">
                    <label for="">Telefone</label>
                    <input type="text" name="telefone" placeholder="Telefone" class="form-control" required>
                </div>

                <div class="my-3">
                    <label for="">Estado</label>
                    <input type="text" name="estado" placeholder="Estado" class="form-control" required>
                </div>
                <div class="my-3">
                    <label for="">Complemento</label>
                    <input type="text" name="complemento" placeholder="Complemento" class="form-control" required>
                </div>

                <div class="my-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>

                <?php if (isset($_SESSION['erro'])) : ?>
                    <div class="row">
                        <div class="alert alert-danger text-center p-2">
                            <?= $_SESSION['erro'] ?>
                            <?php unset($_SESSION['erro']) ?>
                        </div>
                    </div>
                <?php endif; ?>

            </form>
        </div>
    </div>
</div>

<!-- [mail] => andreluiz.silva@arteris.com.br
    [senha_1] => bizut3062
    [senha_2] => 123456
    [nome_completo] => nome do clinete
    [endereco] => endereco do cliente
    [cidade] => cidade do cliente
    [bairro] => bairro do cliente
    [cep] => cep do cliente
    [telefone] => tel de novo
    [estado] => estado do cliente
    [complemento] => complemento do endereço -->