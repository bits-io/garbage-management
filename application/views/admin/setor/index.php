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
					<a href="<?= base_url($page_name.'/add') ?>" class="btn btn-icon bg-gradient-primary"> <?php echo $button ?> </a>
          </div>
          </div>
        </div>
				<?php $this->load->view('partials/notification.php') ?>
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
                      <th>ID Transaksi</th>
                      <th>Kode Nasabah</th>
                      <th>Nama Nasabah</th>
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
									<p class="text-xs font-weight-normal ms-2 mb-0"><?= $data->id_transaksi ?></p>
								</div>
							</td>
							<td class="font-weight-normal">
								<span class="my-2 text-xs"><?= $data->kode_nasabah ?></span>
							</td>
							<td class="font-weight-normal">
								<span class="my-2 text-xs"><?= $data->nama ?></span>
							</td>
							<td class="font-weight-normal">
								<span class="my-2 text-xs"><?= $data->tgl_transaksi ?></span>
							</td>
							<td class="font-weight-normal">
								<span class="my-2 text-xs">Rp<?= number_format($data->total, 0, ".", "."); ?></span>
							</td>
							<td class="font-weight-normal">
								<div class="dropdown">
									<a href="#" class="btn bg-gradient-dark dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
										<i class="material-icons">more_vert</i>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
										<li>
											<a class="dropdown-item" onclick="return confirm('Apakah anda yakin?')" href="<?= base_url(  $page_name.'/delete/' . $data->id_transaksi) ?>">
												<i class="material-icons text-danger">delete</i> Delete
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="<?= base_url(  $page_name.'/detail/' . $data->id_transaksi) ?>">
													<i class="material-icons text-info">topic</i> Detail
											</a>
										</li>							
									</ul>
								</div>
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


    <?php $this->load->view('partials/right.php') ?>
    <?php $this->load->view('partials/js.php') ?>
  </body>
</html>
