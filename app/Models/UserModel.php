<?php

namespace App\Models;

use App\Entities\EntUser;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'nombre',
        'apellidos',
        'usuario',
        'clave',
        'email',
        'rolId',
        'fechaAlta',
        'ultimoAcceso'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'fechaAlta';
    protected $updatedField  = null;
    protected $deletedField  = 'fechaBaja';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashPassword'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function hashPassword(array $data)
    {   
        if (! isset($data['data']['clave'])) {
            return $data;
        }

        $clave = $data['data']['clave'];
        $data['data']['clave'] = password_hash($clave, PASSWORD_DEFAULT);

        return $data;
    }
}