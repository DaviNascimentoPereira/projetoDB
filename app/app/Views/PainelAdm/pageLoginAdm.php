<main id="t3-content" style="min-height: 70vh; background-image: url(img/fundo.jpg) !important;">
    <br>
    <div class="row container justify-content-md-center">
    <div class="col-12 col-md-3">
        <img src="<?php base_url() ?>public/images/engrenagem.jpg" alt="">
    </div>
        <div class="col-12 col-md-3">
            <h2> <?php echo $titulo ?></h2>
            <form action="<?php echo base_url('login/loginSistema') ?>" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email">
                    <small id="emailHelp" class="form-text text-muted">Não tem cadastro? Do Panic !!!! Ligue para o TI
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Entar</button>
            </form>
        </div>
        
        <?php $msg = session()->getFlashData('msg') ?>
        <?php if (!empty($msg)) { ?>
            <div class="col-12 col-md-3 alert alert-danger">
                <?php echo $msg ?>
            <?php } ?>
            </div>
    </div>
</main>