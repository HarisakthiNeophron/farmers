 <!DOCTYPE html>
 <html>
 <head>
 	<style>
 		table {
 			width: 100%;
 			border-collapse: collapse;
 		}

 		table, td, th {
 			border: 1px solid black;
 			padding: 5px;
 		}

 		th {text-align: left;}
 	</style>
 </head>
 <body> 
 	<?php
 	$q = intval($_GET['q']);

 	include 'connection.php';


 	mysqli_select_db($conn,"ajax_demo");
 	$sql="SELECT * FROM student_scholarship WHERE id = '".$q."'";
 	$result = mysqli_query($conn,$sql);

 	echo "<table>
 	<tr>
 	<th>S.No</th>
 	<th>Student Scholarship</th>
 	<th>Farmers Name</th>
 	<th>DOB</th> 
 	<th>Student Age</th>
 	<th>Student Aadhar</th>
 	<th>Student Contact</th>
 	<th>Address</th>
 	<th>Religion</th>
 	<th>Cast</th>
 	<th>Bank Account</th>
 	<th>Student Year</th>
 	<th>Student Address</th> 
 	<th>Amount</th> 
 	</tr>";
 	while($row = mysqli_fetch_array($result)) {
 		echo "<tr>";
 		echo "<td>" . $row['id'] . "</td>";
 		echo "<td>" . $row['student_name'] . "</td>";
 		echo "<td>" . $row['farmers_name'] . "</td>";
 		echo "<td>" . $row['dob'] . "</td>";
 		echo "<td>" . $row['student_age'] . "</td>";
 		echo "<td>" . $row['student_aadhar'] . "</td>";
 		echo "<td>" . $row['student_contact'] . "</td>";
 		echo "<td>" . $row['address'] . "</td>";
 		echo "<td>" . $row['religion'] . "</td>";
 		echo "<td>" . $row['cast'] . "</td>";
 		echo "<td>" . $row['bank_account'] . "</td>";
 		echo "<td>" . $row['student_year'] . "</td>";
 		echo "<td>" . $row['student_address'] . "</td>";
 		echo "<td>" . $row['amount'] . "</td>"; 
 		echo "</tr>";
 	}
 	echo "</table>";
 	mysqli_close($conn);
 	?>
 </body>
 </html>