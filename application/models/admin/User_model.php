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

	// // Hapus User
	// public function delete_user($id) {
	// 	$this->db->where('no_user',$id);
	// 	return $this->db->delete('user');
	// }

  // Hapus User
	public function delete_user($id) {
    $sql = "DELETE from surat_global WHERE surat_global.no_user = '".$id."' ";
    $sql2 = "DELETE from user WHERE user.no_user = '".$id."' ";

    $this->db->trans_start();
    $this->db->query($sql);
    $this->db->query($sql2);
    $this->db->trans_complete();

    if ($this->db->trans_status() === TRUE) {
      return TRUE;
    } else {
      return FALSE;
    }

	}

}
