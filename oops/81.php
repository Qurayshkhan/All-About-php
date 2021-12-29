<?php



class employee{
    public $name="Hassan";
    private $salery=50000;
    private $grade=3;



    function showname(){
        echo "The Name of the Employee is $this->name <br>";
    }
    function set_salery($salery){
        $this->salery=$salery;
    }
    function get_salery(){
        echo "And the Salery of $this->name is $this->salery";
    }

}

class programmer extends employee {
    private $language="php";

function changelanguage($lang){
    $this->language=$lang;
}

}


$Waleed=new employee();
$Waleed->name="Waleed";//name change because name is public
$Waleed->showname();
$Waleed->set_salery("40000");
$Waleed->get_salery();

$Husnain=new programmer();
$Husnain->changelanguage("python");
$Husnain->name="Husnain";
$Husnain->showname();
$Husnain->set_salery("20000");
$Husnain->get_salery();





?>