<?php
class User_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

	// Menampilkan data user
	public function daftar_user() {
		$query = $this->db->query('SELECT * FROM user ORDER BY username ASC');
		return $query->result_array();
	}

  public function daftar_pengguna($level) {
		$query = $this->db->query("SELECT * FROM user WHERE user.level='$level' ORDER BY username ASC");
		return $query->result_array();
	}

	// Model untuk menambah user
	public function tambah($data) {
	    return $this->db->insert('user', $data);
	}

	// Detail User
	public function detail_user($id = FALSE) {
		if ($id === FALSE) {
  		$query = $this->db->get('user');
  		return $query->result_array();
		}
		$query = $this->db->get_where('user', array('no_user' => $id));
		return $query->row_array();
	}

	// Update User
	public function edit_user($data) {
		$this->db->where('no_user', $data['no_user']);
		return $this->db->update('user', $data);
	}

	// Hapus User
	public function delete_user($id) {
		$this->db->where('no_user',$id);
		return $this->db->delete('user');
	}

	// Data dropdown dosen
	// public function get_dropdown_dosen(){
	// 	$this->db->from('dosen');
	// 	$this->db->order_by('Nama');
	// 	$result = $this->db->get();
	// 	$return = array();
	// 	$return[""] = '--Please Select--';
	// 	if($result->num_rows() > 0) {
	// 		foreach($result->result_array() as $row) {
	// 			$return[$row['Nama']] = $row['Nama'];
	// 		}
	// 	}
	// 			return $return;
	// }

}
