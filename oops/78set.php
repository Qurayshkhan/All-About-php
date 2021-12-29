<?php

use Employee as GlobalEmployee;

class Employee{
    public $name;
    public $salery;


    // function __construct()
    // {
    //   echo "This is My Function";
    // }

function __construct($name,$salery)
{
    $this->name=$name;
    $this->salery=$salery;
}

}
// $Employee1=new Employee();
$Hassan=new Employee("Hassan",60000);
$Husnain=new Employee("Husnain",80000);
echo "The Sallery of Hassan is $Hassan->salery <br>";
echo "The Sallery of Hassan is $Husnain->salery";



?>