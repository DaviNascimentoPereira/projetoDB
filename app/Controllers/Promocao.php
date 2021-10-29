<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use App\Models\ProdutosModel;

class Promocao extends BaseController
{
	public function cadastroPromocao()
	{
		helper(['form', 'url']);
		$produtoModel = new \App\Models\ProdutosModel();

		
		$data = [
			'title' => 'Kalango - Administração',
			'titulo' => 'Painel de Manutenção - Produtos',
			// 'dados' => $produtoModel->pegarProdutos(),
		];
		// echo 'hey';exit;
		echo view('PainelAdm/templetePainel/header', $data);
		echo view('PainelAdm/formPromocao');
		echo view('PainelAdm/templetePainel/footer');
	}

	//--------------------------------------------------------------------

}
