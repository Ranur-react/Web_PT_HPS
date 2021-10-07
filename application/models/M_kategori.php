<?php
class M_kategori extends CI_Model
{
	function tampil_kategori()
	{
		
		$hsl=$this->db->query("select * from tb_kategori");
		return $hsl;
	}

	function simpan_kategori($id_kategori,$nama,$harga)
	{
		$hsl=$this->db->query("INSERT INTO tb_kategori VALUES ('$id_kategori','$nama','$harga')");
		return $hsl;
	}
	function hapus_kategori($id_kategori){
		$hsl=$this->db->query("DELETE FROM tb_kategori where id_kategori='$id_kategori'");
		return $hsl;
	}
	function update_kategori($id_kategori,$nama,$harga){
		$hsl=$this->db->query("UPDATE tb_kategori set nama='$nama',harga='$harga' where id_kategori='$id_kategori'");
		return $hsl;
	}
}
?>