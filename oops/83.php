<?php



class Employee{
    public $name;
    public $salery;
  

   public  function __construct($name,$salery)
    {
        $this->name=$name;
        $this->salery=$salery;
        // $this->language=$language;
        //if you use describe pivate function in this session it will work
        $this->describe();
    }
    protected function describe(){
        echo "The Name of The Programmer is $this->name<br>";
        echo "The Salery of This programmer is $this->salery<br>";
        // echo "The Language of this Employee is $this->language<br>";
    }
}
class programmer extends employee{
    public $language="php";
    public  function __construct($name,$salery,$language)
    {
        $this->name=$name;
        $this->salery=$salery;
        $this->language=$language;
        //if you use describe pivate function in this session it will work
        $this->describe();
    }
}
$Hassan=new employee("Hassan",60000);
$Husain=new Programmer("Husnain",40000,"python");





?>