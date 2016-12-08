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
      <div class="row">
        <div class="small-12-centered columns">
          <h3>Manajeman User</h3>
        </div>
      </div>
      <div class="row">
        <div class="small-12-centered columns">
          <ul class="smap-user-select-menu">
            <li class="smap-user-select-tab"><a class="smap-order-status-link active" href="<?php echo base_url(); ?>admin/user">Semua</a></li>
            <li class="smap-user-select-tab"><a class="smap-order-status-link" href="<?php echo base_url(); ?>admin/user/user_siswa">Siswa</a></li>
            <li class="smap-user-select-tab"> <a class="smap-order-status-link" href="<?php echo base_url(); ?>admin/user/user_ortu">Orang Tua</a></li>
          </ul>
        </div>
      </div>
			<div class="row">
        <div class="small-12-centered columns">
          <p class="smap-dashboard-content-text">Daftar User</p>
        </div>
      </div>
      <div class="row smap-dashboard-row-content">
        <div class="small-12-centered columns">
          <table class="smap-stack smap-dashboard-invoice-table">
            <thead class="smap-dashboard-invoice-table-all">
              <tr class="smap-dashboard-invoice-table-all">
						    <th class="smap-dashboard-invoice-thead-th">Nama</th>
						    <th class="smap-dashboard-invoice-thead-th">Username</th>
								<th class="smap-dashboard-invoice-thead-th">Nomor Induk</th>
								<th class="smap-dashboard-invoice-thead-th">Kelas</th>
								<th class="smap-dashboard-invoice-thead-th">Email</th>
								<th class="smap-dashboard-invoice-thead-th">Level</th>
						    <th class="smap-dashboard-invoice-thead-th">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($user as $list) { ?>
              <tr>
						    <td class="smap-dashboard-invoice-table-td"><?php echo $list['nama'];?></td>
								<td class="smap-dashboard-invoice-table-td"><?php echo $list['username']; ?></td>
                <td class="smap-dashboard-invoice-table-td"><?php echo $list['no_induk']; ?></td>
						    <td class="smap-dashboard-invoice-table-td"><?php echo $list['kelas']; ?></td>
								<td class="smap-dashboard-invoice-table-td"><?php echo $list['email']; ?></td>
								<td class="smap-dashboard-invoice-table-td"><?php echo $list['level']; ?></td>
						    <td class="smap-dashboard-invoice-table-td">
									<div class="smap-footer-social-container">
										<div class="row small-collapse">
											<ul class="smap-footer-social-item-container">
												<li class="smap-footer-social-item"><a href="<?php echo base_url() ?>admin/user/edit/<?php echo $list['no_user'] ?>" title="Lihat dan Edit Data User"><img class="smap-footer-social-media smap-footer-facebook" src="<?php echo base_url(); ?>assets/images/act_icon/edit.png"></a></li>
												<li class="smap-footer-social-item"><a href="<?php echo base_url() ?>admin/user/delete/<?php echo $list['no_user'] ?>" title="Hapus User"> <img class="smap-footer-social-media" src="<?php echo base_url(); ?>assets/images/act_icon/cross.png"></a></li>
												<li class="smap-footer-social-item"><a href="<?php echo base_url() ?>admin/edit_password_user/edit_pass/<?php echo $list['no_user'] ?>" title="Ganti Password User"> <img class="smap-footer-social-media" src="<?php echo base_url(); ?>assets/images/act_icon/pass.png"></a></li>
											</ul>
										</div>
									</div>
								</td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="small-12 columns smap-paging-container">
          <div id="pager" class="smap-paging pager">
        	<form>
        		<li class="smap-paging-number"><img src="<?php echo base_url();?>assets/pagination/addons/pager/icons/first.gif" class="first"/></li>
        		<li class="smap-paging-number"><img src="<?php echo base_url();?>assets/pagination/addons/pager/icons/prev.gif" class="prev"/></li>
        		<li class="smap-paging-number"><input type="text" class="pagedisplay"/></li>
        		<li class="smap-paging-number"><img src="<?php echo base_url();?>assets/pagination/addons/pager/icons/next.gif" class="next"/></li>
        		<li class="smap-paging-number"><img src="<?php echo base_url();?>assets/pagination/addons/pager/icons/last.gif" class="last"/></li>
        		<li class="smap-paging-number"><select class="pagesize">
        			<option selected="selected"  value="10">10</option>
        			<option value="20">20</option>
        			<option value="30">30</option>
        			<option  value="40">40</option>
        		</select></li>
        	</form>
        	</div>
				</div>
      </div>
    </div>
  </div>
</div>
