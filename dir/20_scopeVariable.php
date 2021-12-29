<?php

echo "Scope In variable<br>";

$num=35;
$num2=50;

function printvalue(){
    $num=30;
    echo "The Value of Your variable is $num <br>";
    global $num,$num2;
    $num=1000;
    $num2=2000;
    // You can Also change Your global Variables
    echo "using globel keyword You can access globel variables in function line $num,$num2<br>";
}

printvalue();
echo "using globel keyword You can access globel variables in function line $num,$num2 <br>";
// echo var_dump($GLOBALS);
echo ($GLOBALS)['num'];
echo ($GLOBALS)['num2'];


?>