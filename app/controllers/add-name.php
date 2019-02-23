<?php

// debug_print_backtrace(); // cho biết file nào require file này.

App::get('database')->insert('users', [
    'name'  => $_POST['name'],
]);

header('Location: /');