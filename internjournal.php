<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<center><h3>International Journal</h3></center>
	<button class="btn btn-primary" data-toggle="modal" data-target="#ij_Conferences">Add new details + </button>
	<?php
	include 'connect.php';
	@session_start();
	$id=$_SESSION['id'];
	$international_journal="SELECT * FROM intjournal WHERE uniqu='$id'";
	$ndata=mysqli_query($con,$international_journal);
	echo '<table class="table table-responsive">';
	echo "
	<tr><th>conf no</th><th>Conf Name</th><th>Conf.Location</th><th>paper title</th><td>Author details</th><th>proceeding no</th><th>month & year</th><th></th><th></th></tr>
	";
	 $i=0;
	 while($row=mysqli_fetch_array($ndata))
	 {
	 	$i++;
	 	$n=$row['name'];
	 	$l=$row['location'];
	 	$t=$row['title'];
	 	$a=$row['author'];
	 	$p=$row['proceed'];
	 	$m=date('M Y',strtotime($row['month']));
	 	echo "<tr><td>$i )</td><td>$n</td><td>$l</td><td>$t</td><td>$a</td><td>$p</td><td>$m</td><td><button type='button' class='btn' onclick='del_conf(\"".'intjournal'."\",\"".$row['row_id']."\")'>Delete</button></td><td><button type='button' class='btn' data-toggle='modal' data-target='#u_conf' onclick='update_conf(\"".'international_journal'."\",\"".$n."\",\"".$l."\",\"".$t."\",\"".$a."\",\"".$p."\",\"".$m."\",\"".$row['row_id']."\")'>Edit</button></td></tr>";
	 	
	 }
	echo '</table>';

	?>

<div class="modal fade" id="ij_Conferences" role="dialog" style="">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      <!-- National conference modal -->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Add new conference Field</h4>
	        </div>
	        <div class="alert alert-success fade in" id="addConf" style="display: none">
		    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('addConf').style.display='none'">&times;</a> <p id="addConf_content"></p>
		  	</div>
		    <div class="modal-body">
	          <label class="col-md-4">Conference No:</label><div class="col-md-6"><input type="number" id="confno" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Conference Name:</label><div class="col-md-6"><input type="text" id="confname" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Conference location:</label><div class="col-md-6"><input type="text" id="confloc" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Paper Title:</label><div class="col-md-6"><input type="text" id="papertitle" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Author details:</label><div class="col-md-6"><input type="text" id="authdet" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Proceeding no:</label><div class="col-md-6"><input type="text" id="proceedno" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Month & Year:</label><div class="col-md-6"><input type="date" id="mnyr" class="form-control" name="" required=""></div><br><br>
	        </div>
	        <div class="modal-footer">
	        <!--  <button type="button" id="AddNC" class="col-md-offset-1 col-md-3 btn btn-success btn-default" style="background-color: #b50f20" onclick="add_conf('national')">Add National conference </button>
	         <button type="button" id="AddIC" class=" col-md-3 btn btn-primary btn-default" onclick="add_conf('international_conf')"> Add International conference </button> -->
	         <button type="button" id="AddIJ" class="col-md-offset-4 col-md-4 btn btn-success btn-default" onclick="add_conf('international_journal')"> Add </button>
	        </div>
	      </div>
	      
	    </div>
	  </div>
<!-- End Add modal conferences -->
<!--start  conference update modal -->
	 <div class="modal fade" id="u_conf" role="dialog" style="">
	    <div class="modal-dialog modal-lg">

	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Update conference Field</h4>
	        </div>
	        <div class="alert alert-success fade in" id="updateConf" style="display: none">
		    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('updateConf').style.display='none'">&times;</a> <p id="updateConf_content"></p>
		  	</div>
		    <div class="modal-body">
	          <label class="col-md-4">Conference Name:</label><div class="col-md-6"><input type="text" id="n_confname" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Conference location:</label><div class="col-md-6"><input type="text" id="n_confloc" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Paper Title:</label><div class="col-md-6"><input type="text" id="n_papertitle" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Author details:</label><div class="col-md-6"><input type="text" id="n_authdet" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Proceeding no:</label><div class="col-md-6"><input type="text" id="n_proceedno" class="form-control" name="" required=""></div><br><br>
	          <label class="col-md-4">Month & Year:</label><div class="col-md-6"><input type="date" id="n_mnyr" class="form-control" name="" required=""></div><br><br>
	        </div>
	        <div class="modal-footer">
	         <button type="button" id="updateNF" class="col-md-offset-4 col-md-4 btn btn-success" >Update</button>
	        
	      </div>
	      
	    </div>
	  </div>
	</div>
</body>
</html>