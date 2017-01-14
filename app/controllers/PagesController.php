<?php

namespace App\Controllers;

class PagesController
{
  public function home()
  {
   return view('login');
  }

  public function about()
  {
      return view('about');
  }

  public function contact()
  {
      return view('contact');
  }
}