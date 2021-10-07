<?php
class Pelanggan_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('Pelanggan_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Pelanggan_model->tampil_Pelanggan();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_Pelanggan',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}
function tambah_Pelanggan()
	{	
		$kodepelanggan=$this->input->post('kodepelanggan');
		$namapelanggan=$this->input->post('namapelanggan');	
		$alamat=$this->input->post('alamat');
		$jeniskelamin=$this->input->post('jeniskelamin');
		$nohp=$this->input->post('nohp');
		$tanggalberangkat=$this->input->post('tanggalberangkat');
		$tanggalpesan=date('Y-m-d');

		$kodemobil=$this->input->post('kodemobil');	
		$kodejadwal=$this->input->post('kodejadwal');	
		$kodesopir=$this->input->post('kodesopir');	
		/*$harga=$this->input->post('harga');*/	
		$harga=str_replace('.', '', $this->input->post('harga'));
		/*
		$this->Pelanggan_model->simpan_Pelanggan($kodepelanggan,$namapelanggan,$alamat,$jeniskelamin,$nohp,$tanggalberangkat,$tanggalpesan,$kodemobil,$kodejadwal,$kodesopir,$harga);*/

		$this->db->query("INSERT INTO Pelanggan VALUES ('$kodepelanggan','$namapelanggan','$alamat','$jeniskelamin','$nohp','$tanggalberangkat','$tanggalpesan','$kodemobil','$kodejadwal','$kodesopir','$harga','1')");
		redirect('Pelanggan_controller/');	
	}


function hapus_Pelanggan()
	{
		$kodepelanggan=$this->input->post('kodepelanggan');
		$this->Pelanggan_model->hapus_Pelanggan($kodepelanggan);
		redirect('Pelanggan_controller/');
	}
function update_Pelanggan()
	{	
		$kodepelanggan=$this->input->post('kodepelanggan');
		$namapelanggan=$this->input->post('namapelanggan');	
		$alamat=$this->input->post('alamat');
		$jeniskelamin=$this->input->post('jeniskelamin');
		$nohp=$this->input->post('nohp');
		$tanggalberangkat=$this->input->post('tanggalberangkat');
		$tanggalpesan=$this->input->post("tanggalpesan");

		$kodemobil=$this->input->post('kodemobil');	
		$kodejadwal=$this->input->post('kodejadwal');	
		$kodesopir=$this->input->post('kodesopir');	
		
		$harga=str_replace('.', '', $this->input->post('harga'));
		
		
		$this->Pelanggan_model->update_Pelanggan($kodepelanggan,$namapelanggan,$alamat,$jeniskelamin,$nohp,$tanggalberangkat,$tanggalpesan,$kodemobil,$kodejadwal,$kodesopir,$harga);
		redirect('Pelanggan_controller/');
	}
}
?>