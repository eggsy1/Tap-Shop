<!-- ========== Left Sidebar Start ========== -->
<div class="sidebar-brand d-flex align-items-center justify-content-center">
	<div class="sidebar-inner slimscrollleft">

		<!-- User -->
		<div class="user-box">
			<div class="user-img">
				<img src="<?= base_url('Dark') ?>/assets/images/users/download.png" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
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
					<a href="<?= base_url('dashboard') ?>" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
				</li>

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

				<li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('penjualan') ?>">
						<i class="fas fa-fw fa-file-invoice"></i>
						<span>Transaksi</span></a>
				</li>

				<?php if ($this->session->login['role'] == 'admin') : ?>

					<li class="text-muted menu-title">Pengaturan</li>

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

				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
					<ul class="list-unstyled">
						<li><a href="tables-basic.html">Basic Tables</a></li>
						<li><a href="tables-datatable.html">Data Table</a></li>
						<li><a href="tables-responsive.html">Responsive Table</a></li>
						<li><a href="tables-editable.html">Editable Table</a></li>
					</ul>
				</li>

			</ul>
			<div class="clearfix"></div>
		</div>
		<!-- Sidebar -->
		<div class="clearfix"></div>



	</div>

</div>