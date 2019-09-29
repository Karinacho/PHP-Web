<?php


namespace app\Service;


use app\Data\ProductDTO;
use app\Repository\ProductRepositoryInterface;

class ProductService implements ProductServiceInterface
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function add(ProductDTO $product): bool
    {

        return $this->productRepository->insert($product);
    }

    public function edit(ProductDTO $product): bool
    {
        // TODO: Implement edit() method.
    }

    /**
     * @return \Generator|ProductDTO[]
     */
    public function newProducts(): \Generator
    {
        return $this->productRepository->fetchNewProducts();
    }
}