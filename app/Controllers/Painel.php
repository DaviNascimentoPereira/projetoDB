<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use App\Models\ProdutosModel;

class Painel extends BaseController
{
	public function index()
	{
		$produtoModel = new \App\Models\ProdutosModel();


		$data = [
			'title' => 'Kalango - Administração',
			'titulo' => 'Painel de Manutenção - Produtos',
			'dados' => $produtoModel->pegarProdutos(),
		];

		echo view('PainelAdm/templetePainel/header', $data);
		echo view('PainelAdm/painelProdutos');
		echo view('PainelAdm/templetePainel/footer');
	}

	public function painelPromocoes()
	{
		$promocaoModel = new \App\Models\PromocaoModel();

		// echo 'hey';exit;
		$data = [
			'title' => 'Kalango - Administração',
			'titulo' => 'Painel de Manutenção - Promoções',
			'dados' => $promocaoModel->pegarPromocao(),
		];

		echo view('PainelAdm/templetePainel/header', $data);
		echo view('PainelAdm/painelPromocoes');
		echo view('PainelAdm/templetePainel/footer');
	}

	//--------------------------------------------------------------------

}
