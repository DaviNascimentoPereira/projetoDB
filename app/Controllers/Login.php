<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Login extends BaseController
{
	public function index()
	{

		$data['title'] = "Kalango - Login";
		$data['titulo'] = "Faça seu login";

		echo view('templete/header', $data);
		echo view('pageLogin');
		echo view('templete/footer');
	}

	public function loginSistema()
	{

		$email = $this->request->getPost('email');
		$senha = $this->request->getPost('senha');

		$usuarioModel = new ClienteModel();
		$dadosUsuario = $usuarioModel->verificaEmail($email);

		// var_dump($email);
		// var_dump($senha);
		// var_dump($dadosUsuario);

		if (count($dadosUsuario) > 0) {
			$hashUsuario = $dadosUsuario['senha'];
			// var_dump($dadosUsuario['senha']);
			// var_dump($hashUsuario);
			// var_dump($dadosUsuario['senha']==$hashUsuario);exit;
			// if (password_verify($senha, $hashUsuario)) {,

			if ($dadosUsuario['senha'] == $hashUsuario) {
				session()->set('isLoggedIn', true);
				session()->set('nome', $dadosUsuario['nome']);
				session()->setFlashData('msg', 'Login efetuado com sucesso!!!');
				return redirect()->to(base_url('inicio'));

			} else {
				session()->setFlashData('msg', 'Usuario ou senha não encontrados erro 02');
				return redirect()->to(base_url('login'));
			}
		} else {
			session()->setFlashData('msg', 'Usuario ou senha não encontrados erro 01');
			return redirect()->to(base_url('login'));
		}
	}
}
