<?php
session_start();
error_reporting(0);

?>
<?php
include 'config.php';
if(isset($_POST['sub'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$date=date("d-m-y @ g:i A");
$da=mysqli_query($con,"insert into user_login(name,email,password,date) values('$name','$email','$password','$date')");
if ($da) {
$_SESSION['msg']='<span style="color:green;">'."Your account was created successfully, login to begin....".'</span>';
header("location:login.php");
} else {
	$_SESSION['rmsg']='<span style="color:red;">'."Error creating account".'</span>';
	header("location:reg.php");
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="#" method="post">
					<span class="login100-form-title" style="font-size: 20px;font-weight: lighter;padding: 30px;">
						Signup

							<p style="padding: 5px;">
								<?php echo $_SESSION['rmsg']; ?>
								<?php echo $_SESSION['rmsg']=""; ?>
								
							</p>
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full name</span>
						<input class="input100"  placeholder="Id..." type="text" name="name"  />
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" placeholder="Email addess..." type="email" name="email" class="validate"  />
						<span class="focus-input100"></span>
					</div>

										<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" placeholder="*************" type="password" name="password"  minlength="6"  />
						<span class="focus-input100"></span>
					</div>

				

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="sub">
								Sign Up
							</button>
						</div>

						<a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							
						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/bootstrap/js/popper.js"></script>
	<script src="vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/daterangepicker/moment.min.js"></script>
	<script src="vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js2/main.js"></script>

</body>
</html>