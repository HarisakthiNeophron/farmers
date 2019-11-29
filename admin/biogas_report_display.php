<?php
$from = $_GET['from_date'];
$from_date = strtotime($from);
$to = $_GET['to_date'];
$to_date = strtotime($to);
$name = $_GET['firstname'];
$firstname = $name;

	include 'connection.php';


 	mysqli_select_db($conn,"ajax_demo");
  

 	if ($firstname == 0 && $from_date && $to_date) {
 		$sql="SELECT * FROM biogas_scholarship WHERE date >= '".$from_date."' AND date <= ".$to_date."";
 	}elseif($firstname == 0){
 		$sql="SELECT * FROM biogas_scholarship";	
 	}elseif($firstname && $from_date && $to_date){
 		$sql="SELECT * FROM biogas_scholarship WHERE date >= '".$from_date."' AND date <= ".$to_date." AND id = ".$firstname."";	
 	}else{
 		$sql="SELECT * FROM biogas_scholarship WHERE id = '".$firstname."'";	
 	}

 	
 	$result = mysqli_query($conn,$sql);
 	$value = []; 
 	while($row = mysqli_fetch_array($result)) {
 		$value[] ="<tr><td>" . $row['id'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['father_name'] . "</td><td>" . $row['student_aadhar'] . "</td><td>" . $row['contact'] . "</td><td>" . $row['address'] . "</td><td>" . $row['amount'] . "</td></tr>";
 	}
 	print_r($value);
 	return $value
?>
<!-- <td><img src='" .$path."".$row['profile_image'] . "'></td> -->