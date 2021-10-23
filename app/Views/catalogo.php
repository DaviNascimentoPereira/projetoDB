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
</style>

<main id="t3-content" style="min-height: 70vh;">
    <div class="container" style="margin-left: 15%;">
        <div class="row justify-content-md-center">
    
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
