<?php

namespace App\Controllers;

use App\Models\ClienteModel;
class Inicio extends BaseController
{
    public function index()
    {

        echo view('templete/header');
        echo view('conteudo');
        echo view('templete/footer');
    }

    public function catalogo()
    {
        
        echo view('templete/header');
        echo view('catalogo');
        echo view('templete/footer');
    }

    public function login(){

        echo view('templete/header');
        echo view('login');
        echo view('templete/footer');
    }

    public function cadastro(){

        helper(['form', 'url']);

        $model = new ClienteModel();


        echo view('templete/header');
        echo view('cadastro');
        echo view('templete/footer');
    }
}
