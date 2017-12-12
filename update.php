<!DOCTYPE html>
<html>
<head>
	<title>
		Update PHP
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap -->
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<script src="jquery.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
<!-- font style -->
 <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'> 
 <link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'> 
 <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'> 
 
<style type="text/css">
	/*label{vertical-align: top;}
	div{text-align: center;}*/

/*large*/
body{
	font-family:'Archivo';
}
nav{
border-bottom: 5px solid #ff4d4d;
z-index: 2;

}
#Main_logo{padding-left: 20px;font-size: 20px}

#sidebar{ background-color: #82020f;
	height:90vh;
	width:20%;
	border-right: 5px solid #ff4d4d;
	position: fixed;
	margin-top: 10vh;
	z-index: 2;
}

#sidebar a{ text-align:center; 
	margin:0px;
	color: white;
	font-size: 16px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	top:0px;	
	  }

a:hover{color: white;
	text-decoration: none;
}
a:visited{color:white;}
.active{background-color: #ef342e}

.navbar-list{color:white;height: 50px;margin:0px;}
.navbar-list:hover{background-color: #ef342e;display:block;cursor: pointer}

#etails{ 
	font-size:;
 }
#Main_content{ margin-left:22%;}

#All_details{ width: 99%;height: 75vh;overflow: scroll;font-family: 'Arimo'} /*all details*/

#img-card{width:4vw;line-height:6vh;height:8vh;border-radius: 50%;margin-top: 1vh} /*Image icon*/

#Update_profile_request,#Update_professional_request,#Update_education_request{background-color: #b50f20;color:white;}  /*ajax button*/

/*medium*/
@media (max-width: 1300px){
	.affix{width:24%;}
	.btn-success{font-size: 12px;height:30px;width:90%;margin-left: 5%;}
	a{margin:0px;
		width: 70%; 
		font-size: 12px;
		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	}
	#Main_content{margin-left: 26%;}
}

/*small*/
@media (max-width: 767px){
	.affix{width:32%;}
	.btn-success{font-size: 12px;height:30px;width:90%;margin-left: 5%;}
	a{margin:0px;width: 70%;}
	#Main_content{margin-left: 33%;}
	p{font-size: 18px;}
	/*#Main_logo{font-size: 13px;}*/
	/*#img-card{margin-left: 10px;width:5px;height: 5px;}*/
}
@media (max-width: 512px){

}

</style>
<script>

$(document).ready(function(){
	// $("#personal_details").hide();
	$(".personal,.professional,.educational").hide();

	// show
		$(".show_national").click(function(){
			// $(".national").toggle();
			$(".national").load("national.php");
		});
		$(".show_international_conference").click(function(){
			$(".internconf").load("internconf.php");
		});
		$(".show_international_journal").click(function(){
			$(".internjournal").load("internjournal.php");
		});
		$(".show_workshop_organise").click(function(){
			$(".workshoporg").load("workshoporg.php");
		});
		$(".show_workshop_attend").click(function(){
			$(".workshopattend").load("workshopattend.php");
		});
		$(".show_talk_deliv").click(function(){
			$(".talkdeliv").load("talkdelivered.php");
		});
		$(".show_personal").click(function(){
			$(".personal").toggle();
		});
		$(".show_professional").click(function(){
			$(".professional").toggle();
		});
		$(".show_educational").click(function(){
			$(".educational").toggle();
		});
		$("#showres").click(function(){
			$(".Research").load("research.php");
			/*$.ajax({
				type:"POST",
				url:"research.php",
				success:function(result){
					$("#research_info").html(result);
				}
			})*/
		});

	$("#Update_profile_request").click(function(){

		$.ajax({
			type:"POST",
			url:"Executer.php",
			data:{name:$("#Name").val(),gender:$("#gender").val(),designation:$("#design").val(),qualification:$("#qualify").val(),department:$("#dept").val(),flag:"Update_personal"},
			// data:{flag:"Update_personal"},
			success:function(result){
				$("#pers_msg").show();
				$("#personal_msg_content").html(result);
				// alert(result);
				// $(".personal").show();
				
			}
		});
	

	});
	$("#Update_professional_request").click(function(){
		$.ajax({
			type:"POST",
			url:"Executer.php",
			data:{dept:$("#depart").val(),designation:$("#designation").val(),date_of_join:$("#join").val(),area_of_special:$("#area").val(), teach_experience:$("#teachexp").val(),total_experience:$("#totalexp").val(),flag:"Update_professional"},
			// data:{flag:"Update_personal"},
			success:function(result){
				$("#prof_msg").show();
				$("#prof_msg_content").html(result);
				
				// $(".personal").show();
				
			}
		});

	});
	$("#Update_education_request").click(function(){
		$.ajax({
			type:"POST",
			url:"Executer.php",
			data:{ug_qualification:$("#ug_qualification").val(),ug_year_of_passing:$("#ug_year_of_passing").val(),ug_university:$("#ug_university").val(),ug_class:$("#ug_class").val(),pg_qualification:$("#pg_qualification").val(),pg_year_of_passing:$("#pg_year_of_passing").val(),pg_university:$("#pg_university").val(),pg_class:$("#pg_class").val(),phd_qualification:$("#phd_qualification").val(),phd_year_of_passing:$("#phd_year_of_passing").val(),phd_university:$("#phd_university").val(),flag:"Update_educational"},
			
			success:function(result){
				$("#educ_msg").show();
				$("#educ_msg_content").html(result);
				
				// $(".personal").show();
				
			}
		});

	});
	
	
	
	

});
function del(name,res_id)
{
	var research_id=res_id;
	//alert(name);
	var tname=name;
	$.ajax({
		type:"POST",
		url:"Executer.php",
		data:{research_id:research_id,t_name:tname,flag:"delete_research_field"},
		success:function(result){
			// $("#res_msg").html(result);
			// location.reload();
			$("#research_info").load("research.php");
			// $(".Research").show();
			// $(".Research").show();
			

		}

	});
}

function Update(resvalue,res_id,domain,date)
{
	// alert(resvalue);
	// alert(res_id);
	document.getElementById('u_resname').value=resvalue;
	document.getElementById('u_domain').value=domain;
	document.getElementById('u_date').value=date;
	$("#updateresfield").click(function(){
		$.ajax({
			type:"POST",
			url:"Executer.php",
			// dataType:"json",
			data:{resvalue:$("#u_resname").val(),res_id:res_id,flag:"update_research_field"},
			success:function(result){
				$("#update_rf").show();
				$("#update_rf_content").html(result+"<i class='fa fa-spin fa-spinner'></i>");
				// $("#showres").click();			
				setTimeout("location.reload()",2000);
			}
		});
	});
	
}

function add_conf(name)
{
	
  	$.ajax({
  		type:"POST",
  		url:"Executer.php",
  		
  		data:{Name:name,confno:$("#confno").val(),confname:$("#confname").val(),confloc:$("#confloc").val(),papertitle:$("#papertitle").val(),authdet:$("#authdet").val(),proceedno:$("#proceedno").val(),mnyr:$("#mnyr").val(),flag:"Add_conf_field"},
  		success:function(result){
  			$("#addConf").show();
  			if(result == "true")
  			{
	  			$("#addConf_content").html("New details are adding .. <i class='fa fa-spin fa-spinner'></i>");
	  			setTimeout("location.reload()",2000);
	  		}
	  		else
	  		{
	  			$("#addConf_content").html("Please enter some other conference number and try again");
	  		}
  			
  		}
  	});
}
function del_conf(name,row_id)
{
	var row_id=row_id;
	//alert(name);
	var tname=name;
	$.ajax({
		type:"POST",
		url:"Executer.php",
		data:{row_id:row_id,t_name:tname,flag:"delete_conf_field"},
		success:function(result){
			$("#res_msg").html(result);
			if(result == "national")
			{
				$(".national").load("national.php");
			}
			else if(result == "intconf")
			{
				$(".internconf").load("internconf.php");
			}
			else if(result == "intjournal")
			{
				$(".internjournal").load("internjournal.php");
			}
			else if(result == "worganised")
			{
				$(".workshoporg").load("workshoporg.php");
			}
			else if(result == "wattend")
			{
				$(".workshopattend").load("workshopattend.php");
			}
			else
			{
				$(".talkdeliv").load("talkdelivered.php");
			}

			
		}

	});
}	
function update_conf(tagname,name,loc,paper,author,proceed,mnyr,row_id)
{
	document.getElementById('n_confname').value=name;
	document.getElementById('n_confloc').value=loc;
	document.getElementById('n_papertitle').value=paper;
	document.getElementById('n_authdet').value=author;
	document.getElementById('n_proceedno').value=proceed;
	document.getElementById('n_mnyr').value=mnyr;
	$("#updateNF").click(function(){
		$.ajax({
		type:"POST",
		url:"Executer.php",
		data:{Name:tagname,confno:$("#n_confno").val(),confname:$("#n_confname").val(),confloc:$("#n_confloc").val(),papertitle:$("#n_papertitle").val(),authdet:$("#n_authdet").val(),proceedno:$("#n_proceedno").val(),mnyr:$("#n_mnyr").val(),row_id:row_id,flag:"update_conf"},
		success:function(result){
			// alert(result);
			$("#updateConf").show();
			if(result == "true")
			{
				$("#updateConf_content").html("Your changes are updating .. <i class='fa fa-spinner fa-spin'></i>");
				setTimeout("location.reload()",2000);
			}
			else
			{
				$("#updateConf_content").html("Try again");
			}

		}	
		});
		
	});

}
function update_work_org(workas,name,organisation,loc,noofday,sdate,edate,row_id)
{
	document.getElementById('u_woworkas').value=workas;
	document.getElementById('u_woname').value=name;
	document.getElementById('u_woorg').value=organisation;
	document.getElementById('u_woloc').value=loc;
	document.getElementById('u_wonodays').value=noofday;
	document.getElementById('u_wostartdate').value=sdate;
	document.getElementById('u_woenddate').value=edate;
	$("#updateworkshoporg").click(function(){
		$.ajax({
			type:"POST",
			url:"Executer.php",
			data:{woworkas:$("#u_woworkas").val(),woname:$("#u_woname").val(),woorg:$("#u_woorg").val(),woloc:$("#u_woloc").val(),wonodays:$("#u_wonodays").val(),sdate:$("#u_wostartdate").val(),edate:$("#u_woenddate").val(),row_id:row_id,flag:"update_workshop_organise"},
			success:function(result){
				$("#updateWorkOrg").show();
				if(result == "true")
				{
					$("#updateWorkOrg_content").html("Your changes are updating .. <i class='fa fa-spin fa-spinner'></i>");
					setTimeout("location.reload()",2000);
				}
				else
				{
					$("#updateWorkOrg_content").html("Try again");
				}
			}
		});
	});

}
function update_work_attend(name,organisation,loc,noofday,sdate,edate,row_id)
{
	document.getElementById('u_waname').value=name;
	document.getElementById('u_waorg').value=organisation;
	document.getElementById('u_waloc').value=loc;
	document.getElementById('u_wanodays').value=noofday;
	document.getElementById('u_wastartdate').value=sdate;
	document.getElementById('u_waenddate').value=edate;
	$("#updateworkshopattend").click(function(){
		$.ajax({
			type:"POST",
			url:"Executer.php",
			data:{waname:$("#u_waname").val(),waorg:$("#u_waorg").val(),waloc:$("#u_waloc").val(),wanodays:$("#u_wanodays").val(),sdate:$("#u_wastartdate").val(),edate:$("#u_waenddate").val(),row_id:row_id,flag:"update_workshop_attend"},
			success:function(result){
				$("#updateWorkAt").show();
				if(result == "true")
				{
					$("#updateWorkAt_content").html("Your changes are updating .. <i class='fa fa-spin fa-spinner'></i>");
					setTimeout("location.reload()",2000);
				}
				else
				{
					$("#updateWorkAt_content").html("Try again");
				}
				
			}
		});
	});
}
function update_talk_delivered(name,organisation,loc,sdate,edate,row_id)
{
	document.getElementById('u_tdname').value=name;
	document.getElementById('u_tdorg').value=organisation;
	document.getElementById('u_tdloc').value=loc;
	document.getElementById('u_tdstartdate').value=sdate;
	document.getElementById('u_tdenddate').value=edate;
	$("#updatetalkdeliv").click(function(){
		$.ajax({
			type:"POST",
			url:"Executer.php",
			data:{tdname:$("#u_tdname").val(),tdorg:$("#u_tdorg").val(),tdloc:$("#u_tdloc").val(),sdate:$("#u_tdstartdate").val(),edate:$("#u_tdenddate").val(),row_id:row_id,flag:"Update_talk_delivered"},
			success:function(result){
				$("#updateTalkD").show();
				if(result == "true")
				{
					$("#updateTalkD_content").html("Your changes are updating .. <i class='fa fa-spin fa-spinner'></i>");
					setTimeout("location.reload()",2000);
				}
				else
				{
					$("#updateTalkD_content").html("Try again");
				}
			}
		});
	});
}
/**/
</script>
</head>
<body>
<?php
@session_start();
$id=$_SESSION['id'];
?>
<?php
$con=mysqli_connect('localhost','root','','depart');
$sql="SELECT * FROM personal WHERE uniqu='$id'";
$que=mysqli_query($con,$sql);
if($que == true)
{
	$result=mysqli_fetch_array($que);
		$name=$result['name'];
		$gender=$result['gender'];
		$design=$result['designation'];
		$qualification=$result['qualify'];
		$department=$result['dept'];
		$image=$result['photo'];
	
}

?>
<!-- nav start -->
<nav class="affix navbar navbar-inverse" id="navbar" style="height: 10vh;width: 100%;background-color: #82020f">
	<div class="container-fluid">
	<div class="navbar-header">
	<div id="Main_logo" style="color: white;line-height: 10vh;font-family: 'Aldrich';">RAMRAO ADIK'S INSTITUTE OF TECHNOLOGY </div>
	</div>
	
	<ul class="nav navbar-nav navbar-right">
		<li class=""><img src="<?php echo 'gallery/'.$image.'.bmp'?>" id="img-card"></li>
		<li class="navbar-brand"><a href="logout.php" style="color:white;"><span class="glyphicon glyphicon-off"></span>&nbsp;Log Out</a></li>
	</ul>
	</div>

	
	
</nav>
<!-- nav end -->
<!-- Sidebar start -->

<div class="affix" style="" id="sidebar">

	<ul class="list-unstyled" type="none">
		<div class="side_nav active"><li class="navbar-list"><a href="#home" class="navbar-brand">Home </a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#personal_detalis" class="navbar-brand show_personal">Personal Details </a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#professional_details" class="navbar-brand show_professional">Professional Details </a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#educational_details" class="navbar-brand show_educational">Educational Details</a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#research_info" id="showres" class="navbar-brand show_research">Research </a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#National_Conferences" class="navbar-brand show_national">National conference </a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#International_conferences" class="navbar-brand show_international_conference">International conference</a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#International_journal" class="navbar-brand show_international_journal">International journal </a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#Workshop_organised" class="navbar-brand show_workshop_organise">Workshop organised </a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#Workshop_attended" class="navbar-brand show_workshop_attend">Workshop attended </a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#Talk_delivered" class="navbar-brand show_talk_deliv">Talk delivered</a></li></div>
	</ul>
	
</div>
<!-- Actual content -->

<br><br><br><br>
<div class="Main" id="Main_content">
<div style="background-color: #cce6ff;color: black;">
	
</div>
<form action="" method="post">
<div id="All_details">


<!-- <button type="button" class="show_national">National conf</button>&nbsp;
<button type="button" class="show_international_conference">International conf</button>&nbsp;
<button type="button" class="show_international_journal">International journal</button>&nbsp;
<br>
<button type="button" class="show_workshop_organise">Workshop organised</button>&nbsp;
<button type="button" class="show_workshop_attend">workshop attended</button>&nbsp;
<button type="button" class="show_talk_deliv">talk delivered</button>&nbsp; -->
<hr>
<div class="personal" id="personal_details">
	<p id="details">Personal Details</p><hr>
	<div class="alert alert-success fade in" id="pers_msg" style="display: none">
    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('pers_msg').style.display='none'">&times;</a> <p id="personal_msg_content"></p>
  	</div>
	<div class="personal_detail">

	<label class="col-sm-2">Name:</label><div class="col-sm-10"><input type="text" class="form-control" id="Name" name="name" placeholder="Enter Your Full name ...." value="<?php echo $name;?>" ></div><br>

	<label class="col-sm-2 radio-inline" style="font-weight: bold">Gender:</label> &nbsp;&nbsp;<label class="radio-inline"><input type="radio" class="" id="gender" name="gender" value="male">Male </label><label class="radio-inline"> <input type="radio" class="" id="gender" name="gender" value="female">female</label><br><br>

	<label class="col-sm-2">Designation:</label><div class="col-sm-10"><input type="text" class="form-control" name="design" maxlength="30" id="design" value="<?php echo $design?>" ></div><br>
	<label class="col-sm-2">Qualification:</label><div class="col-sm-10"><input type="text" class="form-control" name="qualify" maxlength="40" id="qualify" value="<?php echo $qualification?>" ></div><br>
	<label class="col-sm-2">Department:</label><div class="col-sm-10"><input type="text" class="form-control" id="dept" name="dept" value="<?php echo $department?>"></div><br>
	</div><br><br><br>
	<center><button class="btn" type="button" id="Update_profile_request">Update</button></center>
	
</div>

<?php
$con=mysqli_connect('localhost','root','','depart');
$sql="SELECT * FROM professional WHERE uniqu='$id'";
$que=mysqli_query($con,$sql);
if($que == true)
{
	$result=mysqli_fetch_array($que);
	$department=$result['department'];
	$designation=$result['design'];
	$date_of_join=$result['date'];
	$area_special=$result['special'];
	$tea_experience=$result['teaching'];
	$tot_experience=$result['total'];	
}
?>
<div class="professional" id="professional_details">
	<p id="details">Professional Details</p><hr>
	<div class="alert alert-success fade in" id="prof_msg" style="display: none">
    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('prof_msg').style.display='none'">&times;</a> <p id="prof_msg_content">fsfsf</p>
  	</div>
	<div class="professional_details">
		<label class="col-sm-3">Department:</label><div class="col-sm-9"><input type="text" class="form-control" name="dept" id="depart" placeholder="Enter your Department" title="Enter your Department" value="<?php echo $department;?>"></div><br>
		<label class="col-sm-3">Designation:</label><div class="col-sm-9"><input type="text" class="form-control" name="design" id="designation" value="<?php echo $designation;?>"></div><br>
		<label class="col-sm-3">Date of joining:</label><div class="col-sm-9"><input type="text" class="form-control" name="join" id="join" value="<?php echo $date_of_join;?>"></div>
		<label class="col-sm-3">Area of specialisation:</label><div class="col-sm-9"><input type="text" class="form-control" name="area" id="area" value="<?php echo $area_special;?>"></div><br>
		<label class="col-sm-3">Teaching Experience:</label><div class="col-sm-9"><input type="text" class="form-control" name="teachexp" id="teachexp" value="<?php echo $tea_experience;?>"></div><br>
		<label class="col-sm-3">Total Experience:</label><div class="col-sm-9"><input type="text" class="form-control" name="totalexp" id="totalexp" value="<?php echo $tot_experience;?>"></div><br>
	</div>
	<center><button class="btn" type="button" id="Update_professional_request">Update</button></center><br>
</div>
<?php
$con=mysqli_connect('localhost','root','','depart');
$sql="SELECT * FROM educational WHERE uniqu='$id'";
$que=mysqli_query($con,$sql);
if($que == true)
{
	$result=mysqli_fetch_array($que);
	$ug_qualification=$result['ug_qualification'];
	$ug_year_of_passing=$result['ug_year_of_passing'];
	$ug_university=$result['ug_university'];
	$ug_class=$result['ug_class'];
	$pg_qualification=$result['pg_qualification'];
	$pg_year_of_passing=$result['pg_year_of_passing'];
	$pg_university=$result['pg_university'];
	$pg_class=$result['pg_class'];
	$phd_qualification=$result['phd_qualification'];
	$phd_year_of_passing=$result['phd_year_of_passing'];
	$phd_university=$result['phd_university'];
		
}
?>
<br>
<div class="educational" id="educational_details">
	<p id="details">Educational Details</p><hr>
	<div class="alert alert-success fade in" id="educ_msg" style="display: none">
    <a href="#" class="close" data-dismiss="" aria-label="close" style="color:black;" onclick="document.getElementById('educ_msg').style.display='none'">&times;</a> <p id="educ_msg_content">fsfsf</p>
  	</div>
	<!-- <div class="educational_details">
		<button class="ug_button btn btn-success"  type="button">UG +</button>&nbsp;<button class="pg_button btn btn-success" type="button">PG +</button> &nbsp;<button class="phd_button btn btn-success" type="button">Phd +</button>&nbsp; <button class="clear btn btn-danger" type="button">Clear All</button><br><br>
	</div> -->
	

		<div id="ug_content">
		<label class="col-xs-5 col-sm-3">UG Qualification:</label><div class="col-sm-9"><input type="text" class="form-control" id="ug_qualification" name="val[]" value="<?php echo $ug_qualification;?>"></div>  
		<label class="col-xs-5 col-sm-3">Year of UG Passing:</label><div class="col-sm-9"><input type="text" class="form-control" name="val[]" id="ug_year_of_passing" value="<?php echo $ug_year_of_passing?>"></div> 
		<label class="col-xs-5 col-sm-3">UG University:</label><div class="col-sm-9"><input type="text" class="form-control" name="val[]" id="ug_university" value="<?php echo $ug_university?>"></div> 
		<label class="col-xs-5 col-sm-3">UG Class:</label><div class="col-sm-9"><input type="text" class="form-control" name="val[]" id="ug_class" value="<?php echo $ug_class;?>"></div>
		</div>

		<div id="pg_content">
		<label class="col-xs-5 col-sm-3">PG Qualification:</label><div class="col-sm-9"> <input type="text" class="form-control" name="pg[]" id="pg_qualification" value="<?php echo $pg_qualification;?>"></div>
		<label class="col-xs-5 col-sm-3">Year of PG Passing:</label><div class="col-sm-9"><input type="text" class="form-control"  name="pg[]" id="pg_year_of_passing" value="<?php echo $pg_year_of_passing?>"></div> 
		 <label class="col-xs-5 col-sm-3">PG University:</label><div class="col-sm-9"><input type="text" class="form-control" name="pg[]" id="pg_university" value="<?php echo $pg_university?>"></div>   
		 <label class="col-xs-5 col-sm-3">PG Class:</label><div class="col-sm-9"> <input type="text" class="form-control" name="pg[]" id="pg_class" value="<?php echo $pg_class?>"></div>
		 </div><br>

		<div id="phd_content">
		<label class="col-xs-5 col-sm-3">phd Qualification:</label><div class="col-sm-9"> <input type="text" class="form-control" name="va[]" id="phd_qualification" value="<?php echo $phd_qualification?>"></div>
		<label class="col-xs-5 col-sm-3">Year of phd Complete:</label><div class="col-sm-9"> <input type="text" class="form-control" name="va[]" id="phd_year_of_passing" value="<?php echo $phd_year_of_passing?>"></div>
		<label class="col-xs-5 col-sm-3">Phd University:</label><div class="col-sm-9"> <input type="text" class="form-control" name="va[]" id="phd_university" value="<?php echo $phd_university?>"></div>
		</div><br>
		<center><button class="btn" type="button" id="Update_education_request">Update</button></center><br>


</div>

<div class="Research" id="research_info">
	
</div>
<!-- research  field -->


<!-- National conferences  -->

<div class="national">
	
	    
</div>
<!-- International conferences -->
<div class="internconf">
	
</div>

<!-- International journal -->
<div class="internjournal">
	
</div>
<!--Add  modal conderences -->

<!-- workshop organised -->

<div class="workshoporg">

</div>
<!-- Workshops Attended details -->
<div class="workshopattend">


	<!-- End update workshop detail -->
</div>
<!-- Talkdelivered -->
<div class="talkdeliv">

	  <!-- end update talk delivered -->
</div>
</div>
</div>

<br>
<!-- <center><div class="col-md-12"><input type="submit" name="next" value="VIEW" class="form-control" style="text-align: center;width:15%;height: 30px;background-color: #337ab7;color:white"></div></center> -->
<a href="display.php" class="btn btn-primary" style="margin-left:55%"> VIEW PROFILE </a>

</form>
</div>
<?php
@session_start();


?>


</body>
</html>

