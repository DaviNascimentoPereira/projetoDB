<style>
    img{
        width: 20px;
    }
</style>
<main id="t3-content" style="min-height: 85vh;">
    <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-6 table">
               
              
                    <h2>Produtos referente a promoção: <?php echo $idPromocao['nomePromocao'] ?></h2>
                  
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID produto</th>
                                <th scope="col">Nome do produto</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Preço de Promoção</th>
                                <th scope="col">Estoque</th>
                                <th scope="col">Acão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($emPromocao as $key => $emPromocao) {
                                $htm = '<tr>';
                                $htm .= '<td>' . $emPromocao['idProduto'] . '</td>';
                                $htm .= '<td>' . $emPromocao['nomeProduto'] . '</td>';
                                $htm .= '<td>' . $emPromocao['categoria'] . '</td>';
                                $htm .= '<td>' . $emPromocao['precoPromocao'] . '</td>';
                                $htm .= '<td>' . $emPromocao['estoque'] . '</td>';
                                $htm .= '<td><a href="' . base_url('editarProdutoPromocao/' . $emPromocao['idProduto']) . '"><img src="'. base_url('/public/images/adicionar.png').'" alt=""></a> / <a href="' . base_url('removeProduto/' . $emPromocao['idProduto']) . '" onclick="return confirma()"> <img src="'. base_url('/public/images/remover.png').'" alt=""> </a></td>';
                                $htm .= '</tr>';

                                echo $htm;
                            }

                            ?>
                        </tbody>
                    </table>

                    <h2>Adicionar produtos</h2>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID produto</th>
                                <th scope="col">Nome do produto</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Estoque</th>
                                <th scope="col">Acão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dados as $key => $dado) {
                                $htm = '<tr>';
                                $htm .= '<td>' . $dado['idProduto'] . '</td>';
                                $htm .= '<td>' . $dado['nomeProduto'] . '</td>';
                                $htm .= '<td>' . $dado['categoria'] . '</td>';
                                $htm .= '<td>' . $dado['precoProduto'] . '</td>';
                                $htm .= '<td>' . $dado['estoque'] . '</td>';
                                $htm .= '<td><a href="' . base_url('editarProdutoPromocao/' . $dado['idProduto']) . '"><img src="'. base_url('/public/images/adicionar.png').'" alt=""></a></td>';
                                $htm .= '</tr>';

                                echo $htm;
                            }

                            ?>
                        </tbody>
                    </table>
            </div>
            
        </div>

    </div>
</main>
<script>
    function confirma() {
        if (!confirm("Deseja excluir?")) {
            return false;
        }
        return true;
    }
</script>