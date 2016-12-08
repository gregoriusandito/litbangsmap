<?php
	class konfig_pejabat_model extends CI_Model {
    public function __construct() {
    $this->load->database();
    }

	/* Tampilan PD 1 & Kaprodi */
	public function view_wakasek_kesiswaan() {
		$query = $this->db->query('SELECT * FROM pejabat');
		if ($query->num_rows() > 0){
			$row = $query->row();
			return $row->wakasek_kesiswaan;
		}
		else return NULL;
	}

	public function nip_wakasek_kesiswaan() {
		$query = $this->db->query('SELECT * FROM pejabat');
		if ($query->num_rows() > 0){
			$row = $query->row();
			return $row->nip_wakasek_kesiswaan;
		}
		else return NULL;
	}

	public function view_kepala_asrama() {
		$query = $this->db->query('SELECT * FROM pejabat');
		if ($query->num_rows() > 0){
			$row = $query->row();
			return $row->kepala_asrama;
		}
		else return NULL;
	}

	public function nip_kepala_asrama() {
		$query = $this->db->query('SELECT * FROM pejabat');
		if ($query->num_rows() > 0){
			$row = $query->row();
			return $row->nip_kepala_asrama;
		}
		else return NULL;
	}

	public function view_staf_bid_kesiswaan() {
		$query = $this->db->query('SELECT * FROM pejabat');
		if ($query->num_rows() > 0){
			$row = $query->row();
			return $row->staf_bid_kesiswaan;
		}
		else return NULL;
	}

	public function nip_staf_bid_kesiswaan() {
		$query = $this->db->query('SELECT * FROM pejabat');
		if ($query->num_rows() > 0){
			$row = $query->row();
			return $row->nip_staf_bid_kesiswaan;
		}
		else return NULL;
	}

	public function edit_wakasek_kesiswaan($data) {
		return $this->db->update('pejabat', $data);
	}

	public function edit_kepala_asrama($data) {
		return $this->db->update('pejabat', $data);
	}

	public function edit_staf_bid_kesiswaan($data) {
		return $this->db->update('pejabat', $data);
	}

	function simpan_kepala_asrama($data){
		$sql1="UPDATE pejabat
				 SET pejabat.nip_kepala_asrama = '".$data['nip-kepala-asrama']."'
				 WHERE pejabat.id = 1";
		$sql2="UPDATE pejabat
 				 	SET pejabat.kepala_asrama = '".$data['kepala-asrama']."'
 					WHERE pejabat.id = 1";
		$this->db->trans_start();
		$this->db->query($sql1);
		$this->db->query($sql2);
		$this->db->trans_complete();
	}

	function simpan_wakasek_kesiswaan($data){
		$sql1="UPDATE pejabat
				 SET pejabat.nip_wakasek_kesiswaan = '".$data['nip-wakasek-kesiswaan']."'
				 WHERE pejabat.id = 1";
	 	$sql2="UPDATE pejabat
				 	SET pejabat.wakasek_kesiswaan = '".$data['wakasek-kesiswaan']."'
					WHERE pejabat.id = 1";
		$this->db->trans_start();
		$this->db->query($sql1);
		$this->db->query($sql2);
		$this->db->trans_complete();
	}

	function simpan_staf_bid_kesiswaan($data){
		$sql1="UPDATE pejabat
				 SET pejabat.nip_staf_bid_kesiswaan = '".$data['nip-staf-bid-kesiswaan']."'
				 WHERE pejabat.id = 1";
		$sql2="UPDATE pejabat
				 	SET pejabat.staf_bid_kesiswaan = '".$data['staf-bid-kesiswaan']."'
					WHERE pejabat.id = 1";
		$this->db->trans_start();
		$this->db->query($sql1);
		$this->db->query($sql2);
		$this->db->trans_complete();
	}

	/* Ambil NIP Pejabat */
	// function ambil-nip-wakasek-kesiswaan($data){
	// 	$sql2="UPDATE pejabat, dosen
	// 			 SET pejabat.nip_pd_1 = dosen.NIP
	// 			 WHERE pejabat.pd_1 = dosen.Nama and pejabat.id = 1";
	//
	// 	$this->db->trans_start();
	// 	$this->db->query($sql2);
	// 	$this->db->trans_complete();
	// }

	// function ambil_nip_kaprodi_mat($data){
	// 	$sql2="UPDATE pejabat, dosen
	// 			 SET pejabat.nip_kaprodi_mat = dosen.NIP
	// 			 WHERE pejabat.kaprodi_mat = dosen.Nama and pejabat.id = 1";
	//
	// 	$this->db->trans_start();
	// 	$this->db->query($sql2);
	// 	$this->db->trans_complete();
	// }
	//
	// function ambil_nip_kaprodi_pmat($data){
	// 	$sql2="UPDATE pejabat, dosen
	// 			 SET pejabat.nip_kaprodi_pmat = dosen.NIP
	// 			 WHERE pejabat.kaprodi_pmat = dosen.Nama and pejabat.id = 1";
	//
	// 	$this->db->trans_start();
	// 	$this->db->query($sql2);
	// 	$this->db->trans_complete();
	// }
	//
	// function ambil_nip_kaprodi_siskom($data){
	// 	$sql2="UPDATE pejabat, dosen
	// 			 SET pejabat.nip_kaprodi_siskom = dosen.NIP
	// 			 WHERE pejabat.kaprodi_siskom = dosen.Nama and pejabat.id = 1";
	//
	// 	$this->db->trans_start();
	// 	$this->db->query($sql2);
	// 	$this->db->trans_complete();
	// }

	// function ambil_penandatangan(){
	// 	$string = $this->session->userdata('username');
	// 	if(preg_match("/^311/", $string)){
	// 		echo $this->konfig_pejabat_model->view_kaprodi_pmat();
	// 	}
	// 	else if(preg_match("/^312/", $string)){
	// 		//jika awalan tidak ditemukan
	// 		echo $this->konfig_pejabat_model->view_kaprodi_mat();
	// 	}
	// 	else if(preg_match("/^313/", $string)){
	// 		//jika awalan tidak ditemukan
	// 		echo $this->konfig_pejabat_model->view_kaprodi_siskom();
	// 	} else return NULL;
	//
	// }


}
?>
