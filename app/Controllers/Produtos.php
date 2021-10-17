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

    public function cadastroProduto()
    {
        $data['title'] = "Kalango - Cadastro de Produtos";
        $data['titulo'] = "Cadastro de Produtos";

        helper(['form', 'url']);
        if ($this->request->getMethod() == 'post') {
            $produtoModel = new \App\Models\ProdutosModel();
            $uploadImagem = $this->upload_image($this->request->getFile('profile_image'));
            $dados = [
                'idProduto' => $this->request->getPost('idProduto'),
                'nomeProduto' => $this->request->getPost('nomeProduto'),
                'precoProduto' => $this->request->getPost('precoProduto'),
                'categoria' => $this->request->getPost('categoria'),
                'descricaoProduto' => $this->request->getPost('descricaoProduto'),
                'imagem' => $uploadImagem,
                'estoque' => $this->request->getPost('estoque'),
            ];


            if ($produtoModel->save($dados)) {
                $data['msg'] = 'Produto cadastrado com sucesso!!!!';
                return redirect()->to(base_url('administracao'));
            } else {
                $data['msg'] = 'Produto não cadastrado';
                $data['erros'] = $produtoModel->errors();
            }
        }
        echo view('PainelAdm/templetePainel/header', $data);
        echo view('PainelAdm/formProdutos');
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

    public function editarProduto($idProduto = null)
    {
        $produtoModel = new \App\Models\ProdutosModel();
        $uri = current_url(true);
        $idProduto = $uri->getSegment(4);
        $dados['dado'] = $produtoModel->pegarProdutos($idProduto);

        helper(['form', 'url']);

         
        $dados = [
            'title' => 'Edição de produtos',
            'idProduto' => $dados['dado']['idProduto'],
            'nomeProduto' => $dados['dado']['nomeProduto'],
            'precoProduto' => $dados['dado']['precoProduto'],
            'categoria' => $dados['dado']['categoria'],
            'estoque' => $dados['dado']['estoque'],
            'descricaoProduto' => $dados['dado']['descricaoProduto'],
            'imagem' => $dados['dado']['imagem'],
        ];

        // var_dump($dados);exit;

        echo view('PainelAdm/templetePainel/header', $dados);
        echo view('PainelAdm/formProdutos');
        echo view('PainelAdm/templetePainel/footer');
    }

    public function deleteProduto($idProduto = null){
        $produtoModel = new \App\Models\ProdutosModel();
        $uri = current_url(true);
        $idProduto = $uri->getSegment(4);
        
        $data['dado'] = $produtoModel->delete($idProduto);

        $data = [
			'title' => 'Kalango - Administração',
			'titulo' => 'Painel de Manutenção - Produtos',
			'dados' => $produtoModel->pegarProdutos(),
		];
       
        echo view('PainelAdm/templetePainel/header', $data);
		echo view('PainelAdm/painel');
		echo view('PainelAdm/templetePainel/footer');
    }
    public function visualizarProduto($idProduto = null)
    { 
        $produtoModel = new \App\Models\ProdutosModel();
         $uri = current_url(true);
         $idProduto = $uri->getSegment(4);
        

        $data = [
            'title' => 'Kalango',
            'titulo' => 'Produtos',
            'dados' => $produtoModel->pegarProdutos($idProduto),
        ];
        
      
        echo view('templete/header', $data);
        echo view('produto') ;
        echo view('templete/footer');
    }
}
