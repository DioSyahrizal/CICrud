<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	//	$this->load->model('pegawai_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->load->view('login_view');		
	}

	public function cekLogin(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('login_view');
		}else{
			redirect('pegawai','refresh');
		}
	}
	public function cekDB($password){
		$this->load->model('user');
		$username = $this->input->post('username');
		$result = $this->user->login($username,$password);
		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array (
					'id'=>$row->id,
					'username'=>$row->username
				);
				$this->session->set_userdata('logged in', $sess_array );
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDB',"Login gagal Username Password tak valid");
			return false;
		}
	}

	public function daftar(){
		$this->load->view('daftar');
	}

	public function logout(){
		$this->session->unset_userdata('logged in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}


	public function tambahUser(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->view('daftar');
	}

	public function Create(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
	
		$this->load->model('user');
		$this->user->insertUser();
		$this->load->view('daftar_sukses');
			
		}

	}



/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
 ?>