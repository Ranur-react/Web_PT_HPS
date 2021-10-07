<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Loginmodel');
	}

	function index(){
		$this->load->view('v_login');
	}

	public function auth()
	{
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_guru=$this->Loginmodel->auth_admin($username,$password);
        if($cek_guru->num_rows() > 0)
				{ //jika login sebagai admin
				$data=$cek_guru->row_array();

        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');

		       

		            $this->session->set_userdata('ses_id',$data['username']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            $this->session->set_userdata('email',$data['email']);
		            $this->session->set_userdata('img',$data['image']);
		            $this->session->set_userdata('level',$data['level']);
		             // $this->session->set_userdata('useraktif',$data['useraktif']);
		           redirect('HOME/Utama');
		            
				 
				 }


				 elseif($data['level']=='2'){ //Akses Pimpinan
				 	$this->session->set_userdata('akses','2');
				 

		            
		            $this->session->set_userdata('ses_id',$data['username']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            $this->session->set_userdata('img',$data['image']);
		            $this->session->set_userdata('email',$data['email']);
		             $this->session->set_userdata('level',$data['level']);
		              $this->session->set_userdata('useraktif',$data['useraktif']);
		            redirect('HOME/Utama');
				 }

				

				}else{ //jika login sebagai alumni
					$cek_siswa=$this->Loginmodel->auth_penumpang($username,$password);
		if($cek_siswa->num_rows() > 0)
				 {
				 $data=$cek_siswa->row_array();
				 $this->session->set_userdata('masuk',TRUE);
					$this->session->set_userdata('akses','3');
			
					$this->session->set_userdata('kode_tiket',$data['kode_tiket']);
					$this->session->set_userdata('ses_id',$data['username']);
					$this->session->set_userdata('jenis_kelamin',$data['jenis_kelamin']);
					$this->session->set_userdata('ses_nama',$data['nama']);
					$this->session->set_userdata('telepon',$data['telepon']);
					// $this->session->set_userdata('username',$data['username']);
					$this->session->set_userdata('alamat',$data['alamat']);
					redirect('HOME/Utama');
				 
				}else{  // jika username dan password tidak ditemukan atau salah
				$url=base_url();
				echo $this->session->set_flashdata('msg','Username or Password Failed');
				redirect($url.'index.php/login');
				}
        

			}
    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url();
        redirect($url.'index.php/Login');
    }

}
