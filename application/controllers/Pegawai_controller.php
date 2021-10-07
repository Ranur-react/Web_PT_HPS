<?php
class Sopir_controller extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('sopir_model');
}

function index()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->sopir_model->tampil_sopir();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_sopir',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}

	function SOPIR()
	{
		if($this->session->userdata('masuk')==true){
		$data = $this->sopir_model->tampil_sopir();    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('v_sopir',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}

function tambah_sopir()
	{	
		$kodesopir=$this->input->post('kodesopir');

		$namasopir=$this->input->post('namasopir');	
		$alamatsopir=$this->input->post('alamatsopir');
		
		$nohp=$this->input->post('nohp');
		

		$sql=$this->db->query("SELECT * FROM sopir where kodesopir='$kodesopir'");
		$cek_id = $sql->num_rows();
		if ($cek_id > 0){
		
	
	   $url=base_url().'index.php/Sopir_controller';
		echo "<script delete-link>alert('Data Sudah ada..!');location.href=('$url');</script>";
		
		}
		else
		{
			
           	$this->sopir_model->simpan_sopir($kodesopir,$namasopir,$alamatsopir,$nohp);
        
        redirect('Sopir_controller/');	
		}
	
		
	}


function hapus_sopir()
	{
		$kodesopir=$this->input->post('kodesopir');
		$this->sopir_model->hapus_sopir($kodesopir);
		redirect('Sopir_controller/');
	}
function update_sopir()
	{	
		$kodesopir=$this->input->post('kodesopir');
		$namasopir=$this->input->post('namasopir');
		$alamatsopir=$this->input->post('alamatsopir');
		
		$nohp=$this->input->post('nohp');
		
		$this->sopir_model->update_sopir($kodesopir,$namasopir,$alamatsopir,$nohp);
		redirect('Sopir_controller/');
	}
}
?>