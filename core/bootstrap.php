<?php

use App\Core\App;

App::bind('config', require 'config.php');

// App::bind('foo', 'bar');

// die(App::get('foo'));
// die(var_dump(App::get('config')));

App::bind('database', new QueryBuilder(
     Connection::make(App::get('config')['database']) // inject PDO instance (truyền vô thôi)
));

// $app = []; // biến lưu toàn thông tin trang web

// $app['config'] = require 'config.php';

// $app['database'] =  new QueryBuilder(
//     Connection::make($app['config']['database']) // inject PDO instance (truyền vô thôi)
// );

function view($name, $data = [])
{    
     extract($data);

     return require "./app/views/{$name}.view.php";
}

function redirect($path)
{
     header("Location: /{$path}");
}