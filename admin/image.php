<!-- <?PHP
	if (isset($_POST['upload'])) {
		$target = "images/".basename($_FILES['image']['name']);

		$db = mysqli_connect("localhost","root","","ngo");

		$image = $_FILES['image']['name'];
         
        $sql = "INSERT INTO image (image) VALUES ('$image')";
        mysqli_query($db,$sql);

        if(move_uploaded_file($_FILES['image']['tmp_name'].$target)) {
        	$msg = "Image uploaded succefully";
        }
        else{
        	$msg = "There was a proble upload file";
        }
	}

?> -->
<?php
if(move_uploaded_file($temp_name,$target_path)) {

$query_upload="INSERT INTO image ('image', 'image_path', 'submission_date') VALUES ('".$target_path."','".date("Y-m-d")."')";

mysqli_query($conn,$query_upload) or die("error in $query_upload == ----> ".mysqli_error());  

}else{

   exit("Error While uploading image on the server");
} 
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>image</title>
</head>
<body>
  <div id="content">
  	<form method="POST" action="image.php" enctype="multipart/form-data">
  		<input type="hidden" name="size" value="1000000">
  		<div>
  			<input type="file" name="image">
  		</div>
  		<div>
  			<input type="submit" name="upload" value="Uplaod Image">
  		</div>
  		
  	</form>
  </div>
</body>
</html>