<?php

echo "Real Php starts Now we will know about importance Sessions <br>";
// What is sessions?
// used To manage information accros diffrenet pages
session_start();
echo "We set Sessions";
$_SESSION['username']="Hassan";
$_SESSION['category']="Coding";

echo "<br>";


?>