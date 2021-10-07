<?php
class Mobil_controler extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('mobil_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->mobil_model->tampil_mobil();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_mobil',$d,true);
		$this->load->view('home',$x);
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	}


function tambah_mobil()
	{	

	
		if($this->session->userdata('masuk')==true){
		$id_bus=$this->input->post('id_bus');
		$nama=$this->input->post('nama');	
		$nomor_bus=$this->input->post('nomor_bus');
		$merk=$this->input->post('merk');
	


		$this->mobil_model->simpan_mobil($id_bus,$nama,$nomor_bus,$merk);
		echo "<script>alert('Data Berhasil Di Tambah');location.href=('http://localhost/Web_PT_HPS/index.php/Mobil_controler');</script>";
		// redirect('Mobil_controler/');	
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
function hapus_mobil()
	{	if($this->session->userdata('masuk')==true){
		$id_bus=$this->input->post('id_bus');
		$this->mobil_model->hapus_mobil($id_bus);
		echo "<script>alert('Data Berhasil Di Hapus');location.href=('http://localhost/Web_PT_HPS/index.php/Mobil_controler');</script>";

		redirect('Mobil_controler/');
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
function update_mobil()
	{	
		if($this->session->userdata('masuk')==true){
		$id_bus=$this->input->post('id_bus');
		$nama=$this->input->post('nama');
		$nomor_bus=$this->input->post('nomor_bus');
		$merk=$this->input->post('merk');

		$this->mobil_model->update_mobil($id_bus,$nama,$nomor_bus,$merk);
		echo "<script>alert('Data Berhasil Di Edit');location.href=('http://localhost/Web_PT_HPS/index.php/Mobil_controler');</script>";

		// redirect('Mobil_controler/');
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
}
?>