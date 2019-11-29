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
// header("Location:student.php");
// }
// }
  $conn = mysqli_connect('localhost', 'root', '','ngo');
 
  if (isset($_POST['save_user_1'])) {
  header('location:student.php');
     
   
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
    $profileImageName = time() . '_' . $_FILES['profileImage']['name'];
        $target = 'upload/' . $profileImageName;
    
    if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){
       $sql = "INSERT INTO student_scholarship (profile_image,student_name,farmers_name,dob,student_age,student_aadhar,student_contact,address,religion,cast,bank_account,student_year,student_address,amount,created_to,updated_to) VALUES ('$profileImageName','$student_name','$farmers_name','$dob','$student_age','$student_aadhar','$student_contact','$address','$religion','$cast','$bank_account','$student_year','$student_address','$amount','$created_to','$updated_to')";
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
$ins=mysqli_query($conn,"INSERT INTO biogas_scholarship values(DEFAULT,'$firstname','$father_name','$student_aadhar','$contact','$address','$amount','$created_to','$updated_to')");
if($ins)
{ 
header("Location:biogas.php");
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
$ins=mysqli_query($conn,"INSERT INTO solar_scholarship values(DEFAULT,'$firstname','$father_name','$student_aadhar','$contact','$address','$amount','$created_to','$updated_to')");
if($ins)
{ 
header("Location:solar.php");
}
}

?>