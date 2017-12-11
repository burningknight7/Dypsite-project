<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap -->
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<script src="jquery.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
<!-- font style -->
 <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'> 
 <link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'> 
  <script type="">
 	$(document).ready(function(){
 		$("#addworkshopattend").click(function(){
		$.ajax({
			type:"POST",
			url:"Executer.php",
			data:{wano:$("#wano").val(),waname:$("#waname").val(),waorg:$("#waorg").val(),waloc:$("#waloc").val(),wanodays:$("#wanodays").val(),sdate:$("#wastartdate").val(),edate:$("#waenddate").val(),flag:"Add_workshop_attend"},
			success:function(result){
				$("#addWorkAt").show();
				if(result == "true")
				{					
					$("#addWorkAt_content").html("Adding workshop attended detail .. <i class='fa fa-spinner fa-spin'></i>");
					setTimeout("location.reload()",2000);
				}
				else
				{
					$("#addWorkAt_content").html("Please enter some other id and try again");
				}
			}
		});
	});
 	});
 </script>
</head>
<body>
<h3><center>Workshops Attended details</center></h3>
<button class="btn btn-primary" data-toggle="modal" data-target="#add_workattend">Add more workshop Attended details +</button>
<?php
include 'connect.php';
	@session_start();
	$id=$_SESSION['id'];
$i=0;
 echo "";
 echo "<table class='table table-responsive table-striped '>";
 echo "<tr><td>No</td><td>Name</td><td>Organisation</td><td>Location</td><td>No of days</td><td>start date</td><td>End date</td><th></th><th></th></tr>";
 $nat="SELECT * FROM wattend WHERE `uniqu`='$id'";
 $ndata=mysqli_query($con,$nat);
 while($row=mysqli_fetch_array($ndata))
 {
 	$i++;
 	$n=$row['dname'];
 	$o=$row['dorg'];
 	$l=$row['dlocation'];
 	$a=$row['ddays'];
 	$s=date('Y-m-d',strtotime($row['dsdate']));
 	$e=date('Y-m-d',strtotime($row['dedate']));
 	echo "<tr><td>$i )</td><td>$n</td><td>$o</td><td>$l</td><td>$a</td><td>$s</td><td>$e</td><td><button type='button' class='btn' onclick='del_conf(\"".'wattend'."\",\"".$row['row_id']."\")'>Delete</button></td><td><button type='button' class='btn' data-toggle='modal' data-target='#update_workattend' onclick='update_work_attend(\"".$n."\",\"".$o."\",\"".$l."\",\"".$a."\",\"".$s."\",\"".$e."\",\"".$row['row_id']."\")' >Edit</button></td></tr>";
 	
 }
 echo "</table>";

 
?>
<!--add workshop attended modal -->
	<div class="modal fade" id="add_workattend" role="dialog" style="">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Add new Workshop Field</h4>
	        </div>
	        <div class="alert alert-success fade in" id="addWorkAt" style="display: none">
		    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('addWorkAt').style.display='none'">&times;</a> <p id="addWorkAt_content"></p>
		  	</div>
		    <div class="modal-body">
	          <label class="col-md-4">workshop No:</label><div class="col-md-6"><input type="number" id="wano" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4"> workshop name:</label><div class="col-md-6"><input type="text" id="waname" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4"> workshop organisation:</label><div class="col-md-6"><input type="text" id="waorg" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">location:</label><div class="col-md-6"><input type="text" id="waloc" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">No of days:</label><div class="col-md-6"><input type="text" id="wanodays" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Start date:</label><div class="col-md-6"><input type="date" id="wastartdate" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">End date:</label><div class="col-md-6"><input type="date" id="waenddate" class="form-control" name="" required=""></div><br><br>
	        </div>
	        <div class="modal-footer">
	         <button type="button" id="addworkshopattend" class="col-md-offset-4 col-md-4 btn btn-success btn-default" style="background-color: #b50f20">Add workshop detail </button>
	         
	        </div>
	      </div>
	      
	    </div>
	</div>
	<!-- end workshop attend detail -->
	<!-- start update wprkshop detail -->
	<div class="modal fade" id="update_workattend" role="dialog" style="">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Update Workshop Attended Field</h4>
	        </div>
	        <div class="alert alert-success fade in" id="updateWorkAt" style="display: none">
		    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('updateWorkAt').style.display='none'">&times;</a> <p id="updateWorkAt_content"></p>
		  	</div>
		    <div class="modal-body">
	          <label class="col-md-4"> workshop name:</label><div class="col-md-6"><input type="text" id="u_waname" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4"> workshop organisation:</label><div class="col-md-6"><input type="text" id="u_waorg" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">location:</label><div class="col-md-6"><input type="text" id="u_waloc" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">No of days:</label><div class="col-md-6"><input type="text" id="u_wanodays" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Start date:</label><div class="col-md-6"><input type="date" id="u_wastartdate" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">End date:</label><div class="col-md-6"><input type="date" id="u_waenddate" class="form-control" name="" required=""></div><br><br>
	        </div>
	        <div class="modal-footer">
	         <button type="button" id="updateworkshopattend" class="col-md-offset-4 col-md-4 btn btn-success ">Update </button>
	         
	        </div>
	      </div>
	      
	    </div>
	</div>

</body>
</html>