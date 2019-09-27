<?php


namespace App\Http;


use App\Data\ErrorDTO;
use App\Data\UserDTO;
use App\Services\UserServiceInterface;

class UserHttpHandler extends UserHttpHandlerAbstract
{

    public function index(UserServiceInterface $userService){
        $this->render('/home/index');
    }
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

    public function edit(UserServiceInterface $userService, array $formData){
        if(!$userService->isLogged()){
            $this->redirect('login.php');
        }
        $data = $userService->currentUser();

        if(isset($formData['edit'])){

            $this->handleEditProcess($userService, $formData);
        }
        else{

            $this->render('/user/profile', $data);

        }
    }
    public function all(UserServiceInterface $userService){
        $this->render('/user/all',$userService->getAll());
    }
    private function handleRegisterProcess(UserServiceInterface $userService, array $formData)
    {

        $user = $this->dataBinder->bind($formData,UserDTO::class);


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
            $this->render('/user/login', null, new ErrorDTO('Username does not exist
             or password mismatch'));
        }
    }

    private function handleEditProcess(UserServiceInterface $userService, array $formData)
    {
        //we need to take the data from the formData and insert it into the user's data
        $user = $this->dataBinder->bind($formData,UserDTO::class);
        if($userService->edit($user)){
            $this->redirect('profile.php');
        }

    }

}