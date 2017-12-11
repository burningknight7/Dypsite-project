<!DOCTYPE html>
<html>
<head>
	<title>
		CHANGE PASSWORD
	</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery.js"></script>

 <style type="text/css">
.outer{
	padding: 5% 24% 5% 24%;
}
.inner{
	/*width: 600px;*/
	/*height: 400px;*/
	padding: 20px 0px 20px 0px;
	background-color: ;
	border-radius: 40px;
	border: 1px solid black;

}
div{color: black}
a{text-decoration: none;color: black;}	
a:hover{color:black; font-size:19px;
text-decoration: none;}
@media (max-width:767px){
	.outer{padding:50px 30px 30px 30px;}
	.inner{padding: 30px 30px 20px 30px; border-radius: 25px;}
	a{text-align: center;margin-top:0px;}
}
p{text-align: center;}
#login{font-size: 25px; letter-spacing: 2px;}
.sh{cursor:pointer;}
</style>


</head>
<body>
<?php
@session_start();
if(isset($_POST['otp']))
{
	$x=$_SESSION['key'];
	$y=$_POST['otp'];
	if($x != $y)
	{
		echo '<script language="javascript">';
		echo 'alert("You are not entered valid otp and email")';
		echo '</script>';
		header("refresh:0;url=forgotpass.php");
	}
}

?>
<div class="outer">
	<center><img src="rait_logo.png" alt="dy patil" align="center" class="img img-responsive"></center><br>
	<div class="alert alert-success fade in" id="alertBox" style="display: none">
    <a href="#" class="close" data-dismiss="" aria-label="close" onclick="document.getElementById('alertBox').style.display='none'">&times;</a><p id="alertBoxContent"></p>
  	</div>
	<div class="inner">
			
			<form onsubmit="return PassC()" action="" method="post">
			<div class="form" id="formpart" >
				<p id="login">Change Password</p><br>
			
				<div class="col-md-8 col-md-offset-2 input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="password" name="password" class="form-control" id="show" placeholder="Enter Password ..." required=""><span class="input-group-addon sh" id="cchange" onclick="convert()"><i class="glyphicon glyphicon-eye-open"></i></span></div><br><br>		
			
				<div class="col-md-8 col-md-offset-2 input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="password" name="confpass" class="form-control" id="cshow" placeholder="confirm Password ..." required=""><span class="input-group-addon sh" id="pchange" onclick="cconvert()"><i class="glyphicon glyphicon-eye-open"></i></span></div><br><br>
				
				<div class="col-md-4 col-md-offset-4 " id="pchange"><button type="button"  class="form-control btn btn-success" id="forget" name="psubmit" style="background-color: #b50f20">Submit</button></div><br><br>
					<br> 
			
			</div>
			</form>	
	</div>
</div>

<script type="">

$(document).ready(function(){
	var pass=("#show");
	var cpass=("#cshow");
	$("#cchange").click(function(){
		if( $(pass).attr("type") == "password")
		{
			$(pass).prop('type','text');
			$(this).html('<i class="glyphicon glyphicon-eye-close">');
		}
		else
		{
			$(pass).prop('type','password');
			$(this).html('<i class="glyphicon glyphicon-eye-open">');
		}
	});
	$("#pchange").click(function(){
		if( $(cpass).attr("type") == "password")
		{
			$(cpass).prop('type','text');
			$(this).html('<i class="glyphicon glyphicon-eye-close">');
		}
		else
		{
			$(cpass).prop('type','password');
			$(this).html('<i class="glyphicon glyphicon-eye-open">');
		}
	});
	$("#forget").click(function(){
		if($(pass).val() == '' || $(pass).val() == '')
		{
			alert("Please Enter password");
		}
		else if($(pass).val().length < 6)
		{
			alert("Password should be atleast 6 characters");
		}
		else if($(pass).val() == $(cpass).val())
		{
			var flag_set="updatePassword";
			var pass_value=$(pass).val();
			var conf_pass_value=$(cpass).val();

			var dataString = 'flag=' + flag_set +'&password=' + pass_value +'&confpass=' + conf_pass_value;
			$.ajax({
				method:"POST",
				url:"Executer.php",
				data:dataString,
				dataType:"json",
				success:function(result){
					$("#alertBox").show();
					// var res=result['status'];
					// alert(res);
					if(result["status"] == true)
					{
						$("#alertBoxContent").html("Password Update successfully");
						$("#login").html('Redirecting to login page ..&nbsp;<i class="fa fa-spinner fa-spin"></i>');
						setTimeout(function(){window.location.href='login.php'},3000);
					}
					else
					{
						$("#alertBoxContent").html("Your email id is not matching !");
						$("#login").html('Enter registered email id & try again ..&nbsp;<i class="fa fa-spinner fa-spin"></i>');
						setTimeout(function(){window.location.href='forgotpass.php'},5000);
					}
					
					
				}


			});
		}
		
	else
	{
		alert("Your password didn't match");
	}

	});
});
	
</script>
</body>
</html>