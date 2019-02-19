<?php

$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos');

// $tasks = array_map(function ($task) {
//     //return new Task(); //return 'foo';

//     $t = new Task();
//     $t->description = $task->description;
//     $t->completed = $task->completed;
//     $t->id = $task->id;
//     return $t;
// }, $tasks);

require 'index.view.php';