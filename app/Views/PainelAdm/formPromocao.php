<main id="t3-content" style="min-height: 85vh; background-image: url(img/fundo.jpg) !important;">

    <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-6 table">
                <h2> <?php echo isset($idPromocao) ? "Editando Produto" : "Cadastrando Promoção"; ?></h2>
                <?php echo \Config\Services::validation()->listErrors(); ?>

                <form class="form-signin" action="<?php echo base_url('Promocao/cadastroPromocao') ?>" id="file" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nomeProduto">Nome para a promoção:</label>
                        <input type="text" class="form-control" name="nomePromocao" id="nomePromocao" value="<?php echo isset($nomePromocao) ? $nomePromocao : set_value('nomePromocao') ?>" required>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="file"></label>
                            <input class="form-control" type="file" onchange="readURL(this);" name="profile_image" id="file" accept="images/*" readonly="true" required autofocus>
                            <img id="blah" type="file" alt="imagem" src="<?php echo isset($imagemPromocao) ? base_url("public/images") . "/" . $imagemPromocao : '' ?>" />
                        </div>
                    </div>

                    <input type="hidden" name="idPromocao" value="<?php echo isset($idPromocao) ? $idPromocao : set_value('idPromocao') ?>">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>


        </div>
    </div>
</main>

<script>
    function readURL(event) {
        var tmppath = URL.createObjectURL(event.files[0]);
        document.getElementById('blah').src = URL.createObjectURL(event.files[0]);
    }
</script>