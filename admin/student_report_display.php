<?php
$from = $_GET['from_date'];
$from_date = strtotime($from);
$to = $_GET['to_date'];
$to_date = strtotime($to);
$student = $_GET['student_name'];
$student_name = $student;

	include 'connection.php';


 	mysqli_select_db($conn,"ajax_demo");
 	if ($student_name == 0) {
 		$sql="SELECT * FROM student_scholarship WHERE date >= '".$from_date."' AND date <= ".$to_date."";
 	}else{
 		$sql="SELECT * FROM student_scholarship WHERE id = '".$student_name."'";	
 	}

 	
 	$result = mysqli_query($conn,$sql);
 	$value = [];
 	$path = "http://localhost/farmers/images/";
 	while($row = mysqli_fetch_array($result)) {
 		$value[] ="<tr><td>" . $row['id'] . "</td><td>" . $row['student_name'] . "</td><td>" . $row['farmers_name'] . "</td><td>" . $row['dob'] . "</td><td>" . $row['student_age'] . "</td><td>" . $row['student_aadhar'] . "</td><td>" . $row['student_contact'] . "</td><td>" . $row['address'] . "</td><td>" . $row['religion'] . "</td><td>" . $row['cast'] . "</td><td>" . $row['bank_account'] . "</td><td>" . $row['student_year'] . "</td><td>" . $row['student_address'] . "</td><td>" . $row['amount'] . "</td></tr>";
 	}
 	print_r($value);
 	return $value
?>
<!-- <td><img src='" .$path."".$row['profile_image'] . "'></td> -->