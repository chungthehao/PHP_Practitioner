<?php

$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make($config['database']) // inject PDO instance (truyền vô thôi)
);