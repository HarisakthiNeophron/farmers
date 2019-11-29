<?php include('connection.php');
///Insert student
// if(isset($_POST['submit']))
// {
// $student_name=$_POST['student_name'];
// $farmers_name=$_POST['farmers_name'];
// $dob=$_POST['dob'];
// $student_age=$_POST['student_age'];
// $student_aadhar=$_POST['student_aadhar'];
// $student_contact=$_POST['student_contact'];
// $address=$_POST['address'];
// $religion=$_POST['religion'];
// $cast=$_POST['cast'];
// $bank_account=$_POST['bank_account'];
// $student_year=$_POST['student_year'];
// $student_address=$_POST['student_address'];
// $amount=$_POST['amount'];
// $ins=mysqli_query($con,"INSERT INTO student_scholarship values(DEFAULT,'$student_name','$farmers_name','$dob','$student_age','$student_aadhar','$student_contact','$address','$religion','$cast','$bank_account','$student_year','$student_address','$amount')");
// if($ins)
// {  
// 	echo "<script type='text/javascript'>\n"; 
// 	echo "alert('Your Registration Successfully');\n"; 
// 	echo 'window.location.href = "invoice-student.php";';
// 	echo "</script>"; 

//   // header("Location:student.php");
// }
// }
  
 
  if (isset($_POST['save_user_1'])) {
  header('location:invoice-student.php');
  	 
  	$student_name = $_POST['student_name']; 
    $farmers_name = $_POST['farmers_name'];
    $dob = $_POST['dob'];
    $student_age = $_POST['student_age'];
    $student_aadhar = $_POST['student_aadhar'];
    $student_contact = $_POST['student_contact'];
    $address = $_POST['address'];
    $religion = $_POST['religion'];
    $cast = $_POST['cast'];     
    $bank_account = $_POST['bank_account'];
    $student_year = $_POST['student_year'];
    $student_address = $_POST['student_address'];
    $amount = $_POST['amount'];
    $created_to = $_POST['created_to'];
    $updated_to = $_POST['updated_to'];
    $date = $_POST['date'];
  	$profileImageName = time() . '_' . $_FILES['profileImage']['name'];
  	    $target = '../upload_2/' . $profileImageName;
    
    if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){
       $sql = "INSERT INTO student_scholarship (profile_image,student_name,farmers_name,dob,student_age,student_aadhar,student_contact,address,religion,cast,bank_account,student_year,student_address,amount,created_to,updated_to,date) VALUES ('$profileImageName','$student_name','$farmers_name','$dob','$student_age','$student_aadhar','$student_contact','$address','$religion','$cast','$bank_account','$student_year','$student_address','$amount','$created_to','$updated_to','$date')";
       if(mysqli_query($conn, $sql)){
       	$msg = "Image uploaded & saved to database";
        $cls_class = "alert-success";
       }
       else{
       	$msg = "Database Error: failed to sasve user";
    	$cls_class = "alert-danger";
       }
        
    }
    else{
    	$msg = "failed to upload to uploaded";
    	$cls_class = "alert-danger";
    }
  }
 
 
 

///Edit Student
if(isset($_POST['edit_detail']))
{ 
	$student_name=$_POST['student_name'];
	$farmers_name=$_POST['farmers_name'];
	$dob=$_POST['dob'];  
	$student_age=$_POST['student_age'];  
	$student_aadhar=$_POST['student_aadhar'];  
	$student_contact=$_POST['student_contact'];  
	$address=$_POST['address'];  
	$religion=$_POST['religion'];
	$cast=$_POST['cast'];  
	$bank_account=$_POST['bank_account'];
	$student_year=$_POST['student_year'];
	$student_address=$_POST['student_address'];  
	$amount=$_POST['amount'];
	$created_to = $_POST['created_to'];
    $updated_to = $_POST['updated_to'];  
	$id=$_POST['id'];


	$ins=mysqli_query($conn,"UPDATE student_scholarship set student_name='$student_name',farmers_name='$farmers_name',dob='$dob',student_age='$student_age',student_aadhar='$student_aadhar',student_contact='$student_contact',address='$address',religion='$religion',cast='$cast',bank_account='$bank_account',student_year='$student_year',student_address='$student_address',amount='$amount',created_to='$created_to',updated_to='$updated_to' where id='$id'");
	if($ins)
	{ 
		header("Location:student_display.php");
	}
}

//Delete Student
if(isset($_POST['delete_detail']))
{
	$id=$_POST['id'];
	$ins=mysqli_query($conn,"DELETE from student_scholarship where id='$id'");
	if($ins)
	{ 
		header("Location:student_display.php");
	}
}

  

///Insert Biogs
if(isset($_POST['submit_1']))
{
$firstname=$_POST['firstname'];
$father_name=$_POST['father_name'];
$student_aadhar=$_POST['student_aadhar'];
$contact=$_POST['contact'];
$address=$_POST['address']; 
$amount=$_POST['amount']; 
 $created_to = $_POST['created_to'];
    $updated_to = $_POST['updated_to'];
     $date = $_POST['date'];
$ins=mysqli_query($conn,"INSERT INTO biogas_scholarship values(DEFAULT,'$firstname','$father_name','$student_aadhar','$contact','$address','$amount','$created_to','$updated_to','$date')");
if($ins)
{ 
	echo "<script type='text/javascript'>\n"; 
	echo "alert('Your Registration Successfully');\n"; 
	echo 'window.location.href = "invoice-biogas.php";';
	echo "</script>";
// header("Location:biogas.php");
}
}

///Edit Biogas
if(isset($_POST['edit_biogas']))
{ 
	$firstname=$_POST['firstname'];
	$father_name=$_POST['father_name'];
	$student_aadhar=$_POST['student_aadhar'];  
	$contact=$_POST['contact'];    
	$address=$_POST['address']; 
	$amount=$_POST['amount'];
	$created_to = $_POST['created_to'];
    $updated_to = $_POST['updated_to'];     
	$id=$_POST['id'];


	$ins=mysqli_query($conn,"UPDATE biogas_scholarship set firstname='$firstname',father_name='$father_name',student_aadhar='$student_aadhar',contact='$contact',address='$address',amount='$amount',created_to='$created_to',updated_to='$updarted_to',date='$date' where id='$id'");
	if($ins)
	{ 
		header("Location:biogas_display.php");
	}
}


//Delete Biogas
if(isset($_POST['delete_biogas']))
{
	$id=$_POST['id'];
	$ins=mysqli_query($conn,"DELETE from biogas_scholarship where id='$id'");
	if($ins)
	{ 
		header("Location:biogas_display.php");
	}
}


///Insert Solar
if(isset($_POST['submit_2']))
{
$firstname=$_POST['firstname'];
$father_name=$_POST['father_name'];
$student_aadhar=$_POST['student_aadhar'];
$contact=$_POST['contact'];
$address=$_POST['address']; 
$amount=$_POST['amount'];
$created_to = $_POST['created_to'];
$updated_to = $_POST['updated_to'];
 $date = $_POST['date'];
$ins=mysqli_query($conn,"INSERT INTO solar_scholarship values(DEFAULT,'$firstname','$father_name','$student_aadhar','$contact','$address','$amount','$created_to','$updated_to','$date')");
if($ins)
{ 
	echo "<script type='text/javascript'>\n"; 
	echo "alert('Your Registration Successfully');\n"; 
	echo 'window.location.href = "invoice-solar.php";';
	echo "</script>";
// header("Location:solar.php");
}
}

///Edit Solar
if(isset($_POST['edit_solar']))
{ 
	$firstname=$_POST['firstname'];
	$father_name=$_POST['father_name'];
	$student_aadhar=$_POST['student_aadhar'];  
	$contact=$_POST['contact'];    
	$address=$_POST['address']; 
	$amount=$_POST['amount'];
	$created_to = $_POST['created_to'];
    $updated_to = $_POST['updated_to'];    
	$id=$_POST['id'];


	$ins=mysqli_query($conn,"UPDATE solar_scholarship set firstname='$firstname',father_name='$father_name',student_aadhar='$student_aadhar',contact='$contact',address='$address',amount='$amount',created_to='$created_to',updated_to='$updated_to' where id='$id'");
	if($ins)
	{ 
		header("Location:solar_display.php");
	}
}


//Delete Solar
if(isset($_POST['delete_solar']))
{
	$id=$_POST['id'];
	$ins=mysqli_query($conn,"DELETE from solar_scholarship where id='$id'");
	if($ins)
	{ 
		header("Location:solar_display.php");
	}
}

?>