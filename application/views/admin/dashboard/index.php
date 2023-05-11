<!DOCTYPE html>
<html lang="en">
  <head>
		<?php $this->load->view('partials/head.php') ?>
  </head>
  <body class="g-sidenav-show  bg-gray-200">
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <?php $this->load->view('partials/sidebar.php') ?>


    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
			
			<?php $this->load->view('partials/navbar.php') ?>
      
			<div class="container-fluid py-4">
				<div class="row mb-5">
					
				<?php $this->load->view('partials/notification.php') ?>

				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
						<div class="card">
							<div class="card-header p-3 pt-2">
								<div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
									<i class="material-icons opacity-10">weekend</i>
								</div>
								<div class="text-end pt-1">
									<p class="text-sm mb-0 text-capitalize">Total Sampah</p>
									<h4 class="mb-0"><?= $berat_sampah ?> Kg</h4>
								</div>
							</div>
							<hr class="dark horizontal my-0">
							<div class="card-footer p-3">
								<p class="mb-0">
									<!-- <span class="text-success text-sm font-weight-bolder">+55% </span>than last week -->
								</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
						<div class="card">
							<div class="card-header p-3 pt-2">
								<div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
									<i class="material-icons opacity-10">person</i>
								</div>
								<div class="text-end pt-1">
									<p class="text-sm mb-0 text-capitalize">Total Sampah</p>
									<h4 class="mb-0"><?= $total_sampah ?></h4>
								</div>
							</div>
							<hr class="dark horizontal my-0">
							<div class="card-footer p-3">
								<p class="mb-0">
									<!-- <span class="text-success text-sm font-weight-bolder">+3% </span>than last month -->
								</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
						<div class="card">
							<div class="card-header p-3 pt-2">
								<div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
									<i class="material-icons opacity-10">person</i>
								</div>
								<div class="text-end pt-1">
									<p class="text-sm mb-0 text-capitalize">Total Nasabah</p>
									<h4 class="mb-0"><?= $total_nasabah ?></h4>
								</div>
							</div>
							<hr class="dark horizontal my-0">
							<div class="card-footer p-3">
								<p class="mb-0">
									<!-- <span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday -->
								</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-header p-3 pt-2">
								<div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
									<i class="material-icons opacity-10">weekend</i>
								</div>
								<div class="text-end pt-1">
									<p class="text-sm mb-0 text-capitalize">Total Pemasukan</p>
									<h4 class="mb-0">Rp<?= $total_pemasukan ?></h4>
								</div>
							</div>
							<hr class="dark horizontal my-0">
							<div class="card-footer p-3">
								<p class="mb-0">
									<!-- <span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday -->
								</p>
							</div>
						</div>
					</div>
				</div>

				<?php $this->load->view('partials/footer.php') ?>
			</div>
    </main>

	<?php $this->load->view('partials/right.php') ?>
    
    <?php $this->load->view('partials/js.php') ?>
  </body>
</html>
