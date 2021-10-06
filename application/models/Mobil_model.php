<?php
class Mobil_model extends CI_Model
{
	function tampil_mobil()
	{
		$hsl=$this->db->query("select * from tb_bus");
		return $hsl;
	}
	

	function simpan_mobil($id_bus,$nama,$nomor_bus,$merk)
	{
		$hsl=$this->db->query("INSERT INTO tb_bus VALUES ('$id_bus','$nama','$nomor_bus','$merk')");
		return $hsl;
	}
	function hapus_mobil($id_bus){
		$hsl=$this->db->query("DELETE FROM tb_bus where id_bus='$id_bus'");
		return $hsl;
	}
	function update_mobil($id_bus,$nama,$nomor_bus,$merk){
		$hsl=$this->db->query("UPDATE tb_bus set nama='$nama',nomor_bus='$nomor_bus',merk='$merk' where id_bus='$id_bus'");
		return $hsl;
	}
}
?>