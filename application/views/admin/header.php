<?php
date_default_timezone_set('Asia/Jakarta');
$cek    = $user->row();
$level = $cek->level;
$nama   = $cek->nama_lengkap;
$logo = (empty($cek->logos) || !file_exists("fotoo/".$cek->logos) )?"img/users.jpg":"fotoo/".$cek->logos;
$email  = '';
$level  = $cek->username;

$menu 		= strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo base_url();?>"/>

	<title><?php echo $judul_web; ?></title>
	<link rel="icon" type="image/png" href="<?=$logo;?>">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/panel/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/panel/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->
	<?php
	if ($sub_menu == "" or $sub_menu == "profile" or $sub_menu == "ubah_pass" or $menu == "laporan" or $sub_menu == "statistik") {?>
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/panel/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/panel/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="assets/panel/js/core/app.js"></script>
	<!-- <script type="text/javascript" src="assets/panel/js/pages/dashboard.js"></script> -->
	<!-- /theme JS files -->
	<?php
	} ?>

	<?php
	if ($sub_menu == "verifikasi" or $sub_menu == "set_pengumuman" or $sub_menu == "scan") {?>
		<!-- Theme JS files -->
	<script type="text/javascript" src="assets/panel/js/plugins/tables/datatables/datatables.min.js"></script>
	<!-- <script type="text/javascript" src="assets/panel/js/plugins/forms/selects/select2.min.js"></script> -->
	

	<script type="text/javascript" src="assets/panel/js/core/app.js"></script>
	<script type="text/javascript" src="assets/panel/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

	<?php
	} ?>

		<script src="assets/panel/js/select2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/panel/css/sweetalert.css">

		<script type="text/javascript" src="assets/panel/js/sweetalert.min.js"></script>
</head>

<body class="navbar-bottom">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="">PPDB <label class="label label-primary">Online</label></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?=$logo;?>" alt="foto">
						<span><?php echo ucwords($nama); ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="panel_admin/profile"><i class="icon-user-plus"></i> Profile</a></li>
						<li><a href="panel_admin/ubah_pass"><i class="icon-key"></i> Ubah Password</a></li>
						<li class="divider"></li>
						<li><a href="panel_admin/logout"><i class="icon-switch2"></i> Keluar</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default">
				<div class="sidebar-content">

					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-title h6">
							<span>Menu Navigasi</span>
							<ul class="icons-list">
								<li><a href="#" data-action="collapse"></a></li>
							</ul>
						</div>

						<div class="category-content sidebar-user">
							<div class="media">
								<a href="panel_admin/profile" class="media-left"><img src="<?=$logo;?>" class="img-circle img-sm" alt="foto"></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo ucwords($nama); ?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;<?php echo $level; ?>
									</div>
								</div>
							</div>
						</div>

						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Utama</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="<?php if($menu == 'panel_admin' AND $sub_menu == ''){echo 'active';} ?>"><a href="panel_admin"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'verifikasi' OR $sub_menu == 'edit_materi'){echo 'active';} ?>"><a href="panel_admin/verifikasi"><i class="icon-file-check"></i> <span>Verifikasi</span></a></li>
								<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'verifikasi' OR $sub_menu == '#'){echo '#';} ?>"><a href="panel_admin/scan"><i class="icon-file-check"></i> <span>Scan Kelengkapan</span></a></li>
								<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'export'){echo 'active';} ?>"><a href="panel_admin/export"><i class="icon-file-excel"></i> <span>Export Formulir</span></a></li>

								<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'set_pengumuman'){echo 'active';} ?>"><a href="panel_admin/set_pengumuman"><i class="icon-display4"></i> <span>Setting Pengumuman</span></a></li>

								<li class="<?php if($menu == 'panel_admin' AND $sub_menu == 'statistik'){echo 'active';} ?>"><a href="panel_admin/statistik"><i class="icon-stats-dots"></i> <span>Statistik Pendaftaran</span></a></li>
								<!-- /Main -->
								<!-- Data Lainnya -->
								<li class="navigation-header"><span>Lainnya</span> <i class="icon-menu" title="Data visualization"></i></li>
								<li>
									<a href="#"><i class="icon-cog3"></i> <span>Pengaturan</span></a>
									<ul>
										<li class="<?php if($sub_menu == 'profile'){echo 'active';} ?>"><a href="panel_admin/profile">Profile</a></li>
										<li class="<?php if($sub_menu == 'ubah_pass'){echo 'active';} ?>"><a href="panel_admin/ubah_pass">Ubah Password</a></li>
									</ul>
								</li>
								<li><a href="panel_admin/logout"><i class="icon-switch2"></i> <span>Keluar</span></a></li>
								<!-- /Data Lainnya -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->
