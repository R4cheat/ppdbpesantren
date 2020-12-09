<style>
  #tbl_input{width:50px;text-align: center;}
  #tbl_input2{width:100px;text-align: center;}
  #th_center > th {text-align: center;}
</style>

<?php
error_reporting(0);
$cek    = $user->row();
$level = $cek->level;
$nama   = $cek->nama_lengkap;
$poto = (empty($user->foto) || !file_exists("fotoo/".$user->foto) )?"img/users.jpg":"fotoo/".$user->foto;
$nota = (empty($cek->buktibayar))?"../img/image-placeholder.jpg":"../bukti/".$cek->buktibayar;

$tgl = date('m-Y');
?>
<!-- Main content -->
<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-sm-3">
      <div class="panel panel-flat">
          <div class="panel-body">
                <center>
  <!--               <a href="<?=$poto;?>" target="_blank"><img src="<?=$poto;?>" alt="Upload File" class="img-responsive img-fluid" style="max-width: 10vw; margin-bottom: 1vw;"></a>   -->
                 <form action="<?=site_url('panel_siswa/douploadfoto');?>" method="POST" enctype="multipart/form-data" >
                    <img src="<?=$poto;?>" alt="Upload File" class="img-responsive img-fluid" style="max-width: 15vw; margin-bottom: 1vw;"></a>
                    <input accept="image/*" type="file" name="fotoo" class="btn btn-success">
                    <hr style="margin:0px;margin-bottom:3px;">
                    <button class="btn btn-default btn-lg" type="submit"><i class="icon-upload"></i> Upload Foto</button>
                  </form>

              </center>
            <br>
            <fieldset class="content-group">
              <hr style="margin-top:0px;">
              <i class="icon-calendar"></i> <b>Tanggal Daftar</b> :
              <?php echo $this->Model_data->tgl_id(date('d-m-Y H:i:s', strtotime($user->tgl_siswa))); ?>
              <hr>
               <center>
                <a href="panel_siswa/biodataedit" class="btn btn-success"><i class="fa fa-sign-in margin-r-5"></i> Perbaharui Data</a>
              </center> 

            </fieldset>
          </form>
          </div>
      </div>
      </div>

      <div class="col-md-9">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Biodata Siswa</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">NO. PENDAFTARAN</th>
                      <th width="1%">:</th>
                      <td><?php echo $user->no_pendaftaran; ?></td>
                    </tr>
                    <tr>
                      <th>N.I.S.N</th>
                      <th>:</th>
                      <td><?php echo $user->nisn; ?></td>
                    </tr>
                    <tr>
                      <th>NKK</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->nis); ?></td>
                    </tr>
                    <tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->nik); ?></td>
                    </tr>
					<tr>
                      <th>Akta</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->akta); ?></td>
                    </tr>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->nama_lengkap); ?></td>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin</th>
                      <th>:</th>
                      <td><?php echo $user->jk; ?></td>
                    </tr>
                    <tr>
                      <th>Tempat, Tgl Lahir</th>
                      <th>:</th>
                      <td><?php echo "$user->tempat_lahir, ". $this->Model_data->tgl_id($user->tgl_lahir); ?></td>
                    </tr>
                    <tr>
                      <th>Agama</th>
                      <th>:</th>
                      <td><?php echo $user->agama; ?></td>
                    </tr>
                    <tr>
                      <th>Status dalam Keluarga</th>
                      <th>:</th>
                      <td><?php echo $user->status_keluarga; ?></td>
                    </tr>
					<tr>
                      <th>Jumlah Kakak</th>
                      <th>:</th>
                      <td><?php echo $user->kakak; ?></td>
                    </tr>
					<tr>
                      <th>Jumlah Adik</th>
                      <th>:</th>
                      <td><?php echo $user->adik; ?></td>
                    </tr>
					<tr>
                      <th>Anak Ke</th>
                      <th>:</th>
                      <td><?php echo $user->anak; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <th>:</th>
                      <td><?php echo $user->alamat_siswa; ?></td>
                    </tr>
					 <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_siswa; ?></td>
                    </tr>
					<tr>
                      <th>Bahasa Sehari-hari</th>
                      <th>:</th>
                      <td><?php echo $user->bahasa; ?></td>
                    </tr>
					<tr>
                      <th>Tinggal</th>
                      <th>:</th>
                      <td><?php echo $user->tinggal; ?></td>
                    </tr>
					<tr>
                      <th>Golongan Darah</th>
                      <th>:</th>
                      <td><?php echo $user->gol_darah; ?></td>
                    </tr>
					<tr>
                      <th>Riwayat Penyakit Yang Pernah Diderita</th>
                      <th>:</th>
                      <td><?php echo $user->penyakit; ?></td>
                    </tr>
					<tr>
                      <th>Kelainan Jasmani</th>
                      <th>:</th>
                      <td><?php echo $user->kelainan_jasmani; ?></td>
                    </tr>
					<tr>
                      <th>Tinggi Badan</th>
                      <th>:</th>
                      <td><?php echo $user->tinggi_badan; ?> CM</td>
                    </tr>
					<tr>
                      <th>Berat Badan</th>
                      <th>:</th>
                      <td><?php echo $user->berat_badan; ?> KG</td>
                    </tr>
					<tr>
                      <th>Kesenian</th>
                      <th>:</th>
                      <td><?php echo $user->kesenian; ?></td>
                    </tr>
					<tr>
                      <th>Olahraga</th>
                      <th>:</th>
                      <td><?php echo $user->olahraga; ?></td>
                    </tr>
					<tr>
                      <th>Organisasi</th>
                      <th>:</th>
                      <td><?php echo $user->organisasi; ?></td>
                    </tr>
					<tr>
                      <th>Lainnya</th>
                      <th>:</th>
                      <td><?php echo $user->lainnya; ?></td>
                    </tr>
					<tr>
                      <th>No. KPS</th>
                      <th>:</th>
                      <td><?php echo $user->no_kps; ?></td>
                    </tr>
					<tr>
                      <th>No. PKH</th>
                      <th>:</th>
                      <td><?php echo $user->no_pkh; ?></td>
                    </tr>
					<tr>
                      <th>No. KIP</th>
                      <th>:</th>
                      <td><?php echo $user->no_kip; ?></td>
                    </tr>
					<tr>
                      <th>No. KM/RM</th>
                      <th>:</th>
                      <td><?php echo $user->no_kmrm; ?></td>
                    </tr>
					<tr>
                      <th>Transportasi</th>
                      <th>:</th>
                      <td><?php echo $user->transportasi; ?></td>
                    </tr>
					<tr>
                      <th>Jarak Ke Sekolah</th>
                      <th>:</th>
                      <td><?php echo $user->jarak_tempuh; ?> Meter</td>
                    </tr>
					<tr>
                      <th>Waktu Tempuh</th>
                      <th>:</th>
                      <td><?php echo $user->waktu_tempuh; ?> Menit</td>
                    </tr>
					<tr>
                      <th>Ukuran Seragam</th>
                      <th>:</th>
                      <td><?php echo $user->seragam; ?></td>
                    </tr>
                      <tr>
                      <th>Jurusan</th>
                      <th>:</th>
                      <td><?php echo $user->jurusan; ?></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>

      <div class="col-md-4">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Data Ayah</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><?php echo ucwords($user->nama_ayah); ?></td>
                    </tr>
					<tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><?php echo $user->nik_ayah; ?></td>
                    </tr>
					<tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tempat_lahir_ayah; ?></td>
                    </tr>
					<tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tgl_lahir_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td><?php echo $user->pdd_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td><?php echo $user->pekerjaan_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td><?php echo $user->penghasilan_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_ayah; ?></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>

      <div class="col-md-4">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Data Ibu</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><?php echo ucwords($user->nama_ibu); ?></td>
                    </tr>
					<tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><?php echo $user->nik_ibu; ?></td>
                    </tr>
					<tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tempat_lahir_ibu; ?></td>
                    </tr>
					<tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tgl_lahir_ibu; ?></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td><?php echo $user->pdd_ibu; ?></td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td><?php echo $user->pekerjaan_ibu; ?></td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td><?php echo $user->penghasilan_ibu; ?></td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_ibu; ?></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>

      <div class="col-md-4">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Data Wali</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><?php echo ucwords($user->nama_wali); ?></td>
                    </tr>
					<tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><?php echo $user->nik_wali; ?></td>
                    </tr>
					<tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tempat_lahir_wali; ?></td>
                    </tr>
					<tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tgl_lahir_wali; ?></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td><?php echo $user->pdd_wali; ?></td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td><?php echo $user->pekerjaan_wali; ?></td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td><?php echo $user->penghasilan_wali; ?></td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_wali; ?></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>


      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-library2"></i> Data Sekolah</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="30%">NPSN Sekolah</th>
                      <th width="1%">:</th>
                      <td><?php echo $user->npsn_sekolah; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Sekolah</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->nama_sekolah); ?></td>
                    </tr>
                    <tr>
                      <th>Status Sekolah</th>
                      <th>:</th>
                      <td><?php echo $user->status_sekolah; ?></td>
                    </tr>
                    <tr>
                      <th>Model Ujian Nasional</th>
                      <th>:</th>
                      <td><?php echo $user->model_un; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat Sekolah</th>
                      <th>:</th>
                      <td><?php echo $user->alamat_sekolah; ?></td>
                    </tr>
                    <tr>
                      <th>Tahun Lulus</th>
                      <th>:</th>
                      <td><?php echo $user->thn_lulus; ?></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>


    </div>
    <!-- /dashboard content -->
