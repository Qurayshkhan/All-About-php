<?php

echo "Welcome To Associative Array";
$arr= array(" This "," That "," what ");
echo $arr[0];
echo $arr[1];
echo $arr[2];

// Associative arrays
$marks=array("Hassan" => 95,"Nabeel" => 75,"Adeel" => 60, 8=>'red');

foreach ($marks as $key => $value) {
    echo "<br>The Value of $key is $value <br>";
}
// echo "<br>";
// echo $marks['Hassan'];
// echo "<br>";
// echo $marks['Nabeel'];
// echo "<br>";
// echo $marks['Adeel'];
// echo "<br>";
// echo $marks[8];

$favclr=array('Nabeel'=> 'Red','Hassan' =>'Green',"Tayyab" =>'Yellow');

foreach ($favclr as $key => $value) {
    echo "The Favcloro of $key is $value <br>";
}

?>