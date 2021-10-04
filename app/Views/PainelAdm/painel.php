<main id="t3-content" style="min-height: 85vh; background-image: url(img/fundo.jpg) !important;">
    <style>
        table {
            margin: 0px;
            padding: 0px;
            align-items: center !important;
        }

        .nav-link{
            color: black !important;
            
        }
    </style>
    <br>
    <div class="row">
        <!-- <div class="col-12 col-md-3">
            <img src="<?php base_url() ?>public/images/engrenagem.jpg" alt="">
        </div> -->
        <div class="col-3">
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
        </div>
        <div class="col-12 col-md-6">
            <h2> <?php echo $titulo ?></h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID produto</th>
                        <th scope="col">Nome do produto</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php $msg = session()->getFlashData('msg') ?>
        <?php if (!empty($msg)) { ?>
            <div class="col-12 col-md-3 alert alert-danger">
                <?php echo $msg ?>
            <?php } ?>
            </div>
    </div>
</main>