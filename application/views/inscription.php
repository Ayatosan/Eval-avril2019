
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inscription </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url() ?>/assests/Inscription/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/Inscription/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/Inscription/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/Inscription/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/Inscription/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/Inscription/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/Inscription/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/Inscription/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/Inscription/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/Inscription/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/Inscription/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/Inscription/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('<?= base_url()?>/assets/Inscription/images/kiwi.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Inscription
					</span>
					<?php
		echo form_open('Main/signin_validation');

echo validation_errors();
?>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100"	<?php  form_input('name') ?>>Votre nom</span>
						<input class="input100"  type="text" name="name" placeholder="Nom...">
						<span class="focus-input100"></span>
					</div>
					<?php	echo validation_errors();   ?>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100"<?php  form_input('email') ?>>Email</span>
						<input class="input100" type="text" name="email" placeholder="Adresse mail...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100"<?php  form_input('username') ?>>Pseudo</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100"<?php  form_password('password') ?>>Mot de passe</span>
						<input class="input100" type="text" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100"<?php  form_password('cpassword') ?>>Répeter votre mot de passe</span>
						<input class="input100"  type="text" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">

						</div>


					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn"  action="<?php  form_submit('login_submit', 'login') ?>" >
                Creer un compte
							</button>
						</div>


						<a href='<?php echo base_url()."index.php/Welcome/connection"; ?>' class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Se connecter
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>


<!--===============================================================================================-->
<script src="<?= base_url()?>/assets/inscription/vendor/jquery/jquery-3.2.1.min.js" type="30aa7d126a9a9a3da59e808a-text/javascript"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>/assets/inscription/vendor/animsition/js/animsition.min.js" type="30aa7d126a9a9a3da59e808a-text/javascript"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>/assets/inscription/vendor/bootstrap/js/popper.js" type="30aa7d126a9a9a3da59e808a-text/javascript"></script>
	<script src="<?= base_url()?>/assets/inscription/vendor/bootstrap/js/bootstrap.min.js" type="30aa7d126a9a9a3da59e808a-text/javascript"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>/assets/inscription/vendor/select2/select2.min.js" type="30aa7d126a9a9a3da59e808a-text/javascript"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>/assets/inscription/vendor/daterangepicker/moment.min.js" type="30aa7d126a9a9a3da59e808a-text/javascript"></script>
	<script src="<?= base_url()?>/assets/inscription/vendor/daterangepicker/daterangepicker.js" type="30aa7d126a9a9a3da59e808a-text/javascript"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>/assets/inscription/vendor/countdowntime/countdowntime.js" type="30aa7d126a9a9a3da59e808a-text/javascript"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>/assets/inscription/js/main.js" type="30aa7d126a9a9a3da59e808a-text/javascript"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="30aa7d126a9a9a3da59e808a-text/javascript"></script> -->
	<script type="30aa7d126a9a9a3da59e808a-text/javascript">
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="30aa7d126a9a9a3da59e808a-|49" defer=""></script></body>
</html>
