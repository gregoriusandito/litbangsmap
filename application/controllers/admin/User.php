<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class User extends CI_Controller {

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

    public function user_ortu() {
      $this->auth->cek_auth();
      $this->auth->hak_akses_admin();
      $level = 'ortu';
      $query = $this->user_model->daftar_pengguna($level);
      $data=array('title'=>'Manajemen User – Default Web Programming Division',
      'user' => $query,
      'isi' =>'admin/user/user_ortu_view'
      	);
      $this->load->view('admin/layout/wrapper',$data);
    }

    public function user_siswa() {
      $this->auth->cek_auth();
      $this->auth->hak_akses_admin();
      $level = 'siswa';
      $query = $this->user_model->daftar_pengguna($level);
      $data=array('title'=>'Manajemen User – Default Web Programming Division',
      'user' => $query,
      'isi' =>'admin/user/user_siswa_view'
      	);
      $this->load->view('admin/layout/wrapper',$data);
    }

    public function tambah() {
    	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
    	$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
      $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'trim|required');
      $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'trim|required');
    	$this->form_validation->set_rules('email', 'email', 'trim|required');
      $this->form_validation->set_rules('no_induk', 'no_induk', 'trim|required');
      $this->form_validation->set_rules('username', 'username', 'trim|required');
    	$this->form_validation->set_rules('password', 'password', 'trim|required');
    	$this->form_validation->set_rules('level', 'level', 'trim|required');
    	if ($this->form_validation->run() === FALSE) {
    	$data=array('title'=>'Menambah User – SMAP',
    	'isi' =>'admin/user/tambah_user'
    		);
    	$this->load->view('admin/layout/wrapper',$data);
    	} else {
    	$data = array(
    	'nama' => $this->input->post('nama',TRUE),
    	'kelas' => $this->input->post('kelas',TRUE),
      'nama_ayah' => $this->input->post('nama_ayah',TRUE),
      'nama_ibu' => $this->input->post('nama_ibu',TRUE),
      'no_induk' => $this->input->post('no_induk',TRUE),
    	'email' => $this->input->post('email',TRUE),
    	'username' => $this->input->post('username',TRUE),
    	'password' => md5($this->input->post('password',TRUE)),
    	'level' => $this->input->post('level',TRUE)
    		);
    	$this->user_model->tambah($data);
    	redirect(base_url().'admin/user/');
    	}
    }

    public function edit($id = NULL) {
    	$this->form_validation->set_rules('nama', 'nama', 'required');
    	$this->form_validation->set_rules('kelas', 'kelas', 'required');
      $this->form_validation->set_rules('no_induk', 'no_induk', 'trim|required');
      $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'trim|required');
      $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'trim|required');
    	$this->form_validation->set_rules('email', 'email', 'required');
    	$this->form_validation->set_rules('username', 'username', 'required');
    	$this->form_validation->set_rules('level', 'level', 'required');
    	if ($this->form_validation->run() === FALSE) {
      	$data['user'] = $this->user_model->detail_user();
      	$data['detail'] = $this->user_model->detail_user($id);
      	$data=array('title' => 'Mengubah user: '.$data['detail']['username'],
      	'user' => $this->user_model->detail_user(),
      	'detail' => $this->user_model->detail_user($id),
      	'isi' =>'admin/user/edit_user'
      	);
      	$this->load->view('admin/layout/wrapper',$data);
    	// Kalau tidak ada error user diupdate
    	} else {
      	$data = array(
      	'no_user' => $this->input->post('no_user',TRUE),
      	'nama' => $this->input->post('nama',TRUE),
      	'kelas' => $this->input->post('kelas',TRUE),
        'nama_ayah' => $this->input->post('nama_ayah',TRUE),
        'nama_ibu' => $this->input->post('nama_ibu',TRUE),
        'no_induk' => $this->input->post('no_induk',TRUE),
      	'email' => $this->input->post('email',TRUE),
      	'username' => $this->input->post('username',TRUE),
      	'level' => $this->input->post('level',TRUE)
      	);
      	$this->user_model->edit_user($data);
      	echo "<script>alert('Data berhasil diperbaharui');</script>";
      	redirect(base_url().'admin/user/','refresh');
    	}
  	}

  	// Menghapus user
  	public function delete($id) {
  	$this->user_model->delete_user($id);
  	redirect(base_url().'admin/user/');
  	}

}
