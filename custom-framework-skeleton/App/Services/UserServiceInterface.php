<?php


namespace App\Services;


use App\Data\UserDTO;
use Generator;

interface UserServiceInterface
{
    public function register(UserDTO $user, string $confirmPassword) :bool;
    public function login(string $username, string $password):?UserDTO;
    public function edit(UserDTO $user):bool;
    public function currentUser() :?UserDTO;
    public function isLogged() :bool;

    /**
     * @return Generator|UserDTO[]
     */
    public function getAll() : Generator;
}