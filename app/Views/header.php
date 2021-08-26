<style>
    a:link {
        text-decoration: none;
    }
    
    a:hover {
        color: tomato;
    }
    
    .navbar {
        background: #FAFAD2;
        /* background-image: linear-gradient(150deg, #98FB98 25%, #66cdaa 50%, #228B22 75% ,#006400 100%); */
    }
    
    .footer {
        bottom: 0;
        width: 100%;
        height: 60px;
        line-height: 60px;
        background: #FAFAD2;
        color: #000;
        text-align: center;
    }
    
    .menu2 {
        width: 100%;
        height: 50px;
        background: #ffa0;
    }
    
    .corpo {
        background: #FFFFF0;
    }
    
    .carousel {
        width: 100% !important;
        height: 500px !important;
    }
    
    .btn-primary {
        color: #000 !important;
        background-color: #f7b600 !important;
        border-color: #bd5849 !important;
    }
    
    .img {
        width: 100% !important;
        height: 500px !important;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kalango</title>
    <meta name="description" content="The small framework with powerful
      features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</head>

<body class="corpo">
    <main style="min-height: 100vh;">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="images\logo.jpg" alt="" width="200px" height="50px">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icn"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Faça login ou cadastre-se</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="btn-group menu2" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary botao">Arte, Desenho &
          Pintura</button>
            <button type="button" class="btn btn-primary botao">Cadernos, Agendas &
          Anotações</button>
            <button type="button" class="btn btn-primary botao">Corte, Colagem &
          Maquetes</button>
            <button type="button" class="btn btn-primary botao">Escrita & Corretivos</button>
            <button type="button" class="btn btn-primary botao">Escritório,
          Informática & Eletrônicos</button>
            <button type="button" class="btn btn-primary botao">Papéis & Blocos</button>
            <button type="button" class="btn btn-primary botao">Pastas, Bolsas &
          Mochilas</button>
        </div>