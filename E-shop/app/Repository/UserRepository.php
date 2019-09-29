<?php


namespace app\Repository;


use app\Data\UserDTO;
use Database\DatabaseInterface;
use Generator;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function insert(UserDTO $user): bool
    {
        $this->db->query("INSERT INTO users( username, password, first_name, last_name, born_on) 
                    VALUES(?,?,?,?,?)")
                    ->execute([
                        $user->getUsername(),
                        $user->getPassword(),
                        $user->getFirstName(),
                        $user->getLastName(),
                        $user->getBornOn()
                              ]);
        return true;


    }

    public function update($id, UserDTO $user): bool
    {
       $this->db->query("UPDATE users SET username = ? , password = ? , first_name = ? , last_name = ? , born_on = ?
                                 WHERE id = ?")
           ->execute([
                        $user->getUsername(),
                        $user->getPassword(),
                        $user->getFirstName(),
                        $user->getLastName(),
                        $user->getBornOn(),
                        $id]);
       return true;

    }

    public function findOneById($id): ?UserDTO
    {
       return $this->db->query("SELECT id, username, password, first_name as firstName, last_name as lastName,
                                born_on as bornOn, money_amount as moneyAmount from users where id =?")
            ->execute([$id])->fetch(UserDTO::class)->current();

    }

    public function findOneByUsername($username): ?UserDTO
    {

        return $this->db->query("SELECT id, username,password, first_name as firstName, last_name as lastName, born_on as bornOn, money_amount
            as moneyAmount FROM users WHERE username = ?")
            ->execute([$username])->fetch(UserDTO::class)->current();

    }

    /**
     * @return Generator|UserDTO[]
     */
    public function findAll(): Generator
    {
        // TODO: Implement findAll() method.
    }
}