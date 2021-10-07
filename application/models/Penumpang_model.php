<?php
class Penumpang_model extends CI_Model
{
	function tampil_penumpang()
	{
		$hsl=$this->db->query("select * from tb_penumpang");
		return $hsl;
	}


	function simpan_penumpang($id_penumpang,$nama,$alamat,$jenis_kelamin,$telepon,$username,$password)
	{
		$hsl=$this->db->query("INSERT INTO tb_penumpang VALUES ('$id_penumpang','$nama','$alamat','$jenis_kelamin','$telepon','$username','$password')");
		return $hsl;
	}
	function hapus_penumpang($id_penumpang){
		$hsl=$this->db->query("DELETE FROM tb_penumpang where id_penumpang='$id_penumpang'");
		return $hsl;
	}
	function update_penumpang($id_penumpang,$nama,$alamat,$jenis_kelamin,$telepon,$username,$password){
		$hsl=$this->db->query("UPDATE tb_penumpang set nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',telepon='$telepon',username='$username',password='$password' where id_penumpang='$id_penumpang'");
		return $hsl;
	}
}
?>