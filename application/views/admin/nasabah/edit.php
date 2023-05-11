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
										<form action="<?= base_url($page_name.'/edit_process/'.$data[0]->id_nasabah) ?>" method="post" class="multisteps-form__form" style="height: 330px;">
											<div class="multisteps-form__panel border-radius-xl bg-white js-active" data-animation="FadeIn">
												<h5 class="font-weight-bolder mb-1">Edit <?= $title ?></h5>
												<div class="multisteps-form__content">
													<div class="row mt-3">
														<div class="col-12 col-sm-6">
															<div class="input-group input-group-static">
																<label class="">Nama</label>
																<input value="<?= $data[0]->nama ?>"  required name="nama" placeholder="Nama" class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)"> </div>
														</div>
														<div class="col-12 col-sm-6 mt-3 mt-sm-0">
															<div class="input-group input-group-static">
																<label for="jenisKelaminFormControl" class="">Jenis Kelamin</label>
																<select required name="jenis_kelamin" class="form-control" id="jenisKelaminFormControl">
																	<option value="<?= $data[0]->jenis_kelamin ?>"><?= $data[0]->jenis_kelamin ?></option>
																	<option value="Laki-laki">Laki-laki</option>
																	<option value="Perempuan">Perempuan</option>
																</select>	
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-12 col-sm-6">
															<div class="input-group input-group-static">
																<label class="">Tanggal Lahir</label>
																<input value="<?= $data[0]->tgl_lahir ?>" required name="tgl_lahir" placeholder="Tanggal Lahir" class="multisteps-form__input form-control" type="date" onfocus="focused(this)" onfocusout="defocused(this)"> </div>
														</div>
														<div class="col-12 col-sm-6 mt-3 mt-sm-0">
															<div class="input-group input-group-static">
																<label class="">No Telepon</label>
																<input value="<?= $data[0]->no_telepon ?>" required name="no_telepon" placeholder="No Telepon" class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)"> </div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-12 col-sm-6">
															<div class="input-group input-group-static">
																<label class="">Username</label>
																<input value="<?= $data[0]->username ?>" required name="username" placeholder="Username" class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)"> </div>
														</div>
														<div class="col-12 col-sm-6 mt-3 mt-sm-0">
															<div class="input-group input-group-static">
																<label class="">Password</label>
																<input value="<?= $data[0]->password ?>" required name="password" placeholder="Password" class="multisteps-form__input form-control" type="password" onfocus="focused(this)" onfocusout="defocused(this)"> </div>
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


    <?php $this->load->view('partials/right.php') ?>
    <?php $this->load->view('partials/js.php') ?>
  </body>
</html>
