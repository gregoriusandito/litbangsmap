<?php

   /*
  *
  * @author Gregorius Andito H (3135136218)
  * email : gregorius.andito@gmail.com
  *
  */
  /* setting zona waktu */
  date_default_timezone_set('Asia/Jakarta');
  $this->fpdf->FPDF("P","cm","A4");

  // kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm
  $this->fpdf->SetMargins(1,1,1);
  /* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
  di footer, nanti kita akan membuat page number dengan format : number page / total page
  */
  $this->fpdf->AliasNbPages();

  // AddPage merupakan fungsi untuk membuat halaman baru
  $this->fpdf->AddPage();

  // Setting Font : String Family, String Style, Font size
  $this->fpdf->SetFont('Times','',12);

  /* Kita akan membuat header dari halaman pdf yang kita buat
  ————– Header Halaman dimulai dari baris ini —————————–
  */
  $this->fpdf->Image('assets/images/logo-smap.png',1,1,-120);
  $this->fpdf->Cell(19,0.5,'SEKOLAH MENENGAH ATAS',0,0,'C');
  $this->fpdf->Ln();
  $this->fpdf->SetFont('Times','B',12);
  $this->fpdf->Cell(19,0.5,'PRESIDENT SCHOOL',0,0,'C');

    /* Setting ulang Font : String Family, String Style, Font size
    kenapa disetting ulang ???
    jika tidak disetting ulang, ukuran font akan mengikuti settingan sebelumnya.
    tetapi karena kita menginginkan settingan untuk penulisan alamatnya berbeda,
    maka kita harus mensetting ulang Font nya.
    jika diatas settingannya : helvetica, 'B', '12'
    khusus untuk penulisan alamat, kita setting : helvetica, ", 10
    yang artinya string stylenya normal / tidak Bold dan ukurannya 10
    */
  $this->fpdf->Ln();
  $this->fpdf->SetFont('Times',"",10);
  $this->fpdf->Cell(19,0.5,' Jl. Ki Hajar Dewantara, Kota Jababeka, Cikarang Baru, Bekasi 17550 - Indonesia.',0,0,'C');
  $this->fpdf->Ln();
  $this->fpdf->Cell(19,0.5,'Telepon: (021) 8910 9765, 8910 9767. Fax: (021) 890 3721',0,0,'C');
    //$this->fpdf->Cell(19,0.5,'subtitle',0,0,'C');

    /* Fungsi Line untuk membuat garis */
  $this->fpdf->Line(1,3.5,20,3.5);
  $this->fpdf->Line(1,3.55,20,3.55);
  $this->fpdf->Ln();
    /* ————– Header Halaman selesai ————————————————*/

  /* setting kop surat */
  /* tanggal */
  //$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
  //$hari = $array_hari[date('N')];
  $array_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
  $bulan = $array_bulan[date('n')];
  $tgl = date('j');
  $thn = date('Y');
  $this->fpdf->Ln();
  $this->fpdf->SetFont('Times','',12);
  $this->fpdf->Cell(19,1,$detail['tgl_buat_surat'],0,0,'R');
  $this->fpdf->Ln(2);
  /* no surat dan hal */
  $this->fpdf->SetFont('Times','',12);
  $this->fpdf->Cell(19,0.5,'No    : '.$detail['no_surat_1'].'/'.$detail['no_surat_2'].'/'.$detail['no_surat_3'].'/'.$detail['no_surat_4'].'/'.$detail['no_surat_5'],0,0,'L');
  $this->fpdf->Ln();
  $this->fpdf->Cell(19,0.5,'Hal   : Izin Tidak Mengikuti Pelajaran',0,0,'L');
  /* tujuan surat */
  $this->fpdf->Ln(1.5);
  $this->fpdf->Cell(19,0.5,'Kepada Yth,',0,0,'L');
  $this->fpdf->Ln();
  $this->fpdf->Cell(19,0.5,'Kepala Asrama',0,0,'L');
  $this->fpdf->Ln();
  $this->fpdf->Cell(19,0.5,'SMA President',0,0,'L');
  $this->fpdf->Ln();
  $this->fpdf->Cell(19,0.5,'di tempat',0,0,'L');

  $this->fpdf->Ln(1.5);
  $this->fpdf->Cell(19,0.5,'Dengan Hormat,',0,0,'L');
  $this->fpdf->Ln(1);



  $this->fpdf->MultiCell(19,0.5,'            Dengan ini kami sampaikan permohonan izin berlibur yang diajukan oleh Bapak '.$detail['nama_ayah'].' dan/atau Ibu '.$detail['nama_ibu'].' selaku orang tua siswa/siswi yang tertera dibawah ini:',0,'L');
    //tabel//
  $this->fpdf->Ln();
  $this->fpdf->SetFont('Times',"B",12);
  $this->fpdf->Cell(8 , 0.5, 'Nama' , 1, 'LR', 'C');
  $this->fpdf->Cell(5 , 0.5, 'No. Induk' , 1, 'LR', 'C');
  $this->fpdf->Cell(5 , 0.5, 'Kelas' , 1, 'LR', 'C');
  $this->fpdf->Ln();
  $this->fpdf->SetFont('Times',"",12);
  $this->fpdf->Cell(8 ,0.5,$detail['nama'],1,'LR','C');
  $this->fpdf->Cell(5 ,0.5,$detail['no_induk'],1,'LR','C');
  $this->fpdf->Cell(5 ,0.5,$detail['kelas'],1,'LR','C');

  //bwh tabel//
  $this->fpdf->Ln(1.5);
  $this->fpdf->Cell(3 , 0.5, 'Tanggal Izin ' , 0, 'LR', 'L');
  $this->fpdf->Cell(0.5 , 0.5, ': ' , 0, 'LR', 'L');
  $this->fpdf->Cell(15 , 0.5,$detail['hari_tgl_izin'], 0, 'LR', 'L');
  $this->fpdf->Ln();
  $this->fpdf->Cell(3 , 0.5, 'Tanggal Kembali ' , 0, 'LR', 'L');
  $this->fpdf->Cell(0.5 , 0.5, ': ' , 0, 'LR', 'L');
  $this->fpdf->Cell(15 , 0.5,$detail['hari_tgl_kembali'], 0, 'LR', 'L');
  $this->fpdf->Ln();
  $this->fpdf->Cell(3 , 0.5, 'Kepentingan ' , 0, 'LR', 'L');
  $this->fpdf->Cell(0.5 , 0.5, ': ' , 0, 'LR', 'L');
  $this->fpdf->Cell(15 , 0.5,$detail['alasan'], 0, 'LR', 'L');

  //bwh//
  $this->fpdf->Ln(1);
  $this->fpdf->SetFont('Times',"",12);
  $this->fpdf->MultiCell(19,0.5,'Demikian surat ini kami sampaikan, atas bantuan dan kerjasamanya kami ucapkan terima kasih.',0,'L');

  //ttd//
  $this->fpdf->Ln(1);
  $this->fpdf->SetFont('Times',"",12);
  $this->fpdf->Cell(19,0.5,'                                                                                                            Wakil Kepala Sekolah Bidang Kesiswaan',0,0,'L');
  $this->fpdf->Ln(3);
  $this->fpdf->Cell(19,0.5,'                                                                                                            '.$wakasek_kesiswaan,0,0,'L');
  $this->fpdf->Ln();
  $this->fpdf->Cell(19,0.5,'                                                                                                            NIP. '.$nip_wakasek_kesiswaan,0,0,'L');
  $this->fpdf->Output('ib_'.$detail['no_surat_1'].'/'.$detail['no_surat_2'].'/'.$detail['no_surat_3'].'/'.$detail['no_surat_4'].'/'.$detail['no_surat_5'].'.pdf',"I");

?>
