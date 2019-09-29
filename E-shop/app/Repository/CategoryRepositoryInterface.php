<?php


namespace app\Repository;


use app\Data\CategoryDTO;

interface CategoryRepositoryInterface
{

    public function insert(CategoryDTO $categoryDTO):bool;

    /**
     * @return \Generator|CategoryDTO[]
     */
    public function findAll():\Generator;
    public function findOneByName($name):?CategoryDTO;
}