<div class="smap-side-menu-container smap-side-menu-left smap-side-menu-open smap-side-menu-background" id="smap-side-menu-s1">
  <div class="row small-collapse">
    <div class="small-12 columns">
      <div class="row small-collapse">
        <div class="small-12 columns smap-dashboard-side-menu-item">
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
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>admin/izin_berlibur">Izin Berlibur</a></div>
              </div>
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>admin/izin_pesiar">Izin Pesiar</a></div>
              </div>
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>admin/izin_meninggalkan_sekolah">Izin Meninggalkan Sekolah</a></div>
              </div>
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>admin/izin_kembali_ke_asrama">Izin Kembali ke Asrama</a></div>
              </div>
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>admin/izin_tidak_ikut_pelajaran">Izin Tidak Mengikuti Pelajaran</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="small-12 columns smap-dashboard-side-menu-item">
          <div class="row">
            <div class="small-12 columns no-padding"><a class="smap-dashboard-side-menu-item-links" href="#">Manajemen User</a></div>
          </div>
          <div class="row">
            <div class="small-12 columns no-padding smap-dashboard-side-menu-item-submenu">
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>admin/user">Daftar User</a></div>
              </div>
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>admin/user/tambah">Tambah User</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="small-12 columns smap-dashboard-side-menu-item active">
          <div class="row">
            <div class="small-12 columns no-padding"><a class="smap-dashboard-side-menu-item-links" href="#">Setelan</a></div>
          </div>
          <div class="row">
            <div class="small-12 columns no-padding smap-dashboard-side-menu-item-submenu">
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links active" href="<?php echo base_url(); ?>admin/konfig_pejabat/konfig_pejabat">Konfigurasi Pejabat</a></div>
              </div>
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>admin/no_surat/reset_nomor/">Reset Nomor Surat</a></div>
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
                    <h3 class="smap-dashboard-panel-header-title">Konfigurasi Pejabat</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="small-12 columns no-padding smap-register-container">
      <div class="small-12 medium-4 columns">
        <div class="row">
          <div class="smap-skeleton-front-box">
            <div class="small-12 small-centered columns">
              <div class="row smap-dashboard-letter-title">
                <h4>Wakil Kepala Sekolah Bidang Kesiswaan</h4>
              </div>
              <div class="row smap-dashboard-letter-title spb"><span><?php echo $this->konfig_pejabat_model->view_wakasek_kesiswaan() ?></span></div>
              <div class="row small-collapse">
                <div class="small-12 columns"><a class="smap-popup-register-button smap-dashboard-button" href="<?php echo base_url() ?>admin/konfig_pejabat/edit_wakasek_kesiswaan">Ganti</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="small-12 medium-4 columns">
        <div class="row">
          <div class="smap-skeleton-front-box">
            <div class="small-12 small-centered columns">
              <div class="row smap-dashboard-letter-title">
                <h4>Kepala Asrama</h4>
              </div>
              <div class="row smap-dashboard-letter-title sp spb"><span><?php echo $this->konfig_pejabat_model->view_kepala_asrama() ?></span></div>
              <div class="row small-collapse">
                <div class="small-12 columns"><a class="smap-popup-register-button smap-dashboard-button" href="<?php echo base_url() ?>admin/konfig_pejabat/edit_kepala_asrama">Ganti</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="small-12 medium-4 columns">
        <div class="row small-collapse">
          <div class="smap-skeleton-front-box">
            <div class="small-12 small-centered columns">
              <div class="row smap-dashboard-letter-title">
                <h4>Staf Bidang Kesiswaan</h4>
              </div>
              <div class="row smap-dashboard-letter-title sp spb"><span><?php echo $this->konfig_pejabat_model->view_staf_bid_kesiswaan() ?></span></div>
              <div class="row small-collapse">
                <div class="small-12 columns"><a class="smap-popup-register-button smap-dashboard-button" href="<?php echo base_url() ?>admin/konfig_pejabat/edit_staf_bid_kesiswaan">Ganti</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
