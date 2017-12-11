<?php
include 'connect.php';
@session_start();
$email=$_SESSION['pemail'];
if(isset($_POST['psubmit']))
{
	$password=$_POST['password'];
	$confirm=$_POST['confpass'];
	if(strcmp($password,$confirm) == 0)
	{
		$upt="UPDATE register SET password='$password' WHERE email='$email'";
		$sql=mysqli_query($con,$upt);
		echo "Password Updated Successfully";
	}
	else
	{
		echo '<script>';
		echo 'alert("Please Entered Valid and registered email address")';
		echo '</script>';
		header("refresh:0;url:forgotpass.php");
	}
}
?>