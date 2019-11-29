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
 	$sql="SELECT * FROM solar_scholarship WHERE id = '".$q."'";
 	$result = mysqli_query($conn,$sql);

 	echo "<table>
 	<tr>
 	<th>S.No</th>
 	<th>First Name</th>
 	<th>Father Name</th>  
 	<th>Student Aadhar</th>
 	<th>Contact</th>
 	<th>Address</th>  
 	<th>Amount</th> 
 	</tr>";
 	while($row = mysqli_fetch_array($result)) {
 		echo "<tr>";
 		echo "<td>" . $row['id'] . "</td>";
 		echo "<td>" . $row['firstname'] . "</td>";
 		echo "<td>" . $row['father_name'] . "</td>"; 
 		echo "<td>" . $row['student_aadhar'] . "</td>";
 		echo "<td>" . $row['contact'] . "</td>";
 		echo "<td>" . $row['address'] . "</td>"; 
 		echo "<td>" . $row['amount'] . "</td>"; 
 		echo "</tr>";
 	}
 	echo "</table>";
 	mysqli_close($conn);
 	?>
 </body>
 </html>