<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('modeluser');
 		$this->load->model('modelAdmin');
 		$this->load->model('Loginmodel');
 	}
function index(){
  if($this->session->userdata('masuk')==true){
		$data = $this->modeluser->data();    
		$d['user'] = $data;    
		$x['isi'] = $this->load->view('datauser',$d,true);
		$this->load->view('home',$x);
    }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }

}


function formubahpassword(){
  $x['isi'] = $this->load->view('form_gantiPassword','',true);
  $this->load->view('home',$x);
}


function formubahpassword_USER(){
  $x['isi'] = $this->load->view('formubahpassword_USER','',true);
  $this->load->view('home',$x);
}

function updatepassword()
{
  if($this->session->userdata('masuk')==true)
  {
    if(!empty($_POST['ps']) && !empty($_POST['pb']) && !empty($_POST['upb']))
    {
      $ps=$_POST['ps'];
      $pb=$_POST['pb'];
      $upb=$_POST['upb'];
      if(strlen($pb)>=6)
      {
        if($pb==$upb)
        {
          $u=$this->session->userdata('ses_id');

          var_dump($u);
          // exit;
          
              $cek_guru=$this->Loginmodel->auth_admin($u,$ps);
              if($cek_guru->num_rows() > 0)
          {
            $this->modeluser->resetpass($u,$pb);
            $url=base_url().'index.php/Login/logout';
            echo "<script>alert ('Password Berhasil Diganti, silahkan login kembali');location.href=('$url');</script>";
          }
          else
          {
            $url=base_url().'index.php/user/formubahpassword';
            echo "<script>alert ('Password Anda Salah');location.href=('$url');</script>";
          }
        }
        else
        {
          $url=base_url().'index.php/user/formubahpassword';
          echo "<script>alert ('Password Baru Tidak Sama');location.href=('$url');</script>";
        }
      }
      else
      {
        $url=base_url().'index.php/user/formubahpassword';
        echo "<script>alert ('Password Baru Minimal 6 karakter');location.href=('$url');</script>";
      }
    }
    else
    {
      $url=base_url().'index.php/user/formubahpassword';
      echo "<script>alert ('Lengkapi Isian');location.href=('$url');</script>";
    }
  }
  else
  {
    $url=base_url();
    echo "<script>alert ('Anda Belum Login');location.href=('$url');</script>";
  }
}


function updatepassword1() 
{
  if($this->session->userdata('masuk')==true)
  {
    if(!empty($_POST['ps']) && !empty($_POST['pb']) && !empty($_POST['upb']))
    {
      $ps=$_POST['ps'];
      $pb=$_POST['pb'];
      $upb=$_POST['upb'];
      if(strlen($pb)>=6)
      {
        if($pb==$upb)
        {
          $u=$this->session->userdata('ses_id');


          var_dump($u);
      
          
              $cek_guru=$this->Loginmodel->auth_penumpang($u,$ps);
              if($cek_guru->num_rows() > 0)
          {
            $this->modeluser->resetpassword($u,$pb);
            $url=base_url().'index.php/Login/logout';
            echo "<script>alert ('Password Berhasil Diganti,silahkan login kembali');location.href=('$url');</script>";
          }
          else
          {
            $url=base_url().'index.php/user/formubahpassword_USER';
            echo "<script>alert ('Password Anda Salah');location.href=('$url');</script>";
          }
        }
        else
        {
          $url=base_url().'index.php/user/formubahpassword_USER';
          echo "<script>alert ('Password Baru Tidak Sama');location.href=('$url');</script>";
        }
      }
      else
      {
        $url=base_url().'index.php/user/formubahpassword_USER';
        echo "<script>alert ('Password Baru Minimal 6 karakter');location.href=('$url');</script>";
      }
    }
    else
    {
      $url=base_url().'index.php/user/formubahpassword_USER';
      echo "<script>alert ('Lengkapi Isian');location.href=('$url');</script>";
    }
  }
  else
  {
    $url=base_url();
    echo "<script>alert ('Anda Belum Login');location.href=('$url');</script>";
  }
}
	
 
  function update()
    {
      if($this->session->userdata('masuk')==true){
    	$id     = $this->input->post('id');
    	$username   = $this->input->post('username');
        $nama   = $this->input->post('nama');
        $email   = $this->input->post('email');
        $level  = $this->input->post('level');
       
        $this->db->query("UPDATE tb_user set nama='$nama',email='$email',username='$username', level='$level' where id='$id'");
        redirect('user');

        }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
    }
     function random($panjang)
    {
       $karakter = '1234567890abcdefghijklmnopqrstuvwxyz';
       $string   = '';
       for($i = 0; $i < $panjang; $i++) {
       $pos     = rand(0, strlen($karakter)-1);
       $string .= $karakter{$pos};
       }
        return $string;
    }
     public function reset()
	{
		$id   = $this->uri->segment(3);
		$pass = $this->random(9);
		$h 	  = $this->db->query("UPDATE tb_user SET pass=md5('$pass') WHERE id='$id'");
		if($h==true)
		{
			$this->session->set_flashdata("pesan","<div class='panel-body'><div div class='alert alert-info'><strong>Password baru anda adalah : <b>$pass</b></strong></div></div>");
	 		redirect('user');
		}
	}
 
function foto()
    {   if($this->session->userdata('masuk')==true){
        $id 	= $this->input->post('id');
					$query 	= $this->db->get_where('tb_user',array('id'=>$id))->row_array();
	    			unlink("./images/".$query['image']);

        $config['upload_path']   = './images/';
        $config['file_name']     = $_FILES['images']['name'];
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['overwrite']     = true;
        $config['max_size']      = 0;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
          // $this->db->query("UPDATE tbl_akun set nama='$nama' where user_id='$id'");
        } else {
            $media     = $this->upload->data();
            $link      = '' . $media['file_name'];
            $this->db->query("UPDATE tb_user set image='$link' where id='$id'");
        }
        redirect('user');

         }else{
    echo'ANDA HARUS LOGIN TERLEBIH DAHULU!!';
  }
  
    }



	public function hapus($id)
	{
		$row = $this->modeluser->hapus_admin($id);

		if ($row) {

				// unlink() use for delete files like image.
				unlink('images/'.$row->image);

				$this->modeluser->delete($id);
				$this->session->set_flashdata("pesan", 
				"<div class='alert alert-info'><button type='button' class='close' data-dismiss='alert'>
					<i class='icon-remove'></i></button>Data berhasil dihapus
				</div>");
				redirect(site_url('user'));
		} else {
				$this->session->set_flashdata('message', "<div style='color:#dd4b39;'>Data tidak ditemukan.</div>");
				redirect(site_url('user'));
		}
	}

	function simpan()
    {
       // $id     = $this->input->post('id');
        $email   = $this->input->post('email');
        $nama   = $this->input->post('nama');
        $pass   = $this->input->post('pass');
        $level  = $this->input->post('level');
        $username  = $this->input->post('username');
        


        //$pass1 = password_hash($pass, PASSWORD_DEFAULT);
        $fileName = "file_".time();

        $config['upload_path']   = './images/';
        $config['file_name']     = $_FILES['image']['name'];
        $config['encrypt_name'] = TRUE;
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 0;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
             $this->db->simple_query("insert into tb_user(nama,email,username,pass,image,level) values('$nama','$email','$username',md5('$pass'),'$link','$level')");
				$this->session->set_flashdata("pesan", "<div class='alert alert-block alert-success'>
					<button type='button' class='close' data-dismiss=alert'>
					<i class='ace-icon fa fa-times'></i>
					</button>
					Data berhasil di simpan
					<br />
					</div>");
	 			redirect('user');
        } else {
            $media     = $this->upload->data();
            $link      = '' . $media['file_name'];
           // $this->db->query("INSERT INTO tbl_akun VALUES('$id','$user',MD5('$pass'),'$nama','$level','$link')");
          $this->db->simple_query("insert into tb_user(nama,email,username,pass,image,level) values('$nama','$email','$username',md5('$pass'),'$link','$level')");
		$this->session->set_flashdata("pesan", "<div class='alert alert-block alert-success'>
					<button type='button' class='close' data-dismiss=alert'>
					<i class='ace-icon fa fa-times'></i>
					</button>
					Data berhasil di simpan
					<br />
					</div>");
	 			redirect('user');
        }
       
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */