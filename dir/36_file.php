<?php

$fptr=fopen("myfile.txt","r");
// // echo fgets($fptr);//fgets show output line by line
// // echo fgets($fptr);//fgets show output line by line
// // echo fgets($fptr);

// while ($a = fgets($fptr)) {
//     echo $a;
// }

// read the line chracter By chracter
echo fgetc($fptr);//fgets show output chrac by chrac
echo fgetc($fptr);//fgets show output chrac by chrac
echo fgetc($fptr);

while ($a = fgetc($fptr)) {
    echo $a;
    //  break;
    // also write this
    if ($a=='.') {
        break;
    }
}
fclose($fptr);
?>