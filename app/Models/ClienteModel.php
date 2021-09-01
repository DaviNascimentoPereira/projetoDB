<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table                = 'cad_clientes';
    protected $primaryKey           = 'idClientes';
    protected $returnType           = 'array';
    protected $allowedFields        = ['idCliente', 'nome', 'email', 'senha'];
    protected $createdField         = 'created_at';

    // protected $useAutoIncrement     = true;
    // protected $insertID             = 0;
    // protected $useSoftDeletes       = true;
    // protected $useTimestamps        = false;
    // protected $updatedField         = 'updated_at';
    // protected $deletedField         = 'deleted_at';
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;




    



}
