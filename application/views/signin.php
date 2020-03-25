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
</style>

</head>

<body class="bg-dark" style="background-image: url('<?php echo ADMIN_ASSETS;?>img/bg.jpg');">

	<div class="container">
		 
		<form class="sign-in-form" action="<?php echo base_url();?>do-signin" method="post">
			<div class="card">
				<div class="card-body">
					
					<?php if($this->session->flashdata('success')){ ?>
	                    <div class="alert alert-success alert-dismissible fade show" role="alert">
	                      <strong><?php echo $this->session->flashdata('success'); ?></strong>
	                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                      </button>
	                    </div>
	                <?php } ?>

					<?php if($this->session->flashdata('danger')){ ?>
	                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
	                      <strong><?php echo $this->session->flashdata('danger'); ?></strong>
	                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                      </button>
	                    </div>
	                <?php } ?>
							

					<div class="brand text-center d-block m-b-20">
						<h1>Forcast</h1>			        
					</div>
					<h5 class="sign-in-heading text-center m-b-20">Sign in </h5>
					<div class="form-group">
						<label for="inputEmail" class="sr-only">Email </label>
						<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
					</div>

					<div class="form-group">
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
					</div>
					
					<button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit">Sign In</button>
				 	<p class="text-muted m-t-25 m-b-0 p-0">Don't have an account yet?<a href="<?php echo base_url(); ?>signup"> Create an account</a></p>
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
