<?php


namespace App\Http;


use App\Data\UserDTO;
use App\Services\UserServiceInterface;

class UserHttpHandler extends UserHttpHandlerAbstract
{
    public function register(UserServiceInterface $userService, array $formData=[]){
        if(isset($formData['register'])){

            $this->handleRegisterProcess($userService, $formData);
        }
        else{
            $this->render('/user/register');
        }
    }

    public function login(UserServiceInterface $userService, array $formData=[]){
        if(isset($formData['register'])){

            $this->handleLoginProcess($userService, $formData);
        }
        else{
            $this->render('/user/login');
        }
    }
    private function handleRegisterProcess(UserServiceInterface $userService, array $formData)
    {
        $user = UserDTO::create(
            $formData['username'],
            $formData['password'],
            $formData['first_name'],
            $formData['last_name'],
            $formData['born_on']
        );


        if($userService->register($user,$formData['confirm_password'])){
            $this->redirect('login.php');
        }else{
            //Error
        }
    }

    private function handleLoginProcess(UserServiceInterface $userService, array $formData)
    {
        $username = $formData['username'];
        $password = $formData['password'];
        $user = $userService->login($username,$password) ;
        if($user !== null){
            $_SESSION['id'] = $user->getId();
            $this->redirect('profile.php');
        }else{
            //Error
        }
    }
}