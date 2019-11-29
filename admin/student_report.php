 
<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Student Scholarship</title>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta name="author" content="Phoenixcoded" />
	<meta http-equiv='Pragma' content='no-cache'>
	<meta http-equiv='Expires' content='-1'>
	<link rel="icon" href="images/favicon.jpg" type="image/x-icon">
	<script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
	<script type="text/javascript" src="files/assets/js/pace.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

	<link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

	<link rel="stylesheet" type="text/css" href="files/assets/css/font-awesome-n.min.css">

	<link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="files/assets/css/pages.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		#profileDisplay{
			/*  display: block;*/
			width: 57%;
			margin: 10px auto;
			border-radius: 100px;
			width: 175px;
			height: 175px;
		}
	</style>


	<script>
		// function showUser(str) {
		// 	if (str=="") {
		// 		document.getElementById("txtHint").innerHTML="";
		// 		return;
		// 	}
		// 	if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    // xmlhttp=new XMLHttpRequest();
  // } else { // code for IE6, IE5
//   	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//   }
//   xmlhttp.onreadystatechange=function() {
//   	if (this.readyState==4 && this.status==200) {
//   		document.getElementById("txtHint").innerHTML=this.responseText;
//   	}
//   }
//   xmlhttp.open("GET","show_student.php?q="+str,true);
//   xmlhttp.send();
// }
</script>




</head>
<body>
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a href="index.php">
							<img class="img-fluid" src="images/favicon.jpg" alt="Theme-Logo" />
						</a>
						<a class="mobile-menu" id="mobile-collapse" href="#!">
							<i class="fa fa-bars"></i>
						</a>
						<a class="mobile-options waves-effect waves-light">
							<i class="fa fa-sign-out"></i>
						</a>
					</div>
					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<a href="#" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
									<i class="fa fa-desktop"></i>
								</a>
							</li>

						</ul>
						<ul class="nav-right">


							<li class="header-notification">
								<div class="dropdown-primary dropdown">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-sign-out"></i>
										<span class="badge bg-c-red">5</span>
									</div>
									<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
										<li>
											<a href="index.php"><i class="fa fa-sign-out"> Logout</i></a>
										</li>


									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>



			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">

					<nav class="pcoded-navbar">
						<div class="nav-list">
							<div class="pcoded-inner-navbar main-menu">
								<div class="pcoded-navigation-label">Navigation</div>
								<ul class="pcoded-item pcoded-left-item">
									<li class="">
										<a href="dashboard.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-home"></i>
											</span>
											<span class="pcoded-mtext">Dashboard</span>
										</a>
									</li>
									<li class="">
										<a href="student.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-user"></i>
											</span>
											<span class="pcoded-mtext">Student Scholarship</span>
										</a>
									</li>
									<li class="">
										<a href="biogas.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-fire"></i>
											</span>
											<span class="pcoded-mtext">Biogas Scholarship</span>
										</a>
									</li>
									<li class="">
										<a href="solar.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-sun-o"></i>
											</span>
											<span class="pcoded-mtext">Solar Scholarship</span>
										</a>
									</li>
									<li class="pcoded-hasmenu">
										<a href="javascript:void(0)" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-credit-card"></i>
											</span>
											Reports 
										</a>
										<ul class="pcoded-submenu">
											<li class=" ">
												<a href="student_report.php" class="waves-effect waves-dark">
													<i class="fa fa-angle-right"></i>  Student Report  
												</a>
											</li> 
											<li class=" ">
												<a href="biogas_report.php" class="waves-effect waves-dark">
													<i class="fa fa-angle-right"></i>  Biogas Report
												</a>
											</li>
											<li class=" ">
												<a href="solar_report.php" class="waves-effect waves-dark">
													<i class="fa fa-angle-right"></i>   Solar Report 
												</a>
											</li>  

										</ul> 	
									</li>
								</ul>
							</div>
						</div>
					</nav>

					<div class="pcoded-content">

						<div class="page-header">
							<div class="page-block">
								<div class="row align-items-center">
									<div class="col-md-12">
										<div class="page-header-title">
											<h4 class="m-b-10">Student Reports</h4>
										</div>
										<br>
										<ul class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="dashboard.php">
													<i class="fa fa-home"></i> Dashboard
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>


						<div class="pcoded-inner-content">
							<div class="main-body">
								<div class="page-wrapper">

									<div class="page-body ">
										<div class="row scroll-2">
											<div class="col-sm-12">

												<div class="card">
													<div class="card-header">
														<h5>Student Scholarship</h5>
													</div>
													<div class="card-block">

														
														<!-- <form role="form" action="" method="POST" > -->
															<div class="row">

																<div class="form-group col-md-2">
																	<label for="exampleInput">From Date</label>
																	<input type="date" class="form-control from_date" name="from_date"  id="exampleInput" style="width: 161px;">
																</div>
																<div class="form-group col-md-2">
																	<label for="exampleInput">To Date</label>
																	<input type="date" class="form-control to_date" name="to_date"  id="exampleInput" style="width: 161px;">
																</div>

																<div class="form-group col-md-2">
																	<label for="exampleInput">Display Name</label>

																	<select name="student_name" class="form-control student_name" style="width: 161px;border: 1px solid #ccc;">
																		<option value="0">All </option>
																		<?php
																		 
																		$query=mysqli_query($conn,"SELECT * FROM student_scholarship  ORDER BY id DESC");

																		WHILE($rows=mysqli_fetch_array($query))
																		{
																			$id=$rows['id']; 
																			$student_name=$rows['student_name'];

																			?>
																			<option value="<?php echo $id;?>"><?php echo $student_name; ?></option>


																		<?php } ?>

																	</select> 
																</div>

																<div class="form-group col-md-2">
																	<label for="exampleInput"></label>
																	<button type="submit" name="sales_report" style="margin-top:25px;" class="btn btn-primary" id="btn-submit">View</button>
																</div>  
																

																<br>
																<div class="table-responsive dt-responsive">
																	<table id="dom-jqry" class="table table-striped table-bordered nowrap">   
																		<div id="txtHint"> </div>
																	</table>
																</div>

															</div>

														<!-- </form> -->
														  
															<div class="table-responsive dt-responsive">
																
																<table id="dom-jqry" class="table table-striped table-bordered nowrap ">
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
																			<!-- <th>Student Image</th> -->
																			<th>Amount</th> 
																		</tr>
																	</thead>
																	<tbody class="table-data"></tbody>
																</table>
															</div>   

												
														

													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>





	<script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
	<script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>

	<script src="files/assets/pages/waves/js/waves.min.js"></script>

	<script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

	<script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
	<script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>

	<script src="cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
	<script src="cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
	<script type="text/javascript" src="files/assets/pages/form-validation/validate.js"></script>

	<script type="text/javascript" src="files/assets/pages/form-validation/form-validation.js"></script>
	<script src="files/assets/js/pcoded.min.js"></script>
	<script src="files/assets/js/vertical/vertical-layout.min.js"></script>
	<script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="files/assets/js/script.js"></script>
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


//  Report View
$('#btn-submit').click(function(){
  // alert('fddf'); student_report_display.php
  var from_date = $('.from_date').val();
  var to_date = $('.to_date').val();
  var student_name = $('.student_name').val();
	 $.ajax({
	    url:"student_report_display.php",
	    method:"GET",
	    data:{
	        from_date:from_date,
	        to_date:to_date,
	        student_name:student_name
	    },
	    success:function(data) {
	    	console.log(data);
	        $('.table-data').html(data);
	    }
	});
})

  </script>

</body> 
</html>
