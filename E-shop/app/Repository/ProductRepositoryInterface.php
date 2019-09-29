<?php


namespace app\Repository;


use app\Data\CategoryDTO;
use app\Data\ProductDTO;
use Generator;

interface ProductRepositoryInterface
{
    public function insert(ProductDTO $product):bool;

    public function update($id, ProductDTO $product) :bool;

    public function findOneById($id): ?ProductDTO;

    public function findOneByName($username) :?ProductDTO;

    /**
     * @param $category
     * @return Generator|ProductDTO[]
     */
    public function findAllByCategory($category) :Generator;
    /**
     * @return Generator|ProductDTO[]
     */
    public function fetchNewProducts() :Generator;

    public function findAll(): Generator;

}