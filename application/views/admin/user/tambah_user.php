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
        <div class="small-12 columns smap-dashboard-side-menu-item active">
          <div class="row">
            <div class="small-12 columns no-padding"><a class="smap-dashboard-side-menu-item-links" href="#">Manajemen User</a></div>
          </div>
          <div class="row">
            <div class="small-12 columns no-padding smap-dashboard-side-menu-item-submenu">
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links active" href="<?php echo base_url(); ?>admin/user">Daftar User</a></div>
              </div>
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>admin/user/tambah">Tambah User</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="small-12 columns smap-dashboard-side-menu-item">
          <div class="row">
            <div class="small-12 columns no-padding"><a class="smap-dashboard-side-menu-item-links" href="#">Setelan</a></div>
          </div>
          <div class="row">
            <div class="small-12 columns no-padding smap-dashboard-side-menu-item-submenu">
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>admin/konfig_pejabat/konfig_pejabat">Konfigurasi Pejabat</a></div>
              </div>
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="#">Reset Nomor Surat</a></div>
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
                    <h3 class="smap-dashboard-panel-header-title">Menambah User</h3>
                  </div>
                </div>
                <form name="form1" method="post" action="<?php echo base_url() ?>admin/user/tambah" class="myform">
                <div class="row smap-dashboard-content-row below">
                  <div class="small-12 medium-12 columns">
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Nama</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding">
                                <input class="smap-text-input" type="text" name="nama" required>
                                <?php echo form_error('nama'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Kelas</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding">
                                <input class="smap-text-input" type="text" name="kelas" required>
                                <?php echo form_error('kelas'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Nomor Induk</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding">
                                <input class="smap-text-input" type="text" name="no_induk" required>
                                <?php echo form_error('no_induk'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Nama Ayah</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding">
                                <input class="smap-text-input" type="text" name="nama_ayah" required>
                                <?php echo form_error('nama_ayah'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Nama Ibu</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding">
                                <input class="smap-text-input" type="text" name="nama_ibu" required>
                                <?php echo form_error('nama_ibu'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Username</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding">
                                <input class="smap-text-input" type="text" name="username" required>
                                <?php echo form_error('username'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Password</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding">
                                <input class="smap-text-input" type="password" name="password" required>
                                <?php echo form_error('password'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Email</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding">
                                <input class="smap-text-input" type="email" name="email" required>
                                <?php echo form_error('email'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Level</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding">
                                <select class="smap-text-input" name="level" id="level">
                                  <option value="siswa">Siswa</option>
                                  <option value="ortu">Orang Tua</option>
                                </select>
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
                          <div class="small-6 columns no-padding">
                              <button class="smap-button-general right space" type="submit" name="submit" value="Simpan" onClick="return konfirmasi();">Simpan</button>
                              <button class="smap-button-general right" type="reset" name="submit2" value="Simpan">Reset</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
