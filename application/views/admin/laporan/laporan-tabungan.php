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
			<div class="row">
				<div class="col-12">
					<div class="multisteps-form mb-9">
						<div class="row">
							<div class="col-12 col-lg-8 mx-auto my-5"> </div>
						</div>
						<div class="row">
							<div class="col-12 col-lg-8 m-auto">
								<div class="card">
									<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
										<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
											
										</div>
									</div>
									<div class="card-body">
										<form action="<?= base_url($page_name.'/cetak') ?>" method="get" class="multisteps-form__form" style="height: 330px;" target="_blank">
											<div class="multisteps-form__panel border-radius-xl bg-white js-active" data-animation="FadeIn">
												<h5 class="font-weight-bolder mb-1">Cetak <?= $title ?></h5>
												<div class="multisteps-form__content">
													<div class="row mt-3">
														<div class="col-12 col-sm-12 mt-3 mt-sm-0">
															<div class="input-group input-group-static">
																<label for="jenisKelaminFormControl" class="">Nasabah</label>
																<select required name="id_nasabah" class="form-control" id="jenisKelaminFormControl">
																	<option value="">Pilih Nasabah</option>
																	<?php foreach($ns as $data): ?>
																		<option value="<?= $data->id_nasabah ?>"><?= $data->kode_nasabah ?> | <?= $data->nama ?></option>
																	<?php endforeach ?>
																</select>	
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-12 col-sm-6">
															<div class="input-group input-group-static">
																<label class="">Dari Tanggal</label>
																<input required value="<?= $dari ?>" name="dari" class="multisteps-form__input form-control" type="date" onfocus="focused(this)" onfocusout="defocused(this)"> </div>
														</div>
														<div class="col-12 col-sm-6">
															<div class="input-group input-group-static">
																<label class="">Sampai Tanggal</label>
																<input  value="<?= $sampai ?>" name="sampai"class="multisteps-form__input form-control" type="date" onfocus="focused(this)" onfocusout="defocused(this)"> </div>
														</div>
													</div>
													<div class="button-row d-flex justify-content-end mt-4">
														<button class="btn bg-gradient-dark ms-2 mb-0 js-btn-next" type="submit" title="Next">Export PDF</button>
													</div>
												</div>
											</div>
										</form>
									</div>
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
