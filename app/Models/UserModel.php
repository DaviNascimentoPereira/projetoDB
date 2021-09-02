<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model

{

    protected $DBGroup              = 'default';
	protected $table                = 'kalango_db';
	protected $primaryKey           = 'idCliente';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
        'idCliente',
        'nome', 
        'senha', 
    ];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = ['beforeInsert'];
	protected $afterInsert          = [];
	protected $beforeUpdate         = ['beforeUpdate'];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];


    // protected $table = 'users';
    // protected $allowedFields = ['id','firstname', 'lastname', 'email', 'password', 'updated_at', 'pais', 'estado', 'cidade', 'uf', 'crf', 'cpf', 'telefone', 'celular', 'type'];
    // protected $beforeInsert = ['beforeInsert'];
    // protected $beforeUpdate = ['beforeUpdate'];

     //-----------------------------------------------------------------------------------------------------

     
    
}
