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
        <div class="d-sm-flex justify-content-between">
          <div>
					
          </div>
            <button class="btn btn-icon btn-outline-dark ms-2 export" data-type="csv" type="button">
              <i class="material-icons text-xs position-relative">archive</i> Export CSV </button>
          </div>
        </div>
				<?php if ($this->session->flashdata('success')) : ?>
						<div class="alert alert-success alert-dismissible text-white fade show" role="alert">
								<span class="alert-icon align-middle">
									<span class="material-icons text-md">
									thumb_up_off_alt
									</span>
								</span>
								<span class="alert-text"> <?= $this->session->flashdata('success') ?>!</span>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
								</button>
						</div>
					<?php elseif($this->session->flashdata('error')) : ?>
						<div class="alert alert-danger alert-dismissible text-white fade show" role="alert">
								<span class="alert-icon align-middle">
									<span class="material-icons text-md">
									thumb_down_off_alt
									</span>
								</span>
								<span class="alert-text"> <?= $this->session->flashdata('error') ?>!</span>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
								</button>
						</div>
					<?php endif; ?>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0"><?php echo $title ?></h5>
              </div>
              <div class="table-responsive">
                <table class="table table-flush" id="datatable-search">
                  <thead class="thead-light">
                    <tr>
                      <th>Tanggal</th>
					  					<th>Total</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    
					<?php foreach ($arr_data as $data): ?>
						<tr>
							<td>
								<div class="d-flex align-items-center">
									<p class="text-xs font-weight-normal ms-2 mb-0"><?= $data->created_at ?></p>
								</div>
							</td>
							<td class="font-weight-normal">
								<span class="my-2 text-xs">Rp<?= number_format($data->total, 0, ".", "."); ?></span>
							</td>
							<td class="font-weight-normal">
								<a class="btn btn-info" href="<?= base_url( 'nasabah/'. $page_name.'/detail/' . $data->id_transaksi) ?>">
									<i class="material-icons text-white">visibility</i>  Detail
								</a>
							</td>
						</tr>
					<?php endforeach ?>

                  </tbody>
                </table>
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
