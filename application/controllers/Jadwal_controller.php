<?php
class Jadwal_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('jadwal_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->jadwal_model->tampil_jadwal();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_jadwal',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}



	function v_jadwal_user()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->jadwal_model->tampil_jadwal();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_jadwal_user',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}


	
function tambah_jadwal()
	{	
		$id_jadwal=$this->input->post('id_jadwal');
	
		$jam=$this->input->post('jam');
		$tujuan=$this->input->post('tujuan');
		$id_bus=$this->input->post('id_bus');
		$nama_sopir=$this->input->post('nama_sopir');
		$this->jadwal_model->simpan_jadwal($id_jadwal,$jam,$tujuan,$id_bus,$nama_sopir);
		echo "<script>alert('Data Berhasil Di Tambah');location.href=('http://localhost/Web_PT_HPS/index.php/Jadwal_controller');</script>";
	}


function hapus_jadwal()
	{
		$id_jadwal=$this->input->post('id_jadwal');
		$this->jadwal_model->hapus_jadwal($id_jadwal);
		echo "<script>alert('Data Berhasil Di Hapus');location.href=('http://localhost/Web_PT_HPS/index.php/Jadwal_controller');</script>";
	}
function update_jadwal()
	{	
		$id_jadwal=$this->input->post('id_jadwal');
		$jam=$this->input->post('jam');
		$tujuan=$this->input->post('tujuan');
		$id_bus=$this->input->post('id_bus');
		$nama_sopir=$this->input->post('nama_sopir');
		
	
		$this->jadwal_model->update_jadwal($id_jadwal,$jam,$tujuan,$id_bus,$nama_sopir);
		echo "<script>alert('Data Berhasil Di Edit');location.href=('http://localhost/Web_PT_HPS/index.php/Jadwal_controller');</script>";
	}
}
?>