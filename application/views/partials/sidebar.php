<!-- ========== Left Sidebar Start ========== -->
<div class="sidebar-brand d-flex align-items-center justify-content-center">
	<div class="sidebar-inner slimscrollleft">

		<!-- User -->
		<div class="user-box">
			<div class="topbar-left">
				<a href="index.html" class="logo"><span>Tap<span>Shop</span></span><i class="zmdi zmdi-layers"></i></a>
			</div>
			<h5><a href="#"><?= $this->session->login['nama'] ?></a> </h5>
			<ul class="list-inline">
				<li>
					<a href="<?= base_url('logout') ?>" class="text-custom">
						<i class="zmdi zmdi-power"></i>
					</a>
				</li>
			</ul>
		</div>
		<!-- End User -->

		<!--- Sidemenu -->
		<div id="sidebar-menu">
			<ul>

				<hr class="sidebar-divider d-none d-md-block">

				<li class="text-muted menu-title">Navigation</li>

				<li>
					<a href="<?= base_url('dashboard') ?>" class="waves-effect">
						<i class="zmdi zmdi-view-dashboard"></i>
						<span>Dashboard</span> </a>
				</li>

				<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('barang') ?>">
						<i class="fas fa-fw fa-box"></i>
						<span>Data Barang</span></a>
				</li>

				<li class="nav-item <?= $aktif == 'kasir' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('kasir') ?>">
						<i class="fas fa-fw fa-cash-register"></i>
						<span>Data Kasir</span></a>
				</li>

				<li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('penjualan') ?>">
						<i class="fas fa-fw fa-file-invoice"></i>
						<span>Transaksi</span></a>
				</li>

				<?php if ($this->session->login['role'] == 'admin') : ?>

					<li class="text-muted menu-title">More For Admin</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Admin </span> <span class="menu-arrow"></span></a>
						<ul class="list-unstyled">
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
						</ul>
					</li>
					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">
				<?php endif; ?>



			</ul>
			<div class="clearfix"></div>
		</div>
		<!-- Sidebar -->
		<div class="clearfix"></div>



	</div>

</div>