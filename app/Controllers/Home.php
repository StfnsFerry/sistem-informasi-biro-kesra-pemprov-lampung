<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function index()
   {
    if (logged_in()) {
        if (in_groups('Admin')) {
            return redirect()->to(base_url('/admin'));
        }else{
            return view('welcome_message');
        }
    }else{
        return view('welcome_message');
    }
   }
}
