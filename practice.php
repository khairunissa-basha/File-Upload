<?php

$con = mysqli_connect("localhost",'root','','practice');

if(mysqli_connect_errno()){
    echo "error code:".mysqli_connect_errno();
    echo "error: ".mysqli_connect_error();
}

$sql = "SELECT first_name,last_name,age,gender FROM users";
$result = mysqli_query($con,$sql);
//mysqli_fetch_array()
//1-Numeric array
echo "mysqli_fectch_array(MYSQLI_NUM)\n";
$row = mysqli_fetch_array($result, MYSQLI_NUM);
printf("%s ,%s, %s, %s\n", $row[0], $row[1], $row[2], $row[3]);

//2-Associative array
echo "mysqli_fectch_array(MYSQLI_ASSOC)\n";
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
printf("%s ,%s, %s, %s\n", $row['first_name'], $row['last_name'], $row['age'], $row['gender']).'\n';

//mysqli_fetch_assoc
echo "mysqli_fetch_assoc()\n";
$row = mysqli_fetch_assoc($result);
printf("%s ,%s, %s, %s\n", $row['first_name'],$row['last_name'],$row['age'],$row['gender']).'\n';

//mysqli_fetch_object
echo "mysqli_fetch_object()\n";
while($obj = mysqli_fetch_object($result)){
    printf("%s ,%s, %s, %s\n", $obj->first_name, $obj->last_name, $obj->age, $obj->gender).'\n';
}

echo "using fetch_row";
while($row = mysqli_fetch_row($result)){
    printf("%s ,%s, %s, %s\n", $row[0],$row[1], $row[2], $row[3]);
}

?>