<?php

// $router->define([
//     // Đường dẫn URI => Controller xử lý
//     ''                  => 'controllers/index.php',
//     'about'             => 'controllers/about.php',
//     'about/culture'     => 'controllers/about-culture.php',
//     'contact'           => 'controllers/contact.php',
//     'names'             => 'controllers/add-name.php' // Mong muốn: only for POST types
// ]);

// $router->get('', 'controllers/index.php');
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

// $router->post('names', 'controllers/add-name.php');
