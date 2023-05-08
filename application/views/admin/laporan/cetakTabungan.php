<!DOCTYPE html>
<html lang="en">

<head>
    <!-- paper -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/paper/paper.css">
	<?php $this->load->view('partials/head.php') ?>
	<style>
	    @media print {
	        body.A4 {
	            width: 210mm;
	            height: 297mm;
	        }

	        .sheet {
	            margin: 0;
	            box-shadow: none;
	            page-break-after: always;
	        }
	    }
		body.A4 {
	            width: 210mm;
	            height: 297mm;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				margin-top: 2rem;
				margin-left: auto;
				margin-right: auto;
	        }

	        .sheet {
	            margin: 0;
	            box-shadow: none;
	            page-break-after: always;
	        }
	</style>
</head>

<body class="A4">
    <div class="sheet">
        <table align="center" style="margin-top: 10px; margin-bottom: 2px;">
            <td align="center">
                <h3>BANK SAMPAH CIKAL</h3>
				<h4>KELURAHAN KARANGANYAR KECAMATAN KAWALU</h3>
                <h5>Alamat : Kampung Cibuyut, RT 01 RW 01, Kelurahan Karanganyar, Kecamatan Kawalau, Kota Tasikmalaya"</h4>
            </td>
        </table>
        <hr noshade size=4 width="98%">
        <div style="width:100%" align="center">
            <p>Customer : <?= $ns[0]->nama ?></p>
            <p>Tanggal : <?= date('d/m/Y', strtotime($ns[0]->created_at)) ?></p>
        </div>
        <div style="width:90%; margin-left: 25px;" align="center" style="margin:10px;">
            <table id="tabelku" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">ID Detail Tabungan</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Masuk</th>
                        <th class="text-center">Keluar</th>
                        <th class="text-center">Jumlah Sisa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($arr_data as $data) {
                    ?>
                        <tr>
                            <td class="text-center"><?= $data->id_detail_tabungan; ?>.</td>
                            <td><?= $data->detail_created ?></td>
                            <td>
                                Rp
                                <span class="float-right">
									<?= number_format($data->nominal >= 0 ? $data->nominal : 0, 0, ".", "."); ?>
                                </span>
                            </td>
							<td>
                                Rp
                                <span class="float-right">
									<?= number_format($data->nominal < 0 ? $data->nominal : 0, 0, ".", "."); ?>
                                </span>
                            </td>
                            <td>
                                Rp
                                <span class="float-right">
                                    <?= number_format($data->sisa_tabungan + $data->nominal, 0, ".", "."); ?>
                                </span>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <script>
            </script>
        </div>
		<button onclick="window.print()" class="btn btn-primary d-print-none">Print</button>
        <table align="right" width="40%"><br><br>
            <tr align="center">
                <td>Tasikmalaya, <?= date('d-m-Y') ?></td>
            </tr>
            <tr align="center">
                <td>Mengetahui</td>
            </tr>
            <tr align="center">
                <td><b>Kepala Bagian</b></td>
            </tr>
            <tr>
                <td><br><br><br><br><br></td>
            </tr>
            <tr align="center">
                <td><b>Saya Dengan Saya</b></td>
            </tr>
            <tr align="center">
                <td>NIP. XXXXXXXX XXXXXX X XXX</td>
            </tr>
        </table>
    </div>
</body>

</html>
