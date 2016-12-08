<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth {

  public function cek_auth() {
		$this->ci =& get_instance();
		$this->sesi  = $this->ci->session->userdata('isLogin');
  		if($this->sesi != TRUE){
  			echo "<script>alert('Anda harus login terlebih dahulu!');</script>";
  			$this->window_open();
  		}
	}

	public function hak_akses_admin() {
		$this->hak = $this->ci->session->userdata('level');
    	if($this->hak != 'admin'){
    		echo "<script>alert('Anda tidak berhak mengakses halaman ini!');</script>";
    		$this->window_back();
    	}
	}

	public function hak_akses_siswa() {
		$this->hak = $this->ci->session->userdata('level');
    	if($this->hak!='siswa'){
    		echo "<script>alert('Anda tidak berhak mengakses halaman ini!');</script>";
    		$this->window_back();
    	}
	}

	public function hak_akses_ortu() {
		$this->hak = $this->ci->session->userdata('level');
    	if($this->hak!='ortu'){
    		echo "<script>alert('Anda tidak berhak mengakses halaman ini!');</script>";
    		$this->window_back();
    	}
	}

	public function window_open() {
		redirect('admin/login','refresh');
	}

	public function window_back() {
		echo '<script>window.history.back();</script>';
	}

}
