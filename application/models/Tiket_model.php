<?php
class Tiket_model extends CI_Model
{
	function tampil_Tiket()
	{
		$hsl = $this->db->query("SELECT  `tb_tiket`.*, 
		`tb_jadwal`.`jam`,
		`tb_jadwal`.`tujuan`,
		`tb_jadwal`.`nama_sopir`,
		`tb_kategori`.`nama`,
		`tb_kategori`.`harga`
		FROM tb_jadwal, tb_kategori,tb_tiket
		WHERE tb_tiket.id_jadwal = tb_jadwal.id_jadwal
		AND tb_tiket.`kategori` = tb_kategori.`id_kategori`
		ORDER BY `kode_tiket` DESC");
		return $hsl;
	}

	function tampil_temp()
	{
		$hsl = $this->db->query("SELECT tujuan,tb_tiket_temp1.kode_tiket, `tb_kursi_penumpang`.kursi, tb_kategori.nama, tb_tiket_temp1.harga FROM `tb_tiket_temp1`,`tb_kategori`,`tb_kursi_penumpang`,tb_jadwal WHERE tb_tiket_temp1.`id_kursi`=`tb_kursi_penumpang`.id_kursi AND tb_tiket_temp1.`kategori`=`tb_kategori`.`id_kategori` AND tb_jadwal.id_jadwal=tb_tiket_temp1.id_jadwal");
		return $hsl;
	}

	function update_status($kode_tiket, $keterangan)
	{
		$hsl = $this->db->query("UPDATE tb_tiket set status='$keterangan' where kode_tiket='$kode_tiket'");
		return $hsl;
	}


	function tampil_tiket_pelanggan($kode_tiket)
	{
		$hsl = $this->db->query("SELECT  `tb_tiket`.*, 
		`tb_jadwal`.`jam`,
		`tb_jadwal`.`tujuan`,
		`tb_jadwal`.`nama_sopir`,
		`tb_kategori`.`nama`,
		`tb_kategori`.`harga`
		FROM tb_jadwal, tb_kategori,tb_tiket
		WHERE tb_tiket.id_jadwal = tb_jadwal.id_jadwal
		AND tb_tiket.`kategori` = tb_kategori.`id_kategori`
		AND `kode_tiket`='$kode_tiket'
		ORDER BY `kode_tiket` DESC");
		return $hsl;
	}


	function simpan_Tiket(
		$kode_tiket,
		$nama,
		$alamat,
		$jenis_kelamin,
		$nohp,
		$tanggal,
		$kategori,
		$id_jadwal,
		$bangku,
		$keterangan,
		$status
	) {
		$hsl = $this->db->query("INSERT INTO Tiket VALUES ('$kode_tiket','$nama','$alamat','$jenis_kelamin','$nohp','$tanggal',
		'$kategori','$id_jadwal','$keterangan','1')");
		return $hsl;
	}


	function hapus_Tiket($kode_tiket)
	{
		$hsl = $this->db->query("DELETE FROM tb_tiket where kode_tiket='$kode_tiket'");
		return $hsl;
	}
	function hapus_Tiket_temp($kode_tiket)
	{
		$hsl = $this->db->query("DELETE FROM tb_tiket_temp1 where kode_tiket='$kode_tiket'");
		return $hsl;
	}

	function edit_Tiket($kode_tiket)
	{
		$hsl = $this->db->query("SELECT  `tb_tiket`.*, 
		`tb_jadwal`.`jam`,
		`tb_jadwal`.`tujuan`,
		`tb_jadwal`.`nama_sopir`,
		`tb_kategori`.`nama`,
		`tb_kategori`.`harga`
		FROM tb_jadwal, tb_kategori,tb_tiket
		WHERE tb_tiket.id_jadwal = tb_jadwal.id_jadwal
		AND tb_tiket.`kategori` = tb_kategori.`id_kategori`
		 And kode_tiket='$kode_tiket'");
		return $hsl;
	}
	function update_Tiket($kode_tiket, $tanggal, $nama, $kategori, $id_jadwal, $keterangan, $harga_tiket, $status)
	{
		$hsl = $this->db->query("UPDATE tb_tiket set
		 kode_tiket='$kode_tiket',
		 tanggal='$tanggal',
		nama_penumpang='$nama',
		kategori='$kategori',
		id_jadwal='$id_jadwal',
		keterangan='$keterangan',
	
		status='$status'
		 where kode_tiket='$kode_tiket'");
		return $hsl;
	}


	function notin_kursi()
	{

		$hasil = $this->db->query("SELECT  tb_kursi_penumpang.`id_kursi`,
		tb_kursi_penumpang.`kursi`
		FROM `tb_kursi_penumpang`
		
		WHERE tb_kursi_penumpang.id_kursi NOT IN ( SELECT
		tb_tiket_temp1.id_kursi FROM tb_tiket_temp1)
		
		 ");
		return $hasil;
	}

	function notin_kursi_bayangan()
	{

		$hasil = $this->db->query("SELECT  tb_kursi_penumpang.id_kursi,
		tb_kursi_penumpang.`kursi`
		FROM tb_kursi_penumpang
		WHERE tb_kursi_penumpang.id_kursi NOT IN (SELECT
		`tb_tiket_temp`.id_kursi FROM `tb_tiket_temp`)
		
		
		 ");
		return $hasil;
	}
	public function data_kuris()
	{
		return $this->db->get('tb_kursi_penumpang')->result_array();
	}
}
