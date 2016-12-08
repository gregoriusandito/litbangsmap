<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class daftar extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->model('admin/surat_model');
    }

    public function izin_pesiar() {
  		$this->auth->cek_auth(); //ngambil auth dari library
  		$query = $this->surat_model->daftar_izin_pesiar_user();
  		$data = array(
  			'title'=>'Daftar Surat Izin Pesiar',
  			'izin_pesiar' => $query,
  			'isi' =>'siswa/daftar_surat/izin_pesiar'
  		);
  		$this->load->view('siswa/layout/wrapper',$data);
	  }

    public function izin_meninggalkan_sekolah() {
  		$this->auth->cek_auth(); //ngambil auth dari library
  		$query = $this->surat_model->daftar_izin_meninggalkan_sekolah();
  		$data = array(
  			'title'=>'Daftar Surat Izin Meninggalkan Sekolah',
  			'izin_meninggalkan_sekolah' => $query,
  			'isi' =>'siswa/daftar_surat/izin_meninggalkan_sekolah'
  		);
  		$this->load->view('siswa/layout/wrapper',$data);
	  }

    public function izin_kembali_ke_asrama() {
  		$this->auth->cek_auth(); //ngambil auth dari library
  		$query = $this->surat_model->daftar_izin_kembali_ke_asrama();
  		$data = array(
  			'title'=>'Daftar Surat Izin Kembali ke Asrama',
  			'izin_kembali_ke_asrama' => $query,
  			'isi' =>'siswa/daftar_surat/izin_kembali_ke_asrama'
  		);
  		$this->load->view('siswa/layout/wrapper',$data);
	  }

    public function izin_tidak_ikut_pelajaran() {
  		$this->auth->cek_auth(); //ngambil auth dari library
  		$query = $this->surat_model->daftar_izin_tidak_ikut_pelajaran();
  		$data = array(
  			'title'=>'Daftar Surat Izin Tidak Mengikuti Pelajaran',
  			'izin_tidak_ikut_pelajaran' => $query,
  			'isi' =>'siswa/daftar_surat/izin_tidak_ikut_pelajaran'
  		);
  		$this->load->view('siswa/layout/wrapper',$data);
	  }

    public function izin_berlibur() {
  		$this->auth->cek_auth(); //ngambil auth dari library
  		$query = $this->surat_model->daftar_izin_berlibur_siswa();
  		$data = array(
  			'title'=>'Daftar Surat Izin Berlibur',
  			'izin_berlibur' => $query,
  			'isi' =>'siswa/daftar_surat/izin_berlibur'
  		);
  		$this->load->view('siswa/layout/wrapper',$data);
	  }


}
?>
