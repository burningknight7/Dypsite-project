<!DOCTYPE html>
<html>
<head>
	<title>
		LOG IN
	</title>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
 <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css"> 
<script src="jquery.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script> 

 <style type="text/css">
.outer{
	padding: 2% 27% 5% 27%;

}
.inner{
	
	padding: 20px 10px 50px 10px;
	background-color: ;
	border-radius: 30px;
	border: 1px solid black;

}
div{color: black;}
a{text-decoration: none;color: black;}	
a:hover{color:black; font-size:17px;
text-decoration: none;}

img{
	margin-top: 35px;
	
	
	width:40vw;
	height:100px;
}
@media (max-width:767px){
	.outer{padding:20px 30px 30px 30px;}
	.inner{padding: 30px 30px 40px 30px; border-radius: 25px;}
	a{text-align: center;margin-top:0px;}
	img{width:80vw; height: 70px;}

}

p{text-align: center;}
#login{font-size: 25px; letter-spacing: 2px;}

</style>
</head>
<body>
<center><img src="rait_logo.png" alt="RAIT LOGO" align="center" class="img img-responsive"></center>
<div class="outer">
	<div class="inner">
		
			
				

			<form onsubmit="return func()" action="ldisplay.php" method="post">
			<div class="form" id="formpart" action="" >
				<p id="login">Log in</p>
			
				<div class="col-md-10 col-md-offset-1 input-group"><span class="input-group-btn"><button class="btn btn-default"><i class="glyphicon glyphicon-user"></i></button></span>
				<input type="email" name="emailid" class="form-control" placeholder="Enter Email id ..." required=""></div>	<br>
			
			
				<div class="col-md-10 col-md-offset-1 input-group"><span class="input-group-btn"><button class="btn btn-default"><i class="glyphicon glyphicon-lock"></button></i></span>
				<input type="password" name="password" class="form-control checkPass" placeholder="Enter Password ..." required=""><span class="input-group-btn"><button type="button" id="cchange" class="btn btn-default"><i class="glyphicon glyphicon-eye-open"></i></button></span></div>	<br>	
			
				<div class="col-md-10 col-md-offset-1 input-group"><span class="input-group-btn"><button class="btn btn-default"><i class="glyphicon glyphicon-lock"></i></button></span>
				<input type="text" name="code" class="form-control" placeholder="Enter unique code ..." required=""></div><br>
				<div class="col-md-offset-1 col-sm-offset-2 col-xs-offset-2">
				<p class="col-md-4 col-xs-4"><input type="checkbox" name="remember">&nbsp;Remember Me</p>
				<p class=""><a href="forgotpass.php" class="col">Forgot password ?</a></p>	
				</div>		<br> 	
			
				<div class="col-md-6 col-md-offset-3 "><input type="submit"  class="form-control btn btn-danger" value="LOG IN"  name="submit" style="background-color: #b50f20"></div>	<br><br>
				<div class="col-md-6 col-md-offset-3 "><a href="signup.php"  class="form-control btn btn-primary" style="background-color: ">REGISTER ?</a></div>
				<!-- <p><a href="signup.php" align='center' style="font-size: 15px;font-weight: bold;">Register?</a></p> -->
			
			</div>
			</form>	
	</div>
</div>

<script>
$(document).ready(function(){
	var pass=$(".checkPass");
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
});

</script>
</body>
</html>