<?php


namespace App\Services;


use App\Data\UserDTO;
use App\Repository\UserRepositoryInterface;
use App\Services\Encryption\EncryptionServiceInterface;
use Generator;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;
    /**
     * @var EncryptionServiceInterface
     */
    private $encryptionService;
    public function __construct(UserRepositoryInterface $userRepository,
                                EncryptionServiceInterface $encryptionService)
    {
        $this->userRepository = $userRepository;
        $this->encryptionService = $encryptionService;
    }

    public function register(UserDTO $user, string $confirmPassword): bool
    {
        if($user->getPassword() !== $confirmPassword){
            return false;
        }
        if(null !== $this->userRepository->findOneByUsername($user->getUsername())){
            return false;
        }
        $plainPass = $user->getPassword();
        $encryptedPass = $this->encryptionService->hash($plainPass);
        $user->setPassword($encryptedPass);

        return $this->userRepository->insert($user);
    }

    public function login(string $username, string $password): ?UserDTO
    {
        $user = $this->userRepository->findOneByUsername($username);
        if( $user === null){
            return null;
        }
        if($this->encryptionService->verify($password, $user->getPassword()) === null){
            return null;
        }
        return $user;
    }

    public function edit(UserDTO $user, bool $hasChangedPassword): bool
    {
        //if we  have that username in the db
        if(null !== $this->userRepository->findOneByUsername($user->getUsername()) &&
            $this->currentUser()->getUsername() !== $user->getUsername()){
            return false;
        }
        if($hasChangedPassword){
            $plainPass = $user->getPassword();
            $encryptedPass = $this->encryptionService->hash($plainPass);
            $user->setPassword($encryptedPass);
        }


        return $this->userRepository->update(intval($_SESSION['id']),$user);
    }

    public function currentUser(): ?UserDTO
    {

        if(!$_SESSION['id']){
            return null;
        }
        return $this->userRepository->findOneById(intval($_SESSION['id']));
    }

    public function isLogged(): bool
    {
        if($this->currentUser() === null){
            return false;
        }
        return true;
    }

    /**
     * @return Generator|UserDTO[]
     */
    public function getAll(): Generator
    {
       return $this->userRepository->findAll();
    }
}