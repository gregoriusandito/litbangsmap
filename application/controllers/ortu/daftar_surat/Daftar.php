<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class daftar extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->model('admin/surat_model');
    }

    public function izin_berlibur() {
		$this->auth->cek_auth(); //ngambil auth dari library
		$query=$this->surat_model->daftar_izin_berlibur();
		$data = array(
			'title'=>'Daftar Surat Izin Berlibur',
			'izin_berlibur' => $query,
			'isi' =>'ortu/daftar_surat/izin_berlibur'
		);
		$this->load->view('ortu/layout/wrapper',$data);
	}
}
?>
