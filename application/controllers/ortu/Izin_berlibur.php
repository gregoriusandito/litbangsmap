<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class izin_berlibur extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('admin/surat_model');
		$this->load->model('admin/konfig_pejabat/konfig_pejabat_model');
  }

	public function index() {
		$this->auth->cek_auth();
		$this->auth->hak_akses_ortu();
		$data=array('title'=>'Surat Izin Pesiar',
                'isi' =>'ortu/izin_berlibur');
		$this->load->view('ortu/layout/wrapper',$data);
	}

	public function tambah() {
    $this->auth->cek_auth();
		$this->auth->hak_akses_ortu();
		$this->form_validation->set_rules('hari_tgl_izin', 'hari_tgl_izin', 'trim|callback_field_check');
		$this->form_validation->set_rules('hari_tgl_kembali', 'hari_tgl_kembali', 'trim|callback_field_check');
		$this->form_validation->set_rules('alasan', 'alasan', 'trim|callback_field_check');
		if ($this->form_validation->run() === FALSE) {
			$data = array(
				'title'=>'Surat Izin Pesiar – Default Web Programming Division',
				'isi' =>'ortu/izin_berlibur'
			);
			$this->load->view('ortu/layout/wrapper',$data);
		}
		else{
			$data = array(
				'no' => $this->input->post('no',TRUE),
        'no_user' => $this->input->post('no_user',TRUE),
				'no_surat_1' => $this->surat_model->no_surat(),
				'nama' => $this->input->post('nama',TRUE),
				'kelas' => $this->input->post('kelas',TRUE),
        'nama_ayah' => $this->input->post('nama_ayah',TRUE),
        'nama_ibu' => $this->input->post('nama_ibu',TRUE),
        'no_induk' => $this->input->post('no_induk',TRUE),
				'hari_tgl_izin' => $this->input->post('hari_tgl_izin',TRUE),
				'hari_tgl_kembali' => $this->input->post('hari_tgl_kembali',TRUE),
				'alasan' => $this->input->post('alasan',TRUE),
				'semester' => $this->input->post('semester',TRUE),
				'status' => $this->input->post('status',TRUE),
				'id_surat' => $this->input->post('id_surat',TRUE),
				'tgl_buat_surat' => $this->input->post('tgl_buat_surat',TRUE)
				);
			$this->surat_model->tambah($data);
			echo "<script>alert('Terima kasih! Surat akan segera diproses');window.location.href='index';</script>";
		}

    }

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
