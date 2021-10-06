<?php
class Pelanggan_model extends CI_Model
{
	function tampil_Pelanggan()
	{
		$hsl=$this->db->query("select * from Pelanggan");
		return $hsl;
	}
	/*function simpan_Pelanggan($kodepelanggan,$namapelanggan,$alamat,$jeniskelamin,$nohp,$tanggalberangkat,$tanggalpesan,
		$kodemobil,$kodejadwal,$kodesopir,$harga,$keterangan)
	{
		$hsl=$this->db->query("INSERT INTO Pelanggan VALUES ('$kodepelanggan','$namapelanggan','$alamat','$jeniskelamin','$nohp','$tanggalberangkat','$tanggalpesan','$kodemobil','$kodejadwal','$kodesopir','$harga','1')");
		return $hsl;
	}*/
	function hapus_Pelanggan($kodepelanggan){
		$hsl=$this->db->query("DELETE FROM Pelanggan where kodepelanggan='$kodepelanggan'");
		return $hsl;
	}
	function update_Pelanggan($kodepelanggan,$namapelanggan,$alamat,$jeniskelamin,$nohp,$tanggalberangkat,$tanggalpesan,$kodemobil,$kodejadwal,$kodesopir,$harga){
		$hsl=$this->db->query("UPDATE Pelanggan set namapelanggan='$namapelanggan',alamat='$alamat',jeniskelamin='$jeniskelamin',nohp='$nohp',tanggalberangkat='$tanggalberangkat',tanggalpesan='$tanggalpesan',kodemobil='$kodemobil',kodejadwal='$kodejadwal',kodesopir='$kodesopir',harga='$harga' where kodepelanggan='$kodepelanggan'");
		return $hsl;
	}
}
?>