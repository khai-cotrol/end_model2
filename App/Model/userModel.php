<?php


namespace App\Model;


class userModel
{
    private $DBconnect;
    public function __construct()
    {
        $this->DBconnect = new  DBconnect();
    }
    public function AddUser(object $user)
    {
        $sql = "INSERT INTO `users`(`username`,`password`,`email`) VALUES (?,?,?)";
        $stml = $this->DBconnect->connection()->prepare($sql);
        $stml->bindParam(1,$user->getUsername());
        $stml->bindParam(2,$user->getPaswword());
        $stml->bindParam(3,$user->getEmail());
        $stml->execute();
    }
    public function getUser($username)
    {
        $sql = "SELECT * FROM `users` Where `username`='$username'";
        $stml = $this->DBconnect->connection()->query($sql);
        $stml->execute();
         $result = $stml->fetch();
         return $result;
    }
    public  function checkLogin($username, $password)
    {
        $data = $this->getUser($username);
        if ($data){
            if ($username ==$data['username'] && $password==$data['password']){
                return true ;
            }
        }
        return false;
    }

    public function Login($username,$password)
    {
        if ($this->checkLogin($username, $password)){
            session_start();
            $_SESSION['username'] = $username ;
             $_SESSION['password'] = $password;

            header('Location: home.php');
        }
    }
}