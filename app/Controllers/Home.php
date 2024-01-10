<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function login(): string
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
