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
						<img src="https://img.icons8.com/cotton/64/null/person-male--v2.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
						</div>
					</div>
					<div class="col-auto my-auto">
						<div class="h-100">
							<h5 class="mb-1"> <?= $data[0]->nama ?> </h5>
							<p class="mb-0"> <?= $data[0]->status_pengguna ?></p>
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
								<strong class="text-dark">Kode:</strong> &nbsp; <?= $data[0]->kode_nasabah ?>
								</li>
								<li class="list-group-item border-0 ps-0 text-sm">
								<strong class="text-dark">Username:</strong> &nbsp; <?= $data[0]->username ?>
								</li>
								<li class="list-group-item border-0 ps-0 text-sm">
								<strong class="text-dark">Password:</strong> &nbsp; *****
								</li>
								<li class="list-group-item border-0 ps-0 text-sm">
								<strong class="text-dark">Nama:</strong> &nbsp; <?= $data[0]->nama ?>
								</li>
								<li class="list-group-item border-0 ps-0 text-sm">
								<strong class="text-dark">Role:</strong> &nbsp; <?= $data[0]->status_pengguna ?>
								</li>
								<li class="list-group-item border-0 ps-0 text-sm">
								<strong class="text-dark">No Telepon:</strong> &nbsp; <?= $data[0]->no_telepon ?>
								</li>
								<li class="list-group-item border-0 ps-0 text-sm">
								<strong class="text-dark">Jenis Kelamin:</strong> &nbsp; <?= $data[0]->jenis_kelamin ?>
								</li>
								<li class="list-group-item border-0 ps-0 text-sm">
								<strong class="text-dark">Tanggal Lahir:</strong> &nbsp; <?= $data[0]->tgl_lahir ?>
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


    <div class="fixed-plugin">
      <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="material-icons py-2">settings</i>
      </a>
      <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
          <div class="float-start">
            <h5 class="mt-3 mb-0">Material UI Configurator</h5>
            <p>See our dashboard options.</p>
          </div>
          <div class="float-end mt-4">
            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
              <i class="material-icons">clear</i>
            </button>
          </div>
        </div>
        <div class="card-body pt-sm-3 pt-0">
          <hr class="horizontal dark my-sm-4">
          <a class="btn bg-gradient-primary w-100" href="">Logout</a>
          <a class="btn bg-gradient-info w-100" href="">Logout</a>
          <a class="btn btn-outline-dark w-100" href="">Logout</a>
        </div>
      </div>
    </div>
    <?php $this->load->view('partials/js.php') ?>
  </body>
</html>
