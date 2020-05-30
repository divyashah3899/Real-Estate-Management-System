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
						 Forgot Password
					</span>

					<span class="txt1 p-b-11">
						Email-id
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							<input type="submit" value="Send OTP" name="otp" class="login100-form-btn">
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

	if(isset($_POST['otp'])){
require_once('PHPMailer/PHPMailerAutoload.php');
session_start();
$mail = new PHPMailer(true);
$text = rand(10000,99999); 
$_SESSION['otp'] = $text; 
$_SESSION['email'] = $_POST['email'];
try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'homespace.project@gmail.com';                     // SMTP username
    $mail->Password   = 'homespace123';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = '465';                                    // TCP port to connect to

  $mail->setFrom('homespace.project@gmail.com', 'Admin');
    $mail->addAddress($_POST['email']);     // Add a recipient
     

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Change Password For Account of HomeSpace';
    $mail->Body    = 'One Time Password for Change Password for an HomeSpace Account-<br> <b>'.$_SESSION["otp"].'</b>';
    $mail->AltBody = 'One Time Password for Change Password for an HomeSpace Account- '.$_SESSION["otp"].'';

    $mail->send();
    
    echo 'Message has been sent';
    echo "<script>alert('Successfully OTP Sent');window.location.href='checkotp.php';</script>";
} catch (Exception $e) {
    $_SESSION['error']="Message could not be sent. Mailer Error";
    header('Location: login.php');
}
}
?>