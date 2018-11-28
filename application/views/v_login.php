<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin Porkes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/icons/favicon.ico');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>
	<?php if($this->session->flashdata('pesan') == TRUE):?>
	<div role="alert" class="alert alert-success alert-dismissiblefade in">
		<button aria-label="Tutup" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
		<p><?php echo $this->session->flashdata('pesan'); ?></p>
	</div>
	<?php endif; ?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url(<?php echo base_url('assets/img/smart.jpg'); ?>);">
			<div class="wrap-login100" style="background-image: url(<?php echo base_url('assets/img/1.jpg'); ?>);">
				<div class="login100-form-title" style="background-image: url(<?php echo base_url('assets/img/bg-01.jpg');?>);">
					<!-- <img src="<?php echo base_url('assets/img/om.jpeg');?>" height="150" > -->
					<span class="login100-form-title-1">
						Selamat Datang
					</span>
				</div>

				<form action="<?php echo base_url('C_login/aksi_login');?>" method="post" class="login100-form validate-form" >
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100" style="color: white;">Username</span>
						<input class="input100" type="text" name="user_name" placeholder="Enter username" style="color: white;">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100" style="color: white;">Password</span>
						<input class="input100" type="password" name="user_password" placeholder="Enter password" style="color: white;">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1" disabled>
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="btnSubmit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/animsition/js/animsition.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/daterangepicker/moment.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/countdowntime/countdowntime.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/js/main.js');?>"></script>

</body>
</html>