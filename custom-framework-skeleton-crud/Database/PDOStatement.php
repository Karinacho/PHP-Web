<?php


namespace Database;


class PDOStatement implements StatementInterface
{
   //it needs PDOStatement
    private $pdoStatement;
    // receive it via constructor

    public function __construct(\PDOStatement $PDOStatement)
    {
        $this->pdoStatement=$PDOStatement;
    }

    public function execute(array $param = []): ResultSetInterface
    {
        //$result = $stmt->execute([parameters])
         $this->pdoStatement->execute($param);

        return new PDOResultSet($this->pdoStatement);
    }
}