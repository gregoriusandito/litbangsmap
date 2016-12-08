<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class edit_user extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user/user_model');
  }

	public function index() {
		$this->auth->cek_auth(); //ngambil auth dari library
		$data=array('title'=>'Informasi Pengguna',
		'isi' =>'siswa/siswa/edit_user'
		);
		$this->load->view('siswa/layout/wrapper',$data);
	}

 	// Menampilkan halaman edit
	public function edit($id = NULL) {
		$this->form_validation->set_rules('password2', 'password2', 'required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|matches[password2]');
		if ($this->form_validation->run() === FALSE) {
			$data['user'] = $this->user_model->detail_user();
			$data['detail'] = $this->user_model->detail_user($id);
			$data=array('title' => 'Mengubah user: '.$data['detail']['username'],
			'user' => $this->user_model->detail_user(),
			'detail' => $this->user_model->detail_user($id),
			'isi' =>'/siswa/siswa/edit_user'
			);
			$this->load->view('siswa/layout/wrapper',$data);
	// Kalau tidak ada error user diupdate
		}else{
			$data = array(
			'password' => md5($this->input->post('password',TRUE)),
			'no_user' => $this->input->post('no_user',TRUE)
			);
			$this->user_model->edit_user($data);
			echo "<script>alert('data berhasil diperbaharui');</script>";
			redirect(base_url().'siswa/user/info_user/','refresh');
		}
	}

}
