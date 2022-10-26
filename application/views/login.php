<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $page_title;  ?></title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" />	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"  >
	<style>
		.btn-color{
			background-color: #0e1c36;
			color: #fff;
			
		}

		.profile-image-pic{
			height: 200px;
			width: 200px;
			object-fit: cover;
		}
 
		.cardbody-color{
			background-color: #ebf2fa;
		}

		a{
			text-decoration: none;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3"> 
				<div class="card my-5"> 
					<form method="post" action="<?php echo base_url('login/login'); ?>" class="card-body cardbody-color p-lg-5">

						<div class="text-center">
							<img src="<?php echo base_url(); ?>assets/img/cgdnm-logo.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
								width="200px" alt="profile">
						</div>
						
						<?php
							$error_flashData = $this->session->flashdata('error_flashData');  

							if ($error_flashData !== NULL) {
									echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									'.$error_flashData.'
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>';
							} 
						?>   
						<div class="mb-3">
							<input required="" type="text" class="form-control <?= (form_error('username') == "" ? '':'is-invalid') ?>" id="Username" name="username" value="<?= set_value('username'); ?>"  placeholder="Username">
						</div>
						<div class="mb-3">
							<input required="" type="password" class="form-control  <?= (form_error('password') == "" ? '':'is-invalid') ?>" value="<?= set_value('password'); ?>"   name="password"  id="password" placeholder="Password">
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input">
							<label class="form-check-label">Keep me signed in</label>
						</div>
						<div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
						 
					</form>
				</div>

			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
