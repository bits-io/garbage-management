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
		
		<div class="container-fluid px-2 px-md-4">
			<div class="col-6 mx-auto">
				<div class="page-header min-height-300 border-radius-xl mt-4">
					<span class="mask  bg-gradient-success  opacity-6"></span>
				</div>
				<div class="card card-body mx-3 mx-md-4 mt-n6">
					<div class="row gx-4 mb-2">
					<div class="col-auto">
						<div class="avatar avatar-xl position-relative">
						<img src="https://img.icons8.com/sf-black-filled/64/1A1A1A/waste.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
						</div>
					</div>
					<div class="col-auto my-auto">
						<div class="h-100">
							<h5 class="mb-1"> <?= $data[0]->nama_jenis_sampah ?> </h5>
						</div>
					</div>
					</div>
					<div class="row">
					<div class="row">
						<div class="col-12 col-xl-12">
						<div class="card card-plain h-100">
							<div class="card-header pb-0 p-3">
							<div class="row">
								<div class="col-md-8 d-flex align-items-center">
									<h6 class="mb-0">Detail <?= $title ?></h6>
								</div>
							</div>
							</div>
							<div class="card-body p-3">
							<ul class="list-group">
								<li class="list-group-item border-0 ps-0 pt-0 text-sm">
								<strong class="text-dark">Nama Jenis Sampah:</strong> &nbsp; <?= $data[0]->nama_jenis_sampah ?>
								</li>
							</ul>
							</div>
							<a class="btn btn-secondary mt-3 ms-2 mb-0 js-btn-next" href="<?= base_url($page_name) ?>" title="Next">Kembali</a>
						</div>
						</div>
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
