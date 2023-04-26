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
					<div class="col-12 col-lg-8 mx-auto my-5"> 
					</div>
					</div>
					<div class="row">
					<div class="col-lg-9 col-12 mx-auto position-relative">
						<div class="card">
						<div class="card-header p-3 pt-2">
							<div class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 me-3 float-start">
							<i class="material-icons opacity-10">point_of_sale
							</i>
							</div>
							<h6 class="mb-0">Setor Sampah
							</h6>
						</div>
						<div class="card-body pt-2">
							<div class="row mt-3">
							<div class="col-12 col-sm-8 mt-3 mt-sm-0">
								<div class="input-group input-group-static">
								<label for="jenisKelaminFormControl" class="">Nasabah</label>
								<select required name="id_nasabah" class="form-control" data-live-search="true" id="nasabahFormControl">
									<option value="">Pilih Nasabah
									</option>
									<?php foreach ($nasabah as $nasabah): ?>
									<option value="<?= $nasabah->id_nasabah ?>">
									<?= $nasabah->kode_nasabah ?> | 
									<?= $nasabah->nama ?>
									</option>
									<?php endforeach ?>
								</select>	
								</div>
							</div>
							<div class="col-12 col-sm-4">
								<div class="input-group input-group-static">
								<label class="">Tanggal</label>
								<input disabled value="<?= $dateNow ?>" class="input form-control" type="date" onfocus="focused(this)" onfocusout="defocused(this)"> 
								</div>
							</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 col-sm-3 mt-3 mt-sm-0">
									<div class="input-group input-group-static">
									<label for="jenisKelaminFormControl" class="">Nama Sampah
									</label>
									<select required name="id_sampah" class="form-control" data-live-search="true" id="sampahFormControl" onchange="getSampah()">
										<option value="">Pilih Sampah</option>
										<?php foreach ($sampah as $sampah): ?>
											<option value="<?= $sampah->id_sampah ?>" data-harga="<?= $sampah->harga ?>"><?= $sampah->nama_sampah ?></option>
										<?php endforeach ?>
									</select>	
									</div>
								</div>
								<div class="col-12 col-sm-3">
									<div class="input-group input-group-static">
									<label class="">Harga Satuan
									</label>
									<input readonly name="harga_satuan" placeholder="Harga"  step="0.01" min="0" max="1000000" class="input form-control" type="number" onfocus="focused(this)" onfocusout="defocused(this)" id="harga-satuan-input"> 
									</div>
								</div>
								<div class="col-12 col-sm-3">
									<div class="input-group input-group-static">
									<label class="">Berat Sampah
									</label>
									<input name="berat_sampah" placeholder="Harga" class="input form-control" type="number" oninput="updateTotalHarga()" onfocus="focused(this)" onfocusout="defocused(this)" id="berat-sampah-input"> 
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 col-sm-9">
									<div class="input-group input-group-static">
									<label class="">Jumlah Harga
									</label>
									<input readonly name="jumlah_harga" placeholder="Harga"  step="0.01" min="0" max="1000000" class="input form-control" type="number" onfocus="focused(this)" onfocusout="defocused(this)" id="jumlah-harga-input"> 
								</div>
							</div>
							<div class="col-12 col-sm-2">
								<div class="input-group input-group-static">
								<button class="btn bg-gradient-dark ms-2 mb-0 js-btn-next" type="button" title="Next" onclick="tambahSampah()">+</button>
								</div>
							</div>
							</div>
							<div class="row mt-3">
							<div class="table-responsive">
								<table class="table table-flush" id="keranjang-table">
									<thead class="thead-light">
										<tr>
										<th>Sampah
										</th>
										<th>Harga Satuan
										</th>
										<th>Berat Sampah
										</th>
										<th>Jumlah Harga
										</th>
										<th>Aksi
										</th>
										</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</div>
							</div>
							<div class="button-row d-flex justify-content-end mt-4">
							<a class="btn btn-outline-secondary ms-2 mb-0 js-btn-next" href="<?= base_url($page_name) ?>" title="Next">Kembali
							</a>
							<button class="btn bg-gradient-dark ms-2 mb-0 js-btn-next" type="button" onclick="simpanSetorSampah()" title="Next">Simpan</button>
							</div>
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
		function getSampah() {
			var selectedOption = $('#sampahFormControl').find(":selected");
			var harga = selectedOption.data('harga');
			console.log(harga);
			$('#harga-satuan-input').val(harga);
			$('#jumlah-harga-input').val(0);
			$('#berat-sampah-input').val(0);
		};
		function updateTotalHarga() {
			var berat_sampah = $('#berat-sampah-input').val();
			var harga_satuan = $('#harga-satuan-input').val();

			var jumlah_harga = berat_sampah * harga_satuan;

			$('#jumlah-harga-input').val(jumlah_harga);
		}

		const keranjang = [];

		function tambahSampah() {

			const data_keranjang = {
				id_sampah: $('select[name="id_sampah"]').val(),
				harga_satuan: $('input[name="harga_satuan"]').val(),
				berat_sampah: $('input[name="berat_sampah"]').val(),
				jumlah_harga: $('input[name="jumlah_harga"]').val(),
			}

			// Cek apakah id_sampah sudah ada di dalam keranjang
			const itemSudahAda = keranjang.find(item => item.id_sampah === data_keranjang.id_sampah);

			if (itemSudahAda) {
				// Jika sudah ada, tambahkan jumlah harga baru ke objek yang sudah ada
				itemSudahAda.jumlah_harga = parseInt(itemSudahAda.jumlah_harga) + parseInt(data_keranjang.jumlah_harga);
				itemSudahAda.berat_sampah = parseInt(itemSudahAda.berat_sampah) + parseInt(data_keranjang.berat_sampah);
			} else {
				// Jika belum ada, tambahkan objek baru ke keranjang
				keranjang.push(data_keranjang);
			}

			tampilkanDataKeranjang(keranjang);
		};
		function hapusSampah(index) {
			// hapus item dari keranjang
			keranjang.splice(index, 1);

			tampilkanDataKeranjang(keranjang);
		}
		function tampilkanDataKeranjang(keranjang){
			// hapus semua data di tabel
			$('#keranjang-table tbody').empty();
			let total = 0;
			// tambahkan semua data dari keranjang ke tabel
			keranjang.forEach(function(item) {
				$('#keranjang-table tbody').append(`
					<tr>
					<td>${item.id_sampah}</td>
					<td>${parseInt(item.harga_satuan).toLocaleString('id-ID', {style: 'currency', currency: 'IDR'})}</td>
					<td>${item.berat_sampah}</td>
					<td>${parseInt(item.jumlah_harga).toLocaleString('id-ID', {style: 'currency', currency: 'IDR'})}</td>
					<td><button class="btn btn-sm btn-danger" onclick="hapusSampah(${keranjang.indexOf(item)})">x</button></td>
					</tr>
				`);
				total += parseInt(item.jumlah_harga);
			});
				$('#keranjang-table tbody').append(`
					<tr>
					<td></td>
					<td></td>
					<td></td>
					<td>${parseInt(total).toLocaleString('id-ID', {style: 'currency', currency: 'IDR'})}</td>
					<td></td>
					</tr>
				`);
			
		}
		function simpanSetorSampah() {

			const id_nasabah = $('select[name="id_nasabah"]').val();
			$.ajax({
                url: "<?= base_url($page_name.'/add_process') ?>",
                method: "POST",
                data: {
					id_nasabah: id_nasabah,
					keranjang: keranjang
				},
                success: function() {
                    window.location = "<?= base_url($page_name) ?>";
                }
            });

		};
		
	</script>


    <?php $this->load->view('partials/js.php') ?>
  </body>
</html>
