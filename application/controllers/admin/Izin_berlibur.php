<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class izin_berlibur extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('admin/surat_model');
    $this->load->model('admin/user_model');
    $this->load->model('admin/konfig_pejabat/konfig_pejabat_model');
  }

  public function index() {
    $this->auth->cek_auth(); //ngambil auth dari library
    $this->auth->hak_akses_admin();
    $query = $this->surat_model->daftar_izin_berlibur();
    $data = array(
      'title'=>'Surat Izin Berlibur',
      'izin_berlibur' => $query,
      'isi' =>'admin/izin_berlibur',
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
    $this->form_validation->set_rules('hari_tgl_kembali', 'hari_tgl_kembali', 'trim|callback_field_check');
    $this->form_validation->set_rules('alasan', 'alasan', 'trim|callback_field_check');
    $this->form_validation->set_rules('status', 'status', 'required');
    if ($this->form_validation->run() === FALSE){
      $this->auth->cek_auth(); //ngambil auth dari library
      $data['izin_berlibur'] = $this->surat_model->detail_surat();
      $data['detail'] = $this->surat_model->detail_surat($id);
      $data=array('title' => 'Edit Surat Izin Berlibur: '.$data['detail']['nama'],
      'izin-berlibur' => $this->surat_model->detail_surat(),
      'detail' => $this->surat_model->detail_surat($id),
      'isi' =>'admin/izin_berlibur/edit_izin_berlibur',
      );
      $this->load->view('admin/layout/wrapper',$data);
      // Kalau tidak ada error izin-berlibur diupdate
    } else{
      $this->auth->cek_auth(); //ngambil auth dari library
      $data = array(
          'no' => $this->input->post('no',TRUE),
          'id_surat' => $this->input->post('id_surat',TRUE),
          'no_surat_2' => $this->input->post('no_surat_2',TRUE),
          'no_surat_3' => $this->input->post('no_surat_3',TRUE),
          'no_surat_4' => $this->input->post('no_surat_4',TRUE),
          'no_surat_5' => $this->input->post('no_surat_5',TRUE),
          'nama' => $this->input->post('nama',TRUE),
          'nama_ayah' => $this->input->post('nama_ayah',TRUE),
          'nama_ibu' => $this->input->post('nama_ibu',TRUE),
          'kelas' => $this->input->post('kelas',TRUE),
          'no_induk' => $this->input->post('no_induk',TRUE),
          'hari_tgl_izin' => $this->input->post('hari_tgl_izin',TRUE),
          'hari_tgl_kembali' => $this->input->post('hari_tgl_kembali',TRUE),
          'alasan' => $this->input->post('alasan',TRUE),
          'semester' => $this->input->post('semester',TRUE),
          'status' => $this->input->post('status',TRUE),
      );
      $this->surat_model->edit($data);
      redirect(base_url().'admin/izin_berlibur/');
    }
  }

  //Test Fungsi Print
  public function cetak($id){
    define('FPDF_FONTPATH',$this->config->item('fonts_path'));
    $this->surat_model->set_printed($id);
    $this->auth->cek_auth(); //ngambil auth dari library
    $data['izin-berlibur'] = $this->surat_model->detail_surat();
    $data['detail'] = $this->surat_model->detail_surat($id);
    $data=array('title' => 'Print '.$data['detail']['no_induk'],
    'izin_berlibur' => $this->surat_model->detail_surat(),
    'detail' => $this->surat_model->detail_surat($id),
    'wakasek_kesiswaan' => $this->konfig_pejabat_model->view_wakasek_kesiswaan(),
    'staf_bid_kesiswaan' => $this->konfig_pejabat_model->view_staf_bid_kesiswaan(),
    'kepala_asrama' => $this->konfig_pejabat_model->view_kepala_asrama(),
    'nip_wakasek_kesiswaan' => $this->konfig_pejabat_model->nip_wakasek_kesiswaan(),
    'nip_staf_bid_kesiswaan' => $this->konfig_pejabat_model->nip_staf_bid_kesiswaan(),
    'nip_kepala_asrama' => $this->konfig_pejabat_model->nip_kepala_asrama(),
    );
    // Load view "pdf_report" untuk menampilkan hasilnya
    $this->load->view('admin/izin_berlibur/izin_berlibur_print', $data);
  }

  // Surat Selesai
  public function finish($id) {
    $data['izin_berlibur'] = $this->surat_model->detail_surat();
    $data['detail'] = $this->surat_model->detail_surat($id);
    $data=array('izin_berlibur' => $this->surat_model->detail_surat(),
                'detail' => $this->surat_model->detail_surat($id),
    );
    $this->surat_model->set_finished($id);
    redirect(base_url().'admin/izin_berlibur/');
  }


  // Menghapus izin-berlibur
  public function delete($id) {
    $this->surat_model->delete($id);
    redirect(base_url().'admin/izin_berlibur/');
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
