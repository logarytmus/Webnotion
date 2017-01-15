<?php

$router->get('','PagesController@home');
$router->post('dashboard', 'UsersController@login');
$router->get('dashboard', 'PagesController@logged');
$router->get('logout', 'UsersController@logout');

