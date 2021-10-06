<?php
class Pemesanan_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('pemesanan_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->pemesanan_model->tampil_pemesanan();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_pemesanan',$d,true);
		$this->load->view('home',$x);
	}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	}

	function cari_pemesanan()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->pemesanan_model->tampil_pemesanan();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_pemesanan_pencarian',$d,true);
		$this->load->view('home',$x);
	}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	}

function tambah_pemesanan()
	{	
		if($this->session->userdata('masuk')==true){
		$nopemesanan=$this->input->post('nopemesanan');
		$kodepelanggan=$this->input->post('kodepelanggan');	
		$kodesopir=$this->input->post('kodesopir');
		
		$kodemobil=$this->input->post('kodemobil');
		$kodejadwal=$this->input->post('kodejadwal');
		$harga=$this->input->post('harga');
		$keterangan=$this->input->post('keterangan');
		

		$this->pemesanan_model->simpan_pemesanan($nopemesanan,$kodepelanggan,$kodesopir,$kodemobil,$kodejadwal,$harga,$keterangan);
		redirect('Pemesanan_controller/');
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
			
	}
function hapus_pemesanan()
	{
		if($this->session->userdata('masuk')==true){
		$nopemesanan=$this->input->post('nopemesanan');
		$this->pemesanan_model->hapus_pemesanan($nopemesanan);
		redirect('Pemesanan_controller/');
		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}
	}
function update_pemesanan()
	{	
		if($this->session->userdata('masuk')==true){
		$nopemesanan=$this->input->post('nopemesanan');
		$kodepelanggan=$this->input->post('kodepelanggan');
		$kodesopir=$this->input->post('kodesopir');
		
		$kodemobil=$this->input->post('kodemobil');
		$kodejadwal=$this->input->post('kodejadwal');
		$harga=$this->input->post('harga');
		$keterangan=$this->input->post('keterangan');
		

		$this->pemesanan_model->simpan_pemesanan($nopemesanan,$kodepelanggan,$kodesopir,$kodemobil,$kodejadwal,$harga,$keterangan);
		redirect('Pemesanan_controller/');

		}else{
		echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	}
}
?>