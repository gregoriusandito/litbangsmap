<?php

	/*** Surat Global Model ***/
	/*** List Kode id surat:
		1 = Izin Berlibur
		2 = Izin Pesiar
		3 = Izin Meninggalkan Sekolah
		4 = Izin Kembali ke Asrama
		5 = Izin Tidak Ikut Pelajaran
	***/

    class surat_model extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		/* IB */

		public function daftar_izin_berlibur() {
			$query = $this->db->query('SELECT * FROM surat_global where id_surat = 1 ORDER BY no DESC');
			return $query->result_array();
		}

		public function daftar_izin_berlibur_user() {
			$no_user = $this->session->userdata('no_user');
			$query = $this->db->query("SELECT * FROM surat_global WHERE id_surat = 1 and surat_global.no_user ='" .$no_user. "' ORDER BY no DESC");
			return $query->result_array();
		}

		public function daftar_izin_berlibur_siswa() {
			$nama = $this->session->userdata('nama');
			$query = $this->db->query("SELECT * FROM surat_global WHERE id_surat = 1 and surat_global.nama ='" .$nama. "' ORDER BY no DESC");
			return $query->result_array();
		}

		/* End IB */

		/* IP */

		public function daftar_izin_pesiar() {
			$query = $this->db->query('SELECT * FROM surat_global where id_surat = 2 ORDER BY no DESC');
			return $query->result_array();
		}

		public function daftar_izin_pesiar_user() {
			$no_user = $this->session->userdata('no_user');
			$query = $this->db->query("SELECT * FROM surat_global WHERE id_surat = 2 and surat_global.no_user ='" .$no_user. "' ORDER BY no DESC");
			return $query->result_array();
		}

		/* End IP */

		/* Izin Meninggalkan Sekolah */

		public function daftar_izin_meninggalkan_sekolah() {
			$query = $this->db->query('SELECT * FROM surat_global where id_surat = 3 ORDER BY no DESC');
			return $query->result_array();
		}

		public function daftar_izin_meninggalkan_sekolah_user() {
			$no_user = $this->session->userdata('no_user');
			$query = $this->db->query("SELECT * FROM surat_global WHERE id_surat = 3 and surat_global.no_user ='" .$no_user. "' ORDER BY no DESC");
			return $query->result_array();
		}

		/* End IMS */

		/* Izin Kembali ke Asrama */

		public function daftar_izin_kembali_ke_asrama() {
			$query = $this->db->query('SELECT * FROM surat_global where id_surat = 4 ORDER BY no DESC');
			return $query->result_array();
		}

		public function daftar_izin_kembali_ke_asrama_user() {
			$no_user = $this->session->userdata('no_user');
			$query = $this->db->query("SELECT * FROM surat_global WHERE id_surat = 4 and surat_global.no_user ='" .$no_user. "' ORDER BY no DESC");
			return $query->result_array();
		}

		/* End IKA */

		/* Izin Tidak Ikut Pelajaran */

		public function daftar_izin_tidak_ikut_pelajaran() {
			$query = $this->db->query('SELECT * FROM surat_global where id_surat = 5 ORDER BY no DESC');
			return $query->result_array();
		}

		public function daftar_izin_tidak_ikut_pelajaran_user() {
			$no_user = $this->session->userdata('no_user');
			$query = $this->db->query("SELECT * FROM surat_global WHERE id_surat = 5 and surat_global.no_user ='" .$no_user. "' ORDER BY no DESC");
			return $query->result_array();
		}

		/* End ITIP */

		/* Begin Global Function */

		public function detail_surat($id = FALSE) {
			if ($id === FALSE) {
				$query = $this->db->get('surat_global');
				return $query->result_array();
			}
			$query = $this->db->get_where('surat_global', array('no' => $id));
			return $query->row_array();
		}

		public function tambah($data) {
			return $this->db->insert('surat_global', $data);
		}

		public function edit($data) {
			$this->db->where('no', $data['no']);
			return $this->db->update('surat_global', $data);
		}

		public function set_printed($id) {
			$sql = "UPDATE surat_global
					 SET surat_global.status = 'printed'
					 WHERE surat_global.no = '".$id."' ";

			$this->db->trans_start();
			$this->db->query($sql);
			$this->db->trans_complete();

			if ($this->db->trans_status() === TRUE) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		public function set_finished($id) {
			$array_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
			$bulan = $array_bulan[date('n')];
			$tgl = date('j');
			$thn = date('Y');

			$sql = "UPDATE surat_global
					 SET surat_global.status = 'finished', surat_global.tgl_surat_selesai = '".$tgl." ".$bulan." ".$thn."'
					 WHERE surat_global.no = '".$id."' ";

			$this->db->trans_start();
			$this->db->query($sql);
			$this->db->trans_complete();

			if ($this->db->trans_status() === TRUE) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		public function delete($id) {
			$this->db->where('no',$id);
			return $this->db->delete('surat_global');
		}

		public function rekap($id_semester, $id_surat) {
			$sql = "SELECT * FROM surat_global WHERE surat_global.semester = '$id_semester' and surat_global.status = 'finished' and surat_global.id_surat = '$id_surat' or surat_global.semester = '$id_semester' and surat_global.status = 'uploaded' and surat_global.id_surat = '$id_surat'";
			return $this->db->query($sql);
		}

		public function buat_tabel($rekap) {
			$this->load->library('table');

			$tmpl = array('row_alt_start'  => '<tr class="zebra">');
			$this->table->set_template($tmpl);

			$this->table->set_heading('No','No Surat', 'Nama', 'Noreg');

			$no = 0;
			foreach ($rekap as $row)
			{
				$this->table->add_row(++$no,
					$row->no_surat_1. '/' .$row->no_surat_2. '/' .$row->no_surat_3. '/' .$row->no_surat_4. '/' .$row->no_surat_5,
					$row->nama,
					$row->noreg);
			}

			$tabel = $this->table->generate();

			return $tabel;
		}

		function ambil_nip($data) {
			$sql = "UPDATE surat_global, dosen SET surat_global.nip = dosen.NIP WHERE surat_global.penandatangan_surat = dosen.Nama";
			$this->db->trans_start();
			$this->db->query($sql);
			$this->db->trans_complete();
		}

		/*End Global Function */

		/* Begin Notification Function  */

		public function hitung_surat_baru($id_surat) {
			$status='unviewed';
			$obj = $this->db->select('*')
					->where('status',$status)
					->where('id_surat',$id_surat)
					->get('surat_global');

			if($obj->num_rows() != 0){
				return $obj->num_rows();
			} else if ($obj->num_rows() == 0) {
				return $obj->num_rows(0);
			} else {
				return null;
			}
		}
		/* End Notification Function  */

		/* Calculate Letter */

		public function total_surat_dash($id_surat) {
			$no_user = $this->session->userdata('no_user');
			$this->db->like('id_surat', $id_surat);
			$this->db->where('no_user', $no_user);
			$this->db->from('surat_global');
			return $this->db->count_all_results();
		}

		public function total_ib() {
			$this->db->like('id_surat', 1);
			$this->db->from('surat_global');
			return $this->db->count_all_results();
		}

		public function total_ip() {
			$this->db->like('id_surat', 2);
			$this->db->from('surat_global');
			return $this->db->count_all_results();
		}

		public function total_ims() {
			$this->db->like('id_surat', 3);
			$this->db->from('surat_global');
			return $this->db->count_all_results();
		}

		public function total_ika() {
			$this->db->like('id_surat', 4);
			$this->db->from('surat_global');
			return $this->db->count_all_results();
		}

		public function total_itip() {
			$this->db->like('id_surat', 5);
			$this->db->from('surat_global');
			return $this->db->count_all_results();
		}

		public function no_surat() {
			$this->db->insert('no_surat_global', '');
			return gli_no_surat('no_surat_global','last_no',1);
		}

	  public function reset_nomor() {
	    $sql = "TRUNCATE TABLE no_surat_global";
	    $sql2 = "ALTER TABLE no_surat_global AUTO_INCREMENT = 1";

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
?>
