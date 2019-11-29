<?php 
$uname = $_POST['uname'];
$password = $_POST['password'];
session_start();

// Create connection
$conn=mysqli_connect("localhost","root","","ngo");
$result=mysqli_query($conn,"SELECT * FROM `login` WHERE `uname`='$uname' && `password`='$password'");
$count=mysqli_num_rows($result);
// echo $count;
if ($count==1) {
	 
	$_SESSION['log']=1;
	echo "<script type='text/javascript'>\n"; 
	echo "alert('Welcome to Dashboard');\n"; 
	echo 'window.location.href = "dashboard.php";';
	echo "</script>"; 
}
else {
	echo "login (or) password incorrect";
	header("refresh:2;url=index.php");
}
 
?>
