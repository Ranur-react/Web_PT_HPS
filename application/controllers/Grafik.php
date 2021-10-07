<?php
class Grafik extends CI_Controller{
	function __construct()
{
parent :: __construct();

		$this->load->model('Laporanmodel');
		$this->load->model('m_grafik');
}
		
		
	
	
	function index(){
	
		
		$data['jual_bln']=$this->Laporanmodel->get_bulan_jual();
		$data['jual_thn']=$this->Laporanmodel->get_tahun_jual();

		$x['isi'] =$this->load->view('v_grafik',$data,true);
		$this->load->view('home',$x);

	}


function bulan()
	{
		if($this->session->userdata('masuk')==true){
		$data=$this->Laporanmodel->get_bulan_jual();    
		$d['jual_bln'] = $data;    
		$x['isi'] = $this->load->view('v_grafik',$d,true);
		$this->load->view('home',$x);

		 }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
	}



	function graf_stok_barang(){
		$x['report']=$this->m_grafik->statistik_stok();
		$this->load->view('grafik/v_graf_stok_barang',$x);
	}
	
	
	function graf_penjualan_perbulan(){
		$bulan=$this->input->post('bln');
		$x['bln']=$bulan;
		$x['report']=$this->m_grafik->graf_penjualan_perbulan($bulan);
		$this->load->view('grafik/v_graf_penjualan_perbulan',$x);
	}

	




	function graf_penjualan_pertahun(){
		$tahun=$this->input->post('thn');
		$x['report']=$this->m_grafik->graf_penjualan_pertahun($tahun);
		$x['thn']=$tahun;
		$this->load->view('grafik/v_graf_penjualan_pertahun',$x);
	}
	
}