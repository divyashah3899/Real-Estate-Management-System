<?php 
	include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
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
				<form class="login100-form validate-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-32">
						 New Password
					</span>

					<span class="txt1 p-b-11">
						New Password
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Re-Enter Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="rpassword" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							<input type="submit" value="Update" name="changepass" class="login100-form-btn">
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

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
    </form>
    <?php
    include 'footer.php';
?>

</body>
</html>

<?php
	
	$user_email = $_SESSION['email'];
	if(isset($_POST['changepass']))
	{
		$pass = $_POST['password'];

		$q = "update user set password ='$pass' where email='$user_email' ";

		if(mysqli_query($con,$q))
		{
		echo "<script>alert('Update Password".$_SESSION['email']." Successfully');window.location.href='index.php';</script>";
		}
		else {
			echo "<script>alert('Not Update Successfully');window.location.href='changepass.php';</script>";		
		}	
	}

?>