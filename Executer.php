<?php
include 'connect.php';
@session_start();

$flag_set=$_POST['flag'];
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id'];

}
// echo $id;

switch($flag_set)
{
	case "updatePassword" :
	$list = array();
	$email=$_SESSION['pemail'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confpass'];
	if($password == $confirm_password)
	{
		$sql="UPDATE register SET password='$password' WHERE email='$email'";
		if(mysqli_query($con,$sql) == true)
		{
			$list['status']=true;
			//echo "password update sucessfully";
		}
		else
		{
			$list['status']=false;
		}
		
	}
	else
	{
		echo "Password not updated";
	}
	echo json_encode($list);
	break;

	case "Update_personal":
	$sql="SELECT * FROM personal WHERE uniqu='$id'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$name=trim($_POST['name']);
	$gender=trim($_POST['gender']);
	$designation=trim($_POST['designation']);
	$qualify=trim($_POST['qualification']);
	$dept=trim($_POST['department']);
	if($name == $row['name'] && $designation == $row['designation'] && $qualify == $row['qualify'] && $dept == $row['dept']){
		echo "No changes made";
	}
	else
	{
		$sql="UPDATE personal SET name='$name',gender='$gender',designation='$designation',qualify='$qualify',dept='$dept' WHERE uniqu='$id'";
		if(mysqli_query($con,$sql) == true)
			echo "Detail update sucessfully";
		else
		{
			echo "error";
		}
	}
	break;

	case "Update_professional":
	$sql="SELECT * FROM professional WHERE uniqu='$id'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$department=trim($_POST['dept']);
	$designation=trim($_POST['designation']);
	$date_of_join=trim($_POST['date_of_join']);
	$area_of_special=trim($_POST['area_of_special']);
	$teach_experience=trim($_POST['teach_experience']);
	$total_experience=trim($_POST['total_experience']);
	if($department == $row['department'] && $designation == $row['design'] && $date_of_join == $row['date'] && $area_of_special == $row['special'] && $teach_experience == $row['teaching'] && $total_experience == $row['total']){
		echo "No changes made";
	}
	else
	{
		$sql="UPDATE professional SET department='$department',design='$designation',`date`='$date_of_join',special='$area_of_special',teaching='$teach_experience',total='$total_experience' WHERE uniqu='$id'";
		if(mysqli_query($con,$sql) == true)
			echo "Detail update sucessfully";
		else
		{
			echo "error";
		}
	}
	break;

	case "Update_educational":
	$sql="SELECT * FROM educational WHERE uniqu='$id'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$ug_qualification=trim($_POST['ug_qualification']);
	$ug_year_of_passing=trim($_POST['ug_year_of_passing']);
	$ug_university=trim($_POST['ug_university']);
	$ug_class=trim($_POST['ug_class']);
	$pg_qualification=trim($_POST['pg_qualification']);
	$pg_year_of_passing=trim($_POST['pg_year_of_passing']);
	$pg_university=trim($_POST['ug_university']);
	$pg_class=trim($_POST['pg_class']);
	$phd_qualification=trim($_POST['phd_qualification']);
	$phd_year_of_passing=trim($_POST['phd_year_of_passing']);
	$phd_university=trim($_POST['phd_university']);

	if($ug_qualification == $row['ug_qualification'] && $ug_year_of_passing == $row['ug_year_of_passing'] && $ug_university == $row['ug_university'] && $ug_class == $row['ug_class'] && $pg_qualification == $row['pg_qualification'] && $pg_year_of_passing == $row['pg_year_of_passing'] && $pg_university == $row['pg_university'] && $pg_class == $row['pg_class'] && $phd_qualification == $row['phd_qualification'] && $phd_year_of_passing == $row['phd_year_of_passing'] && $phd_university == $row['phd_university']){
		echo "No changes made";
	}
	else
	{
		$sql="UPDATE educational SET ug_qualification='$ug_qualification',ug_year_of_passing='$ug_year_of_passing',ug_university='$ug_university',ug_class='$ug_class',pg_qualification='$pg_qualification',pg_year_of_passing='$pg_year_of_passing',pg_university='$pg_university',pg_class='$pg_class',phd_qualification='$phd_qualification', phd_year_of_passing='$phd_year_of_passing',phd_university='$phd_university' WHERE uniqu='$id'";
		if(mysqli_query($con,$sql) == true)
			echo "Detail update sucessfully";
		else
		{
			echo "error";
		}
	}
	break;

	case "Add_research_field":

	$list = array();
	$res_id=$_POST['resid'];
	$res_name=$_POST['resname'];
	$domain=$_POST['domain'];
	$date=$_POST['date'];
	//echo $domain;
	$res_field=$id."_".$res_id;

$sql="INSERT INTO research (uniqu,resfield,research_id,domain,`date`) VALUES ('$id','$res_name','$res_field','$domain','$date')";
	if(mysqli_query($con,$sql) == true)
	{
		echo "true";
		// echo $res_id;		
	}
	else
	{
		echo "false";
		// echo $id;
	}
	//echo json_encode($list);
	break;

	case "delete_research_field":
	$res_id=$_POST['research_id'];
	$tname=$_POST['t_name'];
	
	$sql="DELETE FROM $tname WHERE research_id='$res_id'";
	if(mysqli_query($con,$sql) == true)
	{
		echo "Successfully deleted";
	}
	else
	{
		echo "Does not exist";
	}
	break;

	case "update_research_field":
	$res_id=$_POST['res_id'];
	$resvalue=$_POST['resvalue'];
	// $tname=$_POST['t_name'];
	
	$sql="UPDATE research SET resfield='$resvalue' WHERE research_id='$res_id'";
	if(mysqli_query($con,$sql) == true)
	{
		echo "Your changes are updating ..";
	}
	else
	{
		echo "Does not exist in record try again";
	}
	break;

	case "Add_conf_field":
	
	$tagName=$_POST['Name'];
	// echo $tagName;
	$confno=$_POST['confno'];
	$confname=$_POST['confname'];
	$confloc=$_POST['confloc'];
	$papertitle=$_POST['papertitle'];
	$authdet=$_POST['authdet'];
	$proceedno=$_POST['proceedno'];
	$mnyr=$_POST['mnyr'];
	//echo $mnyr;
	$res_id=$id."_".$confno;
	if($tagName == "national")
	{
		$sql="INSERT INTO national (no,name,location,title,author,proceed,month,uniqu,row_id) VALUES ('$confno','$confname','$confloc','$papertitle','$authdet','$proceedno','$mnyr','$id','$res_id')";
		if(mysqli_query($con,$sql) == true)
		{

			echo "true";
		}
		else
		{
			echo "false";
		}

	}
	elseif($tagName == "international_conf")
	{
		$sql="INSERT INTO intconf VALUES ('$confno','$confname','$confloc','$papertitle','$authdet','$proceedno','$mnyr','$id','$res_id')";
		if(mysqli_query($con,$sql) == true)
		{
			echo "true";
		}
		else
		{
			echo "false";
		}
	}
	else
	{
		$sql="INSERT INTO intjournal VALUES ('$confno','$confname','$confloc','$papertitle','$authdet','$proceedno','$mnyr','$id','$res_id')";
		if(mysqli_query($con,$sql) == true)
		{
			echo "true";
		}
		else
		{
			echo "false";
		}
	}
	break;

	case "delete_conf_field":
	$row_id=$_POST['row_id'];
	$tname=$_POST['t_name'];
	// echo $res_id;
	$sql="DELETE FROM $tname WHERE row_id='$row_id'";
	if(mysqli_query($con,$sql) == true)
	{
		echo $tname;
	}
	else
	{
		echo "Does not exist";
	}
	break;

	case 'update_conf':
		$tagName=$_POST['Name'];		
		$confname=$_POST['confname'];
		$confloc=$_POST['confloc'];
		$papertitle=$_POST['papertitle'];
		$authdet=$_POST['authdet'];
		$proceedno=$_POST['proceedno'];
		$mnyr=$_POST['mnyr'];
		$row_id=$_POST['row_id'];
		if($tagName == "national")
		{
			$sql="UPDATE national SET name='$confname',location='$confloc',title='$papertitle',author='$authdet',proceed='$proceedno',month='$mnyr' WHERE row_id='$row_id'";
			if(mysqli_query($con,$sql) == true)
			{
				echo "true";
			}
			else
			{
				echo "false";
			}
		}
		elseif($tagName == "international_conf")
		{
			$sql="UPDATE intconf SET name='$confname',location='$confloc',title='$papertitle',author='$authdet',proceed='$proceedno',month='$mnyr' WHERE row_id='$row_id'";
			if(mysqli_query($con,$sql) == true)
			{
				echo "true";
			}
			else
			{
				echo "false";
			}
		}
		else
		{
			$sql="UPDATE intjournal SET name='$confname',location='$confloc',title='$papertitle',author='$authdet',proceed='$proceedno',month='$mnyr' WHERE row_id='$row_id'";
			if(mysqli_query($con,$sql) == true)
			{
				echo "true";
			}
			else
			{
				echo "false";
			}
		}
	break;
	case "Add_workshop_organise":
	$wono=$_POST['wono'];
	$woworkas=$_POST['woworkas'];
	$woname=$_POST['woname'];
	$woorg=$_POST['woorg'];
	$woloc=$_POST['woloc'];
	$wonodays=$_POST['wonodays'];
	$sdate=$_POST['sdate'];
	$edate=$_POST['edate'];
	$row_id=$id."_".$wono;
	$sql="INSERT INTO worganised VALUES ('$wono','$woworkas','$woname','$woorg','$woloc','$wonodays','$sdate','$edate','$id','$row_id')";
	if(mysqli_query($con,$sql) == true)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}

	break;

	case 'update_workshop_organise':
		$woworkas=$_POST['woworkas'];
		$woname=$_POST['woname'];
		$woorg=$_POST['woorg'];
		$woloc=$_POST['woloc'];
		$wonodays=$_POST['wonodays'];
		$sdate=$_POST['sdate'];
		$edate=$_POST['edate'];
		$row_id=$_POST['row_id'];
		$sql="UPDATE worganised SET workas='$woworkas',name='$woname',organisation='$woorg',location='$woloc',noofday='$wonodays',sdate='$sdate',edate='$edate' WHERE row_id='$row_id'";
		if(mysqli_query($con,$sql) == true)
		{
			echo "true";
		}		
		else
		{
			echo "false";
		}
	break;

	case "Add_workshop_attend":
		$wano=$_POST['wano'];
		$waname=$_POST['waname'];
		$waorg=$_POST['waorg'];
		$waloc=$_POST['waloc'];
		$wanodays=$_POST['wanodays'];
		$sdate=$_POST['sdate'];
		$edate=$_POST['edate'];
		$row_id=$id."_".$wano;
		$sql="INSERT INTO wattend VALUES ('$wano','$waname','$waorg','$waloc','$wanodays','$sdate','$edate','$id','$row_id')";
		if(mysqli_query($con,$sql) == true)
		{
			echo "true";
		}
		else
		{
			echo "false";
		}	

	break;

	case 'update_workshop_attend':
		$waname=$_POST['waname'];
		$waorg=$_POST['waorg'];
		$waloc=$_POST['waloc'];
		$wanodays=$_POST['wanodays'];
		$sdate=$_POST['sdate'];
		$edate=$_POST['edate'];
		$row_id=$_POST['row_id'];
		$sql="UPDATE wattend SET dname='$waname',dorg='$waorg',dlocation='$waloc',ddays='$wanodays',dsdate='$sdate',dedate='$edate' WHERE row_id='$row_id'";
		if(mysqli_query($con,$sql) == true)
		{
			echo "true";
		}
		else
		{
			echo "false";
		}
	break;
	case "Add_talk_delivered":
	$tdno=$_POST['tdno'];
	$tdname=$_POST['tdname'];
	$tdorg=$_POST['tdorg'];
	$tdloc=$_POST['tdloc'];
	$sdate=$_POST['sdate'];
	$edate=$_POST['edate'];
	$row_id=$id."_".$tdno;
	$sql="INSERT INTO talkd VALUES ('$tdno','$tdname','$tdorg','$tdloc','$sdate','$edate','$id','$row_id')";
	if(mysqli_query($con,$sql) == true)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}	
	break;

	case 'Update_talk_delivered':
	$tdname=$_POST['tdname'];
	$tdorg=$_POST['tdorg'];
	$tdloc=$_POST['tdloc'];
	$sdate=$_POST['sdate'];
	$edate=$_POST['edate'];
	$row_id=$_POST['row_id'];
	$sql="UPDATE talkd SET name='$tdname',organisation='$tdorg',location='$tdloc',sdate='$sdate',edate='$edate' WHERE row_id='$row_id'";
	if(mysqli_query($con,$sql) == true)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
		
	break;
}

?>