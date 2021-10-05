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
            <!-- <div class="col-12 col-md-3">
            <img src="<?php base_url() ?>public/images/engrenagem.jpg" alt="">
        </div> -->
            <!-- <div class="col-3 nav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promoções</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Vá para o site</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sair</a>
                </li>

            </ul>
        </div> -->
            <div class="col-12 col-md-6 table">
                <h2> <?php echo $titulo ?></h2>
                <a href="#">Novo</a>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><a href="#">Editar</a> / <a href="#">Excluir</a></td>
                        </tr>
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