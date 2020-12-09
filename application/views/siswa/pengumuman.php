<?php
  $cek    = $user->row();
  $id_user = $cek->id_siswa;
  $nama    = $cek->nama_lengkap;

  $tgl = date('m-Y');
?>

<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
    <?php if ($cek->status_pendaftaran == 'lulus') {?>
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="glyphicon glyphicon-bullhorn"></i> Pengumuman
          </h3>
        </div>
        <div class="panel-body">
          <h3>
            <center>
              Selamat <b><?php echo $nama; ?></b> <span class="label label-success" style="font-size:20px;">Lulus</span> Seleksi Sebagai Calon Peserta Didik Baru <b>PONPES Mawaridusallam</b>, Silahkan Cetak Surat Pengumuman Sebagai Bukti Lulus Seleksi.
              <hr>
              <a href="panel_siswa/cetak_lulus" class="btn btn-success btn-lg" target="_blank"><i class="icon-printer4"></i> Cetak Bukti Lulus</a>
            </center>
          </h3>
        </div>
      </div>
    <?php }elseif ($cek->status_pendaftaran == 'tidak lulus') { ?>
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="glyphicon glyphicon-bullhorn"></i> Pengumuman
          </h3>
        </div>
        <div class="panel-body" style="color:red">
          <h3>
            <center>
              Mohon Maaf <b><?php echo $nama; ?></b>
               <span class="label label-danger" style="font-size:20px;">Tidak Lulus</span> <br>
              Sebagai Calon Peserta Didik Baru <b>PONPES Mawaridusallam</b>.
            </center>
            <br>
          </h3>
        </div>
      </div>
    <?php }else{ ?>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="glyphicon glyphicon-bullhorn"></i> Pengumuman
          </h3>
        </div>
        <div class="panel-body">
          <h3>
            <center>~ Belum ada Pengumuman dari Panitia PPDB Online PONPES Mawaridusallam ~</center>
          </h3>
        </div>
      </div>
    <?php } ?>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
