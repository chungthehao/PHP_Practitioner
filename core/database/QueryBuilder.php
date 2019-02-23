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

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table, 
            implode(', ', array_keys($parameters)), 
            ':' . implode(', :', array_keys($parameters))
        );

        $statement = $this->pdo->prepare($sql);

        try {
            $statement->execute($parameters); // mấy cái key ko cần có ':' ở trước cũng đc.
        } catch (PDOException $e) {
            die('Whoops, something went wrong.');
        }
    }
}