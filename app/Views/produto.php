<main id="t3-content" style="min-height: 70vh;">
    <br>
    <?php // var_dump($dados);  
    ?>
    <div class="row container justify-content-md-center">

        <div class="col-6 col-md-6"><img src="<?php echo base_url('public/images/' . $dados['imagem']) ?>" style="height: 100%;" class="d-block w-100 img" alt="..."></div>
        <div class="col-6 col-md-6">
            <h2> <?php echo $dados['nomeProduto'] ?></h2>
            <p>Descrição: <?php echo $dados['descricaoProduto'] ?></p>
            <p>Preço: <?php echo $dados['precoProduto'] ?></p>
            <p>Quantidade: <?php echo $dados['estoque'] ?></p>
            <button type="submit" class="btn btn-primary">Comprar</button>
        </div>
    </div>
</main>