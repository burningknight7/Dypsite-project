<!DOCTYPE html>
<html>
<head>
	<title>
		Display
	</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'> 
 <link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
 <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>  
<style type="text/css">
	/*table{margin:10px 10px 10px 10px;}*/
	table{width: 100%;position: relative;}
	img{ width:120px;height: 140px;;vertical-align: top;margin-left: 87%;margin-top:0px;
	position:absolute;z-index: 1;}
	th{height:50px; font-size: 18px; vertical-align: middle; font-weight:italic; text-decoration: underline;}
	#All_details{ width: 99%;height: 75vh;margin-top:0px} /*all details*/
	#Main_logo{padding-left: 10px;font-size: 20px}
	
	a:hover{text-decoration: none;color: white;font-size: 20px;}
	h4{font-family: 'Arimo';}
</style>

</head>
<body>
<nav class="navbar navbar-inverse" id="navbar" style="height: 10vh;width: 100%;background-color: #82020f">
	<div class="container-fluid">
	<div class="navbar-header">
	<div id="Main_logo" style="color: white;line-height: 10vh;font-family: 'Aldrich';">RAMRAO ADIK'S INSTITUTE OF TECHNOLOGY </div>
	</div>
	
	<ul class="nav navbar-nav navbar-right">
		 <li class="navbar-brand"><a href="update.php" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Edit</a></li>
		<li class="navbar-brand"><a href="logout.php" style="color:white;"><span class="glyphicon glyphicon-off"></span>&nbsp;Log Out</a></li>
	</ul>
	</div>

	
	
</nav>

<div id="All_details">
<div id="print">
<?php
include 'connect.php';
@session_start();
 $id=$_SESSION['id'];
 // $srdn='754';
// @session_start();
// $SESSION['id']=$srdn;
if(isset($_SESSION['id']))
 {
echo "<p><b><h3>Faculty Profile</h3></b></p>";
$sel="SELECT * FROM personal WHERE `uniqu`='$id'";
$data=mysqli_query($con,$sel);
echo "<table class='table table-responsive table-bordered ' >";
while($row=mysqli_fetch_array($data))
{
	// echo "<div class='clearfix'>";
	// echo '<img src = "gallery/'.$image.'.bmp" class="right"/>';
	$name=$row['name'];
	$gender=$row['gender'];
	$image=$row['photo'];
	echo '<img src = "gallery/'.$image.'.bmp" align="right"/>';
	echo '<tr style="position:relative;">';
	echo '<th style="">Personal Details</th>';
	/*echo '<th rowspan="" style="width:"><img class="img-responsive" src = "gallery/'.$image.'.bmp" align="right"/ ></th>';   */
	echo '</tr>';
	echo "<tr><td>Name: $name</td></tr>";
	echo "<tr><td>Gender: $gender</td></tr>";


 // echo '<img src = "gallery/'.$image.'.bmp" class="right"/>';
 // echo '</div>';
	 /*print $image;
	 echo "<img src='$image.jpg'>";*/
}
	
	
// professional details
$pro="SELECT * FROM professional WHERE `uniqu`='$id'";
$data=mysqli_query($con,$pro);
while ($row=mysqli_fetch_array($data)) {
	$dept=$row['department'];
	$design=$row['design'];
	$date=$row['date'];
	$special=$row['special'];
	$teach=$row['teaching'];
	$total=$row['total'];
	echo '<tr><th>Professional Details</th></tr>';
	echo "<tr><td>Department: $dept</tr>";
	echo "<tr><td>Desigantion: $design</td></tr>";
	echo "<tr><td>Date of joining: $date</td></tr>";
	echo "<tr><td>Area of specialisation: $special</td></tr>";
	echo "<tr><td>Teaching: $teach </td></tr>";
	echo "<tr><td>Total experience: $total</td></tr>";


}
 $edu="SELECT * FROM educational WHERE `uniqu`='$id'";
 $edata=mysqli_query($con,$edu);
 while($row=mysqli_fetch_array($edata))
 {
 	$ugq=$row['ug_qualification'];
 	$ugyop=$row['ug_year_of_passing'];
 	$ugu=$row['ug_university'];
 	$ugc=$row['ug_class'];
 	$pgq=$row['pg_qualification'];
 	$pgyop=$row['pg_year_of_passing'];
 	$pgu=$row['pg_university'];
 	$pgc=$row['pg_class'];
 	$phdq=$row['phd_qualification'];
 	$phdyop=$row['phd_year_of_passing'];
 	$phdu=$row['phd_university'];
 	echo "<tr><th>Educational details</th></tr>";
	echo "<tr><td>UG Qualification: $ugq</tr>";
	echo "<tr><td>UG Year of passing: $ugyop</tr>";
	echo "<tr><td>UG university: $ugu</tr>";
	echo "<tr><td>UG Class: $ugc</tr>";
	echo "<tr><td>PG Qualification: $pgq</tr>";
	echo "<tr><td>PG Year of passing:$pgyop</tr>";
	echo "<tr><td>PG university: $pgu</tr>";
	echo "<tr><td>PG Class: $pgc</tr>";
	echo "<tr><td>PHD Qualification: $phdq</tr>";
	echo "<tr><td>PHD Year of passing: $phdyop</tr>";
	echo "<tr><td>PHD Class: $phdu</tr>";
	echo "<tr><td>Department: $dept</tr>";
 
 }
 echo "<tr><th>Resesarch and development</th></tr>";

 $res="SELECT * FROM research WHERE `uniqu`='$id'";
 $rdata=mysqli_query($con,$res);
 while ($rows=mysqli_fetch_array($rdata)) {
 	$list=$rows['resfield'];
 	 echo "<tr><td>$list </td></tr>";
 	
 }
 // National conference 
 echo "</table>";
 echo "<center><h3>conference details</h3></center><br>";
 echo "<h4><center>National conference</center></h4>";
 $i=0;
 echo "<table class='table table-responsive table-striped table-bordered'>";
 echo "<tr><td>conf no</td><td>Conf Name</td><td>Conf.Location</td><td>paper title</td><td>Author details</td><td>proceeding no</td><td>month & year</td></tr>";
 $nat="SELECT * FROM national WHERE `uniqu`='$id'";
 $ndata=mysqli_query($con,$nat);
 while($row=mysqli_fetch_array($ndata))
 {
 	$i++;
 	$n=$row['name'];
 	$l=$row['location'];
 	$t=$row['title'];
 	$a=$row['author'];
 	$p=$row['proceed'];
 	$m=date('M Y',strtotime($row['month']));
 	echo "<tr><td>$i )</td><td>$n</td><td>$l</td><td>$t</td><td>$a</td><td>$p</td><td>$m</td></tr>";
 	
 }
 echo "</table>";
 // International conference
 $i=0;
  echo "<h4><center>International conference</center></h4>";
echo "<table class='table table-responsive table-striped table-bordered'>";
 echo "<tr><td>conf no</td><td>Conf Name</td><td>Conf.Location</td><td>paper title</td><td>Author details</td><td>proceeding no</td><td>month & year</td></tr>";
 $nat="SELECT * FROM intconf WHERE `uniqu`='$id'";
 $ndata=mysqli_query($con,$nat);
 while($row=mysqli_fetch_array($ndata))
 {
 	$i++;
 	$n=$row['name'];
 	$l=$row['location'];
 	$t=$row['title'];
 	$a=$row['author'];
 	$p=$row['proceed'];
 	$m=date('M Y',strtotime($row['month']));
 	echo "<tr><td>$i )</td><td>$n</td><td>$l</td><td>$t</td><td>$a</td><td>$p</td><td>$m</td></tr>";
 	
 }
 echo "</table>";
 // International journal
$i=0;
echo "<h4><center>International journal</center></h4>";
echo "<table class='table table-responsive table-striped table-bordered'>";
 echo "<tr><td>conf no</td><td>Conf Name</td><td>Conf.Location</td><td>paper title</td><td>Author details</td><td>proceeding no</td><td>month & year</td></tr>";
 $nat="SELECT * FROM intjournal WHERE `uniqu`='$id'";
 $ndata=mysqli_query($con,$nat);
 while($row=mysqli_fetch_array($ndata))
 {
 	$i++;
 	$n=$row['name'];
 	$l=$row['location'];
 	$t=$row['title'];
 	$a=$row['author'];
 	$p=$row['proceed'];
 	$m=date('M Y',strtotime($row['month']));
 	echo "<tr><td>$i )</td><td>$n</td><td>$l</td><td>$t</td><td>$a</td><td>$p</td><td>$m</td></tr>";
 	
 }
 echo "</table>";
 // Workshops organised details
 $i=0;
 echo "<h4><center>Workshops organised details</center></h4>";
 echo "<table class='table table-responsive table-striped table-bordered'>";
 echo "<tr><td>No</td><td>Worked as</td><td>Name</td><td>Organisation</td><td>Location</td><td>No of days</td><td>start date</td><td>End date</td></tr>";
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
 	echo "<tr><td>$i )</td><td>$w</td><td>$n</td><td>$o</td><td>$l</td><td>$a</td><td>$s</td><td>$e</td></tr>";
 	
 }
 echo "</table>";
 // Workshops Attended details
 $i=0;
 echo "<h4><center>Workshops Attended details</center></h4>";
 echo "<table class='table table-responsive table-striped table-bordered'>";
 echo "<tr><td>No</td><td>Name</td><td>Organisation</td><td>Location</td><td>No of days</td><td>start date</td><td>End date</td></tr>";
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
 	echo "<tr><td>$i )</td><td>$n</td><td>$o</td><td>$l</td><td>$a</td><td>$s</td><td>$e</td></tr>";
 	
 }
 echo "</table>";
 // Talk delivered details
 $i=0;
 echo "<h4><center>Talk delivered details</center></h4>";
 echo "<table class='table table-responsive table-striped table-bordered'>";
 echo "<tr><td>No</td><td>Name</td><td>Organisation</td><td>Location</td><td>start date</td><td>End date</td></tr>";
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
 	echo "<tr><td>$i )</td><td>$n</td><td>$o</td><td>$l</td><td>$s</td><td>$e</td></tr>";
 	
 }
 echo "</table>";
}
 
else
{
	echo "<script language='javascript'>";
	echo "alert('You are not login please log in')";
	echo "</script>";
	echo '<meta http-equiv="refresh" content="0;URL=login.php">';
}


?>
</div>
<button class="btn btn-primary col-sm-2 col-sm-offset-5" onclick="printInfo('print')">PRINT</button>
</div>
<span></span>

<script type="text/javascript">
function printInfo(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}	
</script>
</body>
</html>
