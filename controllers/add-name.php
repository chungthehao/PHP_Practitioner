<?php

// debug_print_backtrace(); // cho biết file nào require file này.

$app['database']->insert('users', [
    'name'  => $_POST['name'],
]);

header('Location: /');