<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       
        echo view('header');
        echo view('conteudo');
        echo view('footer');
    }
}
