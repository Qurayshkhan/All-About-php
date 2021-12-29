<?php
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

$sql="SELECT * FROM `contact`";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo "number of rows is  $num <br>";

// if ($num > 0) {
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
// }
// we can fetch data in better way using while loop
$id=1;
while ($row=mysqli_fetch_assoc($result)) {
    // echo var_dump($row);//it is only for check query
    // if you want to fetch in number order sequently
    echo $id.". Hellow ".$row['name']." Your Email is ". $row['email']; 
    echo "<br>";
    $id=$id+1;
}

?>