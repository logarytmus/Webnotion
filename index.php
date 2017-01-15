<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Request, Router}; 

if (preg_match('/\.(?:png|jpg|jpeg|gif|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} 

 Router::load('app/routes.php')
 ->direct(Request::uri(), Request::method());
