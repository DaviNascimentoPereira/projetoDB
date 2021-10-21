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
    protected $validationRules      = [
        'nome'              => 'required|alpha_numeric_space|min_length[3]',
        'email'             => 'required|valid_email|is_unique[cad_clientes.email]',
        'senha'             => 'required|min_length[6]',
        // 'senha_confirmacao' => 'required|matches[senha]',
    ];
    protected $validationMessages = [
        'nome'        => [
            'min_length' => 'Campo nome precisa ter no minimo 3 letras.',
        ],
        'email'        => [
            'is_unique' => 'Esse email já está sendo utilizado.',
        ],
        'senha'        => [
            'min_length' => 'Senha deve ter pelo menos 6 caracteres.',
        ],
        'senha_confirmacao'  => [
            'matches' => 'As senhas estão diferentes.',
        ],
    ];
     protected $useAutoIncrement     = true;
    // protected $insertID             = 0;
    // protected $useSoftDeletes       = true;
    // protected $useTimestamps        = false;
    // protected $updatedField         = 'updated_at';
    // protected $deletedField         = 'deleted_at';
     
     
    // protected $skipValidation       = false;



public function verificaEmail(string $email) : array {
        $rq = $this->where('email', $email) -> first();

        return !is_null($rq) ? $rq : []; 
    }

}
