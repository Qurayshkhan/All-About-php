<?php

use Employee as GlobalEmployee;

class Employee{
    public $name;
    public $salery;

    function __construct($name,$salery)
    {
        $this->name=$name;
        $this->salery=$salery;    
    }
    function __destruct()
    {
        echo "The Destruction $this->name";
    }
}

$empHassan=new Employee("Hassan",7000);
$empHusnain=new Employee("Husnain",5000);

echo "The Salery Of Hassan is $empHassan->salery <br>";
echo "The Salery Of Hassan is $empHusnain->salery <br> ";

?>