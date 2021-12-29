<?php

echo "Today We will insert Data into Tables <br>";

$server="localhost";
$username="root";
$password="";
$dbname="php2";
$conn=mysqli_connect($server,$username,$password,$dbname);
if ($conn) {
    echo "Connection succefully <br>";
}else {
    echo "Connection faild";
}
// i create again and again because of my practice
// $sql="CREATE DATABASE php2";
// $result=mysqli_query($conn,$sql);
// if ($result) {
//     echo "Data base Create successfully";
// }else {
//     echo "Faild to create Database".mysqli_error($conn);
// }

//we Already create table in this new file using below sql query use query create database and create table second time it shows error

// $sql="CREATE TABLE `phpmobiles` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `samsung` varchar(225) NOT NULL , `xiaomi` varchar(225) NOT NULL , `vivo` varchar(225) NOT NULL , `oppo` varchar(225) NOT NULL , PRIMARY KEY (`id`))";
// $result=mysqli_query($conn,$sql);
// if ($result) {
//     echo "Table was Created Succefully";
// }else {
//     echo "Table Was Not Created Succefully-->".mysqli_error($conn);
// }
// Add new record into the phpmobiles table and its db is php2
// in case this case we are not using variables and if we use variables

// $sql="INSERT INTO `phpmobiles` ( `samsung`, `xiaomi`, `vivo`, `oppo`) VALUES ('SamsungGalaxy S20 Ultra', 'Redminote105G', 'VivoY17', 'Reno6')";
$samsung="Samsung ZFold";
$xiaomi="X3GT";
$vivo="vivoR11";
$oppo="zxpro";
$sql="INSERT INTO `phpmobiles` ( `samsung`, `xiaomi`, `vivo`, `oppo`) VALUES ('$samsung', '$xiaomi', '$vivo', '$oppo')";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "Insert successfully";
}else {
    echo "Not inserted".mysqli_error($conn);
}
?>