<main id="t3-content" style="min-height: 85vh; background-image: url(img/fundo.jpg) !important;">
    <style>
        table {
            margin: 0px;
            padding: 0px;
            text-align: center;
            vertical-align: middle;
        }

        .nav-link {
            color: black !important;

        }

        .nav {
            width: 150px;
        }

        .table {
            width: 90%;
        }

        #blah {
            margin-top: 15px;
            width: 100%;
        }
    </style>
    <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-6 table">
                <h2> <?php echo isset($idProduto) ? "Editando Produto" : "Cadastrando Produto"; ?></h2>
                <?php echo \Config\Services::validation()->listErrors(); ?>

                <form class="form-signin" action="<?php echo base_url('Produtos/cadastroProduto') ?>" id="file" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nomeProduto">Nome do produto:</label>
                        <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" value="<?php echo isset($nomeProduto) ? $nomeProduto : set_value('nomeProduto') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="precoProduto">Preço do produto:</label>
                        <input type="text" class="form-control" name="precoProduto" id="precoProduto" value="<?php echo isset($precoProduto) ? $precoProduto : set_value('precoProduto') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select class="form-control" name="categoria" id="categoria" required>

                            <?php

                            if (isset($categoria)) {
                                if ($categoria == 1) {
                                    echo '<option value="1" id="1" selected="selected">Cadernos e Papelaria</option>';
                                    echo '<option value="2" id="2">Mochilas e Bolsas</option>';
                                    echo '<option value="3" id="3">Escritório, informática e eletrônicos</option>';
                                    echo '<option value="4" id="4">Escrita e corretivos</option>';
                                } else if ($categoria == 2) {
                                    echo '<option value="1" id="1">Cadernos e Papelaria</option>';
                                    echo '<option value="2" id="2" selected="selected">Mochilas e Bolsas</option>';
                                    echo '<option value="3" id="3">Escritório, informática e eletrônicos</option>';
                                    echo '<option value="4" id="4">Escrita e corretivos</option>';
                                } else if ($categoria == 3) {
                                    echo '<option value="1" id="1">Cadernos e Papelaria</option>';
                                    echo '<option value="2" id="2">Mochilas e Bolsas</option>';
                                    echo '<option value="3" id="3" selected="selected">Escritório, informática e eletrônicos</option>';
                                    echo '<option value="4" id="4">Escrita e corretivos</option>';
                                } else if ($categoria == 4) {
                                    echo '<option value="1" id="1">Cadernos e Papelaria</option>';
                                    echo '<option value="2" id="2">Mochilas e Bolsas</option>';
                                    echo '<option value="3" id="3">Escritório, informática e eletrônicos</option>';
                                    echo '<option value="4" id="4" selected="selected">Escrita e corretivos</option>';
                                }
                            } else {
                            ?>
                                <option selected disabled>categoria</option>
                                <option value="1">Cadernos e Papelaria</option>
                                <option value="2">Mochilas e Bolsas</option>
                                <option value="3">Escritório, informática e eletrônicos</option>
                                <option value="4">Escrita e corretivos</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="estoque">Quantidade do produto:</label>
                        <input type="text" class="form-control" name="estoque" id="estoque" value="<?php echo isset($estoque) ? $estoque : set_value('estoque') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="descricaoProduto">Descrição do produto:</label>
                        <textarea class="form-control" name="descricaoProduto" id="summernote" rows="5" required> <?php echo isset($descricaoProduto) ? $descricaoProduto : set_value('descricaoProduto') ?> </textarea>
                    </div>

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
        document.getElementById('blah').src =  URL.createObjectURL(event.files[0]);
     }
</script>