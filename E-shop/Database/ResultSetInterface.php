<?php


namespace Database;


use Generator;

interface ResultSetInterface
{
    //$allUsers = $result->fetchObject(UserDTO::class);
    /**
     * @param $className
     * @return Generator
     */
    public function fetch($className): Generator;
}