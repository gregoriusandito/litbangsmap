<?php
    class notif_model extends CI_Model {

		public function __construct() {
		$this->load->database();
		}
		
		public function hitung_obs_baru() {
			$status='unviewed';
			$obj = $this->db->select('*')
					->where('status',$status)
					->where('id_surat',1)				
					->get('surat_global');
		
			if($obj->num_rows() != 0){
				echo '<div class="notif">'.$obj->num_rows().' Observasi Baru</div>';
			} else {
				return null;
			}
		}

		public function hitung_obs_lap_baru() {
			$status='unviewed';
			$obj = $this->db->select('*')
					->where('status',$status)
					->where('id_surat',6)				
					->get('surat_global');

			if($obj->num_rows() != 0){
				echo '<div class="notif">'.$obj->num_rows().' Obs. Lapangan Baru</div>';
			} else{
				return null;
			}
		}		
		
		public function hitung_obs_mk_baru() {
			$status='unviewed';
			$obj = $this->db->select('*')
					->where('status',$status)
					->where('id_surat',7)				
					->get('surat_global');
			if($obj->num_rows() != 0){
				echo '<div class="notif">'.$obj->num_rows().' Obs. Mata Kuliah Baru</div>';
			} else {
				return null;
			}
		}
		
		public function hitung_pen_baru() {
			$status='unviewed';
			$obj = $this->db->select('*')
					->where('status',$status)
					->where('id_surat',2)				
					->get('surat_global');
					
			if($obj->num_rows() != 0){
				echo '<div class="notif">'.$obj->num_rows().' Penelitian Baru</div>';
			} else {
				return null;
			}
		}

		public function hitung_pkl_baru() {
			$status='unviewed';
			$obj = $this->db->select('*')
					->where('status',$status)
					->where('id_surat',3)
					->get('surat_global');
					
			if($obj->num_rows() != 0){
				echo '<div class="notif">'.$obj->num_rows().' PKL Baru</div>';
			} else{
				return null;
			}
		}

		public function hitung_pkm_baru() {
			$status='unviewed';
			$obj = $this->db->select('*')
					->where('status',$status)
					->where('id_surat',4)				
					->get('surat_global');
					
			if($obj->num_rows() != 0){
				echo '<div class="notif">'.$obj->num_rows().' PKM Baru</div>';
			} else{
				return null;
			}
		}

		public function hitung_skl_baru() {
			$status='unviewed';
			$obj = $this->db->select('*')
					->where('status',$status)
					->where('id_surat',5)				
					->get('surat_global');
					
			if($obj->num_rows() != 0){
				echo '<div class="notif">'.$obj->num_rows().' SKL Baru</div>';
			} else{
				return null;
			}
		}

			
	}
?>