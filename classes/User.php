<?php

class User extends Person
{
    private $email;
    private $password;
    private $role;

    function __construct($userName,$age,$sex, $isStudent, $averageGrade, $email,$password,$role)
    {
        parent::__construct(
            $userName,
            $age,
            $sex,
            $isStudent,
            $averageGrade,
            $this->email = $email,
            $this->password = $password,
            $this->role = $role);
        echo "<br> Nieuwe User $userName extends Person";
    }

    function __destruct()
    {
        echo "<br>User object $this->name wordt verwijderd";
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function setRole(string $role)
    {
        $this->role = $role;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getUserInfo()
    {
        $info = parent::getInfo();
        $info =
          "<br>Name: $this->name"
          . "<br>Sex: $this->sex"
          . "<br>Email: $this->email"
          . "<br>Password: $this->password"
          . "<br>Role: $this->role";
        return $info;
    }
}