<?php


namespace App\Data;


class UserDTO
{

    private $id;
    private $username;
    private $password;
    private $firstName;
    private $lastName;
    private $bornOn;



    public function getId()
    {
        return $this->id;
    }


    public function setId($id): UserDTO
    {
        $this->id = $id;
        return $this;
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username): UserDTO
    {
        $this->username = $username;
        return $this;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password): UserDTO
    {
        $this->password = $password;
        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName): UserDTO
    {
        $this->firstName = $firstName;
         return $this;
    }


    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName): UserDTO
    {
        $this->lastName = $lastName;
        return $this;
    }


    public function getBornOn()
    {
        return $this->bornOn;
    }


    public function setBornOn($bornOn): UserDTO
    {
        $this->bornOn = $bornOn;
        return $this;
    }



}