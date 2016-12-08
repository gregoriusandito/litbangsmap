<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class edit_kepala_asrama extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin/konfig_pejabat/konfig_pejabat_model');
		$this->load->model('admin/user_model');
	}

	public function index() {
		$this->auth->cek_auth();
		$this->auth->hak_akses_admin();
		// $list_dosen = $this->user_model->get_dropdown_dosen();
		$data=array('title'=>'Konfigurasi Nama Kepala Asrama',
		'isi' =>'admin/konfig_pejabat/edit_kepala_asrama',
		// 'list_dosen' => $list_dosen
			);
		$this->load->view('admin/layout/wrapper',$data);
	}

	public function edit() {
		$data = array('kepala-asrama' => $this->input->post('kepala-asrama',TRUE),
									'nip-kepala-asrama' => $this->input->post('nip-kepala-asrama',TRUE));
		$this->konfig_pejabat_model->simpan_kepala_asrama($data);
		// $this->konfig_pejabat_model->ambil-nip-kepala-asrama($data);
		redirect(base_url().'admin/konfig_pejabat/konfig_pejabat');
	}

}
