<?php namespace App\Controllers;

class Painel extends BaseController
{
	public function index()
	{
		$data['title'] = "Kalango - Login";
		$data['titulo'] = "Painel de Manutenção - Produtos";

        

		echo view('PainelAdm/templetePainel/header', $data);
		echo view('PainelAdm/painel', $data);
		echo view('PainelAdm/templetePainel/footer');
	}

	//--------------------------------------------------------------------

}
