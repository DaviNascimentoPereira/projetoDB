<main id="t3-content" style="min-height: 85vh; background-image: url(img/fundo.jpg) !important;">
    <style>
        #blah {
            margin-top: 15px !important;
            width: 100% !important;
        }
    </style>
    <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-6 table">
                <h2> <?php echo isset($idProduto) ? "Inserindo produto na promoção" : "Cadastrando Produto"; ?></h2>
                <?php echo \Config\Services::validation()->listErrors(); ?>
                <?php //var_dump($promocoes) ?>
                <form class="form-signin" action="<?php echo base_url('Promocao/adicionarNaPromocao') ?>" id="file" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nomeProduto">Nome do produto:</label>
                        <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" value="<?php echo isset($nomeProduto) ? $nomeProduto : set_value('nomeProduto') ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="precoProduto">Preço do produto:</label>
                        <input type="text" class="form-control" name="precoProduto" id="precoProduto" value="<?php echo isset($precoProduto) ? $precoProduto : set_value('precoProduto') ?> " disabled>
                    </div>
                    <div class="form-group">
                        <label for="precoPromocao">Novo preço para o produto:</label>
                        <input type="text" class="form-control" name="precoPromocao" id="precoPromocao" value="<?php echo isset($precoPromocao) ? $precoPromocao : set_value('precoPromocao') ?>" require>
                    </div>
                    <div class="form-group">
                        <label for="promocao">Inserir na promoção: </label>
                        <select class="form-control" name="promocao" id="promocao" require>
                        <option selected disabled>Selecione um status para o produto</option>
                            <?php
                            echo '<option value="' . 0 . '">Remover da promoção</option>';
                            foreach ($promocoes as $key => $promocaoDisponivel) {
                                echo 'hey';
                                echo ' <option  value="' . $promocaoDisponivel['idPromocao'] . '">' . $promocaoDisponivel['idPromocao'] . ' - ' . $promocaoDisponivel['nomePromocao'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <input type="hidden" name="idProduto" value="<?php echo isset($idProduto) ? $idProduto : set_value('idProduto') ?>">
                    <button type="submit" class="btn btn-primary" style="margin: 10px;">Salvar</button>
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