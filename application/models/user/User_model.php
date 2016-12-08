<?php
class User_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

	// Menampilkan data user
	public function daftar_user() {
		$data['username'] = $this->session->userdata('username');
		$query = $this->db->query("SELECT * FROM user WHERE user.username ='" .$data['username']. "'");
		return $query->result_array();
	}

	// Detail User
	public function detail_user($id = FALSE) {
		if ($id === FALSE) {
  		$query = $this->db->get('user');
  		return $query->result_array();
		}
		$query = $this->db->get_where('user' , array('no_user' => $id));
		return $query->row_array();
	}

	// Update User
	public function edit_user($data) {
		$this->db->where('no_user', $data['no_user']);
		return $this->db->update('user', $data);
	}

}
