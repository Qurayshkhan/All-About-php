<?php

session_start();
if (isset($_SESSION['username'])) {
  
    echo $_SESSION['username'];
    echo "<br>";
    echo $_SESSION['category'];
    echo "<br>";
   echo "Finally we get sessions";
   echo "<br>";
}else {
    echo "Please login to continnue";
}


?>