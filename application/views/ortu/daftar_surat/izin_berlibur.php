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
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links active" href="<?php echo base_url(); ?>ortu/izin_berlibur">Izin Berlibur</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="small-12 columns smap-dashboard-side-menu-item active">
          <div class="row">
            <div class="small-12 columns no-padding"><a class="smap-dashboard-side-menu-item-links" href="#">Daftar Surat</a></div>
          </div>
          <div class="row">
            <div class="small-12 columns no-padding smap-dashboard-side-menu-item-submenu">
              <div class="row small-collapse">
                <div class="smap-dashboard-submenu-item"><a class="smap-dashboard-side-menu-item-submenu-links active" href="<?php echo base_url(); ?>ortu/daftar_surat/daftar/izin_berlibur">Izin Berlibur</a></div>
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
          <h3>Daftar Surat Izin Berlibur</h3>
        </div>
      </div>
      <div class="row smap-dashboard-row-content">
        <div class="small-12-centered columns">
          <table class="smap-stack smap-dashboard-invoice-table">
            <thead class="smap-dashboard-invoice-table-all">
              <tr class="smap-dashboard-invoice-table-all">
                <th class="smap-dashboard-invoice-thead-th">Hari/Tanggal Izin</th>
                <th class="smap-dashboard-invoice-thead-th">Hari/Tanggal Izin</th>
                <th class="smap-dashboard-invoice-thead-th">Alasan</th>
                <th class="smap-dashboard-invoice-thead-th">Status</th>
                <th class="smap-dashboard-invoice-thead-th">Tanggal Pembuatan Surat</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($izin_berlibur as $list) { ?>
              <tr>
                <td class="smap-dashboard-invoice-table-td"><?php echo $list['hari_tgl_izin']; ?></td>
                <td class="smap-dashboard-invoice-table-td"><?php echo $list['hari_tgl_kembali']; ?></td>
                <td class="smap-dashboard-invoice-table-td text-left"><?php echo $list['alasan']; ?></td>
                <td class="smap-dashboard-invoice-table-td text-left"><?php echo $list['status']; ?></td>
                <td class="smap-dashboard-invoice-table-td"><?php echo $list['tgl_buat_surat']; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url();?>assets/src/components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/src/components/foundation-datepicker/js/foundation-datepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/src/js/smap.js" async defer></script>
