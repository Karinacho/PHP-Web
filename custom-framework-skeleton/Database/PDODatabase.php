<?php


namespace Database;


class PDODatabase implements DatabaseInterface
{
    private $pdo;
    // receive the type of database( mysql, postgres, etc)
    public function __construct(\PDO $pdo)
    {
        $this->pdo =$pdo;
    }

    public function query(string $query): StatementInterface
    {
        //same as $stmt = $db->prepare($query), but OOP way;

        $stmt = $this->pdo->prepare($query);
        return new PDOStatement($stmt);
    }
}