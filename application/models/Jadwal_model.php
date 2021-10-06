<?php
class Jadwal_model extends CI_Model
{
	function tampil_jadwal()
	{
		$hsl=$this->db->query("select * from tb_jadwal");
		return $hsl;
	}

	
	function simpan_jadwal($id_jadwal,$jam,$tujuan,$id_bus,$nama_sopir)
	{
		$hsl=$this->db->query("INSERT INTO tb_jadwal VALUES ('$id_jadwal','$jam','$tujuan','$id_bus','$nama_sopir')");
		return $hsl;
	}
	function hapus_jadwal($id_jadwal){
		$hsl=$this->db->query("DELETE FROM tb_jadwal where id_jadwal='$id_jadwal'");
		return $hsl;
	}
	function update_jadwal($id_jadwal,$jam,$tujuan,$id_bus,$nama_sopir){
		$hsl=$this->db->query("UPDATE tb_jadwal set jam='$jam',tujuan='$tujuan',id_bus='$id_bus',nama_sopir='$nama_sopir' where id_jadwal='$id_jadwal'");
		return $hsl;
	}
}
?>