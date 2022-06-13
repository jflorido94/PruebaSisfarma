<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class EntUser extends Entity
{
    protected $datamap = [];
    protected $dates   = ['fechaAlta', 'ultimoAcceso', 'fechaBaja'];
    protected $casts   = [];

    protected function setClave(string $clave)
    {
        $this->attributes['clave']=password_hash($clave,PASSWORD_DEFAULT);
    }

}
