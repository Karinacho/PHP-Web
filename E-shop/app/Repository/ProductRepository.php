<?php


namespace app\Repository;


use app\Data\CategoryDTO;
use app\Data\ProductDTO;
use Database\DatabaseInterface;
use Generator;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function insert(ProductDTO $product): bool
    {
        $this->db->query("INSERT INTO products(name, image,price, description,category_id) 
                                VALUES(?,?,?,?,?) ")
        ->execute([$product->getName(),
                    $product->getImage(),
                    $product->getPrice(),
                    $product->getDescription(),
                    $product->getCategory()]);
        return true;
    }

    public function update($id, ProductDTO $product): bool
    {
        // TODO: Implement update() method.
    }

    public function findOneById($id): ?ProductDTO
    {
        // TODO: Implement findOneById() method.
    }

    public function findOneByName($username): ?ProductDTO
    {
        // TODO: Implement findOneByName() method.
    }

    /**
     * @param $category
     * @return Generator|ProductDTO[]
     */
    public function findAllByCategory($category): Generator
    {
        // TODO: Implement findAllByCategory() method.
    }

    /**
     * @return Generator|ProductDTO[]
     */
    public function fetchNewProducts(): Generator
    {
       return $this->db->query("SELECT p.id, p.name, p.image, p.price, p.description, c.name AS category 
                                FROM products p
                                JOIN categories c ON c.id = p.category_id
                                ORDER by id DESC limit 5")->execute([])->fetch(ProductDTO::class);

    }

    /**
     * @return Generator|ProductDTO[]
     */
    public function findAll(): Generator
    {
        // TODO: Implement findAll() method.
    }
    public function insertCategoryProduct($productId, $categoryId):bool{
        $this->db->query("INSERT INTO categories_products(category_id, product_id) 
                                    VALUES (?,?)") ->execute([$productId,$categoryId]);
        return true;
    }
}