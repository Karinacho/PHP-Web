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
        // TODO: Implement login() method.
    }

    public function edit(UserDTO $user): bool
    {
        // TODO: Implement edit() method.
    }

    public function currentUser(): ?UserDTO
    {
        // TODO: Implement currentUser() method.
    }

    public function isLogged(): bool
    {
        // TODO: Implement isLogged() method.
    }

    /**
     * @return Generator|UserDTO[]
     */
    public function getAll(): Generator
    {
        // TODO: Implement getAll() method.
    }
}