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
    <div class="small-12 medium-12 columns no-padding smap-form-content-row">
      <div class="row">
        <div class="small-12-centered columns">
          <h3>Mengubah Data Wakil Kepala Sekolah Bidang Kesiswaan</h3>
        </div>
      </div>
    </div>
  </div>
<form name="form1" method="post" action="<?php echo base_url(); ?>admin/konfig_pejabat/edit_wakasek_kesiswaan/edit" class="myform">
  <div class="row medium-collapse smap-main-content-container">
    <div class="small-12 medium-12 columns no-padding smap-register-container">
      <div class="row">
        <div class="small-12 columns smap-form-content-row smap-register-form-row">
					<div class="row small-collapse">
						<div class="small-6 columns"><span class="smap-form-content-attribute">Wakil Kepala Sekolah Bidang Kesiswaan</span></div>
						<div class="small-6 columns">
							<div class="small-12 columns no-padding">
								<div class="row-small-collapse">
									<div class="small-12 columns no-padding">
										<input class="smap-text-input" type="text" name="wakasek-kesiswaan">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="small-12 columns smap-form-content-row smap-register-form-row">
					<div class="row small-collapse">
						<div class="small-6 columns"><span class="smap-form-content-attribute">NIP Wakil Kepala Sekolah Bidang Kesiswaan</span></div>
						<div class="small-6 columns">
							<div class="small-12 columns no-padding">
								<div class="row-small-collapse">
									<div class="small-12 columns no-padding">
										<input class="smap-text-input" type="text"  name="nip-wakasek-kesiswaan">
									</div>
								</div>
							</div>
					</div>
        </div>
				</div>
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
<script>
  function konfirmasi()
  {
    fungsi_konfirmasi=confirm("Yakin Ingin Menyimpan Data?");
    if(fungsi_konfirmasi!=true)
    {
      return false;
    }
  }
</script>
