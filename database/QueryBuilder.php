<?php

class QueryBuilder
{
    protected $pdo;

    # Nơi chỉ ra cái gì cần để cho class này chạy
    // dependencies <=> collaborators
    public function __construct($pdo) 
    {   
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();
        
        // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
        // $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}