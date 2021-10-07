<?php
class Tiket_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('tiket_model');
		$this->load->model('jadwal_model');
		$this->load->model('M_kategori');
		$this->load->model('Pembayaran_model');
	}

	function index()
	{
		if ($this->session->userdata('masuk') == true) {
			$data = $this->tiket_model->tampil_tiket();
			$d['tampil'] = $data;
			$x['isi'] = $this->load->view('v_tiket', $d, true);
			$this->load->view('home', $x);
		} else {
			echo 'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
		}
	}

	function update_status()
	{
		$kodebayar = $this->input->post('kode_tiket');
		$keterangan = $this->input->post('keterangan');
		$this->tiket_model->update_status($kodebayar, $keterangan);
		redirect('Tiket_controller/');
	}


	function lap_tiket_pertanggal()
	{
		$th = $_POST['th'];
		$v['th']  = $th;
		$v['cth'] = $this->Laporanmodel->lap_tiket_pertanggal($th);
		$this->load->view('lap_tiket_pertanggal', $v);
	}

	function tampil_data_peruser()
	{
		if ($this->session->userdata('masuk') == true) {
			// $kode=$this->session->set_userdata('kode_tiket',$this->input->post('kode_tiket'));
			$data = $this->tiket_model->tampil_tiket();

			$d['tampil'] = $data;
			$x['isi'] = $this->load->view('v_tiket_user', $d, true);
			$this->load->view('home', $x);
		} else {
			echo 'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
		}
	}



	function form_tiket()
	{
		if ($this->session->userdata('masuk') == true) {
			$d['tampil_jadwal'] = $this->jadwal_model->tampil_jadwal();
			$d['tampil_kategori'] = $this->M_kategori->tampil_kategori();
			$d['tampil_notin'] = $this->tiket_model->notin_kursi();
			$d['notin_kursi_bayangan'] = $this->tiket_model->notin_kursi_bayangan();
			$d['tampil_temp'] = $this->tiket_model->tampil_temp();

			$x['isi'] = $this->load->view('form_input_tiket', $d, true);
			$this->load->view('home', $x);
		} else {
			echo 'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
		}
	}
	public function cari_kursi()
	{
		$data = [
			'tanggal' => $this->input->get('tanggal'),
			'id_jadwal' => $this->input->get('id_jadwal'),
			'id_bus' => $this->input->get('id_bus'),
			'notin_kursi_bayangan' => $this->tiket_model->data_kuris()
		];
		$this->load->view('modal_cari_kuris', $data);
	}
	public function pilih_kursi()
	{
		$tanggal = $this->input->get('tanggal');
		$id_jadwal = $this->input->get('id_jadwal');
		$id_bus = $this->input->get('id_bus');
		$id_kursi = $this->input->get('id_kursi');
		$data_temp = $this->db->from('tb_tiket_temp')->where(['tanggal' => $tanggal, 'id_jadwal' => $id_jadwal, 'id_bus' => $id_bus, 'id_kursi' => $id_kursi])->count_all_results();
		if ($data_temp > 0) {
			$json = [
				'status' => '0101',
				'pesan' => 'Kursi sudah diambil'
			];
		} else {
			$data_tiket = $this->db->from('tb_tiket_temp')->where(['tanggal' => $tanggal, 'id_jadwal' => $id_jadwal, 'id_bus' => $id_bus, 'id_kursi' => $id_kursi])->count_all_results();
			if ($data_tiket > 0) {
				$json = [
					'status' => '0101',
					'pesan' => 'Kursi sudah diambil'
				];
			} else {
				$json = [
					'status' => '0100',
					'pesan' => 'Kursi tersedia'
				];
			}
		}
		echo json_encode($json);
	}

	function form_tiket_user()
	{
		if ($this->session->userdata('masuk') == true) {
			$d['tampil_jadwal'] = $this->jadwal_model->tampil_jadwal();
			$d['tampil_kategori'] = $this->M_kategori->tampil_kategori();
			$d['tampil_notin'] = $this->tiket_model->notin_kursi();
			$d['notin_kursi_bayangan'] = $this->tiket_model->notin_kursi_bayangan();
			$d['tampil_temp'] = $this->tiket_model->tampil_temp();


			$x['isi'] = $this->load->view('form_input_tiket_user1', $d, true);
			$this->load->view('home', $x);
		} else {
			echo 'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
		}
	}

	function form_pembayaran()
	{
		if ($this->session->userdata('masuk') == true) {
			$d['tampil_notin'] = $this->Pembayaran_model->tampil_notin();


			$x['isi'] = $this->load->view('form_input_pembayaran', $d, true);
			$this->load->view('home', $x);
		} else {
			echo 'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
		}
	}

	function form_edit_tiket()
	{
		if ($this->session->userdata('masuk') == true) {
			$kode = $this->uri->segment(3);
			$d['tampil'] = $this->tiket_model->edit_Tiket($kode);
			$d['tampil_jadwal'] = $this->jadwal_model->tampil_jadwal();
			$d['tampil_kategori'] = $this->M_kategori->tampil_kategori();

			$x['isi'] = $this->load->view('form_edit_tiket', $d, true);
			$this->load->view('home', $x);
		} else {
			echo 'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
		}
	}


	function tambah_tiket()
	{

		$kode_tiket = $this->input->post('kode_tiket');
		$nama_penumpang = $this->input->post('nama_penumpang');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nohp = $this->input->post('nohp');

		$tanggal = $this->input->post('tanggal');

		$kategori = $this->input->post('kategori');
		$id_jadwal = $this->input->post('id_jadwal');
		// $bangku=$this->input->post('bangku');
		// $tanggalpesan=date('Y-m-d');
		$keterangan = $this->input->post('keterangan');
		$id_bus = $this->input->post('id_bus');
		$harga = $this->input->post('harga');
		$total = $this->input->post('total');
		// $kodesopir=$this->input->post('kodesopir');	
		/*$harga=$this->input->post('harga');*/
		// $harga_tiket=str_replace('.', '', $this->input->post('harga_tiket'));
		/*
		$this->tiket_model->simpan_tiket($kode_tiket,$tanggal,$nama_penumpang,$kategori,$id_jadwal,$bangku,$tanggalpesan,$keterangan,$harga_tiket,$kodesopir,$harga);*/
		$this->db->query("INSERT INTO tb_tiket VALUES ('$kode_tiket','$nama_penumpang','$alamat','$jenis_kelamin','$nohp','$tanggal',
		'$kategori','$id_jadwal','$keterangan','1','$id_bus','$total','$harga')");
		redirect('tiket_controller/');
	}



	function tambah_tiket_user()
	{


		if (isset($_POST['ok'])) {
			$kode_tiket = $this->input->post('kode_tiket');
			$nama_penumpang = $this->input->post('nama_penumpang');
			$alamat = $this->input->post('alamat');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$nohp = $this->input->post('nohp');
			$id_kursi = $this->input->post('kursi');

			$tanggal = $this->input->post('tanggal');

			$kategori = $this->input->post('kategori');
			$id_jadwal = $this->input->post('id_jadwal');
			// $bangku=$this->input->post('bangku');
			// $tanggalpesan=date('Y-m-d');

			$keterangan = $this->input->post('keterangan');
			$id_bus = $this->input->post('id_bus');
			$harga = $this->input->post('harga');
			$jumlah = $this->input->post('jumlah');
			$total = $this->input->post('total');

			// 		var_dump($_POST);
			// EXIT;

			$sql_tambah_bantu = $this->db->query("INSERT INTO tb_tiket_temp VALUES ('$kode_tiket','$id_kursi','$nama_penumpang','$alamat','$jenis_kelamin','$nohp','$tanggal',
	'$kategori','$id_jadwal','$keterangan','1','$id_bus','$harga','$jumlah','$total')");

			$this->db->query("INSERT INTO tb_tiket_temp1 VALUES ('$kode_tiket','$id_kursi',
	'$kategori','$id_jadwal','$keterangan','$harga')");


			if ($sql_tambah_bantu) {
				$url = base_url() . 'index.php/Tiket_controller/form_tiket_user';
				echo "
		
		<script>  location.href=('$url');alert('Data berhasil ditambahkan');</script>";
			} else {
				echo "Gagal Tambah bantu";
			}
		} elseif (isset($_POST['simpan'])) {

			$kode_tiket = $this->input->post('kode_tiket');
			$nama_penumpang = $this->input->post('nama_penumpang');
			$this->session->set_userdata('nama_penumpang', $nama_penumpang);
			$alamat = $this->input->post('alamat');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$nohp = $this->input->post('nohp');
			$this->session->set_userdata('status_kode_tiket', true);
			$tanggal = $this->input->post('tanggal');

			$kategori = $this->input->post('kategori');
			$id_jadwal = $this->input->post('id_jadwal');
			// $bangku=$this->input->post('bangku');
			// $tanggalpesan=date('Y-m-d');

			$keterangan = $this->input->post('keterangan');
			$id_bus = $this->input->post('id_bus');
			$harga = $this->input->post('harga');
			$jumlah = $this->input->post('jumlah');
			$total = $this->input->post('total');
			$id_kursi = $this->input->post('kursi');



			$sql_tambah_keluarga  = $this->db->query("INSERT   INTO   `tb_tiket`(`kode_tiket`,`id_kursi`,`nama_penumpang`,`alamat`,
			`jenis_kelamin`,`nohp`,`tanggal`,`kategori`,
			`id_jadwal`,`keterangan`,`status`,`id_bus`,`harga`,`jumlah`,`total`) 
			SELECT `kode_tiket`,`id_kursi`,`nama_penumpang`,`alamat`,
			`jenis_kelamin`,`nohp`,`tanggal`,`kategori`,
			`id_jadwal`,`keterangan`,`status`,`id_bus`,`harga`,`jumlah`,`total` FROM tb_tiket_temp");

			//simpan session pembelian tiket
			$this->db->query("delete from tb_tiket_temp1");
			if ($sql_tambah_keluarga) {
				$url = base_url() . 'index.php/Tiket_controller/form_tiket_user';
				echo "
		
		<script>  location.href=('$url');</script>";
			} else {
				echo "Gagal Tambah keluerga";
			}
		}
	}


	function tambah()
	{


		if (isset($_POST['ok'])) {
			$kode_tiket = $this->input->post('kode_tiket');
			$nama_penumpang = $this->input->post('nama_penumpang');
			$alamat = $this->input->post('alamat');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$nohp = $this->input->post('nohp');
			$id_kursi = $this->input->post('kursi');

			$tanggal = $this->input->post('tanggal');

			$kategori = $this->input->post('kategori');
			$id_jadwal = $this->input->post('id_jadwal');
			// $bangku=$this->input->post('bangku');
			// $tanggalpesan=date('Y-m-d');

			$keterangan = $this->input->post('keterangan');
			$id_bus = $this->input->post('id_bus');
			$harga = $this->input->post('harga');
			$jumlah = $this->input->post('jumlah');
			$total = $this->input->post('total');

			// 		var_dump($_POST);
			// EXIT;

			$sql_tambah_bantu = $this->db->query("INSERT INTO tb_tiket_temp VALUES ('$kode_tiket','$id_kursi','$nama_penumpang','$alamat','$jenis_kelamin','$nohp','$tanggal',
		'$kategori','$id_jadwal','$keterangan','1','$id_bus','$harga','$jumlah','$total')");

			$this->db->query("INSERT INTO tb_tiket_temp1 VALUES ('$kode_tiket','$id_kursi',
'$kategori','$id_jadwal','$keterangan','$harga')");


			if ($sql_tambah_bantu) {
				$url = base_url() . 'index.php/Tiket_controller/form_tiket';
				echo "
			alert('Data berhasil ditambahkan');
			<script>  location.href=('$url');</script>";
			} else {
				echo "Gagal Tambah bantu";
			}
		} elseif (isset($_POST['simpan'])) {

			$kode_tiket = $this->input->post('kode_tiket');
			$nama_penumpang = $this->input->post('nama_penumpang');
			$alamat = $this->input->post('alamat');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$nohp = $this->input->post('nohp');

			$tanggal = $this->input->post('tanggal');

			$kategori = $this->input->post('kategori');
			$id_jadwal = $this->input->post('id_jadwal');
			// $bangku=$this->input->post('bangku');
			// $tanggalpesan=date('Y-m-d');

			$keterangan = $this->input->post('keterangan');
			$id_bus = $this->input->post('id_bus');
			$harga = $this->input->post('harga');
			$jumlah = $this->input->post('jumlah');
			$total = $this->input->post('total');
			$id_kursi = $this->input->post('kursi');



			$sql_tambah_keluarga  = $this->db->query("INSERT   INTO   `tb_tiket`(`kode_tiket`,`id_kursi`,`nama_penumpang`,`alamat`,
				`jenis_kelamin`,`nohp`,`tanggal`,`kategori`,
				`id_jadwal`,`keterangan`,`status`,`id_bus`,`harga`,`jumlah`,`total`) 
				SELECT `kode_tiket`,`id_kursi`,`nama_penumpang`,`alamat`,
				`jenis_kelamin`,`nohp`,`tanggal`,`kategori`,
				`id_jadwal`,`keterangan`,`status`,`id_bus`,`harga`,`jumlah`,`total` FROM tb_tiket_temp");

			$this->db->query("delete from tb_tiket_temp1");

			if ($sql_tambah_keluarga) {
				$url = base_url() . 'index.php/Tiket_controller';
				echo "
			alert('Data berhasil ditambahkan');
			<script>  location.href=('$url');</script>";
			} else {
				echo "Gagal Tambah keluerga";
			}
		}
	}



	function hapus_tiket()
	{
		$kode_tiket = $this->input->post('kode_tiket');
		$this->tiket_model->hapus_tiket($kode_tiket);
		redirect('tiket_controller/');
	}
	function hapus_tiket_temp($kode_tiket)
	{
		// $kode_tiket=$this->input->post('kode_tiket');
		$this->tiket_model->hapus_tiket_temp($kode_tiket);
		redirect('tiket_controller/form_tiket');
	}


	function update_tiket()
	{
		$kode_tiket = $this->input->post('kode_tiket');
		$tanggal = $this->input->post('tanggal');
		$nama_penumpang = $this->input->post('nama_penumpang');
		$kategori = $this->input->post('kategori');
		$id_jadwal = $this->input->post('id_jadwal');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nohp = $this->input->post('nohp');

		$tanggal = $this->input->post('tanggal');

		$keterangan = $this->input->post('keterangan');
		$status = $this->input->post('status');
		// $harga_tiket=$this->input->post('harga_tiket');	
		// $kodesopir=$this->input->post('kodesopir');	
		/*$harga=$this->input->post('harga');*/
		$harga = $this->input->post('harga');


		$this->db->query("UPDATE tb_tiket set
		kode_tiket='$kode_tiket',
		tanggal='$tanggal',
	   nama_penumpang='$nama_penumpang',
	   kategori='$kategori',
	   id_jadwal='$id_jadwal',
	   keterangan='$keterangan',
	   alamat='$alamat',
	   jenis_kelamin='$jenis_kelamin',
	   nohp='$nohp',
	   harga='$harga',
   
	   status='$status'
		where kode_tiket='$kode_tiket'");
		redirect('tiket_controller/');
	}
}