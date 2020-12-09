<?php
  $cek    = $user->row();
  $id_user = $cek->id_siswa;
  $nama    = $cek->nama_lengkap;
  $poto = (empty($cek->foto))?"../img/users.jpg":"../psb/fotoo/".$cek->foto;

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
                   <form action="<?=site_url('panel_siswa/douploadfoto');?>" method="POST" enctype="multipart/form-data" >
                    <img src="<?=$poto;?>" alt="Upload File" class="img-responsive img-fluid" style="max-width: 19vw; margin-bottom: 1vw;"></a>

                    <input accept="image/*" type="file" name="fotoo" class="btn btn-success">
                    <hr style="margin:0px;margin-bottom:5px;">
                    <button class="btn btn-default btn-lg" type="submit"><i class="icon-upload"></i> Upload Foto</button>
                  </form>
              </center>
              </div>
            </div>
        </div>

      </div>
    </div>
</div>
