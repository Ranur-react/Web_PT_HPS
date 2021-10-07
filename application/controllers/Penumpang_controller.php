<?php
class Penumpang_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('Penumpang_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->Penumpang_model->tampil_penumpang();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_penumpang',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}
function tambah_penumpang()
	{	
		$id_penumpang=$this->input->post('id_penumpang');
	
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$telepon=$this->input->post('telepon');
		$username=$this->input->post('username');
		$password=$this->input->post('password');


		
		$this->Penumpang_model->simpan_Penumpang($id_penumpang,$nama,$alamat,$jenis_kelamin,$telepon,$username,$password);

		echo "<script>alert('Data anda berhasil disimpan silahkan login..!');location.href=('http://localhost/Web_PT_HPS/index.php/Login');</script>";

		// redirect('Login/');	
	}

function tambah_penumpang_admin()
	{	
		$id_penumpang=$this->input->post('id_penumpang');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$telepon=$this->input->post('telepon');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$this->Penumpang_model->simpan_Penumpang($id_penumpang,$nama,$alamat,$jenis_kelamin,$telepon,$username,$password);

		echo "<script>alert('Data anda berhasil disimpan');location.href=('http://localhost/Web_PT_HPS/index.php/Penumpang_controller');</script>";

		// redirect('Penumpang_controller');	
	}


function hapus_Penumpang()
	{
		$id_penumpang=$this->input->post('id_penumpang');
		$this->Penumpang_model->hapus_Penumpang($id_penumpang);
		echo "<script>alert('Data berhasil dihapus');location.href=('http://localhost/Web_PT_HPS/index.php/Penumpang_controller');</script>";
		// redirect('Penumpang_controller/');
	}
function update_penumpang()
	{	
		$id_penumpang=$this->input->post('id_penumpang');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$telepon=$this->input->post('telepon');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		
		$this->Penumpang_model->update_penumpang($id_penumpang,$nama,$alamat,$jenis_kelamin,$telepon,$username,$password);
		echo "<script>alert('Data berhasil di edit');location.href=('http://localhost/Web_PT_HPS/index.php/Penumpang_controller');</script>";
		// redirect('Penumpang_controller/');
	}
}
?>