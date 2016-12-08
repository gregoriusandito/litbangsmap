	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class edit_wakasek_kesiswaan extends CI_Controller {

    public function __construct() {
	    parent::__construct();
	    $this->load->model('admin/konfig_pejabat/konfig_pejabat_model');
			$this->load->model('admin/user_model');
    }

    public function index() {
			$this->auth->cek_auth();
			$this->auth->hak_akses_admin();
			// $list_dosen = $this->user_model->get_dropdown_dosen();
			$data=array('title'=>'Konfigurasi Nama Wakil Kepala Sekolah Bidang Kesiswaan',
			'isi' =>'admin/konfig_pejabat/edit_wakasek_kesiswaan',
			// 'list_dosen' => $list_dosen
				);
			$this->load->view('admin/layout/wrapper',$data);
		}

		public function edit() {
			$data = array('wakasek-kesiswaan' => $this->input->post('wakasek-kesiswaan',TRUE),
										'nip-wakasek-kesiswaan' => $this->input->post('nip-wakasek-kesiswaan',TRUE));
			$this->konfig_pejabat_model->simpan_wakasek_kesiswaan($data);
			// $this->konfig_pejabat_model->ambil-nip-wakasek-kesiswaan($data);
			redirect(base_url().'admin/konfig_pejabat/konfig_pejabat');
		}

	}
