<main id="t3-content" style="min-height: 70vh;">
    <br>
    <div class="row container justify-content-md-center">
        <div class="col-12 col-md-3">
        <?php if(isset($msg)){echo $msg;}?>
        <h2> <?php echo $titulo ?></h2>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
                    <small id="emailHelp" class="form-text text-muted">Não tem cadastro? Don't panic! <a href="<?php base_url('')?>cadastro">clique aqui</a></small>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Entar</button>
            </form>
        </div>
    </div>
</main>