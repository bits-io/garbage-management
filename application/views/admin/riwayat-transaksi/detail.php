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
						<img src="https://img.icons8.com/plumpy/24/null/transaction.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
						</div>
					</div>
					<div class="col-auto my-auto">
						<div class="h-100">
							<h5 class="mb-1"> <?= $ns[0]->nama ?> </h5>
						</div>
					</div>
					</div>
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
								<li class="list-group-item border-0 ps-0 text-sm">
								<strong class="text-dark">Kode Nasabah:</strong> &nbsp; <?= $ns[0]->kode_nasabah ?>
								</li>
								<li class="list-group-item border-0 ps-0 text-sm">
								<strong class="text-dark">Nama Nasabah:</strong> &nbsp; <?= $ns[0]->nama ?>
								</li>
							</ul>
							</div>
							
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="table-responsive">
								<table class="table table-flush">
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
												<span class="my-2 text-xs"><?= $data->created_at ?></span>
											</td>
											<td class="font-weight-normal">
												<span class="my-2 text-xs">Rp<?= number_format($data->total, 0, ".", "."); ?></span>
											</td>
											<td class="font-weight-normal">
												<a class="btn btn-sm btn-info" href="<?= base_url(  $page_name.'/detail/' . $data->id_nasabah .'/detail-transaksi/' . $data->id_transaksi) ?>">
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
					<a class="btn btn-secondary mt-3 mb-3 ms-2 mb-0 js-btn-next" href="<?= base_url($page_name) ?>" title="Next">Kembali</a>
				</div>
			</div>
		

		<?php $this->load->view('partials/footer.php') ?> 
	
		</div>

    </main>


    <?php $this->load->view('partials/right.php') ?>
    <?php $this->load->view('partials/js.php') ?>
  </body>
</html>
