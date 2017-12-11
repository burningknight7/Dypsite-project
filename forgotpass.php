<!DOCTYPE html>
<html>
<head>
	<title>
		FORGOT PASSWORD
	</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style type="text/css">
.outer{
	padding: 5% 24% 5% 24%;
}
.inner{
	/*width: 600px;*/
	/*height: 400px;*/
	padding: 20px 0px 20px 0px;
	background-color: white;
	border-radius: 40px;
	border:1px solid black;
}
div{color: black;}
a{text-decoration: none;color: black;}	
a:hover{color:black; font-size:19px;
text-decoration: none;}
#forget{background-color: #b50f20}
@media (max-width:767px){
	.outer{padding:50px 30px 30px 30px;}
	.inner{padding: 30px 30px 20px 30px; border-radius: 25px;}
	a{text-align: center;margin-top:0px;}
}
p{text-align: center;}
#login{font-size: 25px; letter-spacing: 2px;}

</style>


</head>
<body>
<script type="">
	$(document).ready(function(){
		// alert($(".emailcheck").val());
		$("#PlaceChange").click(function(){
			// alert($("#Email").val());
			$(this).hide();
			$("#login").html('Processing <i class="fa fa-spinner fa-spin"></i>');
			$.ajax({
				method:"POST",
				url:"fmail.php",
				data:{emailid:$("#Email").val()},
				success:function(result)
				{
					$("#login").html('<p style="15px">Enter OTP pin</p>');
					$("#addOtp").html(result);
				}
			});
		});
	});
</script>
<div class="outer">
	<center><img src="rait_logo.png" alt="dy patil" align="center" class="img img-responsive"></center><br>
	<div class="inner">
			
			<form action="" method="post">
			<div class="form" id="formpart" >
				<p id="login">Forgot Password</p>
			
				<div class="col-md-8 col-md-offset-2 input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="email" name="emailid" class="form-control" class="emailcheck"    id="Email" placeholder="Enter Email id ..." required=""></div>	<br><br>	
				<div id="addOtp"></div>
				<div class="col-md-4 col-md-offset-4 " id="PlaceChange"><input type="button"  class="form-control btn btn-success" value="Submit" id="forget" name="submit"></div><br><br><br>
				<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
				<p class="col-md-4 col-xs-4" style="font-size: 18px;">&nbsp;<a href="login.php"> Login?</a></p>
				<p class=""><a href="signup.php" class="col" style="font-size: 18px;">Register?</a></p>	
				</div>		<br> 
			
			</div>
			</form>	
	</div>
</div>


</body>
</html>