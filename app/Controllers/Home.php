<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function index()
   {
      return view('Landing-Page/landing-page');
   }

   public function prog1()
   {
      return view('Landing-Page/program1');
   }

   public function prog2()
   {
      return view('Landing-Page/program2');
   }

   public function prog3()
   {
      return view('Landing-Page/program3');
   }
}
