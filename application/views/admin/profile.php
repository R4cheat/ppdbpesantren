<?php
$user = $user->row();
$level = $user->level;
$nama    = $user->nama_lengkap;
$logo = (empty($user->logos) || !file_exists("fotoo/".$user->logos) )?"img/users.jpg":"fotoo/".$user->logos;
?>
<!-- Main content -->
<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
              <center>
               <!-- <img src="<?=$logo;?>" alt="<?php echo $user->nama_lengkap; ?>" class="img-circle" width="176">	-->
				<form action="<?=site_url('panel_admin/douploadfoto');?>" method="POST" enctype="multipart/form-data" >
                    <img src="<?=$logo;?>" alt="Upload File" class="img-responsive img-fluid" style="max-width: 15vw; margin-bottom: 1vw;"></a>
                    <input accept="image/*" type="file" name="fotoo" class="btn btn-success">
                    <hr style="margin:0px;margin-bottom:3px;">
                    <button class="btn btn-default btn-lg" type="submit"><i class="icon-upload"></i> Upload Foto</button>
                  </form>
              </center>
            <br>
            <fieldset class="content-group">
              <hr style="margin-top:0px;">
           <!--   <i class="icon-calendar"></i> <b>Tanggal Daftar</b> : <?php echo date('d-m-Y H:i:s', strtotime($user->tgl_daftar)); ?>	-->
            </fieldset>
          </form>
          </div>
      </div>

      <div class="panel panel-flat bg-success">
              <div class="panel-heading">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Ubah Profile</legend>
              <?php
              echo $this->session->flashdata('msg');
              ?>
              <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label col-lg-3">Username</label>
                  <div class="col-lg-9">
                    <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Nama Sekolah</label>
                  <div class="col-lg-9">
                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $user->nama_lengkap; ?>" placeholder="Nama Lengkap" maxlength="100" required>
                  </div>
                </div>
				<div class="form-group">
                  <label class="control-label col-lg-3">Alamat Sekolah</label>
                  <div class="col-lg-9">
                    <input type="text" name="alamat_sekolah" class="form-control" value="<?php echo $user->alamat_sekolah; ?>" placeholder="Alamat Sekolah" maxlength="500" required>
                  </div>
                </div>
				<div class="form-group">
                  <label class="control-label col-lg-3">Kepala Sekolah</label>
                  <div class="col-lg-9">
                    <input type="text" name="kepala_sekolah" class="form-control" value="<?php echo $user->kepala_sekolah; ?>" placeholder="Nama Kepala" maxlength="100" required>
                  </div>
				  </div>
				  <div class="form-group">
                  <label class="control-label col-lg-3">Ketua Panitia PPDB</label>
                  <div class="col-lg-9">
                    <input type="text" name="panitia" class="form-control" value="<?php echo $user->panitia; ?>" placeholder="Ketua Panitia PPDB" maxlength="100" required>
                  </div>
                </div>
				<div class="form-group">
                  <label class="control-label col-lg-3">E-mail Sekolah</label>
                  <div class="col-lg-9">
                    <input type="text" name="email" class="form-control" value="<?php echo $user->email; ?>" placeholder="E-mail" maxlength="100" required>
                  </div>
                </div>
				<div class="form-group">
                  <label class="control-label col-lg-3">Website</label>
                  <div class="col-lg-9">
                    <input type="text" name="website" class="form-control" value="<?php echo $user->website; ?>" placeholder="Website" maxlength="100" required>
                  </div>
                </div>
				<div class="form-group">
                  <label class="control-label col-lg-3">Telephon</label>
                  <div class="col-lg-9">
                    <input type="text" name="telp" class="form-control" value="<?php echo $user->telp; ?>" placeholder="Telephon" maxlength="100" required>
                  </div>
                </div>
				<div class="form-group">
                  <label class="control-label col-lg-3">Desa</label>
                  <div class="col-lg-9">
                    <input type="text" name="desa" class="form-control" value="<?php echo $user->desa; ?>" placeholder="Desa" maxlength="100" required>
                  </div>
                </div>
				<div class="form-group">
                  <label class="control-label col-lg-3">Nomor Surat</label>
                  <div class="col-lg-9">
                    <input type="text" name="no_lulus" class="form-control" value="<?php echo $user->no_lulus; ?>" placeholder="Nomor Surat" maxlength="100" required>
                  </div>
                </div>
            
            <div class="col-md-12">
              <hr style="margin-top:-10px;">
              <button type="submit" name="btnupdate" class="btn btn-primary" style="float:right;">Simpan</button>
            </div>
			</fieldset>
          </form>
          </div>
      </div>
      </div>


    </div>
    <!-- /dashboard content -->
