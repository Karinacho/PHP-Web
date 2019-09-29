<?php


namespace app\Service;


use app\Data\UserDTO;
use app\Repository\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository=$userRepository;
    }

    public function register(UserDTO $user, string $confirmPassword): bool
    {
        if($this->userRepository->findOneByUsername($user->getUsername()) !== null){
            return false;
        }
        if($user->getPassword() !== $confirmPassword){
            return false;
        }
        $plainPassword = $user->getPassword();
        $encryptedPassword = password_hash($plainPassword,PASSWORD_ARGON2I);
        $user->setPassword($encryptedPassword);

        return $this->userRepository->insert($user);


    }

    public function login(string $username, string $password): ?UserDTO
    {
        /** @var UserDTO $user */
        $user = $this->userRepository->findOneByUsername($username);

        if($user === null){
            return null;
        }

        if(!password_verify($password,$user->getPassword())){

            return null;
        }
        $_SESSION['id']= $user->getId();
        return $user;
    }
    public function isLogged():bool{


        if(!array_key_exists('id',$_SESSION)){
            return false;
        }
        return true;
    }

    public function currentUser(): ?UserDTO
    {

            return $this->userRepository->findOneById($_SESSION['id']);

    }
}