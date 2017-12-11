<?php
$con=mysqli_connect('localhost','root','','depart');
@session_start();
$id=$_SESSION['id'];

// update personal details
$name=$_POST['name'];
$gender=$_POST['gender'];
$per_design=$_POST['per_designation'];
$quallification=$_POST['quallification'];
$dept=$_POST['per_depart'];
$image=$_POST['image'];
?>