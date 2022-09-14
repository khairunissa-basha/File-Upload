<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Document</title>

    <style>
        .btn{
            background-color:blue;
            color:white;
        }
    </style>
</head>
<body>
    <div class="container">
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
</div>
</body>
</html> 