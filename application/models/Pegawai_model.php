<?php
class Pegawai_model extends CI_Model
{
	function tampil_Pegawai()
	{
		$hsl=$this->db->query("select * from tb_pegawai`");
		return $hsl;
	}
	function simpan_Pegawai($id_pegawai,$nama,$jenis_kelamin,$alamat,$telepon,$jabatan)
	{
		$hsl=$this->db->query("INSERT INTO tb_pegawai` VALUES ('$id_pegawai','$nama','$jenis_kelamin','$alamat','$telepon','$jabatan')");
		return $hsl;
	}
	function hapus_Pegawai($id_pegawai){
		$hsl=$this->db->query("DELETE FROM tb_pegawai` where id_pegawai='$id_pegawai'");
		return $hsl;
	}
	function update_Pegawai($id_pegawai,$nama,$jenis_kelamin,$alamat){
		$hsl=$this->db->query("UPDATE tb_pegawai` set nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id_pegawai='$id_pegawai'");
		return $hsl;
	}
}
?>