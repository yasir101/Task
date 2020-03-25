<?php include('header.php'); ?>

				<div class="content">
					<header class="page-header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h1 class="separator">Dashboard</h1>

							</div>

						</div>
					</header>
					
					<div class="content-wrapper">
				
				<div class="content">
					<section class="page-content container-fluid">
						<div class="row">
							<div class="col-xl-3 col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="profile-card text-center">
											<div class="thumb-xl member-thumb m-b-10 center-block">
												<?php if(empty($this->session->userdata('user_session_data')['profile_pic'])): ?>
													<img src="<?php echo ADMIN_ASSETS;?>img/default_user.jpg ?>" class="rounded-circle img-thumbnail" alt="profile-image">
												<?php else: ?>
													<img src="<?php echo ADMIN_ASSETS;?>user_images/<?php echo $this->session->userdata('user_session_data')['profile_pic']; ?>" class="rounded-circle img-thumbnail" alt="profile-image">
												<?php endif ?>	
												
											</div>
											<div class="">
												<h3 class="m-b-5"><?php echo $this->session->userdata('user_session_data')['full_name']; ?></h3>
												<a href="<?php echo base_url();?>logout" class="btn btn-danger btn-floating mt-4 text-white">Logout</a>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-xl-9 col-lg-8">
								<div class="card card-tabs">
									<div class="card-header p-0 no-border text-center">
										<h1 class="display-3 text-center mt-3">Forcast</h1>
										<h2 class="">Current Forcast</h2>
									</div>
									<div class="card-body text-center">
										<p class="display-1"><?php echo $temp; ?>&#8451;</p>

									</div>
								</div>
							</div>
						</section>
					</div>
					
				</div>
				</div>

			</div>
		</div>
		<!-- END CONTENT WRAPPER -->

<?php include('footer.php'); ?>