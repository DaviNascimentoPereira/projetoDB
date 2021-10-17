<style>
  .card {
    padding: 0px;
    margin: 5px;
    width: 18rem;
  }

  .carousel {
    padding: 0px;
    margin: 0px;
  }
</style>
<main id="t3-content" style="min-height: 70vh;">
  <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('public/images/tambPrincipal1.jpg') ?>" class="d-block w-100 img" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('public/images/tambPrincipal2.jpg') ?>" class="d-block w-100 img" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('public/images/tambPrincipal3.jpg') ?>" class="d-block w-100 img" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container" style="margin-left: 90px;">
    <div class="row justify-content-md-center">
      <?php foreach ($dados as $key => $dado) {

          $htm = '       <div class="card" style="width: 18rem;">';
          $htm .= '           <img src="public/images/' . $dado['imagem'] . '" class="card-img-top" alt="...">';
          $htm .= '           <div class="card-body">';
          $htm .= '               <h5 class="card-title">' . $dado['nomeProduto'] . '</h5>';
          $htm .= '               <p class="card-text">' . $dado['descricaoProduto'] . '</p>';
          $htm .= '               <p class="card-text">Preço: ' . $dado['precoProduto'] . '</p>';
          $htm .= '               <p class="card-text"> Quantidade: ' . $dado['estoque'] . '</p>';
          $htm .= '               <a href="produto/' . $dado['idProduto'] . '" class="btn btn-primary">Ver produto</a>';
          $htm .= '           </div> 
                        </div>
                    ';
          echo $htm;
      }
      ?>
    </div>
  </div>
</main>