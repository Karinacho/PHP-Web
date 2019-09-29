<?php


namespace app\Data;




class UserDTO
{
    private $id;
    private $username;
    private $password;
    private $firstName;
    private $lastName;
    private $bornOn;
    private $moneyAmount;



    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username): void
    {
        $this->username = $username;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password): void
    {
        $this->password = $password;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getBornOn()
    {
        return $this->bornOn;
    }


    public function setBornOn($bornOn): void
    {
        $this->bornOn = $bornOn;
    }


    public function getMoneyAmount()
    {
        return $this->moneyAmount;
    }


    public function setMoneyAmount($moneyAmount): void
    {
        $this->moneyAmount = $moneyAmount;
    }



}