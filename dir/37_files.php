<?php

echo "Today We Will Write Files";
// $fptr=fopen("myfile2.txt","w");
// fwrite($fptr,"Wo We Create file today\n");
// fwrite($fptr,"Wo We Create file2 today\n");
// fwrite($fptr,"Wo We Create file3 today");
//after refresh fwrite mode overwrite content be carefull 
// fclose($fptr);

//Appanding To a file.means 
//after refresh it create again and again content
$fptr=fopen("myfile2.txt","a");
fwrite($fptr,"\nContent create in last of lines");
fclose($fptr);

?>