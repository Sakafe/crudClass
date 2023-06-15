<?php
include 'database.php';

$obj = new Database();
$sname = $_POST['sname'];
$sub = $_POST['sub'];
$city = $_POST['city'];

$value = ["Name"=>$sname, "Sub"=>$sub, "city"=>$city];
if($obj->insert("student",)){
   echo "<h2>Data inserted successfully</h2>";
}else{
    echo "<h2>Data inserted sfailed!</h2>";
}
?>