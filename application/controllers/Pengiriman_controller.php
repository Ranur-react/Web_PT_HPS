<?php
class Pengiriman_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('Pengiriman_model');
$this->load->model('Jadwal_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Pengiriman_model->tampil_pengiriman();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_pengiriman',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}


function v_pengiriman_user()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Pengiriman_model->tampil_pengiriman();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_pengiriman_user',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}

function form_pengiriman()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Jadwal_model->tampil_jadwal();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('form_input_pengirim',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}

function form_input_pengirim_user()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Jadwal_model->tampil_jadwal();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('form_input_pengirim_user',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}


function form_edit_pengiriman()
	{
		if($this->session->userdata('masuk')==true){
			$id=$this->uri->segment(3);
			$d['tampil_pengirim']=$this->Pengiriman_model->faktur_tiket($id);

			$d['tampil'] = $this->Jadwal_model->tampil_jadwal();    
		
		$x['isi'] = $this->load->view('form_edit_pengirim',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}



	
	function faktur(){
		if($this->session->userdata('masuk')==true){
			$id=$this->uri->segment(3);
			$data['tampil']=$this->Pengiriman_model->faktur_tiket($id);
			$this->load->view('faktur_tiket',$data);
			
		}
		else
			  echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}

	function faktur1(){
		if($this->session->userdata('masuk')==true){
		
			$data['tampil']=$this->Pengiriman_model->faktur_tiket();
			$this->load->view('faktur_tiket',$data);
			
		}
		else
			  echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
	}


	function cetak_faktur2()
	{

		$data['tampil'] = $this->Pengiriman_model->tampil_pengiriman();   
		$x['isi'] = $this->load->view('elert/cetak_faktur2',$data,true);
		$this->load->view('home',$x);
	
		
	}

	
	function cetak_faktur1()
	{

		$data['tampil'] = $this->Pengiriman_model->tampil_pengiriman();   
		$x['isi'] = $this->load->view('elert/cetak_faktur1',$data,true);
		$this->load->view('home',$x);
	
		
	}


function tambah_pengiriman()
	{	

		$id_pengiriman=$this->input->post('id_pengiriman');
		$id_jadwal=$this->input->post('id_jadwal');	
		$nama_pengirim=$this->input->post('nama_pengirim');
		$nama_penerima=$this->input->post('nama_penerima');
		$alamat=$this->input->post('alamat');
		$nohp=$this->input->post('nohp');
		$tanggal=$this->input->post('tanggal');
		$keterangan=$this->input->post('keterangan');
		$jumlah=$this->input->post('jumlah');
		$tujuan=$this->input->post('tujuan');
		

		//$tujuan=date('Y-m-d');

		$biaya=$this->input->post('totalbayar');	
		$bayar=$this->input->post('jumlah_bayar');	
		$kembalian=$this->input->post('kembalian');	
	
		$this->db->query("INSERT INTO tb_pengiriman_barang VALUES ('$id_pengiriman','$id_jadwal','$nama_pengirim','$nama_penerima','$alamat','$nohp'
		,'$tanggal','$keterangan','$jumlah',
		'$tujuan','$biaya','$bayar','$kembalian')");
		redirect('pengiriman_controller/cetak_faktur1');	
	}
function tambah_pengiriman_user()
	{	

		$id_pengiriman=$this->input->post('id_pengiriman');
		$id_jadwal=$this->input->post('id_jadwal');	
		$nama_pengirim=$this->input->post('nama_pengirim');
		$nama_penerima=$this->input->post('nama_penerima');
		$alamat=$this->input->post('alamat');
		// $jumlah=$this->input->post('jumlah');
		$tujuan=$this->input->post('tujuan');
		$nohp=$this->input->post('nohp');
		$tanggal=$this->input->post('tanggal');
		$keterangan=$this->input->post('keterangan');
		// $tujuan=date('Y-m-d');

		$biaya=$this->input->post('totalbayar');	
		$bayar=$this->input->post('jumlah_bayar');	
		$kembalian=$this->input->post('kembalian');	
	
		$this->db->query("INSERT INTO tb_pengiriman_barang VALUES ('$id_pengiriman','$id_jadwal','$nama_pengirim','$nama_penerima','$alamat','$nohp'
		,'$tanggal','$keterangan',
		'$tujuan','$biaya','$bayar','$kembalian')");
		redirect('pengiriman_controller/cetak_faktur2');	
	}


	


function hapus_pengiriman()
	{
		$id_pengiriman=$this->input->post('id_pengiriman');
		$this->Pengiriman_model->hapus_pengiriman($id_pengiriman);
		redirect('pengiriman_controller/');
	}
function update_pengiriman()
	{	
		$id_pengiriman=$this->input->post('id_pengiriman');
		$id_jadwal=$this->input->post('id_jadwal');	
		$nama_pengirim=$this->input->post('nama_pengirim');
		$nama_penerima=$this->input->post('nama_penerima');
		$alamat=$this->input->post('alamat');
		// $jumlah=$this->input->post('jumlah');
		$tujuan=$this->input->post('tujuan');
		$nohp=$this->input->post('nohp');
		$tanggal=$this->input->post('tanggal');
		$keterangan=$this->input->post('keterangan');
		// $tujuan=date('Y-m-d');

		$biaya=$this->input->post('totalbayar');	
		$bayar=$this->input->post('jumlah_bayar');	
		$kembalian=$this->input->post('kembalian');	
		
		$this->Pengiriman_model->update_pengiriman($id_pengiriman,$id_jadwal,$nama_pengirim
		,$nama_penerima,$alamat,$tujuan,$biaya,$nohp,$tanggal,$bayar,$keterangan,$kembalian);
		redirect('pengiriman_controller/');
	}




}
?>