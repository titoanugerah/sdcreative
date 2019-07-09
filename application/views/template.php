<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo $content['webconf']->website_name.' | '.ucfirst($this->session->userdata['role']); ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/img/icon.ico" type="image/x-icon"/>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<link rel="stylesheet" href="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/css/atlantis.min.css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/css/demo.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="<?php echo base_url('dashboard'); ?>" class="logo">
					<img src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>

			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php echo $this->session->userdata['fullname']; ?></h4>
												<p class="text-muted"><?php echo $this->session->userdata['email'] ?></p><a href="<?php echo base_url('profile') ?>" class="btn btn-xs btn-secondary btn-sm">Profil</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?php echo base_url('profile'); ?>">Lihat Profil Saya</a>
										<a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo '@'.$this->session->userdata['username']; ?>
									<span class="user-level"><?php echo $this->session->userdata['role']; ?></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="<?php echo base_url('profile'); ?>">
											<span class="link-collapse">Profil Saya</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
            <?php $this->load->view($this->session->userdata['role'].'/menu'); ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<?php $this->load->view($this->session->userdata['role'].'/'.$content['view_name']); ?>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url(''); ?>">
									Halaman Awal
								</a>
							</li>
								</ul>
					</nav>
					<div class="copyright ml-auto">
						<?php echo date('Y'); ?>, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://mylogical.world">Tito Anugerah</a>
					</div>
				</div>
			</footer>
		</div>

		<!-- Custom template | don't include it in your project! -->

		<!-- End Custom template -->
	</div>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/core/popper.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/core/bootstrap.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/chart.js/chart.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/chart-circle/circles.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/datatables/datatables.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/atlantis.min.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/setting-demo.js"></script>
	<script src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/js/demo.js"></script>

</body>
</html>
