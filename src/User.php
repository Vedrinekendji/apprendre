<?php

namespace Src;

class User
{
    public const ADD = '1.2';
    private $username;
    private $email;
    private $age;
    public function __construct($username, $email, $age)
    {
        $this->username = $username;
        $this->email = $email;
        $this->age = $age;
    }
    public function login()
    {
        echo $this->username;
        echo $this->email;
        echo $this->age;
    }
}
