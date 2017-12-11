<!DOCTYPE html>
<html>
<head>
	<title>
		SIGN UP
	</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script src="jquery.js"></script> 
 
 <style type="text/css">
.outer{
	padding: 5% 25% 5% 25%;
}
.inner{
	padding: 30px 30px 30px 30px;
	background-color:;
	border:1px solid black;
	border-radius: 5%;
}
div{color: black;}
a{text-decoration: none;
color: black; text-align: center;
/*margin-bottom: 5px;*/
margin-top:15px;
}	
a:hover{color:black; font-size:17px;
text-decoration: none;}
p{text-align: center;}
#register{font-size: 28px;letter-spacing: 2px}
img{
	margin-top: 5px;
	
	margin-bottom: -55px;
	width:40vw;
	height:100px;
}
@media(max-width: 1050px){
.outer{padding: 80px 80px 30px 80px;}
img{width:60vw;height:30px;}
}
@media (max-width:767px){
	.outer{padding:64px 15px 10px 15px;margin-top:;}
	.inner{padding: 30px 30px 20px 30px;}
	a{text-align: center;margin-top:px;}
	img{width:80vw; height: 70px;margin-top:20px;}
}



.sh{cursor:pointer;}
input[type=radio]{
	/*margin:  20px;*/
	font-size: 30px 30px 30px 30px;
}	
</style>
</head>
<body>
<center><img src="rait_logo.png" alt="dy patil" align="center" class="img img-responsive"></center>
<div class="outer">
	
	<div class="inner">
		<form action="register.php" method="POST">
			
			<p id="register">Register</p>
			<div class="form" id="formpart">
			
				<div class="col-md-4 col-sm-offset-1 input-group"></div>
				<div class="col-sm-10 col-sm-offset-1 input-group "><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" name="srdnno" class="form-control" placeholder="Enter srdn no ..." id="srdn" required=""></div>	<br>				
			
				<div class="col-sm-10 col-sm-offset-1 input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" name="name" class="form-control" placeholder="Enter full name ..." id="nam" required=""></div>	<br>		
			
			
				<div class="col-sm-10 col-sm-offset-1 input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input type="email" name="emailid" class="form-control" placeholder="Enter Email id ..." required=""></div>		<br>	
			
				<div class="col-sm-10 col-sm-offset-1 input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="password" name="password" class="form-control" id="show" placeholder="Enter Password ..." required=""><span class="input-group-addon sh" id="cchange" onclick=""><i class="glyphicon glyphicon-eye-open"></i></span></div>	<br>		
			
				<div class="col-sm-10 col-sm-offset-1 input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="password" name="confpass" class="form-control" id="cshow" placeholder="confirm Password ..." required=""><span class="input-group-addon sh" id="pchange" onclick=""><i class="glyphicon glyphicon-eye-open"></i></span></div>	<br>		
			
				<div class="col-sm-10 col-sm-offset-1 input-group "><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
				<input type="text" id="mob" name="mob" class="form-control" placeholder="Enter mobile no ..." required=""></div>	<br>		
				<div class="" align="center">			
				Gender:
				<label class="radio-inline"><input type="radio" name="gender" value="male" required="">Male</label>
				<label class="radio-inline"><input type="radio" name="gender" value="female" required="">Female</label>
			</div><br>
			
			 
				<div class="col-md-6 col-md-offset-3"><input type="submit" class="form-control btn btn-success" value="SIGN UP"  name="submit" style="background-color: #b50f20"></div><br>
				<br>
				
				<p><a href="login.php" align='center'>&nbsp;I already have an account ?</a></p>
			
			</div> 
		
			
		</form>	
	</div>
</div>

<script>


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
	var doc=document.getElementById("nam");

	//alert($().val());
	$("form").submit(function(){
		if($(pass).val() != $(cpass).val())
		{
			alert("your password didn't match");
			return false;
		}
		else if($(pass).val().length < 6)
		{
			alert("Password should be 6 or greater than 6 characters");
			return false;
		}
		else if($("#srdn").val().length < 3 || $("#nam").val().length<3 || $("#mob").val().length<5)
		{
			alert("Please fill valid details");
			return false;
		}
		else
		{
			if(/\w+\s+\w+/.test($("#nam").val()))
			{
				return true;
			}
			else
			{
				alert("Please enter full name");
				return false;
			}
			return true;

		}

	});


});

</script>
</body>
</html>
