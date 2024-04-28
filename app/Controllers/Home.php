<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function index()
   { 
     if (logged_in()) {
        if (in_groups('Admin')) {
            return redirect()->to(base_url('/admin'));
        }else if(in_groups('Sub-Admin')){
            return redirect()->to(base_url('/admin'));
        }
        else{
            return view('Landing-Page/landing-page');
        }
      }else{
          return view('Landing-Page/landing-page');
      }  
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

   public function viewProfil()
   {
    if(in_groups('Tokoh Agama')){
        return redirect()->to(base_url('/tokoh-agama/biodata'));
    }else if(in_groups('Rumah Ibadah')){
        return redirect()->to(base_url('/rumah-ibadah/biodata'));
    }else if(in_groups('Tahfidzul Quran')){
        return redirect()->to(base_url('/tahfidzul-quran/biodata'));
    }else{
        return view('Landing-Page/landing-page');
    }
   }

   public function viewPendaftaran()
   {
        if(in_groups('Tokoh Agama')){
            return redirect()->to(base_url('/tokoh-agama/biodata'));
        }else if(in_groups('Rumah Ibadah')){
            return redirect()->to(base_url('/rumah-ibadah/biodata'));
        }else if(in_groups('Tahfidzul Quran')){
            return redirect()->to(base_url('/tahfidzul-quran/biodata'));
        }
    }
   
}
