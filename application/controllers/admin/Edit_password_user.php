<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class edit_password_user extends CI_Controller {
    
	public function __construct() {
		parent::__construct();
		$this->load->model('admin/user_model');
    }

    public function index() {
		$this->auth->cek_auth();
		$this->auth->hak_akses_admin();
		$query = $this->user_model->daftar_user();
		$data=array('title'=>'Manajemen User – Default Web Programming Division',
		'user' => $query,
		'isi' =>'admin/user/user_view'
			);
		$this->load->view('admin/layout/wrapper',$data);
			}
 
 	// Menampilkan halaman edit
	public function edit_pass($id = NULL) {
		$this->form_validation->set_rules('password2', 'password2', 'required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|matches[password2]');
		if ($this->form_validation->run() === FALSE) {
			$data['user'] = $this->user_model->detail_user();
			$data['detail'] = $this->user_model->detail_user($id);
			$data=array('title' => 'Mengubah user: '.$data['detail']['username'],
			'user' => $this->user_model->detail_user(),
			'detail' => $this->user_model->detail_user($id),
			'isi' =>'admin/user/edit_password_user'
			);
			$this->load->view('admin/layout/wrapper',$data);
	// Kalau tidak ada error user diupdate
		}else{
			$data = array(
			'password' => md5($this->input->post('password',TRUE)),
			'no_user' => $this->input->post('no_user',TRUE)
			);
			$this->user_model->edit_user($data);
			echo "<script>alert('Password diperbaharui');</script>";
			redirect(base_url().'admin/user/','refresh');
		}
	}
	
}