<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cliente extends BaseController
{
    public function index()
    {
        if(!session()->get('isLoggedIn')) {
			return redirect()->to(route_to('login'));
		} else {
			// helper(['form']);

            return view('cliente');
		}
        
    }
}
