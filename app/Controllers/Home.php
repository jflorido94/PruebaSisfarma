<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('includes/header');
    }

    public function welcome()
    {
        return view('welcome_message');
    }
}
