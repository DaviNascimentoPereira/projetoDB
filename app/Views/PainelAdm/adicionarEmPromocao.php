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

                <form class="form-signin" action="<?php echo base_url('Promocao/adicionarNaPromocao') ?>" id="file" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="precoProduto">Preço do produto:</label>
                        <input type="text" class="form-control" name="precoProduto" id="precoProduto" value="<?php echo isset($precoProduto) ? $precoProduto : set_value('precoProduto') ?>" >
                    </div>
                    <div class="form-group">
                        <label for="precoPromocao">Novo preço para o produto:</label>
                        <input type="text" class="form-control" name="precoPromocao" id="precoPromocao" value="<?php echo isset($precoPromocao) ? $precoPromocao : set_value('precoPromocao') ?>" require>
                    </div>

                    <div class="form-group">
                        <label for="promocao">Preço do produto:</label>
                        <input type="text" class="form-control" name="promocao" id="promocao" value="<?php echo isset($promocao) ? $promocao : set_value('promocao') ?>" >
                    </div>

                    <?php // var_dump($data)
                    ?>
                    <!-- <div class="form-group">
                        <label for="categoria">Inserir na promoção: </label> -->
                        <!-- <select class="form-control" name="categoria" id="categoria"> -->
                            <?php
                           // echo '<option selected value="'. 0 .'">Remover da promoção</option>';
                            // foreach ($data as $key => $promocaoDisponivel) {
                            // echo ' <option value="'.$promocaoDisponivel['idPromocao'].'">'.$promocaoDisponivel['idPromocao'].' - '.$promocaoDisponivel['nomePromocao'].'</option>';
                            // }
                            ?>


                            <!-- <option >Mochilas e Bolsas</option>
                                <option value="3">Escritório, informática e eletrônicos</option>
                                <option value="4">Escrita e corretivos</option> -->

                        <!-- </select> -->
                    <!-- </div> -->

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