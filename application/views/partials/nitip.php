<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">TapShop <sup></sup></div>
	</a>
	<hr class="sidebar-divider my-0">
	<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('dashboard') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>
	<hr class="sidebar-divider">

	<div class="sidebar-heading">
		Master
	</div>

	<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('barang') ?>">
			<i class="fas fa-fw fa-box"></i>
			<span>Master Barang</span></a>
	</li>

	<li class="nav-item <?= $aktif == 'kasir' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('kasir') ?>">
			<i class="fas fa-fw fa-cash-register"></i>
			<span>Master Kasir</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<div class="sidebar-heading">
		Transaksi
	</div>

	<li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('penjualan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Transaksi Penjualan</span></a>
	</li>

	<hr class="sidebar-divider">
	<?php if ($this->session->login['role'] == 'admin') : ?>
		<!-- Heading -->
		<div class="sidebar-heading">
			Pengaturan
		</div>

		<li class="nav-item <?= $aktif == 'pengguna' ? 'active' : '' ?>">
			<a class="nav-link" href="<?= base_url('pengguna') ?>">
				<i class="fas fa-fw fa-users"></i>
				<span>Manajemen Pengguna</span></a>
		</li>

		<li class="nav-item <?= $aktif == 'toko' ? 'active' : '' ?>">
			<a class="nav-link" href="<?= base_url('toko') ?>">
				<i class="fas fa-fw fa-building"></i>
				<span>Profil Toko</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">
	<?php endif; ?>

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>
ddd
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">TapShop <sup></sup></div>
	</a>
	<hr class="sidebar-divider my-0">
	<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('dashboard') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>
	<hr class="sidebar-divider">

	<div class="sidebar-heading">
		Master
	</div>

	<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('barang') ?>">
			<i class="fas fa-fw fa-box"></i>
			<span>Master Barang</span></a>
	</li>

	<li class="nav-item <?= $aktif == 'kasir' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('kasir') ?>">
			<i class="fas fa-fw fa-cash-register"></i>
			<span>Master Kasir</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<div class="sidebar-heading">
		Transaksi
	</div>

	<li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('penjualan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Transaksi Penjualan</span></a>
	</li>

	<hr class="sidebar-divider">
	<?php if ($this->session->login['role'] == 'admin') : ?>
		<!-- Heading -->
		<div class="sidebar-heading">
			Pengaturan
		</div>

		<li class="nav-item <?= $aktif == 'pengguna' ? 'active' : '' ?>">
			<a class="nav-link" href="<?= base_url('pengguna') ?>">
				<i class="fas fa-fw fa-users"></i>
				<span>Manajemen Pengguna</span></a>
		</li>

		<li class="nav-item <?= $aktif == 'toko' ? 'active' : '' ?>">
			<a class="nav-link" href="<?= base_url('toko') ?>">
				<i class="fas fa-fw fa-building"></i>
				<span>Profil Toko</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">
	<?php endif; ?>

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>

<!--Morris Chart CSS -->
<link rel="stylesheet" href="<?= base_url('Dark') ?>/assets/plugins/morris/morris.css">

<!-- App css -->

<link href="<?= base_url('Dark') ?>/assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url('Dark') ?>/assets/css/pages.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url('Dark') ?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />