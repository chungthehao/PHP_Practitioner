<?php

function connectToDb() 
{
    # PDO: PHP Data Object
    // DSN: Data Source Name
    // Xài gì? MySQL
    // host gì? localhost (127.0.0.1)
    // Tên database muốn kết nối? mytodo
    // username để kết nối? root
    // password để kết nối? mặc định thì ko có
    try { // Lỡ chưa cài MySQL, dbname ko tìm thấy, sai username, password,... thì sẽ xử lý như thế nào ---> xử lý trong catch
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage()); //die('Could not connect.');
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('SELECT * FROM todos');

    $statement->execute();
    
    // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
    // $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($val) 
{
    echo '<pre>';
    die(var_dump($val));
}