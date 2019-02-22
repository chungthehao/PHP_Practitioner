<?php

$app = []; // biến lưu toàn thông tin trang web

$app['config'] = require 'config.php';

# Đứng ở góc nhìn là index.php (entry point) vì trong file đó require file này!
require './core/database/Connection.php';
require './core/database/QueryBuilder.php';
require './core/Router.php';
require './core/Request.php';

$app['database'] =  new QueryBuilder(
    Connection::make($app['config']['database']) // inject PDO instance (truyền vô thôi)
);