<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index() {
		$this->auth->cek_auth();
		$this->auth->hak_akses_ortu();
		$this->load->model('admin/surat_model');
		$data=array('title'=>'Dashboard Perizinan Online SMA Presiden',
		'isi' =>'ortu/index_home'
		);
		$this->load->view('ortu/layout/wrapper',$data);
	}
 }
