<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('login');  
    }

    public function logout()
    {
        return "logout";
    }
}
