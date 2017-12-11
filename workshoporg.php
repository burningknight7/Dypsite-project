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
		$("#addworkshoporg").click(function(){
		
		$.ajax({
			type:"POST",
			url:"Executer.php",
			data:{wono:$("#wono").val(),woworkas:$("#woworkas").val(),woname:$("#woname").val(),woorg:$("#woorg").val(),woloc:$("#woloc").val(),wonodays:$("#wonodays").val(),sdate:$("#wostartdate").val(),edate:$("#woenddate").val(),flag:"Add_workshop_organise"},
			success:function(result){
				$("#addWorkOrg").show();
				if(result == "true")
				{					
					$("#addWorkOrg_content").html("Adding workshop organised detail .. <i class='fa fa-spinner fa-spin'></i>");
					setTimeout("location.reload()",2000);
				}
				else
				{
					$("#addWorkOrg_content").html("Please enter some other id and try again");
				}
			}
		});
	});
	});
</script>
</head>
<body>
<h3><center>Workshops organised details</center></h3>
<button class="btn btn-primary" data-toggle="modal" data-target="#add_workorg">Add more workshop organised details +</button>
<?php
include 'connect.php';
	@session_start();
	$id=$_SESSION['id'];
	$i=0;
	echo "";
	echo "<table class='table table-responsive table-striped'>";
	echo "<tr><td>No</td><td>Worked as</td><td>Name</td><td>Organisation</td><td>Location</td><td>No of days</td><td>start date</td><td>End date</td><th></th><th></th></tr>";
 $nat="SELECT * FROM worganised WHERE `uniqu`='$id'";
 $ndata=mysqli_query($con,$nat);
 while($row=mysqli_fetch_array($ndata))
 {
 	$i++;
 	$w=$row['workas'];
 	$n=$row['name'];
 	$o=$row['organisation'];
 	$l=$row['location'];
 	$a=$row['noofday'];
 	$s=date('Y-m-d',strtotime($row['sdate']));
 	$e=date('Y-m-d',strtotime($row['edate']));
 	echo "<tr><td>$i )</td><td>$w</td><td>$n</td><td>$o</td><td>$l</td><td>$a</td><td>$s</td><td>$e</td><td><button type='button' class='btn' onclick='del_conf(\"".'worganised'."\",\"".$row['row_id']."\")'>Delete</button></td><td><button type='button' class='btn' data-toggle='modal' data-target='#update_workorg' onclick='update_work_org(\"".$w."\",\"".$n."\",\"".$o."\",\"".$l."\",\"".$a."\",\"".$s."\",\"".$e."\",\"".$row['row_id']."\")' >Edit</button></td></tr>";
 	
 }
 echo "</table>";

?>
<!-- workshop organised modal-->
<div class="modal fade" id="add_workorg" role="dialog" style="">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	     
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Add new Workshop Field</h4>
	        </div>
	        <div class="alert alert-success fade in" id="addWorkOrg" style="display: none">
		    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('addWorkOrg').style.display='none'">&times;</a> <p id="addWorkOrg_content"></p>
		  	</div>
		    <div class="modal-body">
	          <label class="col-md-4">workshop No:</label><div class="col-md-6"><input type="number" id="wono" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">worked as:</label><div class="col-md-6"><input type="text" id="woworkas" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">workshop prganisation :</label><div class="col-md-6"><input type="text" id="woorg" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4"> workshop name:</label><div class="col-md-6"><input type="text" id="woname" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">location:</label><div class="col-md-6"><input type="text" id="woloc" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">No of days:</label><div class="col-md-6"><input type="text" id="wonodays" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Start date:</label><div class="col-md-6"><input type="date" id="wostartdate" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">End date:</label><div class="col-md-6"><input type="date" id="woenddate" class="form-control" name="" required=""></div><br><br>
	        </div>
	        <div class="modal-footer">
	         <button type="button" id="addworkshoporg" class="col-md-offset-4 col-md-4 btn btn-success btn-default" style="background-color: #b50f20" >Add workshop detail </button>
	         
	        </div>
	      </div>
	      
	    </div>
	  </div>
	  <!-- end worshop organised modal -->

	  <!-- start workshop organised update modal -->
	  <div class="modal fade" id="update_workorg" role="dialog" style="">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	     
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Update Workshop Organised Field</h4>
	        </div>
	        <div class="alert alert-success fade in" id="updateWorkOrg" style="display: none">
		    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('updateWorkOrg').style.display='none'">&times;</a> <p id="updateWorkOrg_content"></p>
		  	</div>
		    <div class="modal-body">
	          
	          <label class="col-md-4">worked as:</label><div class="col-md-6"><input type="text" id="u_woworkas" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">workshop prganisation :</label><div class="col-md-6"><input type="text" id="u_woorg" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4"> workshop name:</label><div class="col-md-6"><input type="text" id="u_woname" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">location:</label><div class="col-md-6"><input type="text" id="u_woloc" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">No of days:</label><div class="col-md-6"><input type="text" id="u_wonodays" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Start date:</label><div class="col-md-6"><input type="date" id="u_wostartdate" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">End date:</label><div class="col-md-6"><input type="date" id="u_woenddate" class="form-control" name="" required=""></div><br><br>
	        </div>
	        <div class="modal-footer">
	         <button type="button" id="updateworkshoporg" class="col-md-offset-4 col-md-4 btn btn-success btn-default" onclick="">Update </button>
	         
	        </div>
	      </div>
	      
	    </div>
	  </div>
	  <!-- end workshop organised update modal -->

</body>
</html>