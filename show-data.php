<?php
	include 'database.php';

	$obj = new Database();
    $join = "student3 ON student.city = student3.cid ";
    $colName = "student.ID,student.Name,student.Sub,student3.cityname";

	// $obj->select('student','*',$join,null,null,2);
    $obj->select('student',$colName,$join,null,null,2);
    $result = $obj->getResult();

    echo "<table border= '1', width = '500px'>
         <tr>
          <th>Name</th>
          <th>Sub</th>
          <th>City</th>
         </tr>
          ";
    foreach ($result as list( "Name"=>$name, "Sub"=>$sub, "cityname"=>$city)) {
       echo "<tr>
               <td>$name </td> 
               <td> $sub </td> 
               <td>$city </td>
             </tr> ";
    }
    echo "</table>";
	// echo "Select result is : ";
	// echo "<br>";
	// print_r($obj->getResult());
    // echo "<br>";
	$obj->pagination('student',$join,null,2);



?>