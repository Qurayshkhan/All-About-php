            <?php

            class Employee{
                //Class Properties...
                public $name;
                public $salery;

            //Class Method 
            //Construstor: It allow to to initialize object.it is the Code witch is Executed whenever a new object is initiated.

                // function __construct()
                // {
                //     echo "This Is my constructor for Employee <br>";
                // }
                // constructor with argument
                function __construct($name,$salery)
                {
                    $this->name=$name;
                    $this->salery=$salery;
                }
            }
            $Hassan=new Employee("Hassan",4000);
            $Murad=new Employee("Murad",50000);
            $Moiz=new Employee("Moiz",30000);

            echo "The salery of Hassan is $Hassan->salery<br>";
            echo "The salery of Murad is $Murad->salery";

            ?>
            <?php
            
            Class myEmployee {
                public $name;
                public $salery;

                function __construct($name,$salery){
$this->name=$name;
$this->salery=$salery;
              }
            }

$Hassan =new Employee("Hassan",5000);
$Ali=new Employee("Ali",3000);
$Ayan=new Employee("Ayan",7000);
            echo "The Sallery of Hassan is $Hassan->salery";
            ?>