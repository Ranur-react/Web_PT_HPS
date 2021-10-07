<?php
class Pemesanan_model extends CI_Model
{
	function tampil_pemesanan()
	{
		$hsl=$this->db->query("select * from pemesanan");
		return $hsl;
	}
	function simpan_pemesanan($nopemesanan,$kodepelanggan,$kodesopir,$kodemobil,$kodejadwal,$harga,$keterangan)
	{
		$hsl=$this->db->query("INSERT INTO pemesanan VALUES ('$nopemesanan','$kodepelanggan','$kodesopir','$kodemobil','$kodejadwal','$harga','$keterangan')");
		return $hsl;
	}
	function hapus_pemesanan($nopemesanan){
		$hsl=$this->db->query("DELETE FROM pemesanan where nopemesanan='$nopemesanan'");
		return $hsl;
	}
	function update_pemesanan($nopemesanan,$kodepelanggan,$kodesopir,$kodemobil,$kodejadwal,$harga,$keterangan){
		$hsl=$this->db->query("UPDATE pemesanan set kodepelanggan='$kodepelanggan',kodesopir='$kodesopir',kodemobil='$kodemobil',kodejadwal='$kodejadwal',harga='$harga',harga='$harga' where nopemesanan='$nopemesanan'");
		return $hsl;
	}
}
?>