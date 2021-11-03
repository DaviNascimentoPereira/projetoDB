<?php

namespace App\Controllers;



class Promocao extends BaseController
{
	public function cadastroPromocao()
	{
		$promocaoModel = new \App\Models\PromocaoModel();
		$dados['title'] = "Kalango - Cadastro de Promoções";
		helper(['form', 'url']);
		if ($this->request->getMethod() == 'post') {
			if ($this->request->getFile('profile_image')->isValid()) {
				$uploadImagem = $this->upload_image($this->request->getFile('profile_image'));
				if ($uploadImagem) {
					$dados = [
						'idPromocao' => $this->request->getPost('idPromocao'),
						'nomePromocao' => $this->request->getPost('nomePromocao'),
					];
					$imagem = $uploadImagem;
					if ($imagem != null) {
						$dados['imagemPromocao'] = $imagem;
					}
					if ($promocaoModel->save($dados)) {
						$dados['msg'] = 'Produto cadastrado com sucesso!!!!';
						return redirect()->to(base_url('promocoes'));
					} else {
						$dados['msg'] = 'Produto não cadastrado';
						$dados['erros'] = $promocaoModel->errors();
					}
				}
			} else {
				$dados = [
					'idPromocao' => $this->request->getPost('idPromocao'),
					'nomePromocao' => $this->request->getPost('nomePromocao'),
				];
				if ($promocaoModel->save($dados)) {
					$dados['msg'] = 'Produto cadastrado com sucesso!!!!';
					return redirect()->to(base_url('promocoes'));
				} else {
					$dados['msg'] = 'Produto não cadastrado';
					$dados['erros'] = $promocaoModel->errors();
				}
			}
			$uploadImagem = $this->upload_image($this->request->getFile('profile_image'));
			$dados = [
				'idProduto' => $this->request->getPost('idPromocao'),
				'nomePromocao' => $this->request->getPost('nomePromocao'),
				'imagem' => $uploadImagem,
			];
			if ($promocaoModel->save($dados)) {
				$dados['msg'] = 'Produto cadastrado com sucesso!!!!';
				return redirect()->to(base_url('promocoes'));
			} else {
				$dados['msg'] = 'Produto não cadastrado';
				$dados['erros'] = $promocaoModel->errors();
			}
		}
		echo view('PainelAdm/templetePainel/header', $dados);
		echo view('PainelAdm/formPromocao');
		echo view('PainelAdm/templetePainel/footer');
	}
	public function upload_image($imagem)
	{
		$imageFile = $imagem;
		$nome = md5(uniqid()) . '_' . time() . '.jpg';
		if ($imageFile->move(WRITEPATH . '../public/images', $nome)) {
			return $nome;
		} else {
			return false;
		}
	}
	public function carregamento_image($imagem)
	{
		$imageFile = $imagem;
		$nome = md5(uniqid()) . '_' . time() . '.jpg';
		if ($imageFile->move(ROOTPATH . 'public/images/', $nome)) {
			return $nome;
		} else {
			return false;
		}
	}
	public function editarPromocao($idPromocao = null)
	{
		$promocaoModel = new \App\Models\PromocaoModel();
		$uri = current_url(true);
		$idPromocao = $uri->getSegment(4);
		$dados['dado'] = $promocaoModel->pegarPromocao($idPromocao);
		helper(['form', 'url']);
		$dados = [
			'title' => 'Edição de produtos',
			'idPromocao' => $dados['dado']['idPromocao'],
			'nomePromocao' => $dados['dado']['nomePromocao'],
			'imagemPromocao' => $dados['dado']['imagemPromocao'],
		];
		echo view('PainelAdm/templetePainel/header', $dados);
		echo view('PainelAdm/formPromocao');
		echo view('PainelAdm/templetePainel/footer');
	}
	public function deletePromocao($idPromocao = null)
	{
		$promocaoModel = new \App\Models\PromocaoModel();
		$uri = current_url(true);
		$idPromocao = $uri->getSegment(4);
		$data['dado'] = $promocaoModel->delete($idPromocao);
		$data = [
			'title' => 'Kalango - Administração',
			'titulo' => 'Painel de Manutenção - Promoção',
			'dados' => $promocaoModel->pegarPromocao(),
		];
		echo view('PainelAdm/templetePainel/header', $data);
		echo view('PainelAdm/painelPromocoes');
		echo view('PainelAdm/templetePainel/footer');
	}
	public function promocaoProdutos()
	{
		$promocaoModel = new \App\Models\PromocaoModel();
		$uri = current_url(true);
		$idPromocao = $uri->getSegment(4);
		$dados['data'] = $promocaoModel->pegarPromocao();
		$data = [
			'title' => 'Kalango - Administração',
			'titulo' => 'Painel de Manutenção - Promoções',
			'dados' => $promocaoModel->produtosForaPromocao($idPromocao),
			'emPromocao' => $promocaoModel->produtosPromocao($idPromocao),
			'idPromocao' => $promocaoModel->pegarPromocao($idPromocao),
		];
		$data['data'] = $promocaoModel->pegarPromocao();
		echo view('PainelAdm/templetePainel/header', $data);
		echo view('PainelAdm/tabProdutosPromo');
		echo view('PainelAdm/templetePainel/footer');
	}
	public function adicionarNaPromocao()
	{
		$promocaoModel = new \App\Models\PromocaoModel();
		$produtosModel = new \App\Models\ProdutosModel();

		helper(['form', 'url']);
		$dados = [
			'idProduto' => $this->request->getPost('idProduto'),
			'precoPromocao' => $this->request->getPost('precoPromocao'),
			'idPromocao' => $this->request->getPost('idPromocao'),
		];
		// var_dump($dados); exit;
		if ($produtosModel->save($dados)) {
			$dados['msg'] = 'Produto cadastrado com sucesso!!!!';
			return redirect()->to(base_url('promocoes'));
		} else {
			$dados['msg'] = 'Produto não cadastrado';
			$dados['erros'] = $promocaoModel->errors();
		}

		echo view('PainelAdm/templetePainel/header', $dados);
		echo view('PainelAdm/adicionarEmPromocao');
		echo view('PainelAdm/templetePainel/footer');
	}
	public function removePromocao($idProduto = null)
	{
		$produtoModel = new \App\Models\ProdutosModel();
		$promocaoModel = new \App\Models\PromocaoModel();
		
		$uri = current_url(true);
		$idProduto = $uri->getSegment(4);
		
	
		$dados = [
			'idProduto' => $idProduto,
			'promocao' =>  '0',
			'precoPromocao' =>  '0',
		];

		$data = [
			'title' => 'Kalango - Administração',
			'titulo' => 'Painel de Manutenção - Promoção',
			'dados' => $promocaoModel->pegarPromocao(),
		];

			//   var_dump($dados);exit;

		if ($produtoModel->save($dados)) {
			$dados['msg'] = 'Produto cadastrado com sucesso!!!!';
			return redirect()->to(base_url('promocoes'));
		} else {
			$dados['msg'] = 'Produto não cadastrado';
			$dados['erros'] = $produtoModel->errors();
		}
		// echo view('PainelAdm/templetePainel/header', $data);
		// echo view('PainelAdm/painelPromocoes');
		// echo view('PainelAdm/templetePainel/footer');
	}
	public function editarProdutoPromocao($idProduto = null)
	{
		$produtoModel = new \App\Models\ProdutosModel();
		$promocaoModel = new \App\Models\PromocaoModel();

		$uri = current_url(true);
		$idProduto = $uri->getSegment(4);
		$dados['dado'] = $produtoModel->pegarProdutos($idProduto);

		helper(['form', 'url']);

		$dados = [
			'title' => 'Adicionando produto na promoção',
			'idProduto' => $dados['dado']['idProduto'],
			'nomeProduto' => $dados['dado']['nomeProduto'],
			'precoProduto' => $dados['dado']['precoProduto'],
			'precoPromocao' => $dados['dado']['precoPromocao'],
			'idPromocao' => $dados['dado']['idPromocao'],
			'promocoes' => $promocaoModel->pegarPromocao(),

		];
		// var_dump($dados);exit;
		echo view('PainelAdm/templetePainel/header', $dados);
		echo view('PainelAdm/adicionarEmPromocao');
		echo view('PainelAdm/templetePainel/footer');
	}
}
