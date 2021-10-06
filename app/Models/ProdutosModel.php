<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model
{
    protected $table                = 'cad_produtos';
    protected $primaryKey           = 'idProdutos';
    protected $returnType           = 'array';
    protected $allowedFields        = ['idProdutos', 'nomeProduto', 'precoProduto', 'categoria', 'descricaoProduto', 'imagem'];
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




}
