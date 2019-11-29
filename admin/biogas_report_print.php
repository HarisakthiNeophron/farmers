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
    <center>	<h3>Biogas Report</h3>

      <table  border="1">
        <thead>
          <tr>
           <th>S.No</th>
           <th>firstname</th>
           <th>Father Name</th>
           <th>Aadhar Number</th>
           <th>Contact</th>
           <th>Address</th>
           <th>Amount</th> 
          </tr>
       </thead>
       <tbody>
        <?php  $sno="1";
           $query=mysqli_query($conn,"SELECT * FROM biogas_scholarship ORDER BY id DESC");
           WHILE($rows=mysqli_fetch_array($query)){
             $id=$rows['id']; 
             $firstname=$rows['firstname'];
             $father_name=$rows['father_name'];
             $student_aadhar=$rows['student_aadhar'];
             $contact=$rows['contact'];
             $address=$rows['address'];
             $amount=$rows['amount'];

          ?>
          <tr>
             <td style="text-align: center;"><?php echo $sno;$sno=$sno+1;?></td>
             <td style="text-align: center;"><?php echo $firstname;?></td>
             <td style="text-align: center;"><?php echo $father_name;?></td>
             <td style="text-align: center;"><?php echo $student_aadhar;?></td>
             <td style="text-align: center;"><?php echo $contact;?></td>
             <td style="text-align: center;"><?php echo $address;?></td>
             <td style="text-align: center;"><?php echo $amount;?></td>
             
            </tr>

        <?php  } ?> 
      </tbody>
    </table>

  <?php } ?>											  



</center>

</body>