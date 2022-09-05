<?php

class Person
{
    public $name;
    private $age;
    protected $sex;
    public $isStudent;
    public $averageGrade;

    function __construct(string $name, int $age, string $sex, bool $isStudent,float $averageGrade)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->isStudent = $isStudent;
        $this->averageGrade = $averageGrade;
        echo "Nieuw persoon-object aangemaakt <br>";
        echo "De naam van de nieuwe persoon is " . $this->name . " <br>";
    }

    function __destruct()
    {
        echo "<br> Person object $this->name word verwijderd";
    }

    function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function getSex()
    {
        return $this->sex;
    }

    function setAge($age)
    {
        $this->age = $age;
    }

    function getAge()
    {
        return $this->age;
    }
    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setIsStudent($isStudent)
    {
        $this->isStudent = $isStudent;
    }

    function GetIsStudent()
    {
        return $this->isStudent;
    }
    function setAverageGrade($averageGrade)
    {
        $this->averageGrade = $averageGrade;
    }

    function GetAverageGrade()
    {
        return $this->averageGrade;
    }

    function getInfo()
    {
        $info = "Name: " . $this->name .
            "<br >Age: " . $this->age .
            "<br >Sex: " . $this->sex .
            "<br >Is Student: " . $this->isStudent .
            "<br >Average Grade: " . $this->averageGrade;

        return $info;
    }

    function saveInfo()
    {
        $array = [];
        $array[0] = $this->name;
        $array[1] = $this->age;
        $array[2] = $this->sex;
        $array[3] = $this->isStudent;
        $array[4] = $this->averageGrade;

        return $array;
    }
}