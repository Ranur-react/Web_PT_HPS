<?php
class modelAdmin extends CI_Model{

	function simpan_admin($nama,$email,$username,$pass,$gambar,$level){
		$hsl=$this->db->query("INSERT INTO tb_user VALUES ('0','$nama','$email','$username',md5('$pass'),'$gambar','$level')");
		return $hsl;
	}
function update_admin($nama,$email,$username,$gambar,$level){
		$hsl=$this->db->query("UPDATE tb_user set nama='$nama',email='$email',username='$username',image='$gambar',level='$level' where id='$id'");
		return $hsl;
	}
	function get_all_admin(){
		$hsl=$this->db->query("SELECT * FROM tb_user");
		return $hsl;
	}
	function hapus_admin($id){
		$hsl=$this->db->query("DELETE FROM tb_user where id='$id'");
		return $hsl;
	}

	function resetpassword($id,$pass){
	$x=$this->db->query("update tb_user set pass=md5('$pass') where id='$id'");
	return $x;
	
	}

}