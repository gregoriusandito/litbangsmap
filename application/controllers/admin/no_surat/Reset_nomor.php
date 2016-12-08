<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class reset_nomor extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('admin/surat_model');
  }

	public function index() {
		$this->auth->cek_auth();
		$this->auth->hak_akses_admin();
		$data=array('title'=>'Reset Nomor Surat – Default Web Programming Division',
                'isi' =>'admin/no_surat/reset_nomor');
		$this->load->view('admin/layout/wrapper',$data);
	}

  public function reset() {
    echo "<script>alert('data berhasil diperbaharui');</script>";
    $this->surat_model->reset_nomor();
    redirect(base_url().'admin/dashboard/');
  }


}
