<?php


namespace App\Repository;


use App\Data\UserDTO;
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

        $this->db->query("INSERT INTO users (username, password, first_name, last_name, born_on) 
            VALUES(?,?,?,?,?) ")
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
        $this->db->query("UPDATE users 
                                SET 
                                username = ?,
                                password = ?,
                                first_name = ?,
                                last_name = ?,
                                born_on = ?
                                WHERE id = ?")
            ->execute([
                $user->getUsername(),
                $user->getPassword(),
                $user->getFirstName(),
                $user->getLastName(),
                $user->getBornOn(),
                $id
            ]);
        return true;
    }

    public function delete($id)
    {
        $this->db->query(" DELETE FROM users WHERE id = ?")
            ->execute([$id]);
        return true;
    }

    public function findOneById($id): ?UserDTO
    {
        return $this->db->query("SELECT id,username, password, first_name, last_name, born_on
         FROM users WHERE id = ?")
            ->execute([$id])
            ->fetch(UserDTO::class)
            ->current(); //get first from the returned result
    }

    public function findOneByUsername(string $username): ?UserDTO
    {
        return $this->db->query("SELECT id,username, password, first_name, last_name, born_on
         FROM users WHERE username = ?")
            ->execute([$username])
            ->fetch(UserDTO::class)
            ->current(); //get first from the returned result
    }

    /**
     * @return Generator|UserDTO[]
     */
    public function findAll(): Generator
    {
        return $this->db->query("SELECT * FROM users")
            ->execute()
            ->fetch(UserDTO::class);

    }
}