<?php


namespace app\Service;


use app\Data\ProductDTO;

interface ProductServiceInterface
{
    public function add(ProductDTO $product):bool;
    public function edit(ProductDTO $product) : bool;

    /**
     * @return \Generator|ProductDTO[]
     */
    public function newProducts() :\Generator;

}