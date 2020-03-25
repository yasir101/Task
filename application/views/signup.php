<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title; ?></title>
	<!-- ================== GOOGLE FONTS ==================-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<!-- ======================= GLOBAL VENDOR STYLES ========================-->
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>vendor/metismenu/dist/metisMenu.css">
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>vendor/switchery-npm/index.css">
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
	<!-- ======================= LINE AWESOME ICONS ===========================-->
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/icons/line-awesome.min.css">
	<!-- ======================= DRIP ICONS ===================================-->
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/icons/dripicons.min.css">
	<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/icons/material-design-iconic-font.min.css">
	<!-- ======================= GLOBAL COMMON STYLES ============================-->
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/common/main.bundle.css">
	<!-- ======================= LAYOUT TYPE ===========================-->
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/layouts/vertical/core/main.css">
	<!-- ======================= MENU TYPE ===========================================-->
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/layouts/vertical/menu-type/default.css">
	<!-- ======================= THEME COLOR STYLES ===========================-->
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/layouts/vertical/themes/theme-a.css">
<style>
	html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0px;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}
.sign-in-form{
	padding: 0px;
}
</style>

</head>

<body class="bg-dark" style="background-image: url('<?php echo ADMIN_ASSETS;?>img/bg.jpg');">

	<div class="container">
		 
		<form class="sign-in-form" action="<?php echo base_url();?>do-signup" method="post" enctype="multipart/form-data">
			<div class="card">
				<div class="card-body">
					
							

					<div class="brand text-center d-block m-b-20">
						<h1>Forcast</h1>			        
					</div>
					<h5 class="sign-in-heading text-center m-b-20">Sign Up </h5>
					<div class="form-group">
						<label for="full_name" >Full Name</label>
						<input type="text" name="full_name" class="form-control" placeholder="Full Name" value="<?php echo set_value('full_name') ?>">
						<?php echo form_error('full_name', '<div class="text-danger">', '</div>'); ?>
					</div>

					<div class="form-group">
						<label for="phone" >Phone</label> 
						<input type="tel" name="phone" placeholder="0300-1234567" class="form-control" pattern="[0-9]{4}-[0-9]{7}" value="<?php echo set_value('phone') ?>">
						<?php echo form_error('phone', '<div class="text-danger">', '</div>'); ?>
					</div>

					<div class="form-group">
						<label for="phone">Profile Pic</label>
						<input type="file" name="profile_pic" class="form-control">
						<?php echo form_error('profile_pic', '<div class="text-danger">', '</div>'); ?>
					</div>

					<div class="form-group">
						<label for="email" >Email</label>
						<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>">
						<?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
					</div>


					<div class="form-group">
						<label for="password" >Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>">
						<?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
					</div>
					
					<button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit">Sign Up</button>
				 	<p class="text-muted m-t-25 m-b-0 p-0">Already Have Account?<a href="<?php echo base_url();?>"> SignIn</a></p>
				</div>

			</div>
		</form>
	</div>

	<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
	<script src="<?php echo ADMIN_ASSETS;?>vendor/modernizr/modernizr.custom.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>vendor/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>vendor/js-storage/js.storage.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>vendor/js-cookie/src/js.cookie.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>vendor/pace/pace.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>vendor/metismenu/dist/metisMenu.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>vendor/switchery-npm/index.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- ================== GLOBAL APP SCRIPTS ==================-->
	<script src="<?php echo ADMIN_ASSETS;?>js/global/app.js"></script>

</body>

</html>
