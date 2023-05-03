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
										<form method="post" class="multisteps-form__form" style="height: 330px;">
											<div class="multisteps-form__panel border-radius-xl bg-white js-active" data-animation="FadeIn">
												<h5 class="font-weight-bolder mb-1"><?= $button ?></h5>
												<div class="multisteps-form__content">
													<div class="row mt-3">
														<div class="col-12 col-sm-6 mt-3 mt-sm-0">
															<div class="input-group input-group-static">
																<label for="nasabahFormControl" class="">Nasabah</label>
																<select required name="id_nasabah" class="form-control" id="nasabahFormControl" onchange="getNasabah()">
																	<option value="">Pilih Nasabah</option>
																	<?php foreach($ns as $data): ?>
																		<option value="<?= $data->id_nasabah ?>" data-tabungan="<?= $data->jumlah_tabungan ?>"><?= $data->kode_nasabah ?> | <?= $data->nama ?></option>
																	<?php endforeach ?>
																</select>	
															</div>
														</div>
														<div class="col-12 col-sm-6">
															<div class="input-group input-group-static">
																<label class="">Total Tabungan Sekarang</label>
																<input readonly class="multisteps-form__input form-control"  type="number" onfocus="focused(this)" onfocusout="defocused(this)" id="jumlah-tabungan-sekarang"> </div>
														</div>
														
													</div>
													<div class="row mt-3">
														<div class="col-12 col-sm-6">
															<div class="input-group input-group-static">
																<label class="">Nominal Tarik Uang</label>
																<input required name="tarik_uang" class="multisteps-form__input form-control" type="number" onfocus="focused(this)" onfocusout="defocused(this)" id="nominal-ditarik" oninput="updateTotalHarga()"> </div>
														</div>
														<div class="col-12 col-sm-6 mt-3 mt-sm-0">
															<div class="input-group input-group-static">
																<label class="">Total Tabungan Setelah Ditarik</label>
																<input readonly class="multisteps-form__input form-control" type="number" onfocus="focused(this)" onfocusout="defocused(this)" id="jumlah-tabungan-ditarik"> </div>
														</div>
													</div>
													<div class="button-row d-flex justify-content-end mt-4">
														<a class="btn btn-outline-secondary ms-2 mb-0 js-btn-next" href="<?= base_url($page_name) ?>" title="number">Kembali</a>
														<button class="btn bg-gradient-dark ms-2 mb-0 js-btn-next" type="button" title="Next" onclick="addProcess()">Simpan</button>
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

	<script>
		function getNasabah() {
			var selectedOption = $('#nasabahFormControl').find(":selected");
			var tabungan = selectedOption.data('tabungan');
			console.log(tabungan);
			if (!tabungan) {
				alert('Jumlah tabungan tidak tersedia!');
				$('#nasabahFormControl').val('');
			} else {
				$('#jumlah-tabungan-sekarang').val(tabungan);
				$('#jumlah-tabungan-ditarik').val(0);
				$('#nominal-ditarik').val(0);
			}
		};
		function updateTotalHarga() {
			var tabungan_sekarang = parseInt($('#jumlah-tabungan-sekarang').val());
			var nominal_ditarik = parseInt($('#nominal-ditarik').val());

			var tabungan_ditarik = tabungan_sekarang - nominal_ditarik;

			if (tabungan_ditarik < 0) {
				alert('Nominal terlalu banyak');
				$('#nominal-ditarik').val(0);
				$('#jumlah-tabungan-ditarik').val(tabungan_sekarang);
			} else {
				$('#jumlah-tabungan-ditarik').val(tabungan_ditarik);
			}
		}
		function addProcess() {
			
			const data = {
				jumlah_tabungan_sekarang: $('#jumlah-tabungan-sekarang').val(),
				jumlah_tabungan_ditarik: $('#jumlah-tabungan-ditarik').val(),
				nominal_ditarik: $('#nominal-ditarik').val(),
				id_nasabah: $('select[name="id_nasabah"]').val(),
			}
			console.log(data);


			$.ajax({
                url: "<?= base_url($page_name.'/add_process') ?>",
                method: "POST",
                data: data,
                success: function() {
                    window.location = "<?= base_url($page_name) ?>";
                }
            });
		}
	</script>

    <?php $this->load->view('partials/js.php') ?>
  </body>
</html>
