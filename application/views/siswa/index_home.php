<div class="smap-side-menu-container smap-side-menu-left smap-side-menu-open smap-side-menu-background" id="smap-side-menu-s1">
  <div class="row small-collapse">
    <div class="small-12 columns">
      <div class="row small-collapse">
        <div class="small-12 columns smap-dashboard-side-menu-item active">
          <div class="row">
            <div class="small-12 columns no-padding"><a class="smap-dashboard-side-menu-item-links" href="<?php echo base_url(); ?>">Dashboard</a></div>
          </div>
        </div>
        <div class="small-12 columns smap-dashboard-side-menu-item">
          <div class="row">
            <div class="small-12 columns no-padding"><a class="smap-dashboard-side-menu-item-links" href="#">Layanan Surat</a></div>
          </div>
          <div class="row">
            <div class="small-12 columns no-padding smap-dashboard-side-menu-item-submenu">
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>siswa/izin_pesiar">Izin Pesiar</a></div>
              </div>
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>siswa/izin_meninggalkan_sekolah">Izin Meninggalkan Sekolah</a></div>
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
    <div class="small-12 columns no-padding smap-register-container">
      <div class="row smap-dashboard-panel-row">
        <div class="small-12 medium-12 columns">
          <div class="row small-collapse">
            <div class="smap-skeleton-front-box">
              <div class="small-12 small-centered columns no-padding">
                <div class="row smap-dashboard-panel-header">
                  <div class="small-12 medium-12 columns no-padding">
                    <h3 class="smap-dashboard-panel-header-title">Selamat datang di ASAM (Aplikasi Surat Menyurat) SMA Presiden</h4>
                  </div>
                </div>
                <div class="row smap-dashboard-content-row split">
                  <div class="small-12 medium-12 columns">
                    <div class="row">
                      <p class="smap-dashboard-content-text">Silahkan buat surat sesuai dengan kebutuhan Anda!</p>
                    </div>
                    <div class="row">
                       <div class="smap-dashboard-content-text"><p>Cek Status Surat Izin Berlibur <a class="smap-dashboard-text-anchor unread" href="<?php echo base_url(); ?>siswa/daftar_surat/daftar/izin_Berlibur">Disini</p></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="small-12 columns no-padding smap-register-container">
      <div class="small-12 medium-3 columns">
        <div class="row">
          <div class="smap-skeleton-front-box smap-dashboard-letter-box-count">
            <div class="small-12 small-centered columns">
              <div class="row smap-dashboard-letter-title">
                <h4>Izin Pesiar</h4>
              </div>
              <div class="row smap-dashboard-letter-title sp ipad"><span>Total Surat</span></div>
              <div class="row">
                <h3 class="smap-membership-front-title"><a href="<?php echo base_url(); ?>siswa/daftar_surat/daftar/izin_pesiar"><?php echo $this->surat_model->total_surat_dash(2);?></a></h3>
              </div>
              <div class="row small-collapse">
                <div class="small-12 columns"><a class="smap-popup-register-button smap-dashboard-button" href="<?php echo base_url(); ?>siswa/izin_pesiar">Buat Surat</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="small-12 medium-3 columns">
        <div class="row">
          <div class="smap-skeleton-front-box smap-dashboard-letter-box-count">
            <div class="small-12 small-centered columns">
              <div class="row smap-dashboard-letter-title">
                <h4>Izin Meninggalkan Sekolah</h4>
              </div>
              <div class="row smap-dashboard-letter-title"><span>Total Surat</span></div>
              <div class="row">
                <h3 class="smap-membership-front-title"><a href="<?php echo base_url(); ?>siswa/daftar_surat/daftar/izin_meninggalkan_sekolah"><?php echo $this->surat_model->total_surat_dash(3);?></a></h3>
              </div>
              <div class="row small-collapse">
                <div class="small-12 columns"><a class="smap-popup-register-button smap-dashboard-button" href="<?php echo base_url(); ?>siswa/izin_meninggalkan_sekolah">Buat Surat</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="small-12 medium-3 columns">
        <div class="row small-collapse">
          <div class="smap-skeleton-front-box smap-dashboard-letter-box-count">
            <div class="small-12 small-centered columns">
              <div class="row smap-dashboard-letter-title">
                <h4>Izin Kembali ke Asrama</h4>
              </div>
              <div class="row smap-dashboard-letter-title sp"><span>Total Surat</span></div>
              <div class="row">
                <h3 class="smap-membership-front-title"><a href="<?php echo base_url(); ?>siswa/daftar_surat/daftar/izin_kembali_ke_asrama"><?php echo $this->surat_model->total_surat_dash(4);?></a></h3>
              </div>
              <div class="row small-collapse">
                <div class="small-12 columns"><a class="smap-popup-register-button smap-dashboard-button" href="<?php echo base_url(); ?>siswa/izin_kembali_ke_asrama">Buat Surat</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="small-12 medium-3 columns">
        <div class="row small-collapse">
          <div class="smap-skeleton-front-box smap-dashboard-letter-box-count">
            <div class="small-12 small-centered columns">
              <div class="row smap-dashboard-letter-title">
                <h4>Izin Tidak Mengikuti Pelajaran</h4>
              </div>
              <div class="row smap-dashboard-letter-title"><span>Total Surat</span></div>
              <div class="row">
                <h3 class="smap-membership-front-title"><a href="<?php echo base_url(); ?>siswa/daftar_surat/daftar/izin_tidak_ikut_pelajaran"><?php echo $this->surat_model->total_surat_dash(5);?></a></h3>
              </div>
              <div class="row small-collapse">
                <div class="small-12 columns"><a class="smap-popup-register-button smap-dashboard-button" href="<?php echo base_url(); ?>siswa/izin_tidak_ikut_pelajaran">Buat Surat</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
