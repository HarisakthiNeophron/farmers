 <?php
 include 'connection.php';
 $today=date("Y-m-d");
 $timed=date("h:i:sa");
 $datetime= date('d/m/Y h:i A', time()); 
 ?>
 <style>
  table {
    border-collapse: collapse;
    width:90%;
    font-size:12px;
  }
  td,th
  {
    padding:3px;
  }
</style>
<?php 	 
if(isset($_POST['sales_report']))
{
   ?>		                                                  
  <body onload="window.print()">                                           
    <center>	<h3>Student Report</h3>

      <table  border="1">
        <thead>
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
           <th>Student Image</th>
           <th>Amount</th> 


         </tr>
       </thead>
       <tbody>
        <?php  $sno="1";
        $query=mysqli_query($conn,"select * from student_scholarship ORDER BY id DESC");
        while($row=mysqli_fetch_array($query)){
          $id=$row['id']; 
          $student_name=$row['student_name'];
          $farmers_name=$row['farmers_name'];
          $dob=$row['dob']; 
          $student_age=$row['student_age'];
          $student_aadhar=$row['student_aadhar'];
          $student_contact=$row['student_contact'];
          $address=$row['address'];
          $religion=$row['religion'];
          $cast=$row['cast'];
          $bank_account=$row['bank_account'];
          $student_year=$row['student_year'];
          $student_address=$row['student_address'];
          $profile_image=$row['profile_image'];
          $amount=$row['amount'];
          ?>
          <tr>
            <td><?php echo $sno;$sno=$sno+1;?></td>
            <td><?php echo $student_name;?></td>
            <td><?php echo $farmers_name;?></td>
            <td><?php echo $dob;?></td> 
            <td><?php echo $student_age;?></td>
            <td><?php echo $student_aadhar;?></td>
            <td><?php echo $student_contact;?></td>
            <td><?php echo $address;?></td>
            <td><?php echo $religion;?></td>
            <td><?php echo $cast;?></td>
            <td><?php echo $bank_account;?></td>
            <td><?php echo $student_year;?></td>
            <td><?php echo $student_address;?></td>
            <td>
              <img src='../upload_2/<?php echo $row['profile_image'];?>' width="100px">
            </td> 
            <td><?php echo $amount;?></td>
             

          </tr>

        <?php  } ?> 
      </tbody>
    </table>

  <?php } ?>											  



</center>

</body>