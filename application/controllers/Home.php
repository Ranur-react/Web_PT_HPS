<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		
	}

	function index(){
		
	}
	


	function welcome(){
		
		$i['isi'] = $this->load->view('welcome_message');
		$this->load->view('home',$i);
	}

	

	function Utama(){
		$x['isi'] = $this->load->view('v_welcome','',true);
		$this->load->view('home',$x);
	}


}