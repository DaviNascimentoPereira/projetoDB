<?php

namespace App\Controllers;

use App\Models\ClienteModel;
class Inicio extends BaseController{
    public function index(){

        $data['title'] = "Kalango";
        
        $produtoModel = new \App\Models\ProdutosModel();

        $data = [
			'title' => 'Kalango - Administração',
			'dados' => $produtoModel->findAll(),
		];

        echo view('templete/header', $data);
        echo view('conteudo');
        echo view('templete/footer');
    }

    public function catalogo(){
        
        
        $data['title'] = "Kalango - Produtos";

        echo view('templete/header', $data);
        echo view('catalogo');
        echo view('templete/footer');
    }  
}
