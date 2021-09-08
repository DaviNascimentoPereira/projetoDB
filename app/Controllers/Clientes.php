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
        $data['erros'] = '';
        helper(['form', 'url']);

        if ($this->request->getMethod() == 'post') {

            $clienteModel = new \App\Models\ClienteModel();

            $dados = [
                'nome' => $this->request->getPost('nome'),
                'email' => $this->request->getPost('email'),
                'senha' => $this->request->getPost('senha'),
                'senha_confirmacao' => $this->request->getPost('senha_confirmacao'),
            ];
            // var_dump($dados);exit;
            
            if ($clienteModel->save($dados)) {
                $data['msg'] = 'Cadastro efetuado';
               return redirect()->to(base_url('cadastro'));
            } else {
                $data['msg'] = 'Cadastro não efetuado';
                $data['erros'] = $clienteModel->errors();
            }
        }



        echo view('templete/header', $data);
        echo view('cadastro');
        echo view('templete/footer');
    }
}
