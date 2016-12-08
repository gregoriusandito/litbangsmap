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
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>ortu/izin_berlibur">Izin Berlibur</a></div>
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
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links" href="<?php echo base_url(); ?>ortu/daftar_surat/daftar/izin_berlibur">Izin Berlibur</a></div>
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
                    <h3 class="smap-dashboard-panel-header-title">Informasi User</h3>
                  </div>
                </div>
                <form method="post" action="<?php echo base_url(); ?>ortu/user/edit_user/edit" class="myform">
                <div class="row smap-dashboard-content-row below">
                  <div class="small-12 medium-12 columns">
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Password Baru</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding">
                                <input class="smap-text-input" type="password" name="password" required id="password">
                                <?php echo form_error('password'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Ulangi Password Baru</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding">
                                <input class="smap-text-input" type="password" name="password2" required id="password2">
                                <?php echo form_error('password2'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="no_user" id="no_user" value="<?php echo $detail['no_user'];?>">
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
