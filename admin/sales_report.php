<!DOCTYPE html>
<html>
<?php include('connection.php');include('functions.php'); ?>
<head>
 <title><?php include('connection.php');echo $comp_name;?></title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="UTF-8" />

 
 <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
 <!-- Bootstrap -->
 <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
 <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
 <link rel="stylesheet" href="assets/css/vendor/animate/animate.css">
 <link type="text/css" rel="stylesheet" media="all" href="assets/js/vendor/mmenu/css/jquery.mmenu.all.css" />
 <link rel="stylesheet" href="assets/js/vendor/videobackground/css/jquery.videobackground.css">
 <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">

 <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen.min.css">
 <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen-bootstrap.css">
 <link rel="stylesheet" href="assets/js/vendor/datatables/css/dataTables.bootstrap.css">
 <link rel="stylesheet" href="assets/js/vendor/datatables/css/ColVis.css">
 <link rel="stylesheet" href="assets/js/vendor/datatables/css/TableTools.css">
 <link rel="stylesheet" type="text/css" href="assets/select2/select2.css" />
 <link href="assets/css/minimal.css" rel="stylesheet">
 <link href="assets/css/minimal.css" rel="stylesheet">

 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->	<script>
      function showUser1(str) {
        if (str=="") {
          document.getElementById("txtHint1").innerHTML="";
          return;
        } 
        if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint1").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","show_cust.php?q="+str,true);
  xmlhttp.send();
}

setTimeout(function() {
  $('#alert').fadeOut('fast');
}, 2000);
</script>
</head>
<body class="bg-2">

 

  <!-- Wrap all page content here -->
  <div id="wrap">

    


    <!-- Make page fluid -->
    <div class="row">
      




      <!-- Fixed navbar -->
      <?php include('header.php');$emp_branch=$_COOKIE["branch"];  ?>
      <!-- Fixed navbar end -->
      




      
      <!-- Page content -->
      <div id="content" class="col-md-12">
        








        <!-- page header -->
        <div class="pageheader">
          

          <h2><i class="fa fa-lightbulb-o" style="line-height: 48px;padding-left: 0;"></i>Sales Report<span></span></h2>
          <br>


          
          <!-- /page header -->
          
          




          <!-- content main container -->
          <div class="main">




            <!-- row -->
            <div class="row">

              
              <!-- col 12 -->
              <div class="col-md-12">
                
                
                <!-- tile -->
                <section class="tile transparent">



                  <!-- tile body -->
                  <div class="tile-body rounded-corners">
                    <div class="row">
                     <form role="form" action="" method="POST" >
                      
                      <div class="form-group col-md-2">
                        <label for="exampleInput">From Date</label>
                        <input type="date" class="form-control" name="from_date"  id="exampleInput">
                      </div>
                      <div class="form-group col-md-2">
                        <label for="exampleInput">To Date</label>
                        <input type="date" class="form-control" name="to_date"  id="exampleInput">
                      </div>
                      <div class="form-group col-md-2">
                        <label for="exampleInput">Branch</label>
                        <select class="chosen-select chosen-transparent form-control" onchange="showUser1(this.value)" name="branch" required>
                          <option value="0">All</option>
                          <?php  
                          $query=mysql_query("SELECT * FROM branches ORDER BY id DESC");
                          WHILE($rows=mysql_fetch_array($query)){
                            $id=$rows['id'];
                            $branch_name=$rows['branch_name'];	
                            ?>	
                            <option value="<?php echo $id;?>"><?php echo $branch_name;?></option>
                            
                          <?php } ?>
                        </select>
                      </div> 
                       <div id="txtHint1"></div>
                      <div class="form-group col-md-2">
                        <label for="exampleInput"></label>
                        <button type="submit" name="sales_report" style="margin-top:10px;" class="btn btn-green" id="btn-submit">View</button>
                      </div>
                    </form>				
                  </div>
                  <?php

                  if(isset($_POST['sales_report']))
                  {
                    $from_date=$_POST['from_date'];
                    $to_date=$_POST['to_date'];$branch=$_POST['branch'];$customer=$_POST['customer'];

                    ?>        
                    <div class="table-responsive">
                      <center>
                       <form action="sales_report_print.php" method="post" target="_blank">
                         <input type="hidden" name="from_date" value="<?php echo $from_date;?>">
                         <input type="hidden" name="to_date" value="<?php echo $to_date;?>">
                         <input type="hidden" name="customer" value="<?php echo $customer;?>">
                         <input type="hidden" name="branch" value="<?php echo $branch;?>">
                         <button type="submit" name="sales_report" class="btn btn-success">Print</button>
                       </form>  
                      </center> 
                     <center><h4>Branch : <?php if($branch==0){echo"All";}else{display_branch($branch);} ?> | Customer : <?php if($customer==0){echo"All";}else{display_cust($customer);} ?></h4>
                      <h5>From : <b><?php display_date($from_date);?></b>  To : <b><?php display_date($to_date);?></b></h5>  </center>
                      <table  class="table table-datatable table-custom" id="advancedDataTable">
                        <thead>
                          <tr>
                            <th class="sort-alpha">Sno</th>
                            <th class="sort-alpha">Branch</th>
                            <th class="sort-alpha">Date</th> 
                            <th class="sort-alpha">Invoice no</th>
                            <th class="sort-alpha">Customer</th>
                            
                            <th class="sort-alpha">Subtotal</th>
                            <th class="sort-alpha">CGST</th>
                            <th class="sort-alpha">SGST</th>
                            <th class="sort-alpha">IGST</th>
                            <th class="sort-alpha">Total</th>
                            
                            <th class="sort-alpha">Items</th>
                            <th class="sort-amount">Options</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <?php  $vc="1";$tot_subtotal="0";$tot_cgst="0";$tot_sgst="0";$tot_igst="0";$tot_total="0";


                          if($branch=="0")
                          {
                            $querys=mysql_query("SELECT * FROM sales where dated BETWEEN '$from_date' AND '$to_date'ORDER BY id DESC ");
                          }
                          else
                          {
                            if($customer==0)
                            {
                              $querys=mysql_query("SELECT * FROM sales where branch='$branch' AND dated BETWEEN '$from_date' AND '$to_date'");
                            }
                            else
                            {
                              $querys=mysql_query("SELECT * FROM sales where branch='$branch' AND dated BETWEEN '$from_date' AND '$to_date' AND customer='$customer'");

                            }

                          }
                          WHILE($rows=mysql_fetch_array($querys)){
                            $id=$rows['id'];
                            $sales_id=$rows['id'];
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


                                  <td><form action="pro.php" method="POST" ><input type="hidden" name="sales_id" value="<?php echo $sales_id;?>">
                                    <button type="submit" name="view_sales_p" class="btn btn-success btn-xs">View</button>
                                  </form></td>
                                  <td><?php if($emp_desig==11){ ?>
                                    <a href="print_invoice.php?sales_id=<?php echo $id;?>" target="_blank" class="btn btn-primary btn-xs">Print 1</a>
                                    <a href="print_invs.php?sales_id=<?php echo $id;?>" target="_blank" class="btn btn-danger btn-xs">Print 2</a>
                                  <?php }else{ ?>
                                    <?php if($emp_branch==1){ ?>
                                      <a href="print_invoice.php?sales_id=<?php echo $id;?>" target="_blank" class="btn btn-primary btn-xs">Print </a>
                                    <?php  } ?>
                                    <?php if($emp_branch!=1){ ?>
                                      <a href="print_invs.php?sales_id=<?php echo $id;?>" target="_blank" class="btn btn-danger btn-xs">Print </a>
                                    <?php  } ?>
                                  <?php  } ?>
                                </td>
                              </tr>
                              
                            <?php  } ?>

                            
                            
                            
                          </tbody>
                        </table>
                        <center><h3>Sub Total : <?php echo $tot_subtotal;?></h3></center>
                        <center><h3>CGST Total : <?php echo $tot_cgst;?></h3></center>
                        <center><h3>SGST Total : <?php echo $tot_sgst;?></h3></center>
                        <center><h3>IGST Total : <?php echo $tot_igst;?></h3></center>
                        <center><h3>Total : <?php echo $tot_total;?></h3></center>
                      </div>
                    <?php } ?>
                  </div>
                  <!-- /tile body -->
                  


                </section> <!-- /tile -->




                

                

                

              </div>
              <!-- /col 12 -->


              
            </div>
            <!-- /row -->
            


          </div>
          <!-- /content container -->






        </div>
        <!-- Page content end -->




        



      </div>
      <!-- Make page fluid-->




    </div>
    <!-- Wrap all page content end -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="../../google-code-prettify.googlecode.com/svn/loader/run_prettifyf793.js?lang=css&amp;skin=sons-of-obsidian"></script>
    <script type="text/javascript" src="assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
    <script type="text/javascript" src="assets/js/vendor/videobackground/jquery.videobackground.js"></script>
    <script type="text/javascript" src="assets/js/vendor/blockui/jquery.blockUI.js"></script>\

    <script src="assets/js/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/vendor/datatables/ColReorderWithResize.js"></script>
    <script src="assets/js/vendor/datatables/colvis/dataTables.colVis.min.js"></script>
    <script src="assets/js/vendor/datatables/tabletools/ZeroClipboard.js"></script>
    <script src="assets/js/vendor/datatables/tabletools/dataTables.tableTools.min.js"></script>
    <script src="assets/js/vendor/datatables/dataTables.bootstrap.js"></script>

    <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>

    <script src="assets/js/minimal.min.js"></script>
    <script src="assets/select2/select2.js"></script>
    <script src="assets/select-init.js"></script>

    <script>
      $(function(){

      // Add custom class to pagination div
      $.fn.dataTableExt.oStdClasses.sPaging = 'dataTables_paginate paging_bootstrap paging_custom';

      /*************************************************/
      /**************** BASIC DATATABLE ****************/
      /*************************************************/

      /* Define two custom functions (asc and desc) for string sorting */
      jQuery.fn.dataTableExt.oSort['string-case-asc']  = function(x,y) {
        return ((x < y) ? -1 : ((x > y) ?  1 : 0));
      };
      
      jQuery.fn.dataTableExt.oSort['string-case-desc'] = function(x,y) {
        return ((x < y) ?  1 : ((x > y) ? -1 : 0));
      };

      /* Add a click handler to the rows - this could be used as a callback */
      $("#basicDataTable tbody tr").click( function( e ) {
        if ( $(this).hasClass('row_selected') ) {
          $(this).removeClass('row_selected');
        }
        else {
          oTable01.$('tr.row_selected').removeClass('row_selected');
          $(this).addClass('row_selected');
        }

        // FadeIn/Out delete rows button
        if ($('#basicDataTable tr.row_selected').length > 0) {
          $('#deleteRow').stop().fadeIn(300);
        } else {
          $('#deleteRow').stop().fadeOut(300);
        }
      });

      /* Build the DataTable with third column using our custom sort functions */
      var oTable01 = $('#basicDataTable').dataTable({
        "sDom":
        "R<'row'<'col-md-6'l><'col-md-6'f>r>"+
        "t"+
        "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
        "oLanguage": {
          "sSearch": ""
        },
        "aaSorting": [ [0,'asc'], [1,'asc'] ],
        "aoColumns": [
        null,
        null,
        { "sType": 'string-case' },
        null,
        null
        ],
        "fnInitComplete": function(oSettings, json) { 
          $('.dataTables_filter input').attr("placeholder", "Search");
        }
      });

      // Append delete button to table
      var deleteRowLink = '<a href="#" id="deleteRow" class="btn btn-red btn-xs delete-row">Delete selected row</a>'
      $('#basicDataTable_wrapper').append(deleteRowLink);

      /* Add a click handler for the delete row */
      $('#deleteRow').click( function() {
        var anSelected = fnGetSelected(oTable01);
        if (anSelected.length !== 0 ) {
          oTable01.fnDeleteRow(anSelected[0]);
          $('#deleteRow').stop().fadeOut(300);
        }
      });

      /* Get the rows which are currently selected */
      function fnGetSelected(oTable01Local){
        return oTable01Local.$('tr.row_selected');
      };

      /*******************************************************/
      /**************** INLINE EDIT DATATABLE ****************/
      /*******************************************************/

      function restoreRow (oTable02, nRow){
        var aData = oTable02.fnGetData(nRow);
        var jqTds = $('>td', nRow);
        
        for ( var i=0, iLen=jqTds.length ; i<iLen ; i++ ) {
          oTable02.fnUpdate( aData[i], nRow, i, false );
        }
        
        oTable02.fnDraw();
      };

      function editRow (oTable02, nRow){
        var aData = oTable02.fnGetData(nRow);
        var jqTds = $('>td', nRow);
        jqTds[0].innerHTML = '<input type="text" value="'+aData[0]+'">';
        jqTds[1].innerHTML = '<input type="text" value="'+aData[1]+'">';
        jqTds[2].innerHTML = '<input type="text" value="'+aData[2]+'">';
        jqTds[3].innerHTML = '<input type="text" value="'+aData[3]+'">';
        jqTds[4].innerHTML = '<input type="text" value="'+aData[4]+'">';
        jqTds[5].innerHTML = '<a class="edit save" href="#">Save</a><a class="delete" href="#">Delete</a>';
      };

      function saveRow (oTable02, nRow){
        var jqInputs = $('input', nRow);
        oTable02.fnUpdate( jqInputs[0].value, nRow, 0, false );
        oTable02.fnUpdate( jqInputs[1].value, nRow, 1, false );
        oTable02.fnUpdate( jqInputs[2].value, nRow, 2, false );
        oTable02.fnUpdate( jqInputs[3].value, nRow, 3, false );
        oTable02.fnUpdate( jqInputs[4].value, nRow, 4, false );
        oTable02.fnUpdate( '<a class="edit" href="#">Edit</a><a class="delete" href="#">Delete</a>', nRow, 5, false );
        oTable02.fnDraw();
      };



      var oTable02 = $('#inlineEditDataTable').dataTable({
        "sDom":
        "R<'row'<'col-md-6'l><'col-md-6'f>r>"+
        "t"+
        "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
        "oLanguage": {
          "sSearch": ""
        },
        "aoColumnDefs": [
        { 'bSortable': false, 'aTargets': [ "no-sort" ] }
        ],
        "fnInitComplete": function(oSettings, json) { 
          $('.dataTables_filter input').attr("placeholder", "Search");
        }
      });

      // Append add row button to table
      var addRowLink = '<a href="#" id="addRow" class="btn btn-green btn-xs add-row">Add row</a>'
      $('#inlineEditDataTable_wrapper').append(addRowLink);

      var nEditing = null;

      // Add row initialize
      $('#addRow').click( function (e) {
        e.preventDefault();

        // Only allow a new row when not currently editing
        if ( nEditing !== null ) {
          return;
        }
        
        var aiNew = oTable02.fnAddData([ '', '', '', '', '', '<a class="edit" href="">Edit</a>', '<a class="delete" href="">Delete</a>' ]);
        var nRow = oTable02.fnGetNodes(aiNew[0]);
        editRow(oTable02, nRow);
        nEditing = nRow;

        $(nRow).find('td:last-child').addClass('actions text-center');
      });

      // Delete row initialize
      $(document).on( "click", "#inlineEditDataTable a.delete", function(e) {
        e.preventDefault();
        
        var nRow = $(this).parents('tr')[0];
        oTable02.fnDeleteRow( nRow );
      });

      // Edit row initialize
      $(document).on( "click", "#inlineEditDataTable a.edit", function(e) {
        e.preventDefault();
        
        /* Get the row as a parent of the link that was clicked on */
        var nRow = $(this).parents('tr')[0];
        
        if (nEditing !== null && nEditing != nRow){
          /* A different row is being edited - the edit should be cancelled and this row edited */
          restoreRow(oTable02, nEditing);
          editRow(oTable02, nRow);
          nEditing = nRow;
        }
        else if (nEditing == nRow && this.innerHTML == "Save") {
          /* This row is being edited and should be saved */
          saveRow(oTable02, nEditing);
          nEditing = null;
        }
        else {
          /* No row currently being edited */
          editRow(oTable02, nRow);
          nEditing = nRow;
        }
      });

      /******************************************************/
      /**************** DRILL DOWN DATATABLE ****************/
      /******************************************************/

      var anOpen = [];

      var oTable03 = $('#drillDownDataTable').dataTable({
        "sDom":
        "R<'row'<'col-md-6'l><'col-md-6'f>r>"+
        "t"+
        "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
        "oLanguage": {
          "sSearch": ""
        },
        "aoColumnDefs": [
        { 'bSortable': false, 'aTargets': [ "no-sort" ] }
        ],
        "aaSorting": [[ 1, "asc" ]],
        "bProcessing": true,
        "sAjaxSource": "assets/js/vendor/datatables/ajax/sources/objects.txt",
        "aoColumns": [
        {
          "mDataProp": null,
          "sClass": "control text-center",
          "sDefaultContent": '<a href="#"><i class="fa fa-plus"></i></a>'
        },
        { "mDataProp": "engine" },
        { "mDataProp": "browser" },
        { "mDataProp": "grade" }
        ],
        "fnInitComplete": function(oSettings, json) { 
          $('.dataTables_filter input').attr("placeholder", "Search");
        }
      });

      $(document).on( 'click', '#drillDownDataTable td.control', function () {
        var nTr = this.parentNode;
        var i = $.inArray( nTr, anOpen );

        $(anOpen).each( function () {
          if ( this !== nTr ) {
            $('td.control', this).click();
          }
        });
        
        if ( i === -1 ) {
          $('i', this).removeClass().addClass('fa fa-minus');
          $(this).parent().addClass('drilled');
          var nDetailsRow = oTable03.fnOpen( nTr, fnFormatDetails(oTable03, nTr), 'details' );
          $('div.innerDetails', nDetailsRow).slideDown();
          anOpen.push( nTr );
        }
        else {
          $('i', this).removeClass().addClass('fa fa-plus');
          $(this).parent().removeClass('drilled');
          $('div.innerDetails', $(nTr).next()[0]).slideUp( function () {
            oTable03.fnClose( nTr );
            anOpen.splice( i, 1 );
          } );
        }

        return false;
      });
      
      function fnFormatDetails( oTable03, nTr ){
        var oData = oTable03.fnGetData( nTr );
        var sOut =
        '<div class="innerDetails">'+
        '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr><td>Rendering engine:</td><td>'+oData.engine+'</td></tr>'+
        '<tr><td>Browser:</td><td>'+oData.browser+'</td></tr>'+
        '<tr><td>Platform:</td><td>'+oData.platform+'</td></tr>'+
        '<tr><td>Version:</td><td>'+oData.version+'</td></tr>'+
        '<tr><td>Grade:</td><td>'+oData.grade+'</td></tr>'+
        '</table>'+
        '</div>';
        return sOut;
      };

      /****************************************************/
      /**************** ADVANCED DATATABLE ****************/
      /****************************************************/

      var oTable04 = $('#advancedDataTable').dataTable({
        "sDom":
        "<'row'<'col-md-4'l><'col-md-4 text-center sm-left'T C><'col-md-4'f>r>"+
        "t"+
        "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
        "oLanguage": {
          "sSearch": ""
        },
        "oTableTools": {
          "sSwfPath": "assets/js/vendor/datatables/tabletools/swf/copy_csv_xls_pdf.swf",
          "aButtons": [
          
          ]
        },
        "fnInitComplete": function(oSettings, json) { 
          $('.dataTables_filter input').attr("placeholder", "Search");
        },
        "oColVis": {
          "buttonText": '<i class="fa fa-eye"></i>'
        }
      });

      $('.ColVis_MasterButton').on('click', function(){
        var newtop = $('.ColVis_collection').position().top - 45; 

        $('.ColVis_collection').addClass('dropdown-menu');
        $('.ColVis_collection>li>label').addClass('btn btn-default')     
        $('.ColVis_collection').css('top', newtop + 'px');
      });

      $('.DTTT_button_collection').on('click', function(){
        var newtop = $('.DTTT_dropdown').position().top - 45;   
        $('.DTTT_dropdown').css('top', newtop + 'px');
      });

      //initialize chosen
      $('.dataTables_length select').chosen({disable_search_threshold: 10});
      
    })

$('#btn-submit').click(function(){
  alert('fddf');
})

  </script>
</body>
</html>

