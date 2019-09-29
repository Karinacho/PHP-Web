<?php


namespace app\Service;


use app\Data\CategoryDTO;
use Generator;

interface CategoryServiceInterface
{
    /**
     * @return Generator|CategoryDTO[]
     */
    public function findAll():Generator;
    public function findOneByName($name) :?CategoryDTO;
}