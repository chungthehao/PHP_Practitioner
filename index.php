<?php

require 'functions.php';
require 'Task.php';


$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);


// var_dump($tasks[0]->foobar()); // Nếu fetch kiểu PDO::FETCH_CLASS, 'Task' thì nó là 1 instance của class Task nên xài đc method trong class Task
// var_dump($results[0]->description); // Nếu fetch kiểu PDO::FETCH_OBJ

require 'index.view.php';