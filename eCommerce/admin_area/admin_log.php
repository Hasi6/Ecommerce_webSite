<?php
include('../includes/db.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="image/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendo/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendo/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendo/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendo/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendo/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendo/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/util.css">
	<link rel="stylesheet" type="text/css" href="cs/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-51">
						Admin Login
					</span>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="admin_log">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<?php

		if (isset($_POST['admin_log'])) {

			$username = $_POST['username'];
			$password = $_POST['pass'];


			$sel_admin = "SELECT * FROM admin where username = '$username' AND password = '$password'";

			$run = mysqli_query($con, $sel_admin);

			$row = mysqli_fetch_array($run);

			if ($row) {
				echo "<script>alert('You Logged as Admin!!')</script>";
				echo "<script>window.open('admin_area.php','_self')</script>";
			}
			else{
				echo "<script>alert('Username Or Password Invalid!!')</script>";
				echo "<script>window.open('admin_log.php','_self')</script>";
			}

		}

	 ?>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendo/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendo/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendo/bootstrap/js/popper.js"></script>
	<script src="vendo/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendo/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendo/daterangepicker/moment.min.js"></script>
	<script src="vendo/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendo/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="j/main.js"></script>

</body>
</html>
