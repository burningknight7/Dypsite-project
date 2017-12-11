<?php
include 'connect.php';
@session_start();

if(isset($_POST['submit']))
{
	$srdn=$_POST['srdnno'];
	$name=$_POST['name'];
	$email=$_POST['emailid'];
	$pass=$_POST['password'];
	$mobile=$_POST['mob'];
	$gender=$_POST['gender'];
	echo $gender;
	$sql="INSERT INTO register (`uniqu`,name,email,password,mobile,gender) VALUES ('$srdn','$name','$email','$pass','$mobile','$gender')";
	if(mysqli_query($con,$sql)==true)
	{
		// $_SESSION['id']=$id;
		$_SESSION['id']=$_POST['srdnno'];
		
		header('Location:profile.php');
	}
	else
	{
		echo '<script language="javascript">';
		echo ' alert("Please Enter some unique srdn no then continue");';
		echo ' </script>';
		echo '<meta http-equiv="refresh" content="0;URL=signup.php" >';

	}
}

?>