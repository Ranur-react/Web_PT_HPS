<?php
class Pembayaran_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();

$this->load->model('Pembayaran_model');


}

function index()
	{
		if($this->session->userdata('masuk')==true){

		$data['tampil'] = $this->Pembayaran_model->tampil_Pembayaran();
		  

	   	
		$x['isi'] = $this->load->view('v_Pembayaran',$data,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}

	



function tambah_Pembayaran()
	{	

		// var_dump($_POST);

	$this->session->set_userdata('kode_tiket',$this->input->post('kode_tiket'));

		$kode_tiket=$this->session->userdata['kode_tiket'];
		$kodebayar=$this->input->post('kodebayar');
		// $kode_tiket=$this->input->post('kode_tiket');	
		$namasopir=$this->input->post('nama_sopir');
		$id_bus=$this->input->post('id_bus');
		$tanggal=$this->input->post('tanggal');	
		// $jadwalkeberangkatan=$this->input->post('jadwalkeberangkatan');	
		$jam=$this->input->post('jam');	
		$jumlahbayar=$this->input->post('jumlah_bayar');	
		$totalbayar=$this->input->post('totalbayar');	
		$kembalian=$this->input->post('kembalian');	
		$namapelanggan=$this->input->post('nama_penumpang');	
		$keterangan=$this->input->post('keterangan');

		
		$this->Pembayaran_model->simpan_Pembayaran($kodebayar,$kode_tiket,$namapelanggan,$namasopir,$id_bus,$tanggal,$jam,$jumlahbayar,$totalbayar,$kembalian,$keterangan);

		$this->db->query("UPDATE tb_tiket set status='2' where kode_tiket='$kode_tiket'");

		redirect('Pembayaran_controller/cetak_faktur');	

	}





function hapus_Pembayaran()
	{
		$kodebayar=$this->input->post('kodebayar');
		$this->Pembayaran_model->hapus_Pembayaran($kodebayar);
		redirect('Pembayaran_controller/');
	}

function update_Pembayaran()
	{	
		$kodebayar=$this->input->post('kodebayar');
	
		
		$keterangan=$this->input->post('keterangan');	
		
		$this->Pembayaran_model->update_Pembayaran($kodebayar,$keterangan);
		redirect('Pembayaran_controller/');
	}

	function faktur(){
		if($this->session->userdata('masuk')==true){
			$id=$this->uri->segment(3);
			$data['tampil']=$this->Pembayaran_model->faktur($id);
			$this->load->view('faktur',$data);
			
		}
		else
			  echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	function faktur1(){
		if($this->session->userdata('masuk')==true){
		
			$data['tampil']=$this->Pembayaran_model->faktur();
			$this->load->view('faktur',$data);
			
		}
		else
			  echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

function cetak_faktur()
	{

		$data['tampil'] = $this->Pembayaran_model->tampil_Pembayaran();
		$x['isi'] = $this->load->view('elert/cetak_faktur',$data,true);
		$this->load->view('home',$x);
	
		
	}


	function cetak_faktur1()
	{

		$data['tampil'] = $this->Pembayaran_model->tampil_Pembayaran();
		$x['isi'] = $this->load->view('elert/cetak_faktur1',$data,true);
		$this->load->view('home',$x);
	
		
	}


}
?>