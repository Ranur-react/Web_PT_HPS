<?php
class Loginmodel extends CI_Model{
	//cek nip dan password pegawai/user
	function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM tb_user WHERE username='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek nim dan password penumpang
	function auth_penumpang($username,$password){
		$query=$this->db->query("SELECT * FROM tb_penumpang WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}
	



}
