<?php


namespace app\Http;


use app\Data\UserDTO;
use app\Service\UserServiceInterface;
use http\Client\Curl\User;

class UserHttpHandler extends UserHttpHandlerAbstract
{
    public function register(UserServiceInterface $userService, array $formData=[]){
        if(isset($formData['register'])){
            $this->handlerRegisterProcess($userService,$formData);
        }else{
            $this->render('users/register');
        }
    }
    public function login(UserServiceInterface $userService, array $formData=[]){
        if(isset($formData['login'])){
            $this->handlerLoginProcess($userService,$formData);
        }else{
            $this->render('users/login');
        }
    }
    public function index(UserServiceInterface $userService){
       if($userService->isLogged()){
           $this->handlerIndexProcess($userService);

       }else{
           $this->render('home/index');
       }
    }
    public function profile(UserServiceInterface $userService){
        if($userService->isLogged()){
            $this->handlerProfileProcess($userService);
        }else{
            $this->redirect('login.php');
        }
    }
    public function editProfile(UserServiceInterface $userService, array $formData=[]){
        $user= $userService->currentUser();
        if(isset($formData['edit'])){
            $this->handlerEditProfileProcess($userService,$formData);
        }else{
            $this->render('users/editProfile',$user);
        }
    }

    private function handlerRegisterProcess(UserServiceInterface $userService,array $formData)
    {
        $user = $this->dataBinder->bind($formData,UserDTO::class);

        if($userService->register($user,$formData['confirm_password'])){
            $this->redirect('login.php');
        }else{
            //Error
        }
    }

    private function handlerLoginProcess(UserServiceInterface $userService, array $formData)
    {
        if($userService->login($formData['username'], $formData['password'])!== null){
            $this->redirect('index.php');
        }else{
            $this->render('users/login',null,['Username does not exist or password mismatch']);
        }
    }

    private function handlerIndexProcess(UserServiceInterface $userService)
    {
        $user = $userService->currentUser();
        $this->render('home/index',$user);
    }

    private function handlerProfileProcess(UserServiceInterface $userService)
    {
        $user = $userService->currentUser();
        $this->render('users/profile',$user);
    }

    private function handlerEditProfileProcess(UserServiceInterface $userService, array $formData)
    {
        /** @var UserDTO  $user */
        $user = $this->dataBinder->bind($formData,UserDTO::class);

        $userService->edit($user,$formData['confirm_password']);
        $this->redirect('profile.php');

    }


}