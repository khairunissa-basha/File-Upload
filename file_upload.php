<?php
 $path = "upload/";
 $valid_extensions = array('jpg','jpeg','png','gif','bmp','pdf','doc','ppt');

if(!empty($_FILES['ufile'])){
    $file = $_FILES['ufile']['name'];
    $file_tmp_name = $_FILES['ufile']['tmp_name'];
    $file_type = $_FILES['ufile']['type'];
    $error = $_FILES['ufile']['error'];
   
   $target_file = $path.$file;
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        //if file exists
    if(file_exists($target_file)){
        
        die("File already exists");
        
    }

    if(in_array($ext,$valid_extensions)){
        move_uploaded_file($file_tmp_name,$target_file);
        echo "<img src='$target_file'  style='display:block;
   margin-left: 100px;
   width: 80px;
   height: 80px;'/>  The file $file has uploaded successfully";
    }else{
        echo "Invalid file extension";
    }






    }

   

?>