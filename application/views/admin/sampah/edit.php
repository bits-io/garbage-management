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
										<form action="<?= base_url($page_name.'/edit_process/'.$data[0]->id_sampah) ?>" method="post" class="multisteps-form__form" style="height: 330px;">
											<div class="multisteps-form__panel border-radius-xl bg-white js-active" data-animation="FadeIn">
												<h5 class="font-weight-bolder mb-1">Edit <?= $title ?></h5>
												<div class="multisteps-form__content">
												<div class="row mt-3">
														<div class="col-12 col-sm-12 mt-3 mt-sm-0">
															<div class="input-group input-group-static">
																<label class="">Nama Sampah</label>
																<input value="<?= $data[0]->nama_sampah ?>" required name="nama_sampah" placeholder="Nama Sampah" class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)"> 
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-12 col-sm-6 mt-3 mt-sm-0">
															<div class="input-group input-group-static">
																<label for="jenisKelaminFormControl" class="">Jenis Sampah</label>
																<select required name="id_jenis" class="form-control" id="jenisKelaminFormControl">
																	<option value="<?= $data[0]->id_jenis ?>"><?= $data[0]->nama_jenis_sampah ?></option>
																	<?php foreach ($jenis_sampah as $jenis): ?>
																		<option value="<?= $jenis->id_jenis ?>"><?= $jenis->nama_jenis_sampah ?></option>
																	<?php endforeach ?>
																</select>	
															</div>
														</div>
														<div class="col-12 col-sm-6">
															<div class="input-group input-group-static">
																<label class="">Harga</label>
																<input value="<?= $data[0]->harga ?>" required name="harga" placeholder="Harga" class="multisteps-form__input form-control" type="number" onfocus="focused(this)" onfocusout="defocused(this)"> 
															</div>
														</div>
													</div>
													<div class="button-row d-flex justify-content-end mt-4">
														<a class="btn btn-outline-secondary ms-2 mb-0 js-btn-next" href="<?= base_url($page_name) ?>" title="Next">Kembali</a>
														<button class="btn bg-gradient-dark ms-2 mb-0 js-btn-next" type="submit" title="Next">Ubah</button>
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
