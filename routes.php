<?php

$router->define([
    // Đường dẫn URI => Controller xử lý
    ''                  => 'controllers/index.php',
    'about'             => 'controllers/about.php',
    'about/culture'     => 'controllers/about-culture.php',
    'contact'           => 'controllers/contact.php'
]);
