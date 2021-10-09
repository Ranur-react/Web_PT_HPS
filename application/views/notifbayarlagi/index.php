<?php
$statusNOtif = $this->session->userdata('status_kode_tiket');
$nama_penumpang = $this->session->userdata('nama_penumpang');

$qryPenumpang = $this->db->query("SELECT * FROM `tb_tiket` JOIN `tb_jadwal` ON `tb_jadwal`.`id_jadwal`=`tb_tiket`.`id_jadwal` WHERE `nama_penumpang`='$nama_penumpang' AND STATUS=1;")->result_array();
// var_dump();
?>
<div class="alert alert-success <?= $statusNOtif ? '' : '' ?>">
	Pemesanan Tiket Berhasil, Silahkan Lakukan pembayaran Langsung ke Loket
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-8">

			<div class="row show-grid">
				<div class="col-md-9">
					Detail Pemesanan:

					<?php
					$jumlah = 0;
					$no = 0;
					foreach ($qryPenumpang as $a) :
						$no++;
						$jumlah += $a['harga'];
					?>
						<div class="row show-grid">
							<div class="col-md-6">
								Tiket <?= $no ?>
							</div>
							<div class="col-md-6">
								Kode Tiket: <?= $a['kode_tiket'] ?>
								<br>
								Tanggal : <?= $a['tanggal'] ?>
								<br>
								Tujuan : <?= $a['tujuan'] ?>
								<br>
								ID Bus: <?= $a['id_bus'] ?>
								<br>
								Harga Tiket: <?= $a['harga'] ?>
								<br>
								Kursi: <?= $a['id_kursi'] ?>
							</div>
							<div class="col-md-6">
								Sudah Bayar? Upload Tiket '<?= $no ?>' disini
							</div>
							<div class="col-md-6">
								Upload :
								<br>
								<div id="contstatusupload<?= $a['kode_tiket'] ?>">
									<input onchange="uploadBukti(this.files[0],'<?= $a['kode_tiket'] ?>')" type="file" name="" id="filebox<?= $a['kode_tiket'] ?>">
								</div>
							</div>
						</div>
					<?php
					endforeach;
					?>


				</div>
			</div>

		</div>
	</div>
</div>
<script>
	function uploadBukti(filesget, nomortiket) {
		console.log('=============data gambar=======================');
		console.log(data);
		console.log('====================================');
		var data = new FormData();
		data.append('filebox', filesget);
		data.append('nomortiket', nomortiket);
		$.ajax({
			url: "<?= site_url('tiket_controller/do_upload') ?>",
			type: "post",
			processData: false, // important
			contentType: false, // important
			data: data,
			dataType: 'json',
			success: function(reps) {
				if (!reps.code) {
					console.log('.contstatusupload' + nomortiket);
					$('#contstatusupload' + nomortiket).html(`<a href="<?= base_url('folsderbukti/files/')?>` + reps.data + `">Lihat Hasil Bukti Pembayaran  </a>`);
				}
			}
		});
	}
</script>
