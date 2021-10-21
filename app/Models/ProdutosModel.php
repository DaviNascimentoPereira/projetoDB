<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model
{
    protected $table                = 'cad_produtos';
    protected $primaryKey           = 'idProduto';
    protected $returnType           = 'array';
    protected $allowedFields        = ['idProdutos', 'nomeProduto', 'precoProduto', 'categoria', 'descricaoProduto', 'imagem', 'estoque'];
    protected $createdField         = 'created_at';
    protected $validationRules      = [];
    protected $validationMessages = [];

     protected $useAutoIncrement     = true;
    // protected $insertID             = 0;
    // protected $useSoftDeletes       = true;
    // protected $useTimestamps        = false;
    // protected $updatedField         = 'updated_at';
    // protected $deletedField         = 'deleted_at';
     
     
    // protected $skipValidation       = false;

     public function pegarProdutos($id = null)
    {
       if($id === null){
           return $this->findAll();
       }
       return $this->asArray()->where(['idProduto' => $id])->first();
    }

    public function pegarCategoria($categoria = null)
    {
        $produtoCategoria = 'SELECT * FROM cad_produtos WHERE categoria =' .$categoria;
        return $produtoCategoria;
    }

}
