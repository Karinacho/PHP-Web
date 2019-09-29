<?php


namespace app\Service;


use app\Data\UserDTO;

interface UserServiceInterface
{
    public function register(UserDTO $user, string $confirmPassword):bool;
    public function login(string $username, string $password) : ?UserDTO;
    public function isLogged():bool;
    public function currentUser(): ?UserDTO;

}