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
        <div style="width:100%" align="left">
            <p>Transaksi : <?= $tr[0]->id_transaksi ?></p>
            <p>Kode Nasabah : <?= $tr[0]->kode_nasabah ?></p>
            <p>Nasabah : <?= $tr[0]->nama ?></p>
            <p>Tanggal : <?= date('d-M-Y', strtotime($tr[0]->created_at)) ?></p>
        </div>
		<br>
        <div style="width:90%; margin-left: 25px;" align="center" style="margin:10px;">
            <table id="tabelku" class="table table-bordered table-striped">
                <thead>
                    <tr>
						<th>Nama Sampah</th>
						<th>Harga Sampah</th>
						<th>Berat Sampah</th>
						<th>Jumlah Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($detail as $data) {
                    ?>
                        <tr>
                            <td class="text-center"><?= $data->nama_sampah ?></td>
                            <td>
                                Rp
                                <span class="float-right">
									<?= number_format($data->harga, 0, ".", "."); ?>
                                </span>
                            </td>
							<td><?= $data->berat_sampah ?> Kg</td>
                            <td>
                                Rp
                                <span class="float-right">
									<?= number_format($data->harga * $data->berat_sampah, 0, ".", "."); ?>
                                </span>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <script>
            </script>
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
