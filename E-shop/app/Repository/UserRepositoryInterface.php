<?php


namespace app\Repository;


use app\Data\UserDTO;
use Generator;

interface UserRepositoryInterface
{
    public function insert(UserDTO $user):bool;

    public function update($id, UserDTO $user) :bool;

    public function findOneById($id): ?UserDTO;

    public function findOneByUsername($username) :?UserDTO;


    /**
     * @return Generator|UserDTO[]
     */
    public function findAll(): Generator;

}