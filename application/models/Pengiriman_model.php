<?php
class Pengiriman_model extends CI_Model
{
	function tampil_pengiriman()
	{
		$hsl=$this->db->query("SELECT  `tb_pengiriman_barang`.*, 
		`tb_jadwal`.`jam`,
		`tb_jadwal`.`tujuan`,
		`tb_jadwal`.`nama_sopir`,
		`tb_jadwal`.`id_bus`
		FROM tb_jadwal,tb_pengiriman_barang
		WHERE `tb_pengiriman_barang`.id_jadwal = tb_jadwal.id_jadwal
		ORDER BY `id_pengiriman` asc");
		return $hsl;
	}
	
	


	function simpan_pengiriman($id_pengiriman,$id_jadwal,$nama_pengirim,$nama_penerima,$nama_barang,$jumlah,$tujuan,$biaya
	)
	{
		$hsl=$this->db->query("INSERT INTO pengiriman VALUES ('$id_pengiriman','$id_jadwal','$nama_pengirim','$nama_penerima','$alamat','$nohp',$tanggal,'$nama_barang','$jumlah',
		'$tujuan','$biaya','1')");
		return $hsl;
	}


	function hapus_pengiriman($id_pengiriman){
		$hsl=$this->db->query("DELETE FROM tb_pengiriman_barang where id_pengiriman='$id_pengiriman'");
		return $hsl;
	}

	function edit_pengiriman($id_pengiriman){
		$hsl=$this->db->query("SELECT  `tb_pengiriman_barang`.*, 
		`tb_jadwal`.`jam`,
		`tb_jadwal`.`tujuan`,
		`tb_jadwal`.`nama_sopir`,
		`tb_jadwal`.`id_bus`
		FROM tb_jadwal,tb_pengiriman_barang
		WHERE `tb_pengiriman_barang`.id_jadwal = tb_jadwal.id_jadwal
	and id_pengiriman='$id_pengiriman'");
		return $hsl;
	}

	function update_pengiriman(	$id_pengiriman,$id_jadwal,$nama_pengirim
	,$nama_penerima,$alamat,$tujuan,$biaya,$nohp,$tanggal,$bayar,$keterangan,$kembalian){
		$hsl=$this->db->query("UPDATE tb_pengiriman_barang set
		 id_pengiriman='$id_pengiriman',
		 tanggal='$tanggal',
		nama_pengirim='$nama_pengirim',
		nama_penerima='$nama_penerima',
		alamat='$alamat',
		tujuan='$tujuan',
		biaya='$biaya',
		nohp='$nohp',
		bayar='$bayar',
		keterangan='$keterangan',
		kembalian='$kembalian'
	
		 where id_pengiriman='$id_pengiriman'");
		return $hsl;
	}


	function faktur_tiket($id_pengiriman)
	{
		$hsl=$this->db->query("SELECT  `tb_pengiriman_barang`.*, 
		`tb_jadwal`.`jam`,
		`tb_jadwal`.`tujuan`,
		`tb_jadwal`.`nama_sopir`,
		`tb_jadwal`.`id_bus`
		FROM tb_jadwal,tb_pengiriman_barang
		WHERE `tb_pengiriman_barang`.id_jadwal = tb_jadwal.id_jadwal
	and id_pengiriman='$id_pengiriman'");
		return $hsl;
	}





}
?>