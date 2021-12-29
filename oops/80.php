<?php

// Access Modifier in php
/*
public:Access AnyWhere in the Class
private:Access only within the class member
protected:can be accessed from within the class and from derived class
by befault properties methods treated as public
*/
class employee{
    private $name="Hassan";

    function showname(){
        echo $this->name;
    }
}
$employee=new employee();
// echo $employee->name; //this will not work if private variable.
// u can not use private property directely you can use it by sunig function
$employee->showname();


?>