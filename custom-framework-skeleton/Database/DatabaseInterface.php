<?php


namespace Database;


interface DatabaseInterface
{
    // $query = ("SELECT * FROM users");
    // $stmt = $db->prepare($query);

    public function query(string $query):StatementInterface;
}