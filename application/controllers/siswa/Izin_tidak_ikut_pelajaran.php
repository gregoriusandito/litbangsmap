<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class izin_tidak_ikut_pelajaran extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('admin/surat_model');
		$this->load->model('admin/konfig_pejabat/konfig_pejabat_model');
  }

	public function index() {
		$this->auth->cek_auth();
		$this->auth->hak_akses_siswa();
		$data=array('title'=>'Surat Izin Pesiar','isi' =>'siswa/izin_tidak_ikut_pelajaran');
		$this->load->view('siswa/layout/wrapper',$data);
	}

	public function tambah() {
    $this->auth->cek_auth();
    $this->auth->hak_akses_siswa();
		$this->form_validation->set_rules('hari_tgl_izin', 'hari_tgl_izin', 'trim|callback_field_check');
		$this->form_validation->set_rules('jam_1', 'jam_1', 'trim|callback_field_check');
		$this->form_validation->set_rules('jam_2', 'jam_2', 'trim|callback_field_check');
		$this->form_validation->set_rules('alasan', 'alasan', 'trim|callback_field_check');
		if ($this->form_validation->run() === FALSE) {
			$data = array(
				'title'=>'Surat Izin Tidak Mengikuti Pelajaran – Default Web Programming Division',
				'isi' =>'siswa/izin_tidak_ikut_pelajaran'
			);
			$this->load->view('siswa/layout/wrapper',$data);
		}
		else{
			$data = array(
				'no' => $this->input->post('no',TRUE),
        'no_user' => $this->input->post('no_user',TRUE),
				'no_surat_1' => $this->surat_model->no_surat(),
				'nama' => $this->input->post('nama',TRUE),
        'no_induk' => $this->input->post('no_induk',TRUE),
				'kelas' => $this->input->post('kelas',TRUE),
        'nama_ayah' => $this->input->post('nama_ayah',TRUE),
        'nama_ibu' => $this->input->post('nama_ibu',TRUE),
				'hari_tgl_izin' => $this->input->post('hari_tgl_izin',TRUE),
				'jam_1' => $this->input->post('jam_1',TRUE),
				'jam_2' => $this->input->post('jam_2',TRUE),
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
