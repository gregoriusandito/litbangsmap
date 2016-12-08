<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
      parent::__construct();
      $this->load->model('admin/model_user'); //memasukkan file model ke dalam controller
  }

  function index(){
        $session = $this->session->userdata('isLogin'); //mengabil dari session apakah sudah login atau belum
        if($session == FALSE) {//jika session false maka akan menampilkan halaman login
            $data=array('title'=>'Login Administrator',
						'isi' =>'admin/login_view');
						$this->load->view('admin/login_view',$data);
        }
  }

  function cek_login() {
      $username = $this->input->post("username",TRUE);
      $password = md5($this->input->post("password",TRUE));

      $cek = $this->model_user->cek_user($username,$password); //melakukan persamaan data dengan database
			if(count($cek) == 1){ //cek data berdasarkan username & pass
				foreach ($cek as $cek) {
				$level = $cek['level']; //mengambil data(level/hak akses) dari database
				$nama = $cek['nama'];
				$nama_ayah = $cek['nama_ayah'];
				$nama_ibu = $cek['nama_ibu'];
				$no_induk = $cek['no_induk'];
				$kelas = $cek['kelas'];
				$no_user = $cek['no_user'];
				}
        $this->session->set_userdata(array(
            'isLogin'   => TRUE, //set data telah login
            'username'  => $username, //set session username
            'level'     => $level, //set session hak akses
						'nama'		=> $nama, ///set session nama
						'kelas'		=> $kelas,
						'email'		=> $email,
						'no_user'	=> $no_user,
						'no_induk'	=> $no_induk,
						'nama_ayah' => $nama_ayah,
						'nama_ibu' => $nama_ibu
		    ));
	      if ($this->session->userdata('level')=='admin') {
					redirect('admin/dashboard');
				}
				elseif ($this->session->userdata('level')=='ortu') {
					redirect('ortu/dashboard');
				}
				elseif ($this->session->userdata('level')=='siswa') {
					redirect('siswa/dashboard');
	      }
			} else { //jika data tidak ada yng sama dengan database
        echo "<script>alert('Gagal Login! Cek Username dan Password Anda')</script>";
				redirect('/admin/login','refresh');
  	}
	}

	function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->sess_destroy();
		redirect('admin/login');
	}

}

?>
