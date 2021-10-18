

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

                        <?php
                          var_dump($nomeProduto);exit;
                              if ($categoria == 1) {
                                echo '<option value="1" id="1" selected="selected">Categoria 1</option>';
                                echo '<option value="2" id="2">Categoria 2</option>';
                                echo '<option value="3" id="3">Categoria 3</option>';
                                echo '<option value="4" id="4">Categoria 4</option>';
                                echo '<option value="5" id="5">Categoria 5</option>';
                            }  else if ($categoria == 2) {
                                echo '<option value="1" id="1">Categoria 1</option>';
                                echo '<option value="2" id="2" selected="selected">Categoria 2</option>';
                                echo '<option value="3" id="3">Categoria 3</option>';
                                echo '<option value="4" id="4">Categoria 4</option>';
                                echo '<option value="5" id="5">Categoria 5</option>';
                                echo '<option value="6" id="6">Categoria 6</option>';
                                echo '<option value="7" id="7">Categoria 7</option>';
                            }  else if ($categoria == 3) {
                                echo '<option value="1" id="1">Categoria 1</option>';
                                echo '<option value="2" id="2">Categoria 2</option>';
                                echo '<option value="3" id="3" selected="selected">Categoria 3</option>';
                                echo '<option value="4" id="4">Categoria 4</option>';
                                echo '<option value="5" id="5">Categoria 5</option>';
                                echo '<option value="6" id="6">Categoria 6</option>';
                                echo '<option value="7" id="7">Categoria 7</option>';
                            }  else if ($categoria == 4) {
                                echo '<option value="1" id="1">Categoria 1</option>';
                                echo '<option value="2" id="2">Categoria 2</option>';
                                echo '<option value="3" id="3">Categoria 3</option>';
                                echo '<option value="4" id="4" selected="selected">Categoria 4</option>';
                                echo '<option value="5" id="5">Categoria 5</option>';
                                echo '<option value="6" id="6">Categoria 6</option>';
                                echo '<option value="7" id="7">Categoria 7</option>';
                            }  else if ($categoria == 5) {
                                echo '<option value="1" id="1">Categoria 1</option>';
                                echo '<option value="2" id="2">Categoria 2</option>';
                                echo '<option value="3" id="3">Categoria 3</option>';
                                echo '<option value="4" id="4">Categoria 4</option>';
                                echo '<option value="5" id="5" selected="selected">Categoria 5</option>';
                                echo '<option value="6" id="6">Categoria 6</option>';
                                echo '<option value="7" id="7">Categoria 7</option>';
                            }  else if ($categoria == 6) {
                                echo '<option value="1" id="1">Categoria 1</option>';
                                echo '<option value="2" id="2">Categoria 2</option>';
                                echo '<option value="3" id="3">Categoria 3</option>';
                                echo '<option value="4" id="4">Categoria 4</option>';
                                echo '<option value="5" id="5">Categoria 5</option>';
                                echo '<option value="4" id="4" selected="selected">Categoria 6</option>';
                                echo '<option value="5" id="5">Categoria 7</option>';
                            }  else if ($categoria == 7) {
                                echo '<option value="1" id="1">Categoria 1</option>';
                                echo '<option value="2" id="2">Categoria 2</option>';
                                echo '<option value="3" id="3">Categoria 3</option>';
                                echo '<option value="4" id="4">Categoria 4</option>';
                                echo '<option value="5" id="5">Categoria 5</option>';
                                echo '<option value="6" id="6">Categoria 6</option>';
                                echo '<option value="7" id="7" selected="selected">Categoria 7</option>';
                            }  

                            
                          
                        ?>



                            <!-- <option selected disabled>categoria</option>
                            <option value="1">Categoria 1</option>
                            <option value="2">Categoria 2</option>
                            <option value="3">Categoria 3</option>
                            <option value="4">Categoria 4</option>
                            <option value="5">Categoria 5</option>
                            <option value="6">Categoria 6</option>
                            <option value="7">Categoria 7</option> -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="estoque">Quantidade do produto:</label>
                        <input type="text" class="form-control" name="estoque" id="estoque" value="<?php echo isset($estoque) ? $estoque : set_value('estoque') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="descricaoProduto">Descrição do produto:</label>
                        <textarea class="form-control" name="descricaoProduto" id="summernote" rows="5"  required> <?php echo isset($descricaoProduto) ? $descricaoProduto : set_value('descricaoProduto') ?> </textarea>
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label for="file"></label>
                            <input class="form-control" onchange="readURL(this);" type="file" name="profile_image" id="file" accept="image/*" readonly="true" value="<?php echo isset($imagem) ? $imagem : set_value('imagem') ?>" required autofocus>
                            <img id="blah" type="file" alt="imagem" src="<?php echo isset($imagem) ? base_url("public/images") . "/" . $imagem : '' ?>" />
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