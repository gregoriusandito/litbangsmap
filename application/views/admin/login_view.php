<!DOCTYPE html>
<html class="smap" lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Aplikasi Surat Menyurat SMA Presiden">
    <meta name="keywords" content="surat, sma presiden">
    <meta name="author" content="Makmuri and Team">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:title" content="Aplikasi Surat Menyurat SMA Presiden">
    <meta property="og:site_name" content="Aplikasi Surat Menyurat SMA Presiden">
    <meta property="og:url" content="http://">
    <meta property="og:description" content="ASM SMAP merupakan Aplikasi Surat Menyurat SMA Presiden yang dikembangkan oleh Litbang SMA Presiden dan Tim Penelitian FMIPA Universitas Negeri Jakarta yang dikepalai oleh Drs. Makmuri, M.Si">
    <title>ASM SMAP</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo-smap.png">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,700italic,300,300italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/src/css/smap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/src/components/foundation-datepicker/css/foundation-datepicker.css">
    <link href="<?php echo base_url();?>assets/src/components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="image_src" href="http://">
    <script src="<?php echo base_url();?>assets/src/components/modernizr/modernizr.js"></script>
  </head>
  <body>
    <div class="smap-box-menu"></div>
    <div class="smap-main-header-container smap-new-header">
      <div class="row small-collapse smap-full-height" id="smap-new-header-scroll">
        <div class="smap-new-header-container right"><a class="smap-front-title-parent right" href="http://sma-presiden.sch.id">President School</a></div>
      </div>
    </div>
    <div class="smap-full-width smap-full-height" id="smap-select-search">
      <div class="row large-collapse">
        <div class="small-12 columns smap-main-search-container">
          <div class="row">
            <div class="small-12 smap-logo-container large-6 small-centered columns"><img class="smap-logo" src="<?php echo base_url();?>assets/src/img/logos/logo2-png.png"></div>
          </div>
          <div class="row">
            <div class="small-12 medium-8 columns small-centered">
              <div class="row">
                <div class="small-12 medium-12 columns smap-main-search-text-container"><h2 class="smap-front-title-text">Selamat Datang di Sistem Surat Menyurat <br /> SMA Presiden</span></div>
              </div>
            </div>
          </div>
          <?php echo form_open("admin/login/cek_login"); ?>
          <div class="row">
            <div class="small-12 medium-8 columns small-centered smap-main-search-form">
              <div class="row small-collapse">
                <div class="small-12 columns"><span>Username</span></div>
                <div class="small-12 columns">
                  <input class="smap-text-input" type="text" name="username">
                </div>
              </div>
            </div>
            <div class="small-12 medium-8 columns small-centered smap-main-search-form">
              <div class="row small-collapse">
                <div class="small-12 columns"><span>Password</span></div>
                <div class="small-12 columns">
                  <input class="smap-text-input" type="password" name="password">
                </div>
              </div>
            </div>
            <div class="small-12 medium-8 columns small-centered smap-main-search-form">
              <div class="row small-collapse">
                <div class="small-12 columns">
                  <div class="small-6 columns no-padding">
                  </div>
                  <div class="small-6 columns no-padding">
                      <button class="smap-button-general right" type="submit">Masuk</button></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="small-12 medium-8 columns small-centered">
              <div class="row small-collapse">
                <div class="smap-footer-margin">
                  <div class="smap-footer-row"><span class="smap-footer-credit-general">&copy; 2016 Litbang SMA Presiden</span></div>
                  <div class="smap-footer-row"><span class="smap-footer-credit-general">SMA Presiden, Jl. Ki Hajar Dewantara, Kota Jababeka, Cikarang Baru, Bekasi 17550 - Indonesia.</span></div>
                  <div class="smap-footer-row"><span class="smap-footer-credit-general">Phone: (021) 8910 9765, 8910 9767. Fax: (021) 890 3721</span></div>
                </div>
              </div>
            </div>
          <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url();?>assets/src/components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/src/components/foundation-datepicker/js/foundation-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/src/js/smap.js" async defer></script>
  </body>
</html>
