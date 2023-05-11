<!DOCTYPE html>
<html lang="en">

<head>
<link id="pagestyle" href="<?= base_url(); ?>assets/css/material-dashboard.min.css?v=3.0.5" rel="stylesheet" />
<link id="pagestyle" href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="A4">
        <table align="center" style="margin-top: 10px; margin-bottom: 2px;">
            <td align="center">
                <h4>BANK SAMPAH CIKAL</h4>
				<h5>KELURAHAN KARANGANYAR KECAMATAN KAWALU</h5>
                <p>Alamat : Kampung Cibuyut, RT 01 RW 01, Kelurahan Karanganyar, Kecamatan Kawalau, Kota Tasikmalaya"</p>
            </td>
        </table>
        <hr noshade size=4 width="98%">
        <div style="width:100%" align="center">
            <p>Dari Tanggal : <?= date('d-M-Y', strtotime($dari)) ?> Sampai Tanggal : <?= date('d-M-Y', strtotime($sampai)) ?></p>
        </div>
        <div style="width:90%; margin-left: 25px;" align="center" style="margin:10px;">
            <table id="tabelku" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th class="text-center align-middle" rowspan="2">Tanggal Transaksi</th>
					<th class="text-center align-middle" colspan="<?= $jumlah_sampah ?>">Sampah</th>
					<th class="text-center align-middle" rowspan="2">Total Transaksi</th>
				</tr>
				<tr>
					<?php foreach ($sampah as $s) : ?>
						<th class="text-center align-middle"><?= $s->nama_sampah ?></th>
					<?php endforeach; ?>
				</tr>
			</thead>
			<tbody>
				<?php
				$total_per_tanggal = array();
				foreach ($transaksi as $t) {
					// tambahkan total transaksi ke array $total_per_tanggal
					$tanggal = $t->tgl_transaksi;
					$sampah_id = $t->id_sampah;
					$total_transaksi = $t->total_transaksi;
					if (!isset($total_per_tanggal[$tanggal])) {
					$total_per_tanggal[$tanggal] = array();
					}
					$total_per_tanggal[$tanggal][$sampah_id] = $total_transaksi;
				}

				foreach ($total_per_tanggal as $tanggal => $total_per_sampah) {
					echo '<tr>';
					echo '<td class="text-center align-middle">' . $tanggal . '</td>';
					foreach ($sampah as $s) {
					$sampah_id = $s->id_sampah;
					$total_transaksi = isset($total_per_sampah[$sampah_id]) ? $total_per_sampah[$sampah_id] : 0;
					echo '<td>Rp  ' . number_format($total_transaksi, 0, ".", ".") . '</td>';
					}
					$total_transaksi_harian = array_sum($total_per_sampah);
					echo '<td>Rp  ' . number_format($total_transaksi_harian, 0, ".", ".") . '</td>';
					echo '</tr>';
				}
				?>
			</tbody>
            </table>
        </div>
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
<script>
	window.print();
</script>
</html>
