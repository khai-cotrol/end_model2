<?php


namespace App\Controller;


use App\Model\user;
use App\Model\userModel;

class userController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function AddUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "SignUp.php";
        } else {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $user = new user($username, $password, $email);
                $this->userModel->AddUser($user);
                header('Location: connection.php?page=product&action=login');
        }
    }
    public function Login()
    {
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            include 'SignIn.php';
        }else{
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->userModel->Login($username,$password);
        }

    }

}