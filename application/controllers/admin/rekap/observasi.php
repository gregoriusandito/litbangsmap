    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class observasi extends CI_Controller {
	
	public $data = array(
			'title'=>'Daftar Rekap Surat Observasi',
			'isi'=>'admin/rekap/rekap_observasi',
			'tabel_data'    => '',
			'form_action'   => 'admin/rekap/observasi',
			'form_value'    => '',
			'option_semester'  => '',
			'id_semester'   => '', 
			'semester'         => '', 
	);
	public function index() {
		$this->auth->cek_auth();
		$this->auth->hak_akses_admin();
        $this->load->model('admin/semester_model');
		$this->load->model('admin/surat_model');
        $this->load->helper('form_helper');
		$this->auth->cek_auth(); //ngambil auth dari library
        
		// data option semester untuk dropdown
        $id_semester = $this->semester_model->cari_semua();

        // data semester ada
        if($id_semester)
        {
            // prepare data option semester
            foreach($id_semester as $row)
            {
                $this->data['option_semester'][$row->id_semester] = $row->id_semester;
            }

            // if submit
            if ($this->input->post('submit'))
            {
                // semester yang dipilih agar dropdown tetap terpilih, tidak reset
                $this->data['form_value']['id_semester'] = $this->input->post('id_semester');


                // id semester
                $id_semester = $this->input->post('id_semester');
				
				//id surat
				$id_surat = $this->input->post('id_surat');

                // cari rekap
                $rekap = $this->surat_model->rekap($id_semester, $id_surat)->result();
	
                // ada data rekap
                if ($rekap)
                {
                    // semester untuk ditampilkan; "Semester: 1xx"
					$this->data['semester'] = $this->db->select('id_semester')
													->where('id_semester', $id_semester)
													->get('semester')
													->row()->id_semester;
				
					// buat tabel di rekap_model
                    $this->data['tabel_data'] = $this->surat_model->buat_tabel($rekap);

                    $this->load->view('admin/layout/wrapper',$this->data);
                }
                // data semester ada, tapi tidak ada siswa yang termasuk di semester yang dipilih
                else
                {
                    $this->data['tabel_data'] = 'Tidak ada data rekap. Tidak ada surat yang dibuat di semester yang dipilih.';
                    $this->load->view('admin/layout/wrapper',$this->data);
                }
            }
            // if no submit
            else
            {
                $this->load->view('admin/layout/wrapper',$this->data);
            }
        }
        // data semester tidak ada
        else
        {
            $this->data['option_semester']['00'] = '-';
            $this->data['pesan'] = 'Data semester tidak tersedia. Silahkan isi dahulu data semester.';
            $this->load->view('admin/layout/wrapper',$data);
        }
	}
	}
?>