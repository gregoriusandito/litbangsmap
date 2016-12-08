<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class konfig_pejabat extends CI_Controller {

    public function __construct() {
    parent::__construct();
    $this->load->model('admin/konfig_pejabat/konfig_pejabat_model');
   }

	public function index() {
		$this->auth->cek_auth();
		$this->auth->hak_akses_admin();
		$data=array('title'=>'Konfigurasi Pejabat – Default Web Programming Division','isi' =>'admin/konfig_pejabat/konfig_pejabat');
		$this->load->view('admin/layout/wrapper',$data);
	}

}