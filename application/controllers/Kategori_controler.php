<?php
class Kategori_controler extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('M_kategori');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->M_kategori->tampil_Kategori();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_Kategori',$d,true);
		$this->load->view('home',$x);
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	}
function tambah_Kategori()
	{	
		if($this->session->userdata('masuk')==true){

		$id_kategori=$this->input->post('id_kategori');
		$nama=$this->input->post('nama');	
		$harga=$this->input->post('harga');
	


		$this->M_kategori->simpan_Kategori($id_kategori,$nama,$harga);
		echo "<script>alert('Data Berhasil Di Tambah');location.href=('http://localhost/Web_PT_HPS/index.php/Kategori_controler');</script>";
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
function hapus_Kategori()
	{	if($this->session->userdata('masuk')==true){
		$id_kategori=$this->input->post('id_kategori');
		$this->M_kategori->hapus_Kategori($id_kategori);
		echo "<script>alert('Data Berhasil Di Hapus');location.href=('http://localhost/Web_PT_HPS/index.php/Kategori_controler');</script>";
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
function update_Kategori()
	{	
		if($this->session->userdata('masuk')==true){
		$id_kategori=$this->input->post('id_kategori');
		$nama=$this->input->post('nama');
		$harga=$this->input->post('harga');
	
		$this->M_kategori->update_Kategori($id_kategori,$nama,$harga);
		
		echo "<script>alert('Data Berhasil Di Edit');location.href=('http://localhost/Web_PT_HPS/index.php/Kategori_controler');</script>";
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
}
?>