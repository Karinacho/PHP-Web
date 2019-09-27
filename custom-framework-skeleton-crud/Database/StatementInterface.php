<?php


namespace Database;


interface StatementInterface
{
    //$result = $stmt->execute([$username, $password]);
    public function execute(array $param=[]):ResultSetInterface;
}