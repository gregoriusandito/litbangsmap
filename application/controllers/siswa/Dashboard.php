<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index() {
		$this->auth->cek_auth();
		$this->auth->hak_akses_siswa();
		$this->load->model('admin/surat_model');
		$data=array('title'=>'Dashboard Perizinan Online SMA Presiden',
		'isi' =>'siswa/index_home'
		);
		$this->load->view('siswa/layout/wrapper',$data);
	}
 }
