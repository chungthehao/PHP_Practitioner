<?php

class Connection
{

    // 'static': a way to make a method accessible globally, without requiring an instance
    // Connection::make(); // chỉ cần
    // (new Connection())->make(); // ko cần làm vậy
    public static function make()
    {
        try { // Lỡ chưa cài MySQL, dbname ko tìm thấy, sai username, password,... thì sẽ xử lý như thế nào ---> xử lý trong catch
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage()); //die('Could not connect.');
        }
    }

}