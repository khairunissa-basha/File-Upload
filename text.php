<?php
$file = fopen("text.txt", "w") or die("unable to open file");
$txt = "This is The First Line \n ";
fwrite($file, $txt);
$file = fopen("text.txt", "r") or die("unable to open file");
$file = fopen("text.txt", "a") or die("unable to open file");
$txt = "Appending new line to the existing file";
fwrite($file, $txt);
$file = fopen("text.txt", "r") or die("unable to open file");

echo fread($file, filesize("text.txt"));
?>