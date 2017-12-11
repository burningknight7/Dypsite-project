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
</head>
<script type="">
	$(document).ready(function(){
		$("#Addresfield").click(function(){
		var resid=$("#resid").val();
		var resname=$("#resname").val();
		var domain_name=$("#domain").val();
		var rdate=$("#rdate").val();
		// alert(dpmain_name);

		if(resid == '' || resname == '' || domain_name == '')
		{
			alert("Enter valid details");
		}
		else
		{
			$.ajax({
				type:"POST",
				url:"Executer.php",
				data:{resid:resid,resname:resname,domain:domain_name,date:rdate,flag:"Add_research_field"},
				success:function(result){
					$("#add_rf").show();
					if(result == "true")
					{
						$("#add_rf_content").html("New value inserting.. <i class='fa fa-spin fa-spinner'></i>");
						setTimeout(function(){location.reload()},2000);
						//$(".show_research").click();
					}
					else
					{
						$("#add_rf_content").html("Enter some other id try again");
					}
					

					// $("#research_info").toggle();
				}
			});
		}

	});
	});

</script>
<body>

<p id="details">Research </p><hr>
	<button type="button" class="resbtn btn btn-primary " data-toggle="modal" data-target="#research_modal"> Add more research field +</button>
	<!-- <br> -->
	<!-- <div class="col-xs-10"><input type="text" class="form-control" name="myres[]"></div><br><br> -->
	<div id="res_msg"></div>
	<?php
		@session_start();
		$id=$_SESSION['id'];
		include 'connect.php';
		$sql="SELECT * FROM research WHERE uniqu='$id'";
		$res=mysqli_query($con,$sql);
		$n=mysqli_num_rows($res);
		$j=0;
		echo "<br>";
		echo "<table class='table table-responsive table-striped'>";
		echo "<tr><td>Domain Name</td><td>Research Field</td><td></td><td></td></tr>";
		while($row=mysqli_fetch_array($res))
		{
			$research=$row['research_id'];
			$resvalue=$row['resfield'];
			$domain_name=$row['domain'];
			$rdate=date('Y-m-d',strtotime($row['date']));
			// $rdate=$row['date'];
			// echo "<div class='col-xs-9'><input type='text' class='form-control resvalue' name='myres[]'  value='".$row['resfield']."'></div>";
			echo "<tr><td>".$domain_name."</td><td>".$resvalue."</td>";
			echo '<td><button type="button" class="btn btn-danger" onclick="del(\''."research".'\',\''.$research.'\')">Delete&nbsp;<i class="glyphicon glyphicon-trash"></i></button>&nbsp;</td>';
			

		 echo '<td><button class="btn btn-primary" data-toggle="modal" data-target="#update_research_modal" type="button" onclick="Update(\''.$resvalue.'\',\''.$research.'\',\''.$domain_name.'\',\''.$rdate.'\')"> Update</button></td>';
			echo '';
			$j++;
		}
	?>
	<!-- Research field add modal -->
	<!-- Modal -->
	  <div class="modal fade" id="research_modal" role="dialog" style="">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Add Research Field</h4>
	        </div>
	        <div class="alert alert-success fade in" id="add_rf" style="display: none">
		    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('add_rf').style.display='none'">&times;</a> <p id="add_rf_content"></p>
		  	</div>
			<div class="modal-body">
	          <label class="col-md-4">Research id:</label><div class="col-md-6"><input type="number" id="resid" class="form-control" name="" required=""></div><br>
	          <label class="col-md-4">Domain:</label><div class="col-md-6"><input type="text" id="domain" class="form-control" name="" required=""></div>
	          <label class="col-md-4">Research Name:</label><div class="col-md-6"><input type="text" id="resname" class="form-control" name="" required=""></div>
	         
	          <label class="col-md-4">Date:</label><div class="col-md-6"><input type="date" id="rdate" class="form-control" name="" required=""><br></div>

	        </div>
	        <div class="modal-footer">
	         <center><button type="button" id="Addresfield" class="col-md-offset-4 col-md-4 btn btn-success btn-default"> Submit </button></center>
	        </div>
	      </div>
	      
	    </div>
	  </div>
	  <!-- research end -->
	  <!-- Research field Edit -->
	  <div class="modal fade" id="update_research_modal" role="dialog" style="">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Update Research Field</h4>
	        </div>
	        <div class="alert alert-success fade in" id="update_rf" style="display: none">
		    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('update_rf').style.display='none'">&times;</a> <p id="update_rf_content"></p>
		  	</div>
		  	
			<div class="modal-body">   
			  <label class="col-md-4">Domain:</label><div class="col-md-6"><input type="text" id="u_domain" class="form-control" name="" required=""><br></div>      
	          <label class="col-md-4">Research Name:</label><div class="col-md-6"><input type="text" id="u_resname" class="form-control" name="" required=""><br></div>
	          <label class="col-md-4">Date:</label><div class="col-md-6"><input type="text" id="u_date" class="form-control" name="" required=""><br></div>

	        </div>
	        <div class="modal-footer">
	         <center><button type="button" id="updateresfield" class="col-md-offset-4 col-md-4 btn btn-success btn-default" onclick> Update </button></center>
	        </div>
	      </div>
	      
	    </div>
	  </div>
	  <!-- Research update end -->
	<!-- <button type="button" onclick="del()">click</button> -->
</body>
</html>