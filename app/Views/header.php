<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kalango</title>
    <meta name="description" content="The small framework with powerful
      features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</head>

<style>
    a:link {
        text-decoration: none;
    }

    .navbar {
        background: #f47f04;
        border-color: #000 !important;

        /* background-image: linear-gradient(150deg, #98FB98 25%, #66cdaa 50%, #228B22 75% ,#006400 100%); */
    }

    .menuPrincipal {
        background: #000 !important;
    }

    .nav-link {
        color: #fff !important;
    }

    .nav-link2 {
        color: #000 !important;
    }
    .nav-link:link:hover {
        box-shadow: inset 0 0 1em #f47f04 !important;
    }

    .nav-link:link:active {
        box-shadow: inset 0 0 1em red !important;
    }

    .footer {
        bottom: 0;
        width: 100%;
        height: 60px;
        line-height: 60px;
        background: #f47f04;
        color: #000;
        text-align: center;
    }

    .corpo {
        background: #FFFFF0;
    }

    .carousel {
        width: 100% !important;
        height: 80% !important;
        padding: 10px;
    }

    .botao {
        color: #FFFFF0 !important;
        background-color: #000 !important;
        border-color: #000 !important;
    }

    img {
        width: 250px;
    }

    .buscar {
        color: #FFFFF0 !important;
        border-color: #000 !important;
        background: #000 !important;
    }

    .buscar:hover {
        box-shadow: inset 0 0 1em #f47f04;
    }

    .botao:hover {
        box-shadow: 0 0 1em #f47f04 !important;
    }
</style>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ST5941BK0S"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-ST5941BK0S');

    function abrirConteudo() {

        var urlAtual = document.location.href;
        if (urlAtual.includes("#")) {
            urlAtual = urlAtual.substr(0, urlAtual.indexOf('#')) + "#t3-content";
        } else {
            urlAtual = urlAtual + "#t3-content";
        }

        window.location.replace(urlAtual);

    }


    function abrirMenu() {

        var urlAtual = document.location.href;
        if (urlAtual.includes("#")) {
            urlAtual = urlAtual.substr(0, urlAtual.indexOf('#')) + "#menuanchor";
        } else {
            urlAtual = urlAtual + "#menuanchor";
        }

        window.location.replace(urlAtual);

    }


    function abrirRodape() {

        var urlAtual = document.location.href;
        if (urlAtual.includes("#")) {
            urlAtual = urlAtual.substr(0, urlAtual.indexOf('#')) + "#rodape";
        } else {
            urlAtual = urlAtual + "#rodape";
        }

        window.location.replace(urlAtual);

    }


    function contraste() {
        var body = document.getElementsByTagName('body');
        if (body[0].style.backgroundColor == "black") {
            window.location.reload(true);
        } else {

            for (var i = 0; i < body.length; i++) {
                body[i].style.backgroundColor = "black";
            }

            var divs = document.getElementsByTagName('div');
            for (var i = 0; i < divs.length; i++) {
                divs[i].style.backgroundColor = "black";
                divs[i].style.color = "yellow";
            }
            var navs = document.getElementsByTagName('nav');
            for (var i = 0; i < navs.length; i++) {
                navs[i].style.backgroundColor = "black";
                navs[i].style.color = "yellow";
            }
            var header = document.getElementsByTagName('header');
            for (var i = 0; i < header.length; i++) {
                header[i].style.backgroundColor = "black";
                header[i].style.color = "yellow";
            }
            var footer = document.getElementsByTagName('footer');
            for (var i = 0; i < footer.length; i++) {
                footer[i].style.backgroundColor = "black";
                footer[i].style.color = "yellow";
            }

            var as = document.getElementsByTagName('a');
            for (var i = 0; i < as.length; i++) {
                as[i].style.backgroundColor = "black";
                as[i].style.color = "yellow";
            }
            var ps = document.getElementsByTagName('p');
            for (var i = 0; i < ps.length; i++) {
                ps[i].style.backgroundColor = "black";
                ps[i].style.color = "yellow";
            }
            var ps = document.getElementsByTagName('h1');
            for (var i = 0; i < ps.length; i++) {
                ps[i].style.backgroundColor = "black";
                ps[i].style.color = "yellow";
            }
            var is = document.getElementsByTagName('i');
            for (var i = 0; i < is.length; i++) {
                is[i].style.color = "yellow";
            }
            var spans = document.getElementsByTagName('span');
            for (var i = 0; i < spans.length; i++) {
                spans[i].style.backgroundColor = "black";
                spans[i].style.color = "yellow";
            }
            var iframes = document.getElementsByTagName('iframe');
            for (var i = 0; i < iframes.length; i++) {
                iframes[i].style.backgroundColor = "white";
                iframes[i].style.color = "yellow";
            }
            var tables = document.getElementsByTagName('table');
            for (var i = 0; i < tables.length; i++) {
                tables[i].style.backgroundColor = "black";
                tables[i].style.color = "yellow";
            }
            var tbodys = document.getElementsByTagName('tbody');
            for (var i = 0; i < tbodys.length; i++) {
                tbodys[i].style.backgroundColor = "black";
                tbodys[i].style.color = "yellow";
            }
            var trs = document.getElementsByTagName('tr');
            for (var i = 0; i < trs.length; i++) {
                trs[i].style.backgroundColor = "black";
                trs[i].style.color = "yellow";
            }
            var tds = document.getElementsByTagName('td');
            for (var i = 0; i < tds.length; i++) {
                tds[i].style.backgroundColor = "black";
                tds[i].style.color = "yellow";
            }
            var button = document.getElementsByClassName('socialList_item');
            for (var i = 0; i < button.length; i++) {
                button[i].style.backgroundColor = "black";
                button[i].style.color = "yellow";
            }
            var button = document.getElementsByClassName('button');
            for (var i = 0; i < button.length; i++) {
                button[i].style.backgroundColor = "black";
                button[i].style.color = "yellow";
            }
        }
    }
</script>

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
                            <a accesskey="5" href="<?= base_url('acessibilidade'); ?>" class="anchor acess " title="acessibilidade">
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
                    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
                    <script>
                        new window.VLibras.Widget('https://vlibras.gov.br/app');
                    </script>
                </div>
            </div>
        </div>
    </div>
</header>

<body class="corpo">
    <div class="justify-content-md-center">
        <main style="min-height: 100vh;">
            <div class="col-12"></div>
            <nav class="navbar navbar-expand-lg" id="menuanchor">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="images/logo2.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link2" aria-current="page" href="#"><span>Cadastre-se ou Faça seu login</span></a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn botao" type="submit">Search</button>
                        </form>
                    </div>
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
                                <a class="nav-link" aria-current="page" href="#"><span>Arte, Desenho &
                                        Pintura</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span>Corte, Colagem &
                                        Maquetes</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span>Papéis & Blocos</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span>Pastas, Bolsas &
                                        Mochilas</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span>Corte, Colagem &
                                        Maquetes</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span>Escritório,
                                        Informática & Eletrônicos</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span>Escrita & Corretivos</span></a>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>