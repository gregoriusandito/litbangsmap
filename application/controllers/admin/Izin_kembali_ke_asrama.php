<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class izin_kembali_ke_asrama extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin/surat_model');
		$this->load->model('admin/user_model');
		$this->load->model('admin/konfig_pejabat/konfig_pejabat_model');
	}

	public function index() {
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->auth->hak_akses_admin();
		$query = $this->surat_model->daftar_izin_kembali_ke_asrama();
		$data = array(
			'title'=>'Surat Izin Kembali ke Asrama',
			'izin_kembali_ke_asrama' => $query,
			'isi' =>'admin/izin_kembali_ke_asrama',
			);
		$this->load->view('admin/layout/wrapper',$data);
	}


	// Menampilkan halaman edit
	public function edit($id) {
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->form_validation->set_rules('no_surat_2', 'no_surat_2', 'trim|callback_field_check');
		$this->form_validation->set_rules('no_surat_3', 'no_surat_3', 'trim|callback_field_check');
		$this->form_validation->set_rules('no_surat_4', 'no_surat_4', 'trim|callback_field_check');
		$this->form_validation->set_rules('no_surat_5', 'no_surat_5', 'trim|callback_field_check');
		$this->form_validation->set_rules('nama', 'nama', 'trim|callback_field_check');
		$this->form_validation->set_rules('kelas', 'kelas', 'trim|callback_field_check');
		$this->form_validation->set_rules('hari_tgl_izin', 'hari_tgl_izin', 'trim|callback_field_check');
		$this->form_validation->set_rules('jam_1', 'jam_1', 'trim|callback_field_check');
		$this->form_validation->set_rules('alasan', 'alasan', 'trim|callback_field_check');
		$this->form_validation->set_rules('status', 'status', 'required');
		if ($this->form_validation->run() === FALSE){
			$this->auth->cek_auth(); //ngambil auth dari library
			$data['izin_kembali_ke_asrama'] = $this->surat_model->detail_surat();
			$data['detail'] = $this->surat_model->detail_surat($id);
			$data=array('title' => 'Edit Surat Izin Kembali ke Asrama: '.$data['detail']['nama'],
			'izin_kembali_ke_asrama' => $this->surat_model->detail_surat(),
			'detail' => $this->surat_model->detail_surat($id),
			'isi' =>'admin/izin_kembali_ke_asrama/edit_izin_kembali_ke_asrama',
			);
			// $data['list_dosen'] = $this->user_model->get_dropdown_dosen();
			$this->load->view('admin/layout/wrapper',$data);
			// Kalau tidak ada error izin_kembali_ke_asrama diupdate
		}else{
			$this->auth->cek_auth(); //ngambil auth dari library
			$data = array(
				'no' => $this->input->post('no',TRUE),
				'id_surat' => $this->input->post('id_surat',TRUE),
				'no_surat_2' => $this->input->post('no_surat_2',TRUE),
				'no_surat_3' => $this->input->post('no_surat_3',TRUE),
				'no_surat_4' => $this->input->post('no_surat_4',TRUE),
				'no_surat_5' => $this->input->post('no_surat_5',TRUE),
				'nama' => $this->input->post('nama',TRUE),
				'kelas' => $this->input->post('kelas',TRUE),
				'no_induk' => $this->input->post('no_induk',TRUE),
				'hari_tgl_izin' => $this->input->post('hari_tgl_izin',TRUE),
				'jam_1' => $this->input->post('jam_1',TRUE),
				'alasan' => $this->input->post('alasan',TRUE),
				'semester' => $this->input->post('semester',TRUE),
				'status' => $this->input->post('status',TRUE),
			);
			$this->surat_model->edit($data);
			redirect(base_url().'admin/izin_kembali_ke_asrama/');
		}
	}

	//Test Fungsi Print
	public function cetak($id){
	define('FPDF_FONTPATH',$this->config->item('fonts_path'));
	$this->surat_model->set_printed($id);
	$this->auth->cek_auth(); //ngambil auth dari library
	$data['izin_kembali_ke_asrama'] = $this->surat_model->detail_surat();
	$data['detail'] = $this->surat_model->detail_surat($id);
	$data=array('title' => 'Print '.$data['detail']['no_induk'],
	'izin_kembali_ke_asrama' => $this->surat_model->detail_surat(),
	'detail' => $this->surat_model->detail_surat($id),
	'wakasek_kesiswaan' => $this->konfig_pejabat_model->view_wakasek_kesiswaan(),
	'staf_bid_kesiswaan' => $this->konfig_pejabat_model->view_staf_bid_kesiswaan(),
	'kepala_asrama' => $this->konfig_pejabat_model->view_kepala_asrama(),
	'nip_wakasek_kesiswaan' => $this->konfig_pejabat_model->nip_wakasek_kesiswaan(),
	'nip_staf_bid_kesiswaan' => $this->konfig_pejabat_model->nip_staf_bid_kesiswaan(),
	'nip_kepala_asrama' => $this->konfig_pejabat_model->nip_kepala_asrama(),
	);
	// Load view "pdf_report" untuk menampilkan hasilnya
	$this->load->view('admin/izin_kembali_ke_asrama/izin_kembali_ke_asrama_print', $data);
	}

	// Surat Selesai
	public function finish($id) {
		$data['izin_kembali_ke_asrama'] = $this->surat_model->detail_surat();
		$data['detail'] = $this->surat_model->detail_surat($id);
		$data=array('izin_kembali_ke_asrama' => $this->surat_model->detail_surat(),
		'detail' => $this->surat_model->detail_surat($id),
		);
		$this->surat_model->set_finished($id);
		redirect(base_url().'admin/izin_kembali_ke_asrama/');
	}

	// Menghapus data
	public function delete($id) {
		$this->surat_model->delete($id);
		redirect(base_url().'admin/izin_kembali_ke_asrama/');
	}

	//pengecekan data
	public function field_check($str) {
		if ($str == '') {
			$this->form_validation->set_message('field_check', 'Kolom tidak boleh kosong');
			return FALSE;
		} else {
			return TRUE;
		}
	}



}
?>
