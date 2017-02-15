<?php

class Person{

    public $name;
    public $dateOfBirth;

    public function __construct()
    {
         echo "im inside the construct method.<br>";
    }

    public function __destruct()
    {
        echo "Maff Koira Diyen :( </br>";
    }

    public function setName($localName)
    {
        $this->name = $localName;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }
}
class Student extends Person{

    public function doSomething(){
        echo $this->name ."<br>";
    }
}

$objStudent = new Student();
$objStudent->setName("Rahim");
    echo $objStudent->doSomething();

$objPerson = new Person();
$objPerson->setName("Jorina");

$objBekti = new Person();
$objBekti->setName("Kalam");

echo $objStudent->name ."<br>";
unset($objStudent);

echo $objBekti->name ."<br>";
unset($objBekti);

echo $objPerson->name ."<br>";
