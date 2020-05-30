<?php 
	include 'dbconnection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
    <?php
    include 'header.php';
?>
	<form method="post">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						 Sign up
					</span>

					<span class="txt1 p-b-11">
						Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Name is required">
						<input class="input100" type="text" name="name" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Email is required">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Mobile No.
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "mob. num. is required">
						<input class="input100" type="text" name="mobile" >
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							<input type="submit" value="Sign Up" name="submit" class="login100-form-btn">
						</button>
					</div>
					<p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>

				</form>
			</div>
		</div>
	</div>
	
</form>
	<div id="dropDownSelect1"></div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main1.js"></script>
    <?php
    include 'footer.php';
?>

</body>
</html>

<?php
				error_reporting(1);
				if(isset($_POST['submit']))
				{
					$name = $_POST["name"];
					$email = $_POST["email"];
					$password = $_POST["pass"];
					$mobile = $_POST["mobile"];
					

					$query = "insert into user (name,email,password,mobile) values ('$name','$email','$password','$mobile')";
				
					
					$insert_query = mysqli_query($con,$query);
					
					if($insert_query)
					{
						echo "<script>alert('Registered Successfully');window.location.href='login.php';</script>";
					}
					else
					{	
						echo "<script>alert('your account is not create');window.location.href='login.php';</script>";
					}
				}
	?>