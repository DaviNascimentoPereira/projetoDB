<!DOCTYPE html>
<html lang="pt-br">
<style>
    .navbar {
        background: #E6E6FA !important;
        
    }
</style>

<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <link rel="icon" type="image/ico" href="<?php base_url('') ?>public/icon.ico" />
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <!-- folha de estilos interno -->
    <link rel="stylesheet" type="text/css" href="<?php base_url()?>assests/estilos.css">
    <!-- javascript interno -->
    <script type="text/javascript" src="<?php base_url('') ?>assests/javascript.js"></script>
</head>

<header id="t3-header">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-sm-12">
                <div class="site-anchor " style="margin-top: -5px;margin-bottom: 5px;">
                    <div class="custom">
                        <div id="anchorpt1" class="col-12 col-md-12">
                            <a accesskey="1" href="javascript:void(0);" class="anchor acess" title="conteudo" onclick="abrirConteudo()">
                                ir para conteudo <span>1</span>
                            </a>
                            <a accesskey="2" href="javascript:void(0);" class="anchor acess" title="menu" onclick="abrirMenu()">
                                ir para menu <span>2</span>
                            </a>
                            <a accesskey="3" href="javascript:void(0);" class="anchor acess" title="rodapé" onclick="abrirRodape()">
                                ir para rodapé <span>3</span>
                            </a>
                            <a accesskey="4" href="javascript:void(0);" class="anchor acess" title="contraste" onclick="contraste();" id="contrasteLink">
                                alto contraste <span>4</span>
                            </a>
                            <a accesskey="5" href="#" class="anchor acess " title="acessibilidade">
                                acessibilidade <span>5</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9 col-sm-9 header-utils">
                <div class="social-icons ">
                    <div vw class="enabled">
                        <div vw-access-button class="active"></div>
                        <div vw-plugin-wrapper>
                            <div class="vw-plugin-top-wrapper"></div>
                        </div>
                    </div>

                    <!-- Importação do leitor de tela -->
                    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
                    <script>
                        new window.VLibras.Widget('https://vlibras.gov.br/app');
                    </script>

                </div>
            </div>
        </div>
    </div>
</header>

<div id="topo" class="col-12 footer">

</div>
<nav class="navbar navbar-expand-lg navbar">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?php base_url('Painel/') ?>administracao">Produtos</a>
            <a class="nav-item nav-link" href="#">Promoções</a>
            <a class="nav-item nav-link" href="#">Usuários</a>
            <a class="nav-item nav-link" href="#">Ver Site</a>
            <a class="nav-item nav-link" href="#">Sair</a>
        </div>
    </div>
</nav>

</html>