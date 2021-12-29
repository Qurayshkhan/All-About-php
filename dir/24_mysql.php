<?php

echo "We are Ready to connect To the Data base <br>";

// ways to connect with Database....
// 1. Precdure way MySQLI Extention.
// 2. PDO(php Data objects)

$server="localhost";
$username="root";
$password="";
$conn=mysqli_connect($server,$username,$password);

// Die connection if it is not connect
if (!$conn) {
    die("Sorry We are Faild to connect".mysqli_connect_error());
}else {
    echo "Database Connect Succefully";
}

?>