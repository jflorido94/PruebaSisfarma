<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Informe extends BaseController
{
    public function index()
    {
        if(!session()->get('isLoggedIn')) {
			return redirect()->to(route_to('login'));
		} elseif (!session()->get('rol')==1){
            return redirect()->to(route_to('dashboard'));
        } else {
			// helper(['form']);

            return view('informe');
		}
        
    }
}
