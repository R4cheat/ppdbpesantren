<?php
  $cek    = $user->row();
  $id_user = $cek->id_siswa;
  $nama    = $cek->nama_lengkap;
  $nota = (empty($cek->buktibayar) || !file_exists("bukti/".$cek->buktibayar) )?"img/image-placeholder.jpg":"bukti/".$cek->buktibayar;

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
                  <form action="<?=site_url('panel_siswa/douploadbukti');?>" method="POST" enctype="multipart/form-data" >
                    <img src="<?=$nota;?>" alt="Upload File" class="img-responsive img-fluid" style="max-width: 19vw; margin-bottom: 1vw;">

                    <input accept="image/*" type="file" name="bukti" class="btn btn-success">
                    <hr style="margin:0px;margin-bottom:10px;">
                    <button class="btn btn-default btn-lg" type="submit"><i class="icon-upload"></i> Upload Bukti Pembayaran</button>
                  </form>
                </center>
              </div>
            </div>
        </div>

      </div>
    </div>
</div>
