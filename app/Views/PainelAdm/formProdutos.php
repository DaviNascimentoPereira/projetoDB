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
    </style>
    <br>
    <div class="container">
        <div class="row justify-content-md-center">

     
            <div class="col-6">
                <h2> <?php echo isset($idProduto) ? "Editando Produto" : "Cadastrando Produto"; ?></h2>
                <?php echo \Config\Services::validation()->listErrors(); ?>

                <form class="form-signin" action="<?php echo base_url('Produtos/cadastroProduto') ?>" method="post" id="file" method="post" enctype="multipart/form-data">
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
                            <option selected disabled>categoria</option>
                            <option value="1">Categoria 1</option>
                            <option value="2">Categoria 2</option>
                            <option value="3">Categoria 3</option>
                            <option value="4">Categoria 4</option>
                            <option value="5">Categoria 5</option>
                            <option value="6">Categoria 6</option>
                            <option value="7">Categoria 7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="estoque">Quantidade do produto:</label>
                        <input type="text" class="form-control" name="estoque" id="estoque" value="<?php echo isset($estoque) ? $estoque : set_value('estoque') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="descricaoProduto">Descrição do produto:</label>
                        <textarea class="form-control" name="descricaoProduto" id="descricaoProduto" rows="3"  required> <?php echo isset($descricaoProduto) ? $descricaoProduto : set_value('descricaoProduto') ?> </textarea>
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label for="file"></label>
                            <input class="form-control" onchange="readURL(this);" type="file" name="profile_image" id="file" accept="image/*" readonly="true" required autofocus>
                        </div>
                    </div>
                    <input type="hidden" name="idProduto" value="<?php echo isset($idProduto) ? $idProduto : set_value('idProduto') ?>">
                    <button type="submit"  class="btn btn-primary">Salvar</button>
                </form>
            </div>


        </div>
    </div>
</main>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>