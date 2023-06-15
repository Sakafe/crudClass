<?php
	include 'database.php';

	$obj = new Database();
    $join = "student3 ON student.city = student3.cid ";
    $colName = "student.ID,student.Name,student.Sub,student3.cityname";

	// $obj->select('student','*',$join,null,null,2);
    $obj->select('student',$colName,$join,null,null,2);

	echo "Select result is : ";
	echo "<br>";
	print_r($obj->getResult());
    echo "<br>";
	$obj->pagination('student',$join,null,2);

	// $obj->insert('students',['student_name'=>'Kumar Sanu','age'=>'22','city'=>'Delhi']);
	// echo "Insert result is : ";
	// print_r($obj->getResult());

	// $obj->update('students',['city'=>'Chandigarh'],'city="Goa"');
	// echo "Update result is : ";
	// print_r($obj->getResult());

	// $obj->delete('students','age ="20"');
	// echo "Delete result is : ";
	// print_r($obj->getResult());

	// $obj->sql('SELECT * FROM students WHERE age = "20"');
	// echo "SQL result is : ";
	// print_r($obj->getResult());



?>