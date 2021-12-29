<?php

$fptr=fopen("myfile.txt","r");
echo "$fptr";

if (!$fptr) {
    die("file Not open");
}


$content=fread($fptr,filesize("myfile.txt"));
fclose($fptr);//it benifit shows when your website traffic is too heigh...
echo $content;

?>