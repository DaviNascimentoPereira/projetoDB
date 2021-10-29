<main id="t3-content" style="min-height: 85vh; background-image: url(img/fundo.jpg) !important;">
   
    <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-6 table">
                <h2> <?php echo isset($idProduto) ? "Editando Produto" : "Cadastrando Promoção"; ?></h2>
                <?php echo \Config\Services::validation()->listErrors(); ?>

                <form class="form-signin" action="<?php echo base_url('Produtos/cadastroProduto') ?>" id="file" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="file"></label>
                            <input class="form-control" type="file" onchange="readURL(this);" name="profile_image" id="file" accept="images/*" readonly="true" required autofocus>
                            <img id="blah" type="file" alt="imagem" src="<?php echo isset($imagem) ? base_url("public/images") . "/" . $imagem : '' ?>" />
                        </div>
                    </div>

                    <input type="hidden" name="idProduto" value="<?php echo isset($idProduto) ? $idProduto : set_value('idProduto') ?>">
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