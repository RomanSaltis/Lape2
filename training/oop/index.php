<?php
class Person
{
    const AVG_LIFE_SPAN = 80;

    public $firstName;
    public $lastName;
    public $yearBorn;

    function __construct($tempFirst = "", $tempLast = "", $tempYear = "")
    {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempYear;
    }

    public function getFirstName()
    {
        return $this->firstName;        
    }
    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$myObj = new Person("Samuel", "Clemens", 1899);

// echo $myObj::AVG_LIFE_SPAN;
// echo Person::AVG_LIFE_SPAN ."\n"; 

// $myObj->setFirstName("Sam");
// echo $myObj->firstName."\n"; 
echo $myObj->getFirstName();


?>