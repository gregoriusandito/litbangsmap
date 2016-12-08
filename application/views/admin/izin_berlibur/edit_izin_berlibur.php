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
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links active" href="<?php echo base_url(); ?>admin/izin_berlibur">Izin Berlibur</a></div>
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
          <h3>Izin Berlibur</h3>
        </div>
      </div>
    </div>
  </div>
	<form name="form1" method="post" action="<?php echo base_url(); ?>admin/izin_berlibur/edit" class="myform">
  <div class="row medium-collapse smap-main-content-container">
    <div class="small-12 medium-12 columns no-padding smap-register-container">
      <div class="row">
				<div class="small-12 columns smap-form-content-row smap-register-form-row">
          <div class="row small-collapse">
            <div class="small-4 columns"><span class="smap-form-content-attribute">Nomor Surat</span></div>
            <div class="small-8 columns">
              <div class="small-12 columns no-padding">
                <div class="row-small-collapse">
                  <div class="small-3 columns no-padding">
                    <input class="smap-text-input" type="text"  name="no_surat_1" required value="<?php echo $detail['no_surat_1'];?>" readonly>
                  </div>
									<div class="small-2 columns no-padding">
                    <input class="smap-text-input" type="text"  name="no_surat_2" required value="IB" readonly>
                  </div>
									<div class="small-2 columns no-padding">
										<input class="smap-text-input" type="text"  name="no_surat_3" required value="SMAP" readonly>
									</div>
									<div class="small-2 columns no-padding">
                    <input class="smap-text-input" type="text"  name="no_surat_4" required value="<?php
											$array_bulan = array(1=>'I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
											echo $bulan = $array_bulan[date('n')];?>" readonly>
                  </div>
									<div class="small-3 columns no-padding">
                    <input class="smap-text-input" type="text"  name="no_surat_5" required value="<?php
											echo $thn = date('Y');
											?>" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
				<div class="small-12 columns smap-form-content-row smap-register-form-row">
					<div class="row small-collapse">
						<div class="small-4 columns"><span class="smap-form-content-attribute">Nama</span></div>
						<div class="small-8 columns">
							<div class="small-12 columns no-padding">
								<div class="row-small-collapse">
									<div class="small-12 columns no-padding">
										<input class="smap-text-input" type="text"  name="nama" required value="<?php echo $detail['nama'] ?>">
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
										<input class="smap-text-input" type="text"  name="no_induk" required value="<?php echo $detail['no_induk'] ?>">
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
										<input class="smap-text-input" type="text"  name="kelas" required value="<?php echo $detail['kelas'] ?>">
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
                    <input class="smap-text-input" type="text"  name="nama_ayah" required value="<?php echo $detail['nama_ayah'] ?>">
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
                    <input class="smap-text-input" type="text"  name="nama_ibu" required value="<?php echo $detail['nama_ibu'] ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="small-12 columns smap-form-content-row smap-register-form-row">
          <div class="row small-collapse">
            <div class="small-4 columns"><span class="smap-form-content-attribute">Hari/Tanggal Izin</span></div>
            <div class="small-8 columns">
              <div class="small-12 columns no-padding">
                <div class="row-small-collapse">
                  <div class="small-12 columns no-padding">
                    <input class="smap-text-input" type="text"  name="hari_tgl_izin" required value="<?php echo $detail['hari_tgl_izin'] ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="small-12 columns smap-form-content-row smap-register-form-row">
          <div class="row small-collapse">
            <div class="small-4 columns"><span class="smap-form-content-attribute">Hari/Tanggal Kembali</span></div>
            <div class="small-8 columns">
              <div class="small-12 columns no-padding">
                <div class="row-small-collapse">
                  <div class="small-12 columns no-padding">
                    <input class="smap-text-input" type="text"  name="hari_tgl_kembali" required value="<?php echo $detail['hari_tgl_kembali'] ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="small-12 columns smap-form-content-row smap-register-form-row">
          <div class="row small-collapse">
            <div class="small-4 columns no-padding"><span class="smap-form-content-attribute">Alasan</span></div>
            <div class="small-8 columns no-padding">
              <textarea class="smap-textarea smap-payment-placeholder" name="alasan" rows="4"><?php echo $detail['alasan'] ?></textarea>
              <?php echo form_error('alasan'); ?>
            </div>
          </div>
        </div>
				<input name="status" type="hidden" id="status" value="viewed">
				<input name="no" type="hidden" id="no" value="<?php echo $detail['no'];?>">
				<input name="id_surat" type="hidden" id="id_surat" value="<?php echo $detail['id_surat'];?>">
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
