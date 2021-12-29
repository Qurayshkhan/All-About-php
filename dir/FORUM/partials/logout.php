<?php

session_start();
session_unset();
session_destroy();
if (!isset($_SESSION['name'])) {
   
    header("location:41_login.php");
    exit;
    
}


?>