<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/analytics.html " target="_blank">
      <img src="https://img.icons8.com/glyph-neue/64/40C057/recycle-bin.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Bank Sampah</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item mb-2 mt-0">
        <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
          <img src="https://img.icons8.com/pastel-glyph/64/FFFFFF/person-male--v3.png" class="avatar">
          <span class="nav-link-text ms-2 ps-1"><?php echo $this->session->login['nama'] ?></span>
        </a>
        <div class="collapse" id="ProfileNav" style="">
          <ul class="nav ">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">
                <span class="sidenav-mini-icon"> MP </span>
                <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="<?= base_url('auth/logout') ?>">
                <span class="sidenav-mini-icon"> L </span>
                <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <hr class="horizontal light mt-0">
      <li class="nav-item">
				<?php if ($this->session->login['role'] == 'admin'): ?>
        <a class="nav-link text-white " href="<?= base_url('dashboard') ?>">
          <i class="material-icons-round opacity-10">dashboard</i>
          <span class="nav-link-text ms-2 ps-1">Dashboards</span>
        </a>
				<?php endif ?>
				<?php if ($this->session->login['role'] == 'operator'): ?>
				<a class="nav-link text-white " href="<?= base_url('dashboard') ?>">
          <i class="material-icons-round opacity-10">dashboard</i>
          <span class="nav-link-text ms-2 ps-1">Dashboards</span>
        </a>
				<?php endif ?>
				<?php if ($this->session->login['role'] == 'nasabah'): ?>
				<a class="nav-link text-white " href="<?= base_url('nasabah/dashboard') ?>">
          <i class="material-icons-round opacity-10">dashboard</i>
          <span class="nav-link-text ms-2 ps-1">Dashboards</span>
        </a>
				<?php endif ?>
      </li>
			<?php if ($this->session->login['role'] == 'admin' || $this->session->login['role'] == 'operator'): ?>

      <li class="nav-item mt-3">
        <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">PAGES</h6>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white " aria-controls="pagesExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">group</i>
          <span class="nav-link-text ms-2 ps-1">Data User</span>
        </a>
        <div class="collapse " id="pagesExamples">
          <ul class="nav ">
						<?php if ($this->session->login['role'] == 'admin'): ?>
							<li class="nav-item ">
								<a class="nav-link text-white " href="<?= base_url('operator') ?>">
									<span class="sidenav-mini-icon"> O </span>
									<span class="sidenav-normal  ms-2  ps-1"> Operator </span>
								</a>
							</li>
						<?php endif; ?>
            <li class="nav-item ">
              <a class="nav-link text-white " href="<?= base_url('nasabah') ?>">
                <span class="sidenav-mini-icon"> N </span>
                <span class="sidenav-normal  ms-2  ps-1"> Nasabah </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#masterWaste" class="nav-link text-white " aria-controls="pagesExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">delete_sweep</i>
          <span class="nav-link-text ms-2 ps-1">Data Sampah</span>
        </a>
        <div class="collapse " id="masterWaste">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white " href="<?= base_url('sampah') ?>">
                <span class="sidenav-mini-icon"> DS </span>
                <span class="sidenav-normal  ms-2  ps-1"> Data Sampah </span>
              </a>
            </li>
						<li class="nav-item ">
              <a class="nav-link text-white " href="<?= base_url('jenis') ?>">
                <span class="sidenav-mini-icon"> JS </span>
                <span class="sidenav-normal  ms-2  ps-1"> Jenis Sampah </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
			<li class="nav-item">
        <a data-bs-toggle="collapse" href="#saveExamples" class="nav-link text-white " aria-controls="saveExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">account_balance_wallet</i>
          <span class="nav-link-text ms-2 ps-1">Tabungan</span>
        </a>
        <div class="collapse " id="saveExamples">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white " href="<?= base_url('tabungan') ?>">
                <span class="sidenav-mini-icon"> SS </span>
                <span class="sidenav-normal  ms-2  ps-1"> Tabungan </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white " aria-controls="applicationsExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">point_of_sale</i>
          <span class="nav-link-text ms-2 ps-1">Transaksi</span>
        </a>
        <div class="collapse " id="applicationsExamples">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white " href="<?= base_url('setor') ?>">
                <span class="sidenav-mini-icon"> SS </span>
                <span class="sidenav-normal  ms-2  ps-1"> Setor Sampah </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
				<a data-bs-toggle="collapse" href="#historyExamples" class="nav-link text-white " aria-controls="historyExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">history</i>
          <span class="nav-link-text ms-2 ps-1">Riwayat</span>
        </a>
        <div class="collapse " id="historyExamples">
          <ul class="nav ">
            <li class="nav-item">
              <a class="nav-link text-white " href="<?= base_url('riwayat-transaksi') ?>">
                <span class="sidenav-mini-icon"> RT </span>
                <span class="sidenav-normal  ms-2  ps-1"> Riwayat Transaksi </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
			<li class="nav-item">
        <a data-bs-toggle="collapse" href="#reportExamples" class="nav-link text-white active" aria-controls="reportExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">history</i>
          <span class="nav-link-text ms-2 ps-1">Laporan</span>
        </a>
        <div class="collapse " id="reportExamples">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white " href="<?= base_url() ?>laporan/transaksi">
                <span class="sidenav-mini-icon"> RT </span>
                <span class="sidenav-normal  ms-2  ps-1"> Laporan Transaksi </span>
              </a>
            </li>
						<li class="nav-item ">
              <a class="nav-link text-white " href="<?= base_url() ?>laporan/tabungan">
                <span class="sidenav-mini-icon"> RT </span>
                <span class="sidenav-normal  ms-2  ps-1"> Laporan Tabungan </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
			<?php endif; ?>
			<?php if ($this->session->login['role'] == 'nasabah'): ?>
			<li class="nav-item">
				<a class="nav-link text-white " href="<?= base_url('nasabah/tabungan') ?>">
					<i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">account_balance_wallet</i>
          <span class="sidenav-normal  ms-2  ps-1"> Tabungan </span>
        </a>
      </li>
			<li class="nav-item">	
				<a class="nav-link text-white " href="<?= base_url('nasabah/riwayat-transaksi') ?>">
					<i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">history</i>
          <span class="sidenav-normal  ms-2  ps-1"> Riwayat Transaksi </span>
        </a>
			</li>
			<?php endif ?>
    </ul>
  </div>
</aside>
