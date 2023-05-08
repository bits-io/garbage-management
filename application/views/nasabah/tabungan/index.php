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
					<?php $this->load->view('partials/notification.php') ?>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-2"><?php echo $title ?></h5>
								<div class="row">
									<div class="col-md-3">
										<p>Kode Nasabah : <?= $arr_data[0]->kode_nasabah ?></p>
									</div>
									<div class="col-md-3">
										<p>Nama Nasabah : <?= $arr_data[0]->nama ?></p>
									</div>
									<div class="col-md-3">
										<p>Total Tabungan : <?= $arr_data[0]->jumlah_tabungan ?></p>
									</div>
									<div class="col-md-3">
										<p>Tanggal Dibuat : <?= $arr_data[0]->dibuat ?></p>
									</div>
								</div>
              </div>
              <div class="table-responsive">
                <table class="table table-flush" id="datatable-search">
                  <thead class="thead-light">
                    <tr>
                      <th>ID Detail Tabungan</th>
                      <th>Tanggal</th>
                      <th>Masuk</th>
                      <th>Keluar</th>
                      <th>Jumlah Sisa</th>
                    </tr>
                  </thead>
                  <tbody>
                    
					<?php foreach ($detail as $data): ?>
						<tr>
							<td>
								<div class="d-flex align-items-center">
									<p class="text-xs font-weight-normal ms-2 mb-0"><?= $data->id_detail_tabungan ?></p>
								</div>
							</td>
							<td class="font-weight-normal">
								<span class="my-2 text-xs"><?= $data->tgl_transaksi ?></span>
							</td>
							<td class="font-weight-normal">
								<span class="my-2 text-xs">Rp<?= number_format($data->nominal >= 0 ? $data->nominal : 0, 0, ".", ".") ?></span>
							<td class="font-weight-normal">
								<span class="my-2 text-xs">Rp<?= number_format($data->nominal < 0 ? $data->nominal : 0, 0, ".", ".") ?></span>
							</td>
							<td class="font-weight-normal">
								<span class="my-2 text-xs">Rp<?= number_format($data->sisa_tabungan + $data->nominal, 0, ".", ".") ?></span>
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
