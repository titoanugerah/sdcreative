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
						Login to continue
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="<?php echo base_url('forgotPassword'); ?>" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="loginValidation" value="loginValidation">
							Login
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="<?php echo base_url('./assets/template/login/'); ?>#" class="login100-form-social-item flex-c-m bg3 m-r-5">
							<i class="fa fa-google" aria-hidden="true"></i>
						</a>Google
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
