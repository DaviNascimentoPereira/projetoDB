<?php

namespace App\Controllers;

use App\Models\ClienteModel;
class Produtos extends BaseController
{
    public function index()
    {
        
            $data['title'] = "Kalango - Produtos";

        echo view('templete/header', $data);
        echo view('catalogo');
        echo view('templete/footer');
    }   

    public function cadastroProduto(){

       
        $data['title'] = "Kalango - Cadastro de Produtos";

        echo view('templete/header', $data);
        echo view('catalogo');
        echo view('templete/footer');
    }
}
