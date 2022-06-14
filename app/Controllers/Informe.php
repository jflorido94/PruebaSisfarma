<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Informe extends BaseController
{
    public function index()
    {
        return view('informe');
    }
}
