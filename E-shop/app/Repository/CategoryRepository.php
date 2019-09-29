<?php


namespace app\Repository;


use app\Data\CategoryDTO;
use Database\DatabaseInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function insert(CategoryDTO $categoryDTO): bool
    {
        // TODO: Implement insert() method.
    }

    /**
     * @return \Generator|CategoryDTO[]
     */
    public function findAll(): \Generator
    {
        return $this->db->query("SELECT id, name FROM categories")
            ->execute([])->fetch(CategoryDTO::class);
    }

    public function findOneByName($name): ?CategoryDTO
    {
        return $this->db->query("SELECT id,name FROM categories WHERE name = ?")
            ->execute([$name])->fetch(CategoryDTO::class)->current();
    }
}