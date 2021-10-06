<?php
class Laporan extends CI_Controller
{
function __construct()
{
parent :: __construct();
$this->load->model('Laporanmodel');
}


	

		function lap_perhari()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->cetak_perhari($th);
		    $this->load->view('lap_perhari',$v);
		}


		function lap_pertahun()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->Cetak_tahun($th);
		    $this->load->view('lap_pertahun',$v);
		}


function FORM_LAPORAN(){
		$x['isi'] = $this->load->view('FORM_LAPORAN','',true);
		$this->load->view('home',$x);
	}

	function lap_perbulan()	
		{
			$bulan=$_POST['bulan'];
			$tahun=$_POST['tahun'];
			$v['bulan']  = $bulan;
			$v['tahun']  = $tahun;
			$v['cth']=$this->Laporanmodel->cetak_perbulan($bulan,$tahun);
		    $this->load->view('lap_perbulan',$v);
		}

	
		function lap_penumpang()	
		{
			
			$v['tampil']=$this->Laporanmodel->lap_penumpang();
		    $this->load->view('lap_penumpang',$v);
		}
		function lap_pegawai()	
		{
			
			$v['tampil']=$this->Laporanmodel->lap_pegawai();
		    $this->load->view('lap_pegawai',$v);
		}

	

		function lap_mobil()	
		{
			
			$v['cth']=$this->Laporanmodel->lap_bus();
		    $this->load->view('lap_mobil',$v);
		}

		function lap_jadwal()	
		{
			
			$v['cth']=$this->Laporanmodel->cetak_jadwal();
		    $this->load->view('lap_jadwal',$v);
		}

		function lap_kategori()	
		{
			
			$v['cth']=$this->Laporanmodel->cetak_kategori();
		    $this->load->view('lap_kategori',$v);
		}
	


		function lap_tiket_perbulan()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->lap_tiket_perbulan($th);
		    $this->load->view('Lap_tiket_perbulan',$v);
		}

		function lap_tiket_pertanggal()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->lap_tiket_pertanggal($th);
		    $this->load->view('lap_tiket_pertanggal',$v);
		}

		function lap_tiket_pertahun(){
			$tahun=$this->input->post('th');
			// var_dump($tahun);
			// exit;
			$x['jml']=$this->Laporanmodel->get_total_tiket_pertahun($tahun);
			// $x['data']=$this->Laporanmodel->get_tiket_pertahun($tahun);
			$this->load->view('lap_tiket_pertahun',$x);
		}

		function lap_pengiriman_pertahun(){
			$tahun=$this->input->post('tahun');
			// var_dump($tahun);
			// exit;
			$x['jml']=$this->Laporanmodel->get_total_pengiriman_pertahun($tahun);
			// $x['data']=$this->Laporanmodel->get_pengiriman_pertahun($tahun);
			$this->load->view('lap_pengiriman_pertahun',$x);
		}



		function lap_pengiriman_perbulan()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->lap_pengiriman_perbulan($th);
		    $this->load->view('Lap_pengiriman_perbulan',$v);
		}

		function Lap_pengiriman_pertanggal()	
		{
			$th=$_POST['th'];
			$v['th']  = $th;
			$v['cth']=$this->Laporanmodel->Lap_pengiriman_pertanggal($th);
		    $this->load->view('Lap_pengiriman_pertanggal',$v);
		}

	

}
?>