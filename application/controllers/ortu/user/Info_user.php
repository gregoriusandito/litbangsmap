<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class info_user extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('user/user_model');
  }

  public function index() {
    $this->auth->cek_auth(); //ngambil auth dari library
    $this->auth->hak_akses_ortu();        
    $query = $this->user_model->daftar_user();
    $data=array('title'=>'Manajemen User',
    'user' => $query,
    'isi' =>'/ortu/ortu/info_user'
    );
    $this->load->view('ortu/layout/wrapper',$data);
  }

}
