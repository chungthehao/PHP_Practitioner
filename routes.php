<?php

// $router->define([
//     // Đường dẫn URI => Controller xử lý
//     ''                  => 'controllers/index.php',
//     'about'             => 'controllers/about.php',
//     'about/culture'     => 'controllers/about-culture.php',
//     'contact'           => 'controllers/contact.php',
//     'names'             => 'controllers/add-name.php' // Mong muốn: only for POST types
// ]);

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');

$router->post('names', 'controllers/add-name.php');
