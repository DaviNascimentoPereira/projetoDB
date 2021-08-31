<?php

namespace App\Controllers;

class Home extends BaseController
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
}
