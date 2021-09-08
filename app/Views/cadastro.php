<main id="t3-content" style="min-height: 70vh;">
    <br>

    <div class="row container justify-content-md-center">
        <div class="col-12 col-md-4">
            <h2> <?php echo $titulo ?></h2>
            <?php if($erros != ''){ ?>
                <ul style="list-style: none;">
                    <?php 
                    foreach ($erros as $erro) {?>
                    <div class="alert alert-warning" role="alert">
                        <li><?php echo $erro ?></li>
                    </div>
                        <?php } ?>
                   <? ?>
                </ul>
           <?php } ?>
            <strong><?php if (isset($msg)) {echo $msg;} ?></strong>
            <form method="post" name="formCad">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="tex" class="form-control"  name="nome" id="nome" aria-describedby="emailHelp" placeholder="Seu nome..." required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Seu email..." required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha..." required>
                </div>
                <div class="form-group">
                    <label for="senha_confirmacao">Repita a senha:</label>
                    <input type="password" class="form-control" name="senha_confirmacao" id="senha_confirmacao" placeholder="Confirme sua senha..." required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</main>
