<?php

require './vendor/autoload.php'; // Chỉ cần require file này, composer sẽ autoload dùm mình các class
require 'core/bootstrap.php'; // tải file config, kết nối db, lưu tất cả thông tin vô $app

use App\Core\{Request, Router};

// var_dump($app); die;

# Cách 1
// $router = new Router; // Để cho [require './routes.php';] xài define method

// require './routes.php'; // cập nhật danh sách [URI : controller] vô instance $router

// $uri = trim($_SERVER['REQUEST_URI'], '/'); // Lấy URI trên URL hiện tại

// require $router->direct($uri); // require controller có URI tương ứng (dò trong danh sách)

# Cách 2
$uri = Request::uri();
$method = Request::method();

Router::load('./app/routes.php')->direct($uri, $method);