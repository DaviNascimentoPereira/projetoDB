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
			'dados' => $produtoModel->findAll(),
		];

		// foreach($data['dados'] as $dado){
		// 	echo($dado['nomeProduto']);			
		// }
		

		echo view('PainelAdm/templetePainel/header', $data);
		echo view('PainelAdm/painel');
		echo view('PainelAdm/templetePainel/footer');
	}

	//--------------------------------------------------------------------

}
