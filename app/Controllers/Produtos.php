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
                'nomeProduto' => $this->request->getPost('nomeProduto'),
                'precoProduto' => $this->request->getPost('precoProduto'),
                'categoria' => $this->request->getPost('categoria'),
                'descricaoProduto' => $this->request->getPost('descricaoProduto'),
                'imagem' => $uploadImagem,
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
        echo view('PainelAdm/cadProdutos', $data);
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

    public function editarProduto()
    {
        $data['title'] = "Kalango - Cadastro de Produtos";
        $data['titulo'] = "Cadastro de Produtos";

        helper(['form', 'url']);



        echo view('PainelAdm/templetePainel/header', $data);
        echo view('PainelAdm/cadProdutos', $data);
        echo view('PainelAdm/templetePainel/footer');
    }

    public function visualizarProduto($idProduto = null)
    {
        $uri = current_url(true);
        $idProduto = $uri->getSegment(3);
        $produtoModel = new \App\Models\ProdutosModel();
        // $data['dados'] = $produtoModel->pegarProdutos($id);

        $data = [
            'title' => 'Kalango',
            'titulo' => 'Produtos',
            'dados' => $produtoModel->pegarProdutos($idProduto),
        ];
        var_dump($data['dados'] = $produtoModel->pegarProdutos($idProduto));
        exit;

        echo view('templete/header', $data);
        // echo view('produto') ;
        echo view('templete/footer');
    }
}
