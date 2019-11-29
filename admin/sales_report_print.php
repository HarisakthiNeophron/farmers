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
  $from_date=$_POST['from_date'];
  $to_date=$_POST['to_date'];$branch=$_POST['branch'];$customer=$_POST['customer']; ?>		                                                  
  <body onload="window.print()">                                           
    <center>	<h3>Sales Report</h3>
      
      <h5>From : <b><?php display_date($from_date);?></b>  To : <b><?php display_date($to_date);?></b></h5>
      <table  border="1">
        <thead>
          <tr>
            <th class="sort-alpha">Sno</th>
            <th class="sort-alpha">Branch</th>
            <th class="sort-alpha">Date</th> 
            <th class="sort-alpha">Invoice no</th>
            <th class="sort-alpha">Customer</th>
            
            <th class="sort-alpha">Subtotal</th>
            <th class="sort-alpha">CGST</th><th class="sort-alpha">SGST</th><th class="sort-alpha">IGST</th><th class="sort-alpha">Total</th>
            
            
          </tr>
        </thead>
        <tbody>
          <?php  $vc="1";$tot_subtotal="0";$tot_cgst="0";$tot_sgst="0";$tot_igst="0";$tot_total="0";


          if($branch=="0")
          {
            $querys=mysql_query("SELECT * FROM sales where dated BETWEEN '$from_date' AND '$to_date' ORDER BY id ASC ");
          }
          else
          {
            if($customer==0)
            {
              $querys=mysql_query("SELECT * FROM sales where branch='$branch' AND dated BETWEEN '$from_date' AND '$to_date' ORDER BY id ASC");
            }
            else
            {
              $querys=mysql_query("SELECT * FROM sales where branch='$branch' AND dated BETWEEN '$from_date' AND '$to_date' AND customer='$customer' ORDER BY id ASC");

            }

          }
          WHILE($rows=mysql_fetch_array($querys)){
            $id=$rows['id'];$sales_id=$rows['id'];
            $dated=$rows['dated'];
            $invoice_no=$rows['invoice_no'];
            $customer=$rows['customer'];
            $branch=$rows['branch'];
            $notes=$rows['notes'];
            $total=$rows['total'];$tot_total=$tot_total+$total;
            $sub_total=$rows['sub_total'];$tot_subtotal=$tot_subtotal+$sub_total;
            $cgst=$rows['cgst'];$tot_cgst=$tot_cgst+$cgst;
            $sgst=$rows['sgst'];$tot_sgst=$tot_sgst+$sgst;
            $igst=$rows['igst'];$tot_igst=$tot_igst+$igst;
            ?>					
            <tr>
              <td><?php echo $vc;$vc=$vc+1;?></td>
              <td><?php 
              $sd=mysql_query("SELECT * FROM branches where id='$branch'");
              WHILE($rows=mysql_fetch_array($sd)){
                $branch_name=$rows['branch_name']; $branch_code=$rows['branch_code'];}echo $branch_name;	?></td>
                <td><?php echo date('d/m/Y',strtotime($dated)); ?></td>
                <td><?php echo $branch_code;?>/<?php echo $invoice_no;?></td>
                <td><?php 
                $sd=mysql_query("SELECT * FROM distributer where id='$customer'");
                WHILE($rows=mysql_fetch_array($sd)){
                  $company_name=$rows['company_name']; }echo $company_name;	?></td>

                  <td><?php echo $sub_total;?></td>
                  <td><?php echo $cgst;?></td>
                  <td><?php echo $sgst;?></td>
                  <td><?php echo $igst;?></td>
                  <td><?php echo $total;?></td>

                </tr>
                
              <?php  } ?>

              
              
              
            </tbody>
          </table>
          <center><h3>Sub Total : <?php echo $tot_subtotal;?></h3></center>
          <center><h3>CGST Total : <?php echo $tot_cgst;?></h3></center>
          <center><h3>SGST Total : <?php echo $tot_sgst;?></h3></center>
          <center><h3>IGST Total : <?php echo $tot_igst;?></h3></center>
          <center><h3>Total : <?php echo $tot_total;?></h3></center>
        <?php } ?>											  
        
        
        
      </center>
      
    </body>