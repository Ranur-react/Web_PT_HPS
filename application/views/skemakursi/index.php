<style>
	.busContainer {
		width: 70%;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		align-items: center;
	}

	.busRow {
		width: 400px;
		/* height: 200px; */
		display: flex;
		flex-wrap: wrap-reverse;
		border-width: 0.5;
		border-radius: 20;
		border-color: grey;
		border-style: dotted;
	}

	.bus-chair {
		width: 100px;
		height: 100px;
		margin: 40px;
		border-width: 0.5px;
		border-radius: 20%;
		border-color: grey;
		border-style: solid;
		justify-content: flex-end;
		align-items: center;
		display: flex;
		flex-direction: column;
		overflow: hidden;
		padding: 10px;
	}

	.tombolpilih {
		width: auto;
		border-radius: 50%;
	}
</style>
<div class="container">
	<div class="row busContainer">
		<div class="busRow">
			<div class="bus-chair">
				<div class="nomorkursi">
					Sopir
				</div>
			</div>

			<?php
			foreach ($notin_kursi_bayangan as $a) :
				$no = 0;
				$jumlah = $this->db->from('tb_tiket_temp')->where(['tanggal' => $tanggal, 'id_jadwal' => $id_jadwal, 'id_bus' => $id_bus, 'id_kursi' => $a['id_kursi']])->count_all_results();
				$no++;

			?>
				<div class="bus-chair">
					<div class="nomorkursi">
						<?= $a['kursi']; ?>
					</div>
					<div class="tombolpilih">
						<?php if ($jumlah > 0) {
						?>

							<div class="nomorkursi">
								<i class="text-success glyphicon glyphicon-ok-sign"></i>
							</div>
						<?php

						} else {
						?>

							<a href="javascript:void(0)" onclick="pilih('<?= $a['id_kursi']; ?>')" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-share-alt"></i> </a>
						<?php
						}
						?>

					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
