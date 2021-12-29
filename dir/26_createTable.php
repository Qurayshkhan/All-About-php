<?php
echo "Now we Create Tables in DataBase <br>";


$server="localhost";
$username="root";
$password="";
$dbname="php";
$conn=mysqli_connect($server,$username,$password,$dbname);
if ($conn) {
    ?>
    <script>
        alert("DataBase Connect Successfully");
    </script>
    <?php
}else {
    die("Faild To Connect Data base".mysqli_connect_error());
}

// once we create DataBase using php after that we create tables and comment database query

// $sql="CREATE DATABASE php";
// $result=mysqli_query($conn,$sql);
// if ($result) {
    // ?>
    <script>
    //     alert("DataBase Created Successfully");
    // </script>
     <?php
// }else {
//     die("Could Not Created successfully".mysqli_error($conn));
// }

// Now we create Table we cannot write db name because we already Mention above
$sql="CREATE TABLE `phpmobiles` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `samsung` INT(225) NOT NULL , `xiaomi` INT(225) NOT NULL , `vivo` INT(225) NOT NULL , `oppo` INT(225) NOT NULL , PRIMARY KEY (`id`))";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "Table was Created Succefully";
}else {
    echo "Table Was Not Created Succefully-->".mysqli_error($conn);
}

?>