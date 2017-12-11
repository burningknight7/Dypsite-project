<!DOCTYPE html>
<html>
<head>
	<title>
		Fill your detail
	</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
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
body{
	font-family:'Aldich';
}
#All_details
nav{
border-bottom: 5px solid #ff4d4d;
z-index: 2;

}
#Main_logo{padding-left: ;font-size: 20px;}

#sidebar{ background-color: #82020f;
	height:90vh;
	width:20%;
	border-right: 5px solid #ff4d4d;
	position: fixed;
	margin-top: 10vh;
	z-index: 1;
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

#details{ 
	font-size:25px;
 }
#Main_content{ margin-left:22%;}
#All_details{ width: 99%;height: 70vh;overflow: scroll;font-family:'Arimo';}

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
@media (max-width: 767px){
	/*.affix{width:32%;}*/
	#Main_logo{font-size: 13px;}
	#sidebar{width:30%;text-align: left;}
	.side_nav{font-size: 10px;}
	.btn-success{font-size: 12px;height:30px;width:90%;margin-left: 5%;}
	a{margin:0px;width: 70%;}
	#Main_content{margin-left: 33%;}
	p{font-size: 18px;}
}
@media (max-width: 512px){

}

</style>
</style>
</head>
<body>
<!-- nav start -->
<nav class="affix navbar navbar-inverse" id="navbar" style="height: 10vh;width: 100%;background-color: #82020f">
	<div class="container-fluid">
	<div class="navbar-header">
	<div  style="color: white;line-height: 10vh;font-family: 'Aldrich';"><span id="Main_logo">RAMRAO ADIK'S INSTITUTE OF TECHNOLOGY </span>
	<!-- <span class="pull-right visible-xs">&nbsp;&nbsp;&nbsp;<a href="#" class="text-right " style="color:white;"><i class="glyphicon glyphicon-log-in "></i>&nbsp;Log in</a></span>
	<span class="pull-right visible-xs">&nbsp;<a href="#" class="" style="color:white;"><i class="glyphicon glyphicon-user"></i>&nbsp;Sign Up</a></span> -->
	</div>
	<div></div>
	</div>
	
	<ul class="nav navbar-nav navbar-right">
		<!-- <li class="navbar-brand hidden-xs"><a href="#" style="color:white;"><span class="glyphicon glyphicon-log-in "></span>&nbsp;Log in</a> </li>
		<li class="navbar-brand hidden-xs"><a href="#" style="color:white;"><span class="glyphicon glyphicon-user"></span>&nbsp;Sign Up</a></li> -->
	</ul>
	</div>

	
	
</nav>
<!-- nav end -->
<!-- Sidebar start -->
<div class="affix hidden-xs" style="" id="sidebar">

	<ul class="list-unstyled" type="none">
		<div class="side_nav active"><li class="navbar-list"><a href="#home" class="navbar-brand">Home </a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#personal_detalis" class="navbar-brand show_personal">Personal Details </a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#professional_details" class="navbar-brand show_professional">Professional Details </a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#educational_details" class="navbar-brand show_educational">Educational Details</a></li></div>
		<div class="side_nav"><li class="navbar-list"><a href="#research_info" class="navbar-brand show_research">Research </a></li></div>
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
	<p style="font-size: 19px;"><b>Note:</b> * All personal , professional , educational and research details are mandatory without filling this information you will not proceed
</p>
</div>
<form action="view.php" method="post">
<div id="All_details">


<!-- <button type="button" class="show_national">National conf</button>&nbsp;
<button type="button" class="show_international_conference">International conf</button>&nbsp;
<button type="button" class="show_international_journal">International journal</button>&nbsp;
<br>
<button type="button" class="show_workshop_organise">Workshop organised</button>&nbsp;
<button type="button" class="show_workshop_attend">workshop attended</button>&nbsp;
<button type="button" class="show_talk_deliv">talk delivered</button>&nbsp; -->

<div class="personal" id="personal_detalis">
<hr>
	<p id="details">Personal Details</p><hr>
	<div class="personal_detail">

	<label class="col-sm-3">Name:</label><div class="col-sm-9"><input type="text" class="form-control" id="Name" name="name" placeholder="Enter Your Full name ...." required=""></div><br>

	<label class="col-sm-3 radio-inline" style="font-weight: bold">Gender:</label> &nbsp;&nbsp;<label class="radio-inline"><input type="radio" class="" name="gender" value="male">Male </label><label class="radio-inline"> <input type="radio" class="" name="gender" value="female">female</label><br><br>

	<label class="col-sm-3">Designation:</label><div class="col-sm-9"><input type="text" class="form-control" name="design" maxlength="30" required=""></div><br>
	<label class="col-sm-3">Qualification:</label><div class="col-sm-9"><input type="text" class="form-control" name="qualify" maxlength="40" required=""></div><br>
	<label class="col-sm-3">Department:</label><div class="col-sm-9"><input type="text" class="form-control" name="dept" required></div><br>
	<label class="col-sm-3">Photo:</label><div class="col-sm-9"> <input type="file" class="form-control" name="image" required=""></div><br>
	</div>
	
</div>

<div class="professional" id="professional_details">
<br><hr>
	<p id="details">Professional Details</p><hr>
	<div class="professional_details">
		<label class="col-sm-3">Department:</label><div class="col-sm-9"><input type="text" class="form-control" name="dept" placeholder="Enter your Department" title="Enter your Department"></div><br>
		<label class="col-sm-3">Designation:</label><div class="col-sm-9"><input type="text" class="form-control" name="design"></div><br>
		<label class="col-sm-3">Date of joining:</label><div class="col-sm-9"><input type="date" class="form-control" name="join"></div><br>
		<label class="col-sm-3">Area of specialisation:</label><div class="col-sm-9"><input type="text" class="form-control" name="area"></div><br>
		<label class="col-sm-3">Teaching Experience:</label><div class="col-sm-9"><input type="text" class="form-control" name="teachexp"></div><br>
		<label class="col-sm-3">Total Experience:</label><div class="col-sm-9"><input type="text" class="form-control" name="totalexp"></div>
	</div>
</div>

<div class="educational" id="educational_details">
<hr>
	<p id="details">Educational Details</p><hr>
	<div class="educational_details">
		<button class="ug_button btn btn-success"  type="button" style="">Add UG qualification detail +</button>&nbsp;<button class="pg_button btn btn-success" type="button">Add PG qualification detail +</button> &nbsp;<button class="phd_button btn btn-success" type="button">Add PHD qualification detail +</button>&nbsp; <!-- <button class="clear btn btn-danger" type="button">Clear All</button> --><br><br>
	</div>
	<div id="Educ_region">

		<div id="ug_content">
		<label class="col-xs-5 col-sm-3">UG Qualification:</label><div class="col-sm-9"><input type="text" class="form-control"  name="val[]"></div>  
		<label class="col-xs-5 col-sm-3">Year of UG Passing:</label><div class="col-sm-9"><input type="text" class="form-control" name="val[]"></div> 
		<label class="col-xs-5 col-sm-3">UG University:</label><div class="col-sm-9"><input type="text" class="form-control" name="val[]"></div> 
		<label class="col-xs-5 col-sm-3">UG Class:</label><div class="col-sm-9"><input type="text" class="form-control" name="val[]"></div>
		</div>

		<div id="pg_content">
		<label class="col-xs-5 col-sm-3">PG Qualification:</label><div class="col-sm-9"> <input type="text" class="form-control" name="pg[]"></div>
		<label class="col-xs-5 col-sm-3">Year of PG Passing:</label><div class="col-sm-9"><input type="text" class="form-control"  name="pg[]"></div> 
		 <label class="col-xs-5 col-sm-3">PG University:</label><div class="col-sm-9"><input type="text" class="form-control" name="pg[]"></div>   
		 <label class="col-xs-5 col-sm-3">PG Class:</label><div class="col-sm-9"> <input type="text" class="form-control" name="pg[]"></div>
		 </div><br>

		<div id="phd_content">
		<label class="col-xs-5 col-sm-3">phd Qualification:</label><div class="col-sm-9"> <input type="text" class="form-control" name="va[]"></div>
		<label class="col-xs-5 col-sm-3">Year of phd Complete:</label><div class="col-sm-9"> <input type="text" class="form-control" name="va[]"></div>
		<label class="col-xs-5 col-sm-3">Phd University:</label><div class="col-sm-9"> <input type="text" class="form-control" name="va[]"></div>
		</div>

</div>
</div>

<div class="Research" id="research_info">
	<p id="details">Research </p><hr>
	<button type="button" class="resbtn btn btn-primary "> Add more research field +</button><br><br>
	<div class="col-xs-10"><input type="text" class="form-control" name="myres[]"></div><br><br>
</div>
<div class="national" id="National_Conferences">
<p id="details">National Conferences</p><hr>
<div class="nation">
<button type="button" class="click btn btn-primary ">Add more <span class="fa fa-angle-double-right"></span></button>&nbsp;<button type="button" class="remclick btn btn-danger">Clear</button><br><br>

<label class="col-sm-3">Conference Number :</label><div class="col-sm-9"><input type="text" title="Enter Conferences Number" class="form-control" name="nno[]" ></div><br><br>
<label class="col-md-3">Conference Name :</label><div class="col-sm-9"> <textarea type="text" title="Enter Name of the Conference" name="nnam[]" class="form-control" rows="3" placeholder="Enter here ..."  ></textarea></div><br><br><br><br>
<label class="col-md-3">Conference location</label> <div class="col-sm-9"><input type="text" title="Enter Conference Location" class="form-control" name="nloc[]" ></div><br><br>
<label class="col-md-3">Paper title</label><div class="col-sm-9"> <textarea class="form-control" title="Enter Paper Title" name="ntit[]" rows="3" ></textarea></div><br><br><br><br>
<label class="col-md-3">Author Details</label><div class="col-sm-9"> <input type="text" title="Enter Author Details" class="form-control" name="naut[]" > </div><br><br>
<label class="col-md-3">proceeding no</label> <div class="col-sm-9"><input type="text" title="Enter proceeding No" class="form-control" name="npro[]"></div><br><br>
<label class="col-md-3">Month & Year</label><div class="col-sm-9"> <input type="date" title="Enter Month & Year" class="form-control" name="nmn[]" ></div><br><br>

</div>	
</div>

<div class="internconf" id="International_conferences">
<br>
<hr style="border:2px solid #661aff"> 
<p id="details">International Conferences</p><hr>
<div class="nation1">
<button type="button" class="click1 btn btn-primary">Add more  <span class="fa fa-angle-double-right"></span></button>&nbsp;<button type="button" class="remclick1 btn btn-danger">Clear</button><br><br>

<label class="col-sm-3">Conference Number  :</label><div class="col-sm-9"><input type="text" title="Enter Conferences Number" class="form-control" name="nno1[]" ></div><br><br>
<label class="col-sm-3">Conference Name  :</label><div class="col-sm-9"><textarea type="text" title="Enter Name of the Conference" class="form-control" rows="3" name="nnam1[]" ></textarea></div><br><br><br><br>
<label class="col-sm-3">Conference location :</label><div class="col-sm-9"> <input type="text" title="Enter Conference Location" class="form-control" name="nloc1[]"></div><br><br>
<label class="col-sm-3">Paper title :</label><div class="col-sm-9"> <textarea class="form-control" title="Enter Paper Title" rows="3" name="ntit1[]" ></textarea></div><br><br><br><br>
<label class="col-sm-3">Author Details :</label><div class="col-sm-9"> <input type="text" title="Enter Author Details" class="form-control" name="naut1[]" ></div><br><br>
<label class="col-sm-3" >proceeding no :</label><div class="col-sm-9"> <input type="text" title="Enter proceeding No" class="form-control" name="npro1[]"></div><br><br>
<label class="col-sm-3">Month & Year :</label><div class="col-sm-9"> <input type="date" title="Enter Month & Year" class="form-control" name="nmn1[]" ></div><br>
</div>	
</div>

<div class="internjournal" id="International_journal">
<hr style="border:2px solid #661aff">
<p id="details">International Journal</p><hr>
<div class="nation2">
<button type="button" class="click2 btn btn-primary">Add more  <span class="fa fa-angle-double-right"></span></button>&nbsp;<button type="button" class="remclick2 btn btn-danger">Clear</button><br><br>

<label class="col-sm-3">Conference Number : </label><div class="col-sm-9"><input type="text" title="Enter Conferences Number" class="form-control" name="nno2[]" ></div><br><br>
<label class="col-sm-3">Conference Name :</label><div class="col-sm-9"><textarea type="text" title="Enter Name of the Conference" class="form-control" rows="3" name="nnam2[]" placeholder="Enter here ..." ></textarea></div><br><br>
<label class="col-sm-3">Conference location</label> <div class="col-sm-9"><input type="text" class="form-control" name="nloc2[]"></div><br><br>
<label class="col-sm-3">Paper title</label><div class="col-sm-9"> <textarea title="Enter Paper Title" class="form-control" rows="3" name="ntit2[]" ></textarea></div><br><br>
<label class="col-sm-3">Author Details</label> <div class="col-sm-9"><input type="text" title="Enter Author Details" class="form-control" name="naut2[]" ></textarea></div><br><br>
<label class="col-sm-3">proceeding no</label><div class="col-sm-9"> <input type="text" title="Enter proceeding No" class="form-control" name="npro2[]"></div><br><br>
<label class="col-sm-3">Month & Year</label><div class="col-sm-9"> <input type="date" title="Enter Month & Year" class="form-control" name="nmn2[]" ></div><br><br>
</div>	
</div>
<div class="workshoporg" id="Workshop_organised">
	<hr style="border:2px solid #661aff">
	<p id="details">Workshop Organised details</p><hr>
	<div class="workshop">
		<button type="button" class="workclick btn btn-primary">Add more <span class="fa fa-angle-double-right"></span></button>&nbsp;<button type="button" class="remworkclick btn btn-danger">Clear</button><br><br>
		<label class="col-sm-3">Workshop Organised No </label><div class="col-sm-9"><input type="text" class="form-control" name="wno[]"></div><br><br>
		<label class="col-sm-3">Worked as:</label><div class="col-sm-9"><input type="text" class="form-control" name="wwork[]"></div><br><br>
		<label class="col-sm-3">Name:</label> <div class="col-sm-9"><input type="text" class="form-control" name="wname[]"></div><br><br>
		<label class="col-sm-3">Organisation:</label><div class="col-sm-9"> <input type="" class="form-control" name="worg[]"></div><br><br>
		<label class="col-sm-3">Location:</label><div class="col-sm-9"> <input type="text" class="form-control" name="wloc[]"></div><br><br>
		<label class="col-sm-3">No of Days:</label> <div class="col-sm-9"><input type="text" class="form-control" name="wday[]"></div><br><br>
		<label class="col-sm-3">Start Date:</label> <div class="col-sm-9"><input type="date" class="form-control" name="sdate[]"></div><br><br>
		<label class="col-sm-3">End Date:</label> <div class="col-sm-9"><input type="date" class="form-control" name="edate[]"></div><br><br>
	</div>
</div>
<div class="workshopattend" id="Workshop_attended">
	<hr style="border:2px solid #661aff">
	<p id="details">Workshop Attended details</p><hr>
	<div class="workshop1">
		<button type="button" class="workclick1 btn btn-primary">Add more <span class="fa fa-angle-double-right"></span></button>&nbsp;<button type="button"  class="remworkclick1 btn btn-danger">Clear</button><br><br>
		<label class="col-sm-3">Workshop Attended No </label><div class="col-sm-9"><input type="text" class="form-control" name="wno1[]">	</div><br><br>
		<label class="col-sm-3">Name:</label><div class="col-sm-9"> <input type="text" class="form-control" name="wname1[]"></div><br><br>
		<label class="col-sm-3">Organisation:</label><div class="col-sm-9"> <input type="text" class="form-control" name="worg1[]"></div><br><br>
		<label class="col-sm-3">Location:</label> <div class="col-sm-9"><input type="text" class="form-control" name="wloc1[]"></div><br><br>
		<label class="col-sm-3">No of Days:</label> <div class="col-sm-9"><input type="text" class="form-control" name="wday1[]"></div><br><br>
		<label class="col-sm-3">Start Date:</label><div class="col-sm-9"> <input type="date" class="form-control" name="sdate1[]"></div><br><br>
		<label class="col-sm-3">End Date:</label> <div class="col-sm-9"><input type="date" class="form-control" name="edate1[]"></div><br><br>
	</div>
</div>
<div class="talkdeliv" id="Talk_delivered">
	<hr style="border:2px solid #661aff">
	<p id="details">Talk Delivered details</p><hr>
	<div class="workshop2">
		<button type="button" class="workclick2 btn btn-primary">Add more <span class="fa fa-angle-double-right"></span></button>&nbsp;<button type="button" class="remworkclick2 btn btn-danger">Clear</button><br><br>
		<label class="col-sm-3">Talk delivered No </label><div class="col-sm-9"><input type="text" class="form-control" name="wno2[]"></div><br><br>	 
		<label class="col-sm-3">Name:</label><div class="col-sm-9"> <textarea class="form-control" name="wname2[]"></textarea></div><br><br>
		<label class="col-sm-3">Organisation:</label> <div class="col-sm-9"><input type="" class="form-control" name="worg2[]"></div><br><br>
		<label class="col-sm-3">Location:</label><div class="col-sm-9"> <input type="text" class="form-control" name="wloc2[]"></div><br><br>
		<label class="col-sm-3">Start Date:</label><div class="col-sm-9"> <input type="date" class="form-control" name="sdate2[]"></div><br><br>
		<label class="col-sm-3">End Date:</label><div class="col-sm-9"> <input type="date" class="form-control" name="edate2[]"></div><br><br>
	</div>
</div>
</div>
<br>
<center><input type="submit" name="next" value="View Profile " style="text-align: center;width:15%;height: 30px;background-color: #009933;color:white;box-shadow: 2px 2px #888888"></center>

</form>
</div>
<?php
@session_start();


?>

<script type="">
var a=$(".click");
var nation=$('.nation');
var a1=$(".click1");
var nation1=$('.nation1');
var a2=$(".click2");
var nation2=$('.nation2');

var w=$(".workclick");
var work=$(".workshop");
var w1=$(".workclick1");
var work1=$(".workshop1");
var w2=$(".workclick2");
var work2=$(".workshop2");
// var divis2=$(".container2");
// var ra=$(".remclick");
/*var btn=$(".btn");
var btn1=$(".btn1");
var btn2=$(".btn2");*/
	$(document).ready(function(){
		$(".personal,.professional,.educational,.Research,.national,.internconf,.internjournal,.workshoporg,.workshopattend,.talkdeliv,#ug_content,#pg_content,#phd_content").hide();
		/*$(".internconf").hide();
		$(".internjournal").hide();
		$(".workshoporg").hide();
		$(".workshopattend").hide();
		$(".talkdeliv").hide();*/
		$(".show_national").click(function(){
			$(".national").toggle();
		});
		$(".show_international_conference").click(function(){
			$(".internconf").toggle();
		});
		$(".show_international_journal").click(function(){
			$(".internjournal").toggle();
		});
		$(".show_workshop_organise").click(function(){
			$(".workshoporg").toggle();
		});
		$(".show_workshop_attend").click(function(){
			$(".workshopattend").toggle();
		});
		$(".show_talk_deliv").click(function(){
			$(".talkdeliv").toggle();
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
		$(".show_research").click(function(){
			$(".Research").toggle();
		});
		// education
		$(".ug_button").click(function(){
			$("#ug_content").toggle();
		});
		$(".pg_button").click(function(){
			$("#pg_content").toggle();
		});
		$(".phd_button").click(function(){
			$("#phd_content").toggle();
		});
		// reseaech field
		$(".resbtn").click(function(){
			$(".Research").append('<div><div class="col-xs-10"><input type="text" class="form-control" name="myres[]"></div><button type="button" class="res_delete btn btn-danger col-xs ">Delete</button></div>')
		});
		$(".Research").on("click",".res_delete",function(){
			$(this).parent('div').remove();
		});

		$(a).click(function(){
			$(nation).append('<div class="newnation"><hr style="border:2px solid #000000"><label class="col-sm-3">Conference Number :</label><div class="col-sm-9"><input type="text" title="Enter Conferences Number" class="form-control" name="nno[]" ></div><br><br><label class="col-md-3">Conference Name :</label><div class="col-sm-9"> <textarea type="text" title="Enter Name of the Conference" name="nnam[]" class="form-control" rows="3" placeholder="Enter here ..."  ></textarea></div><br><br><br><br><label class="col-md-3">Conference location</label> <div class="col-sm-9"><input type="text" title="Enter Conference Location" class="form-control" name="nloc[]" ></div><br><br><label class="col-md-3">Paper title</label><div class="col-sm-9"> <textarea class="form-control" title="Enter Paper Title" name="ntit[]" rows="3" ></textarea></div><br><br><br><br>	<label class="col-md-3">Author Details</label><div class="col-sm-9"> <input type="text" title="Enter Author Details" class="form-control" name="naut[]" > </div><br><br>	<label class="col-md-3">proceeding no</label> <div class="col-sm-9"><input type="text" title="Enter proceeding No" class="form-control" name="npro[]"></div><br><br>	<label class="col-md-3">Month & Year</label><div class="col-sm-9"> <input type="date" title="Enter Month & Year" class="form-control" name="nmn[]" ></div><br><br><button type="button" class="remov btn btn-danger"> click to remove</button></div>');
		});
		
		$(nation).on("click",".remclick",function(){
			$(".newnation").remove();
		});
		
		$(nation).on("click",".remov",function(){
			$(this).parent('div').remove();
		});


		$(a1).click(function(){
			$(nation1).append('<div class="newnation1"><hr style="border:2px solid #000000"><label class="col-sm-3">Conference Number  :</label><div class="col-sm-9"><input type="text" title="Enter Conferences Number" class="form-control" name="nno1[]" ></div><br><br>	<label class="col-sm-3">Conference Name  :</label><div class="col-sm-9"><textarea type="text" title="Enter Name of the Conference" class="form-control" rows="3" name="nnam1[]" ></textarea></div><br><br><br><br>	<label class="col-sm-3">Conference location :</label><div class="col-sm-9"> <input type="text" title="Enter Conference Location" class="form-control" name="nloc1[]"></div><br><br>	<label class="col-sm-3">Paper title :</label><div class="col-sm-9"> <textarea class="form-control" title="Enter Paper Title" rows="3" name="ntit1[]" ></textarea></div><br><br><br><br>	<label class="col-sm-3">Author Details :</label><div class="col-sm-9"> <input type="text" title="Enter Author Details" class="form-control" name="naut1[]" ></div><br><br>	<label class="col-sm-3" >proceeding no :</label><div class="col-sm-9"> <input type="text" title="Enter proceeding No" class="form-control" name="npro1[]"></div><br><br>	<label class="col-sm-3">Month & Year :</label><div class="col-sm-9"> <input type="date" title="Enter Month & Year" class="form-control" name="nmn1[]" ></div><br><br><button type="button" class="remov1 btn btn-danger"> Undo</button></div>');
		});
		
		$(nation1).on("click",".remclick1",function(){
			$(".newnation1").remove();
		});
			
		$(nation1).on("click",".remov1",function(){
			$(this).parent('div').remove();
		});

		$(a2).click(function(){
			$(nation2).append('<div class="newnation2"><hr style="border:2px solid #000000"><label class="col-sm-3">Conference Number : </label><div class="col-sm-9"><input type="text" title="Enter Conferences Number" class="form-control" name="nno2[]" ></div><br><br>	<label class="col-sm-3">Conference Name :</label><div class="col-sm-9"><textarea type="text" title="Enter Name of the Conference" class="form-control" rows="3" name="nnam2[]" placeholder="Enter here ..." ></textarea></div><br><br>	<label class="col-sm-3">Conference location</label> <div class="col-sm-9"><input type="text" class="form-control" name="nloc2[]"></div><br><br>	<label class="col-sm-3">Paper title</label><div class="col-sm-9"> <textarea title="Enter Paper Title" class="form-control" rows="3" name="ntit2[]" ></textarea></div><br><br>	<label class="col-sm-3">Author Details</label> <div class="col-sm-9"><input type="text" title="Enter Author Details" class="form-control" name="naut2[]" ></textarea></div><br><br>	<label class="col-sm-3">proceeding no</label><div class="col-sm-9"> <input type="text" title="Enter proceeding No" class="form-control" name="npro2[]"></div><br><br>	<label class="col-sm-3">Month & Year</label><div class="col-sm-9"> <input type="date" title="Enter Month & Year" class="form-control" name="nmn2[]" ></div><br><br><br><button type="button" class="remov2 btn btn-danger"> click to remove</button></div>');
		});
		
		$(nation2).on("click",".remclick2",function(){
			$(".newnation2").remove();
		});
			
		$(nation2).on("click",".remov2",function(){
			$(this).parent('div').remove();
		});



		$(w).click(function(){
			$(work).append('<div class="newwork"><hr style="border:2px solid #000000"><label class="col-sm-3">Workshop Organised No </label><div class="col-sm-9"><input type="text" class="form-control" name="wno[]"></div><br><br>		<label class="col-sm-3">Worked as:</label><div class="col-sm-9"><input type="text" class="form-control" name="wwork[]"></div><br><br>			<label class="col-sm-3">Name:</label> <div class="col-sm-9"><input type="text" class="form-control" name="wname[]"></div><br><br>		<label class="col-sm-3">Organisation:</label><div class="col-sm-9"> <input type="" class="form-control" name="worg[]"></div><br><br>		<label class="col-sm-3">Location:</label><div class="col-sm-9"> <input type="text" class="form-control" name="wloc[]"></div><br><br>		<label class="col-sm-3">No of Days:</label> <div class="col-sm-9"><input type="text" class="form-control" name="wday[]"></div><br><br>		<label class="col-sm-3">Start Date:</label> <div class="col-sm-9"><input type="date" class="form-control" name="sdate[]"></div><br><br>		<label class="col-sm-3">End Date:</label> <div class="col-sm-9"><input type="date" class="form-control" name="edate[]"></div><br><br><br><button type="button" class="workrem btn btn-danger">click to remove</button></div>');
		});
		
		$(work).on("click",".remworkclick",function(){
			$(".newwork").remove();
		});
		
		$(work).on("click",".workrem",function(){
			$(this).parent('div').remove();
		});

		$(w1).click(function(){
			$(work1).append('<div class="newwork1"><hr style="border:2px solid #000000"><label class="col-sm-3">Workshop Attended No </label><div class="col-sm-9"><input type="text" class="form-control" name="wno1[]">	</div><br><br>		<label class="col-sm-3">Name:</label><div class="col-sm-9"> <input type="text" class="form-control" name="wname1[]"></div><br><br>		<label class="col-sm-3">Organisation:</label><div class="col-sm-9"> <input type="text" class="form-control" name="worg1[]"></div><br><br>		<label class="col-sm-3">Location:</label> <div class="col-sm-9"><input type="text" class="form-control" name="wloc1[]"></div><br><br>		<label class="col-sm-3">No of Days:</label> <div class="col-sm-9"><input type="text" class="form-control" name="wday1[]"></div><br><br>		<label class="col-sm-3">Start Date:</label><div class="col-sm-9"> <input type="date" class="form-control" name="sdate1[]"></div><br><br>		<label class="col-sm-3">End Date:</label> <div class="col-sm-9"><input type="date" class="form-control" name="edate1[]"></div><br><br><br><button type="button" class="workrem1 btn btn-danger">click to remove</button></div>');
		});
		
		$(work1).on("click",".remworkclick1",function(){
			$(".newwork1").remove();
		});
		
		$(work1).on("click",".workrem1",function(){
			$(this).parent('div').remove();
		});

		$(w2).click(function(){
			$(work2).append('<div class="newwork2"><hr style="border:2px solid #000000"><label class="col-sm-3">Talk delivered No </label><div class="col-sm-9"><input type="text" class="form-control" name="wno2[]"></div><br><br>			<label class="col-sm-3">Name:</label><div class="col-sm-9"> <textarea class="form-control" name="wname2[]"></textarea></div><br><br>		<label class="col-sm-3">Organisation:</label> <div class="col-sm-9"><input type="" class="form-control" name="worg2[]"></div><br><br>		<label class="col-sm-3">Location:</label><div class="col-sm-9"> <input type="text" class="form-control" name="wloc2[]"></div><br><br>		<label class="col-sm-3">Start Date:</label><div class="col-sm-9"> <input type="date" class="form-control" name="sdate2[]"></div><br><br>		<label class="col-sm-3">End Date:</label><div class="col-sm-9"> <input type="date" class="form-control" name="edate2[]"></div><br><br><br><button type="button" class="workrem2 btn btn-danger">click to remove</button></div>');
		});
		
		$(work2).on("click",".remworkclick2",function(){
			$(".newwork2").remove();
		});
		
		$(work2).on("click",".workrem2",function(){
			$(this).parent('div').remove();
		});

		
	});

</script>
</body>
</html>