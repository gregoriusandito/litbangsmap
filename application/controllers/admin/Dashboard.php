<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('admin/surat_model');
    }

	public function index() {
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->auth->hak_akses_admin();
    $ib = $this->surat_model->hitung_surat_baru(1);
    $ip =  $this->surat_model->hitung_surat_baru(2);
    $ims = $this->surat_model->hitung_surat_baru(3);
    $ika =  $this->surat_model->hitung_surat_baru(4);
    $itip = $this->surat_model->hitung_surat_baru(5);
    $data=array('title'=>'Halaman Administrator – Default Web Programming Division',
                'isi' =>'admin/dashboard/dashboard_view',
                'ib' => $ib,
                'ip' => $ip,
                'ims' => $ims,
                'ika' => $ika,
                'itip' => $itip,);
    $this->load->view('admin/layout/wrapper',$data);

  }


}
