<?php if($this->session->userdata['login']){redirect(base_url('dashboard'));} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php echo $content['webconf']->website_name; ?> | Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('./assets/template/pixel/'); ?>img/core-img/favicon.ico">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/template/login/'); ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/template/login/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/template/login/'); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/template/login/'); ?>vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/template/login/'); ?>vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/template/login/'); ?>vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/template/login/'); ?>vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/template/login/'); ?>vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/template/login/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/template/login/'); ?>css/main.css">
</head>
<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-43">
						Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">username</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="btn btn-success col-5" type="submit" name="register" value="register">Register</button> &nbsp;&nbsp;&nbsp;
            <a href="<?php echo base_url('login'); ?>" class="btn btn-primary col-5">Login</a>
					</div>

				</form>

				<div class="login100-more" style="background-image: url('<?php echo base_url('./assets/template/login/'); ?>images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url('./assets/template/login/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url('./assets/template/login/'); ?>vendor/animsition/js/animsition.min.js"></script>
	<script src="<?php echo base_url('./assets/template/login/'); ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url('./assets/template/login/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('./assets/template/login/'); ?>vendor/select2/select2.min.js"></script>
	<script src="<?php echo base_url('./assets/template/login/'); ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url('./assets/template/login/'); ?>vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url('./assets/template/login/'); ?>vendor/countdowntime/countdowntime.js"></script>
	<script src="<?php echo base_url('./assets/template/login/'); ?>js/main.js"></script>

</body>
</html>
