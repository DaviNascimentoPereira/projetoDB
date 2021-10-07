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
            <div class="col-12 col-md-6 table">
                <h2> <?php echo $titulo ?></h2>
                <a href="<?php base_url('Painel/') ?>cadastroProdutos">Novo</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID produto</th>
                            <th scope="col">Nome do produto</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Acão</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dados as $key => $dado) {  
                        $htm = '<tr>';
                        $htm .= '<td>'.$dado['idProduto'].'</td>'; 
                        $htm .= '<td>'.$dado['nomeProduto'].'</td>';
                        $htm .= '<td>'.$dado['categoria'].'</td>'; 
                        $htm .= '<td>'.$dado['precoProduto'].'</td>'; 
                        $htm .= '<td><a href="#">Editar</a> / <a href="#">Excluir</a></td>';
                        $htm .= '</tr>';

                        echo $htm;
                         } 
                         
                          ?>
                        
                        
                        <!-- <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><a href="#">Editar</a> / <a href="#">Excluir</a></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
        <?php $msg = session()->getFlashData('msg') ?>
        <?php if (!empty($msg)) { ?>
            <div class="col-12 col-md-3 alert alert-danger">
                <?php echo $msg ?>
            <?php } ?>
            </div>
    </div>
</main>