<?php
include 'database.php';
$obj = new Database();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action = "save-data.php" method = "post">
       <label for="">Name : </label>
       <input type="text" name = "sname"><br><br> 
       
       <label for="">Sub : </label>
       <input type="text" name = "sub"><br><br> 

       <label for="">City : </label>
       <select name="city" id="" >
        <?php
        $obj -> select('student3');
        $result = $obj->getResult();
        foreach ($result as list( "cid"=>$cid, "cityname"=>$city)){
          echo "<option value='$cid'>$city</option>  ";
        }
        ?>
       </select>
       <input type="submit" value="save">
    </form>
</body>
</html>