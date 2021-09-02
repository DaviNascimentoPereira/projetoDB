<?php

namespace App\Controllers;



class Clientes extends BaseController
{
    public function index()
    {

        $data['title'] = "Kalango - Login";
        $data['titulo'] = "Faça seu login";

        echo view('templete/header', $data);
        echo view('login');
        echo view('templete/footer');
    }

    public function cadastroUsuario()
    {

        $data['title'] = "Kalango - Cadastro";
        $data['titulo'] = "Cadastro de Usuario";

        helper(['form', 'url']);

        if ($this->request->getMethod() == 'post') {

            $clienteModel = new \App\Models\ClienteModel();
            $clienteModel = new \App\Models\ClienteModel();

            $clienteModel->set('nome', $this->request->getPost('nome'));
            $clienteModel->set('email', $this->request->getPost('email'));
            $clienteModel->set('senha', $this->request->getPost('senha'));



            if ($clienteModel->insert()) {
                $data['msg'] = 'Cadastro efetuado';
                return redirect()->to(base_url('login'));
            } else {
                $data['msg'] = 'Cadastro não efetuado';
            }
        }





        echo view('templete/header', $data);
        echo view('cadastro');
        echo view('templete/footer');
    }
}
