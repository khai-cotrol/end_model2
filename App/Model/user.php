<?php


namespace App\Model;


class user
{
    private $username;
    private $paswword;
    private $email;



    /**
     * user constructor.
     * @param $username
     * @param $paswword
     */
    public function __construct($username, $paswword,$email)
    {
        $this->username = $username;
        $this->paswword = $paswword;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPaswword()
    {
        return $this->paswword;
    }

    /**
     * @param mixed $paswword
     */
    public function setPaswword($paswword): void
    {
        $this->paswword = $paswword;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }



}