<?php


namespace app\Service;


use app\Data\CategoryDTO;
use app\Repository\CategoryRepositoryInterface;
use Generator;

class CategoryService implements CategoryServiceInterface
{

    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * @return Generator|CategoryDTO[]
     */
    public function findAll(): Generator
    {
        return $this->categoryRepository->findAll();
    }

    public function findOneByName($name): ?CategoryDTO
    {
        return $this->categoryRepository->findOneByName($name);
    }
}