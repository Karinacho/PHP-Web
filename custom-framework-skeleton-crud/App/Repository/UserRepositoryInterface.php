<?php


namespace App\Repository;


use App\Data\UserDTO;
use Generator;

interface UserRepositoryInterface
{
    public function insert(UserDTO $user) :bool;
    public function update ($id, UserDTO $user) :bool;
    public function delete ($id);
    public function findOneById($id) :?UserDTO;
    public function findOneByUsername(string $username): ?UserDTO;

    /**
     * @return Generator|UserDTO[]
     */
    public function findAll(): Generator;

}