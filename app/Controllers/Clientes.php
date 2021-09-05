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

            // $clienteModel = new \App\Models\ClienteModel();
            

            // $clienteModel->set('nome', $this->request->getPost('nome'));
            // $clienteModel->set('email', $this->request->getPost('email'));
            // $clienteModel->set('senha', $this->request->getPost('senha'));



            // if ($clienteModel->insert()) {
            //     $data['msg'] = 'Cadastro efetuado';
            //     return redirect()->to(base_url('login'));
            // } else {
            //     $data['msg'] = 'Cadastro não efetuado';
            // }

            $rules = [
                'nome' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email]',
                'senha' => 'required|min_length[8]|max_length[255]',
                'senha_confirmacao' => 'matches[senha]',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->rules;
            } else {
                $clienteModel = new \App\Models\UserModel();
                $newData = [
                    'nome' => $this->request->getVar('nome'),
                    'email' => $this->request->getVar('email'),
                    'senha' => $this->request->getVar('senha'),
                ];
                if ($clienteModel->save($newData)) {
                    $data['msg'] = 'Cadastro efetuado';
                    return redirect()->to(base_url());
                } else {
                    echo "Erro ao salvar";
                    exit;
                }
            }
        }



        echo view('templete/header', $data);
        echo view('cadastro');
        echo view('templete/footer');
    }
}
