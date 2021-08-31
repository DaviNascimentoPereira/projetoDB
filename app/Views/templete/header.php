<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Kalango</title>
    <link rel="icon" type="image/ico" href="icon.ico" />
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <!-- folha de estilos interno -->
    <link rel="stylesheet" type="text/css" href="<?php base_url() ?>assests/estilos.css">
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

<nav class="navbar navbar-expand-lg" id="menuanchor">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php base_url('') ?>inicio"><img src="<?php echo base_url() ?>/public/images/logo2.png" alt=""></a>

        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn botao" type="submit">Buscar</button>
        </form>

    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-light menuPrincipal">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php base_url() ?>catalogo"><span>Arte, Desenho &
                            Pintura</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url() ?>catalogo"><span>Corte, Colagem &
                            Maquetes</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url() ?>catalogo"><span>Papéis & Blocos</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url() ?>catalogo"><span>Pastas, Bolsas &
                            Mochilas</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url() ?>catalogo"><span>Corte, Colagem &
                            Maquetes</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url() ?>catalogo"><span>Escritório,
                            Informática & Eletrônicos</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url() ?>catalogo"><span>Escrita & Corretivos</span></a>
                </li>

            </ul>

        </div>
    </div>
</nav>