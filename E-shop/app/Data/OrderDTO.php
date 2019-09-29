<?php


namespace app\Data;


class OrderDTO
{
    private $id;

    private $userId;

    private $datePurchased;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getDatePurchased()
    {
        return $this->datePurchased;
    }

    /**
     * @param mixed $datePurchased
     */
    public function setDatePurchased($datePurchased): void
    {
        $this->datePurchased = $datePurchased;
    }



}