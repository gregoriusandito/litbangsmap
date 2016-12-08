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
                <?php foreach($user as $list) { ?>
                <div class="row smap-dashboard-content-row below">
                  <div class="small-12 medium-12 columns">
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Nama Anak</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding"><?php echo $list['nama']; ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">No. Induk</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding"><?php echo $list['no_induk']; ?></div>
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
                              <div class="small-12 columns no-padding"><?php echo $list['kelas']; ?></div>
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
                              <div class="small-12 columns no-padding"><?php echo $list['nama_ayah']; ?></div>
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
                              <div class="small-12 columns no-padding"><?php echo $list['nama_ibu']; ?></div>
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
                              <div class="small-12 columns no-padding"><?php echo $list['email']; ?></div>
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
                              <div class="small-12 columns no-padding"><?php echo $list['username']; ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 columns smap-form-content-row smap-register-form-row">
                      <div class="row small-collapse">
                        <div class="small-4 columns"><span class="smap-form-content-attribute">Kata Sandi</span></div>
                        <div class="small-8 columns">
                          <div class="small-12 columns no-padding">
                            <div class="row-small-collapse">
                              <div class="small-12 columns no-padding"><a class="smap-dashboard-content-attribute special" onClick="window.location.href='<?php echo base_url() ?>ortu/user/edit_user/edit/<?php echo $list['no_user'] ?>';">Ubah Kata Sandi</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
