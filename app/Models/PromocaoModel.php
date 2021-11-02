<?php

namespace App\Models;

use CodeIgniter\Model;

class PromocaoModel extends Model
{
    protected $table                = 'cad_promocoes';
    protected $primaryKey           = 'idPromocao';
    protected $returnType           = 'array';
    protected $allowedFields        = ['idPromocao', 'imagemPromocao', 'nomePromocao'];
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

     public function pegarPromocao($idPromocao = null)
    {
       if($idPromocao === null){
           return $this->findAll();
       }
       return $this->asArray()->where(['idPromocao' => $idPromocao])->first();
    }

    public function produtosPromocao($idPromocao = null)
    {
        $produtosEmPromocao = "SELECT * FROM cad_produtos WHERE promocao = " . $idPromocao;
        $produtosSelecionados = $this->db->query($produtosEmPromocao);
        return $produtosSelecionados ->getResultArray();
    }
    public function produtosForaPromocao($idPromocao = null)
    {
        $produtosEmPromocao = "SELECT * FROM cad_produtos WHERE promocao = 0";
        $produtosSelecionados = $this->db->query($produtosEmPromocao);
        return $produtosSelecionados ->getResultArray();
    }
}
