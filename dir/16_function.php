<?php 
echo "We Discous Today Functions <br>";

function processMarks($marksArr){
    $sum=0;
 foreach ($marksArr as  $value) {
     $sum +=$value;
 }
 return $sum;
}
function avgMarks($marksArr){
    $sum=0;
    $i=1;
 foreach ($marksArr as  $value) {
     $sum +=$value;
     $i++;
 }

 return $sum/$i;
}
$hassan=[43,60,98,56,78,35];//Numeric Arrays
// $sumMarks=processMarks($hassan);


$sumMarks=avgMarks($hassan);


$Junaid=[43,60,98,23,78,35];
// $sumMarksJunaid=processMarks($Junaid);
$sumMarksJunaid=avgMarks($Junaid);
echo "The Value of scored by out of 600 is  $sumMarks <br>";
echo "The Value of scored by out of 600 is  $sumMarksJunaid <br>";
?>



