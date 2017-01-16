<?php
namespace App\Controllers;

class PagesController
{
  public function home()
  {
    if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
    redirect('dashboard');
    exit();
    }
   return view('login');
  }

  public function logged()
  {
    session_start();
    if((!isset($_SESSION['email'])) && ((!isset($_COOKIE['email'])) && (!isset($_COOKIE['password'])))){
    redirect('');
    exit();
}
  
    if(isset($_SESSION["limit"])) {
      $current_time = time() - $_SESSION["limit"];
        if($current_time > 20){
          session_unset();
          session_destroy();
          redirect('');
          exit();
        }
      }
        else{
          $_SESSION["limit"] = time();
        }
 
      return view('dashboard');
      
  }
}