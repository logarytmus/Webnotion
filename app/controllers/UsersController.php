<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
  public function login()
  {

    if(!empty($_POST["email"]) && !empty($_POST["password"])) {
       $email = $_POST["email"];
       $password = $_POST["password"];
       $remember = $_POST["remember"];
      }
    else{
        redirect('');
      }

   $query = App::get('database')->selectUser('users', $email);

   if($query[0]['password'] === $password){
    $data['name'] = $query[0]['name'];
    $data['privilege'] = $query[0]['privilege'];

    if(isset($remember)){
    setcookie('email', $email, time() + 60*60*24);
    setcookie('password', $password, time() + 60*60*24);
  }
  session_start();
  $_SESSION["email"] = $email;

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
    

    return view('dashboard', compact('data'));
  }

  else{
    return redirect('');
  }
  }

  public function logout()
  {
    session_start();
    session_destroy();
    if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
      $email = $_COOKIE['email'];
      $password = $_COOKIE['password']; 
    setcookie('email', $email, time() -1);
    setcookie('password', $password, time() -1);
  }
    redirect('');
  }

}