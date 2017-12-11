<!DOCTYPE html>
<html>
<head>
	<title>
		View
	</title>

</head>
<body>
<?php
include 'connect.php';
@session_start();
$id=$_SESSION['id'];

$substring_id=$id;
if(isset($_POST['next']))
{
	// profile details
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$designation=$_POST['design'];
	$qualif=$_POST['qualify'];
	$dept=$_POST['dept'];
	$image=$_POST['image'];
	// $sql="SELECT * FROM personal WHERE "; 
	$sql="INSERT INTO personal (name,gender,designation,qualify,dept,photo,`uniqu`) VALUES ('$name','$gender','$designation','$qualif','$dept','$image','$id')";
	mysqli_query($con,$sql);

	// professional details
	$depart=$_POST['dept'];
	$des=$_POST['design'];
	$date=$_POST['join'];
	$special=$_POST['area'];
	$teach=$_POST['teachexp'];
	$total=$_POST['totalexp'];
	$pro="INSERT INTO professional VALUES ('$depart','$des','$date','$special','$teach','$total','$id')";
	mysqli_query($con,$pro);

	$n=0;
		if(isset($_POST['val']))
		{
		$educate=$_POST['val'];
		// echo $educate[3];
		$n=$n+sizeof($educate);
		}
		if(isset($_POST['pg']))
		{
			$clerk=$_POST['pg'];
			// echo $clerk[0];
			$n=$n+sizeof($clerk);
		}
		if(isset($_POST['va']))
		{
			$reman=$_POST['va'];
			// echo $reman[0];
			$n=$n+sizeof($reman);
		}
		//$n=sizeof($educate)+sizeof($clerk);
		echo $n;
		// echo $n;
	
	if($n==0)
	{
		echo "Please Enter Educational detail";
	}
	else if( $n > 9)
	{
		echo $educate[0];
		$edu="INSERT INTO educational VALUES ('$educate[0]','$educate[1]','$educate[2]','$educate[3]','$clerk[0]','$clerk[1]','$clerk[2]','$clerk[3]','$reman[0]','$reman[1]','$reman[2]','$id')";
		$can=mysqli_query($con,$edu);
	}
	else
	{
		echo "you are here";
		$ed="INSERT INTO educational (ug_qualification,ug_year_of_passing,ug_university,ug_class,pg_qualification,pg_year_of_passing,pg_university,pg_class,`uniqu`)VALUES ('$educate[0]','$educate[1]','$educate[2]','$educate[3]','$clerk[0]','$clerk[1]','$clerk[2]','$clerk[3]','$id')";
		$can=mysqli_query($con,$ed);
	}
	
	//Research
	$nres=$_POST['myres'];
	
	for($i=0;$i<sizeof($nres);$i++)
	{
		$substring=$id."_".$i;
		$res="INSERT INTO research (`uniqu`,`resfield`,`research_id`) VALUES ('$id','$nres[$i]','$substring')";
		mysqli_query($con,$res);
	}
	
	// national CONFERENCES
	$no=$_POST['nno'];
	$name=$_POST['nnam'];
	$location=$_POST['nloc'];
	$title=$_POST['ntit'];
	$author=$_POST['naut'];
	$proceed=$_POST['npro'];
	$may=$_POST['nmn'];
	$sub_national_id=$substring_id."_".$no;
	//INTERNATIONAL CONFERENCES
	$no1=$_POST['nno1'];
	$name1=$_POST['nnam1'];
	$location1=$_POST['nloc1'];
	$title1=$_POST['ntit1'];
	$author1=$_POST['naut1'];
	$proceed1=$_POST['npro1'];
	$may1=$_POST['nmn1'];
	$sub_intern_conf_id=$substring_id."_".$no1;
	//international journal
	$no2=$_POST['nno2'];
	$name2=$_POST['nnam2'];
	$location2=$_POST['nloc2'];
	$title2=$_POST['ntit2'];
	$author2=$_POST['naut2'];
	$proceed2=$_POST['npro2'];
	$may2=$_POST['nmn2'];
	$sub_intern_jour_id=$substring_id."_".$no2;
	//worshop organised
	$eno=$_POST['wno'];
	$ework=$_POST['wwork'];
	$ename=$_POST['wname'];
	$eorg=$_POST['worg'];
	$eloc=$_POST['wloc'];
	$eday=$_POST['wday'];
	$estart=$_POST['sdate'];
	$eend=$_POST['edate'];
	$sub_work_org_id=$substring_id."_".$eno;
	//WORSHOP ATTENDED
	$eno1=$_POST['wno1'];
	$ename1=$_POST['wname1'];
	$eorg1=$_POST['worg1'];
	$eloc1=$_POST['wloc1'];
	$eday1=$_POST['wday1'];
	$estart1=$_POST['sdate1'];
	$eend1=$_POST['edate1'];
	$sub_work_att_id=$substring_id."_".$eno1;
	// TALK DELIVERED
	$eno2=$_POST['wno2'];
	$ename2=$_POST['wname2'];
	$eorg2=$_POST['worg2'];
	$eloc2=$_POST['wloc2'];
	$estart2=$_POST['sdate2'];
	$eend2=$_POST['edate2'];
	$sub_talk_del_id=$substring_id."_".$eno2;
	// echo sizeof($eno);
	for($i=0;$i<sizeof($no);$i++)
	{
		$sub=$substring_id."_".$i;
		$sql="INSERT INTO national (no,name,location,title,author,proceed,month,uniqu,row_id) VALUES ('$no[$i]','$name[$i]','$location[$i]','$title[$i]','$author[$i]','$proceed[$i]','$may[$i]','$id','$sub')";
		mysqli_query($con,$sql);
	}
	for($i=0;$i<sizeof($no1);$i++)
	{
		$sub=$substring_id."_".$i;
		$sql="INSERT INTO intconf (no,name,location,title,author,proceed,month,uniqu,row_id) VALUES ('$no1[$i]','$name1[$i]','$location1[$i]','$title1[$i]','$author1[$i]','$proceed1[$i]','$may1[$i]','$id','$sub')";
		mysqli_query($con,$sql);
	}
	for($i=0;$i<sizeof($no2);$i++)
	{
		$sub=$substring_id."_".$i;
		$sql="INSERT INTO intjournal (no,name,location,title,author,proceed,month,uniqu,row_id) VALUES ('$no2[$i]','$name2[$i]','$location2[$i]','$title2[$i]','$author2[$i]','$proceed2[$i]','$may2[$i]','$id','$sub')";
		mysqli_query($con,$sql);
	}

	for($i=0;$i<sizeof($eno);$i++)
	{
		// echo $eno[1];
		$sub=$substring_id."_".$i;
		$sql="INSERT INTO worganised VALUES ('$eno[$i]','$ework[$i]','$ename[$i]','$eorg[$i]','$eloc[$i]','$eday[$i]','$estart[$i]','$eend[$i]','$id','$sub')";
		mysqli_query($con,$sql);
	}
	for($i=0;$i<sizeof($eno1);$i++)
	{
		$sub=$substring_id."_".$i;
		$sql="INSERT INTO wattend (dno,dname,dorg,dlocation,ddays,dsdate,dedate,uniqu,row_id) VALUES ('$eno1[$i]','$ename1[$i]','$eorg1[$i]','$eloc1[$i]','$eday1[$i]','$estart1[$i]','$eend1[$i]','$id','$sub')";
		mysqli_query($con,$sql);
	}
	for($i=0;$i<sizeof($eno2);$i++)
	{
		$sub=$substring_id."_".$i;
		$sql="INSERT INTO talkd (no,name,organisation,location,sdate,edate,uniqu,row_id) VALUES ('$eno2[$i]','$ename2[$i]','$eorg2[$i]','$eloc2[$i]','$estart2[$i]','$eend2[$i]','$id','$sub')";
		mysqli_query($con,$sql);
	}

	header('Location:display.php');

}


?>
<?php
/*
*/

?>
</body>
</html>