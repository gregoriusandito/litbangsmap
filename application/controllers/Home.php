<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		if ($this->session->userdata('isLogin') == FALSE && $this->session->userdata('level') == "") {
			$data=array('title'=>'Default Web Programming Division - Universitas Negeri Jakarta',
			'isi' =>'admin/login_view');
			$this->load->view('admin/login_view',$data);
		} else if ($this->session->userdata('isLogin') == TRUE && $this->session->userdata('level') == "siswa") {
			redirect('siswa/dashboard');
		} else if ($this->session->userdata('isLogin') == TRUE && $this->session->userdata('level') == "ortu") {
			redirect('ortu/dashboard');
		} else if ($this->session->userdata('isLogin') == TRUE && $this->session->userdata('level') == "admin") {
			redirect('admin/dashboard');
		}
	}

}