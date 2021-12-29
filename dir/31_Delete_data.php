

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

$sql="DELETE FROM `phpmobiles` WHERE `phpmobiles`.`xiaomi` = 'x3GT' LIMIT 3";
$query=mysqli_query($conn,$sql);

$aff=mysqli_affected_rows($conn);
echo "$aff";

if ($query) {
    echo "delete complete";
}else {
    echo "Not delete".mysqli_error($conn);
}

?>