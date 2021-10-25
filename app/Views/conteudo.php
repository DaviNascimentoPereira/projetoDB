<style>
  .card {
    padding: 0px;
    margin: 5px;
    width: 18rem;
    height: 400px;
  }

  .cardImg {
    width: 100%;
    height: 200px;
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
    <div class="carousel-inner" style="height: 400px;">
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
  <div class="container" style="margin-left: 15%;">
  
    <div class="row">
    <?php 
      if($dados == null){
        echo '<p><h2>Nenhum produdo encontrado...</h2></p>';
      }
    ?>
    <?php foreach ($dados as $key => $dado) {
        $preco = str_replace(".", ",", $dado['precoProduto']);
        $htm = '       <div class="card">';
        $htm .= '           <div><img class="cardImg" src="'.base_url('public/images/'.$dado['imagem']).'" class="card-img-top" alt="..."></div>';
        $htm .= '           <div class="card-body">';
        $htm .= '               <h5 class="card-title">' . $dado['nomeProduto'] . '</h5>';
        $htm .= '               <p class="card-text">Preço: R$ ' . $preco . '</p>';
        $htm .= '               <p class="card-text"> Quantidade: ' . $dado['estoque'] . '</p>';
        $htm .= '           </div>';
        $htm .= '           <a href="'.base_url('produto/'.$dado['idProduto']).'" class="btn btn-primary">Ver produto</a>';
        $htm .= '           </div>';
        echo $htm;
      }
      ?>
    </div>
  </div>
</main>