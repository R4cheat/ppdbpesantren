<?php
  $cek    = $user->row();
  $id_user = $cek->id_siswa;
  $nama    = $cek->nama_lengkap;
  $kk = (empty($cek->kartu_keluarga) || !file_exists("kke/".$cek->kartu_keluarga) )?"img/image-placeholder.jpg":"kke/".$cek->kartu_keluarga;

  $tgl = date('m-Y');
?>

<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
      <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-flat bg-success">
              <div class="panel-heading">
                <center>
                  <form action="<?=site_url('panel_siswa/douploadkk');?>" method="POST" enctype="multipart/form-data" >
                    <img src="<?=$kk;?>" alt="Upload File" class="img-responsive img-fluid" style="max-width: 21vw; margin-bottom: 1vw;">

                    <input accept="image/*" type="file" name="kke" class="btn btn-success">
                    <hr style="margin:0px;margin-bottom:10px;">
                    <button class="btn btn-default btn-lg" type="submit"><i class="icon-upload"></i> Upload Scan Kartu Keluarga</button>
                  </form>
                </center>
              </div>
            </div>
        </div>

      </div>
    </div>
</div>