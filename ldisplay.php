<?php
include 'connect.php';
@session_start();

if(isset($_POST['submit']))
{
	$id=$_POST['code'];
	//$_SESSION['id']=$id;
	$email=$_POST['emailid'];
	$pass=$_POST['password'];
	$que="SELECT * FROM register WHERE `uniqu`='$id' ";
	$ret=mysqli_query($con,$que);
	if($ret == true)
	{
		$row=mysqli_fetch_array($ret);
			
			if(strcmp($email,$row['email']) == 0 && strcmp($pass,$row['password'])==0)
			{
				$_SESSION['id']=$id;
				echo $row['email'];
				header('Location:display.php');
			}
			else
			{
			echo '<script language="javascript">';
			echo 'alert("No user found with such username and password. Please try agian")';
				echo '</script>';
				header("refresh:0;url=login.php");
				
			}
			
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("No user found with such username and password. Please try agian ")';
		echo '</script>';
		echo '<meta http-equiv="refresh" content="0;URL=login.php">';
	}

}
else
{
	echo '<script language="javascript">';
	echo 'alert("You will not procees without login")';
	echo '</script>';
	header('refresh:0,url=login.php');
}

?>