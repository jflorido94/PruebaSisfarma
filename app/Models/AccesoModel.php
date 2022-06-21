<?php

namespace App\Models;

use CodeIgniter\Model;
use DateTime;
use phpDocumentor\Reflection\Types\Null_;

class AccesoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'accesos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'idUsuario',
        'fecha',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = ['changeLastAccess'];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function changeLastAccess(array $data)
    {
        $user_obj = new UserModel();

        $user_obj->update($data['data']['idUsuario'],['ultimoAcceso' => $data['data']['fecha']]);

        return $data;

    }
}
