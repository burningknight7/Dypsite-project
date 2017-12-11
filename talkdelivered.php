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
 		$("#addtalkdeliv").click(function(){
		$.ajax({
			type:"POST",
			url:"Executer.php",
			data:{tdno:$("#tdno").val(),tdname:$("#tdname").val(),tdorg:$("#tdorg").val(),tdloc:$("#tdloc").val(),sdate:$("#tdstartdate").val(),edate:$("#tdenddate").val(),flag:"Add_talk_delivered"},
			success:function(result){
				$("#addTalkD").show();
				if(result == "true")
				{					
					$("#addTalkD_content").html("Adding Talk delivered detail .. <i class='fa fa-spinner fa-spin'></i>");
					setTimeout("location.reload()",2000);
				}
				else
				{
					$("#addTalkD_content").html("Please enter some other id and try again");
				}
			}
		});
	});
 	});
 </script>
</head>
<body>
<h3><center>Talk delivered details</center></h3>
<button class="btn btn-primary" data-toggle="modal" data-target="#add_talkd">Add more talk delivered details +</button>
<?php
	$con=mysqli_connect('localhost','root','','depart');
	@session_start();
	$id=$_SESSION['id'];
	$i=0;
 echo "";
 echo "<table class='table table-responsive table-striped'>";
 echo "<tr><td>No</td><td>Name</td><td>Organisation</td><td>Location</td><td>start date</td><td>End date</td><th></th><th></th></tr>";
 $nat="SELECT * FROM talkd WHERE `uniqu`='$id'";
 $ndata=mysqli_query($con,$nat);
 while($row=mysqli_fetch_array($ndata))
 {
 	$i++;
 	$n=$row['name'];
 	$o=$row['organisation'];
 	$l=$row['location'];
 	
 	$s=date('Y-m-d',strtotime($row['sdate']));
 	$e=date('Y-m-d',strtotime($row['edate']));
 	echo "<tr><td>$i )</td><td>$n</td><td>$o</td><td>$l</td><td>$s</td><td>$e</td><td><button type='button' class='btn' onclick='del_conf(\"".'talkd'."\",\"".$row['row_id']."\")'>Delete</button></td><td><button type='button' class='btn' data-toggle='modal' data-target='#update_talkd' onclick='update_talk_delivered(\"".$n."\",\"".$o."\",\"".$l."\",\"".$row['sdate']."\",\"".$row['edate']."\",\"".$row['row_id']."\")'>Edit</button></td></tr>";
 	
 }
 echo "</table>";

?>
 <!-- start talk delivered modal -->
	<div class="modal fade" id="add_talkd" role="dialog" style="">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	     
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Add new talk delivered Field</h4>
	        </div>
	        <div class="alert alert-success fade in" id="addTalkD" style="display: none">
		    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('addTalkD').style.display='none'">&times;</a> <p id="addTalkD_content"></p>
		  	</div>
		    <div class="modal-body">
	          <label class="col-md-4">workshop No:</label><div class="col-md-6"><input type="number" id="tdno" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4"> workshop name:</label><div class="col-md-6"><input type="text" id="tdname" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4"> workshop organisation:</label><div class="col-md-6"><input type="text" id="tdorg" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">location:</label><div class="col-md-6"><input type="text" id="tdloc" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Start date:</label><div class="col-md-6"><input type="date" id="tdstartdate" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">End date:</label><div class="col-md-6"><input type="date" id="tdenddate" class="form-control" name="" required=""></div><br><br>
	        </div>
	        <div class="modal-footer">
	         <button type="button" id="addtalkdeliv" class="col-md-offset-4 col-md-4 btn btn-success " >Add talk delivered field </button>
	         
	        </div>
	      </div>
	      
	    </div>
	  </div>
	  <!-- end add talk delivered -->
	  <!-- start update talk delivered -->
	  <div class="modal fade" id="update_talkd" role="dialog" style="">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	     
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Update Talk delivered Field</h4>
	        </div>
	        <div class="alert alert-success fade in" id="updateTalkD" style="display: none">
		    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('updateTalkD').style.display='none'">&times;</a> <p id="updateTalkD_content"></p>
		  	</div>
		    <div class="modal-body">	         
	          <label class="col-md-4"> workshop name:</label><div class="col-md-6"><input type="text" id="u_tdname" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4"> workshop organisation:</label><div class="col-md-6"><input type="text" id="u_tdorg" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">location:</label><div class="col-md-6"><input type="text" id="u_tdloc" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Start date:</label><div class="col-md-6"><input type="date" id="u_tdstartdate" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">End date:</label><div class="col-md-6"><input type="date" id="u_tdenddate" class="form-control" name="" required=""></div><br><br>
	        </div>
	        <div class="modal-footer">
	         <button type="button" id="updatetalkdeliv" class="col-md-offset-4 col-md-4 btn btn-success">Update</button>
	         
	        </div>
	      </div>
	      
	    </div>
	  </div>

</body>
</html>