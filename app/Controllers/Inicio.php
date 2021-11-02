<?php

namespace App\Controllers;

use App\Models\ClienteModel;
class Inicio extends BaseController{
    
    public function index(){

        $data['title'] = "Kalango";
        
        $produtoModel = new \App\Models\ProdutosModel();
        $promocaoModel = new \App\Models\PromocaoModel();

        $data = [
			'title' => 'Kalango - Home',
			'dadosProdutos' => $produtoModel->findAll(),
            'dadosPromocao' => $promocaoModel->findAll(),
		];
        // var_dump($data['dadosPromocao']);exit;
        echo view('templete/header', $data);
        echo view('conteudo');
        echo view('templete/footer');
    }

    public function catalogoProdutos()
    {
        helper(['form', 'url']);
        
        $produtoModel = new \App\Models\ProdutosModel();

        $uri = current_url(true);
        $categoria = $uri->getSegment(4);

        
        $data['title'] = "Kalango - Produtos";
        $data['dados'] = $produtoModel->pegarCategoria($categoria);
       
        // var_dump($data['dados']);exit;
        
        echo view('templete/header', $data);
        echo view('catalogo');
        echo view('templete/footer');
    }

    public function visualizarProduto()
    { 
        $produtoModel = new \App\Models\ProdutosModel();
        
        $data = [
            'title' => 'Kalango',
            'titulo' => 'Produtos',
            'dados' => $produtoModel->pegarProdutos(),
        ];
      
        echo view('templete/header', $data);
        echo view('produto') ;
        echo view('templete/footer');
    }
}
