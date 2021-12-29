<?php

echo "We will create Data base using php <br>";


$server="localhost";
$username="root";
$password="";
$conn=mysqli_connect($server,$username,$password);

if (!$conn) {
    die("Sorry We are Faild to connect".mysqli_connect_error());
}else {
    echo "Database Connect Succefully";
}
// create Database name;
// take any variable first as we take $sql
$sql="CREATE DATABASE php5";
$result=mysqli_query($conn,$sql);
if (!result) {
    echo "Create database successully";
}else {
    echo "Database not Created successfully because of this error-->".mysqli_error($conn);
}




// echo var_dump($result);//check true or false if db crated it return true otherwise return false


// Die connection if it is not connect

?>