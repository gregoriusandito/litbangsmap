  <body>
    <div class="smap-side-menu-container smap-side-menu-left smap-side-menu-open smap-side-menu-background" id="smap-side-menu-s1">
      <div class="row small-collapse">
        <div class="small-12 columns">
          <div class="row small-collapse">
            <div class="small-12 columns smap-dashboard-side-menu-item">
              <div class="row">
                <div class="small-12 columns no-padding"><a class="smap-dashboard-side-menu-item-links" href="<?php echo base_url(); ?>">Dashboard</a></div>
              </div>
            </div>
            <div class="small-12 columns smap-dashboard-side-menu-item active">
              <div class="row">
                <div class="small-12 columns no-padding"><a class="smap-dashboard-side-menu-item-links" href="#">Layanan Surat</a></div>
              </div>
              <div class="row">
                <div class="small-12 columns no-padding smap-dashboard-side-menu-item-submenu">
                  <div class="row small-collapse">
                    <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>siswa/izin_pesiar">Izin Pesiar</a></div>
                  </div>
                  <div class="row small-collapse">
                    <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links active" href="<?php echo base_url(); ?>siswa/izin_meninggalkan_sekolah">Izin Meninggalkan Sekolah</a></div>
                  </div>
                  <div class="row small-collapse">
                    <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>siswa/izin_kembali_ke_asrama">Izin Kembali ke Asrama</a></div>
                  </div>
                  <div class="row small-collapse">
                    <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>siswa/izin_tidak_ikut_pelajaran">Izin Tidak Mengikuti Pelajaran</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="small-12 columns smap-dashboard-side-menu-item">
              <div class="row">
                <div class="small-12 columns no-padding"><a class="smap-dashboard-side-menu-item-links" href="#">Daftar Surat</a></div>
              </div>
              <div class="row">
                <div class="small-12 columns no-padding smap-dashboard-side-menu-item-submenu">
                  <div class="row small-collapse">
                    <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>siswa/daftar_surat/daftar/izin_pesiar">Izin Pesiar</a></div>
                  </div>
                  <div class="row small-collapse">
                    <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>siswa/daftar_surat/daftar/izin_meninggalkan_sekolah">Izin Meninggalkan Sekolah</a></div>
                  </div>
                  <div class="row small-collapse">
                    <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>siswa/daftar_surat/daftar/izin_kembali_ke_asrama">Izin Kembali ke Asrama</a></div>
                  </div>
                  <div class="row small-collapse">
                    <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>siswa/daftar_surat/daftar/izin_tidak_ikut_pelajaran">Izin Tidak Mengikuti Pelajaran</a></div>
                  </div>
                  <div class="row small-collapse">
                    <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>siswa/daftar_surat/daftar/izin_Berlibur">Izin Berlibur</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="smap-side-menu-push smap-main-body-container smap-side-menu-push-toright" id="smap-main-body-container">
      <div class="row medium-collapse smap-main-content-container">
        <div class="small-12 medium-12 columns no-padding smap-form-content-row">
          <div class="row">
            <div class="small-12-centered columns">
              <h3>Izin Meninggalkan Sekolah</h3>
            </div>
          </div>
        </div>
      </div>
      <form method="post" action="<?php echo base_url(); ?>siswa/izin_meninggalkan_sekolah/tambah" class="myform">
      <div class="row medium-collapse smap-main-content-container">
        <div class="small-12 medium-12 columns no-padding smap-register-container">
          <div class="row">
            <div class="small-12 columns smap-form-content-row smap-register-form-row">
              <div class="row small-collapse">
                <div class="small-4 columns"><span class="smap-form-content-attribute">Hari/Tanggal</span></div>
                <div class="small-8 columns">
                  <div class="small-12 columns no-padding">
                    <div class="row-small-collapse">
                      <div class="small-12 columns no-padding">
                        <input class="smap-text-input" type="text"  name="hari_tgl_izin" required id="datepicker" value="<?php echo set_value('hari_tgl_izin');?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="small-12 columns smap-form-content-row smap-register-form-row">
              <div class="row small-collapse">
                <div class="small-4 columns"><span class="smap-form-content-attribute">Jam</span></div>
                <div class="small-8 columns">
                  <div class="small-8 columns no-padding">
                    <div class="row-small-collapse">
                      <div class="small-4 columns no-padding">
                        <input class="smap-text-input" type="text" name="jam_1" id="" value="<?php echo set_value('jam_1');?>">
                      </div>
                      <div class="small-4 columns no-padding">
                        <div class="smap-menu-side-content-container"><span class="smap-menu-side-content">s/d</span></div>
                      </div>
                      <div class="small-4 columns no-padding">
                        <input class="smap-text-input" type="text" name="jam_2" id="" value="<?php echo set_value('jam_2');?>">
                      </div>
                    </div>
                  </div>
                  <div class="small-4 columns no-padding">
                    <span class="smap-form-content-attribute">&nbsp; *Contoh: 10:00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="small-12 columns smap-form-content-row smap-register-form-row">
              <div class="row small-collapse">
                <div class="small-4 columns no-padding"><span class="smap-form-content-attribute">Alasan</span></div>
                <div class="small-8 columns no-padding">
                  <textarea class="smap-textarea smap-payment-placeholder" name="alasan" id="alasan" rows="4"><?php echo set_value('alasan');?></textarea>
                </div>
              </div>
            </div>
            <input type="hidden" name="nama" id="nama" value="<?php echo $this->session->userdata('nama');?>">
            <input type="hidden" name="no_user" id="no_user" value="<?php echo $this->session->userdata('no_user');?>">
            <input type="hidden" name="nama_ayah" id="nama_ayah" value="<?php echo $this->session->userdata('nama_ayah');?>">
            <input type="hidden" name="nama_ibu" id="nama_ibu" value="<?php echo $this->session->userdata('nama_ibu');?>">
          	<input type="hidden" name="no_induk" id="no_induk" value="<?php echo $this->session->userdata('no_induk');?>">
            <input type="hidden" name="kelas" id="kelas" value="<?php echo $this->session->userdata('kelas');?>">
            <input name="status" type="hidden" id="status" value="unviewed">
            <input name="tgl_buat_surat" type="hidden" id="tgl_buat_surat"
              value="<?php $array_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
              $bulan = $array_bulan[date('n')];
              $tgl = date('j');
              $thn = date('Y');
              echo $tgl.' '.$bulan.' '.$thn;
            ?>">
            <input name="id_surat" type="hidden" id="id_surat" value=3>
            <div class="small-12 columns smap-form-content-row smap-register-form-row">
              <div class="row small-collapse">
                <div class="small-12 columns">
                  <div class="small-6 columns no-padding"></div>
                  <div class="small-6 columns no-padding"><a href="#">
                      <button class="smap-button-general right" type="submit" name="submit" id="submit" value="Simpan" onClick="return konfirmasi();">Simpan</button></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    	function konfirmasi()
    	{
    		fungsi_konfirmasi=confirm("Yakin Ingin Menyimpan Data?");
    		if(fungsi_konfirmasi!=true)
    		{
    			return false;
    		}
    	}
        $( "#datepicker" ).datepicker({
          dateFormat: 'DD, dd MM yy',
          monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
          monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'],
          dayNames: ['Minggu', 'Senin', 'Selasa', 'Rabu' ,'Kamis', 'Jumat', 'Sabtu'],
          dayNamesShort: ['Mgg', 'Sen', 'Sel', 'Rab' ,'Kam', 'Jum', 'Sab'],
          dayNamesMin: ['Mg', 'Sn', 'Sl', 'Rb' ,'Km', 'Jm', 'Sb'],
          changeMonth: true, // menampilkan dropdown untuk ganti bulan
          changeYear: true, // menampilkan dropdown untuk ganti Tahun
          showButtonPanel: true,
          gotoCurrent : true
        });
    </script>
