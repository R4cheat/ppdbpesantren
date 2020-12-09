<style>
  #tbl_input{width:50px;text-align: center;}
  #tbl_input2{width:100px;text-align: center;}
  #th_center > th {text-align: center;}
</style>

<?php
  $user = $user->row();
  $id_user = $user->id_siswa;
  $nama    = $user->nama_lengkap;
  $poto = (empty($user->foto) || !file_exists("fotoo/".$user->foto) )?"img/users.jpg":"fotoo/".$user->foto;
  $nota = (empty($user->buktibayar || !file_exists("bukti/".$user->buktibayar)))?"img/image-placeholder.jpg":"psb/bukti/".$user->buktibayar;
  $tgllahir=explode("-",$user->tgl_lahir);
  $arrbln = ["Pilih Bulan","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
?>
<!-- Main content -->
<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3">
      <div class="panel panel-flat">
          <div class="panel-body">
              <center>
                 <form action="<?=site_url('panel_siswa/douploadfoto');?>" method="POST" enctype="multipart/form-data" >
                    <input type="hidden" name="act" value="edit"/>
                    <img id="img" src="<?=$poto;?>" alt="Upload File" class="img-responsive img-fluid">
                    <input accept="image/*" type="file" name="fotoo" id="fotoo" class=" form-control bg-success">
                    <hr style="margin:0px;margin-bottom:3px;">
                    <button class="btn btn-default btn-lg" type="submit"><i class="icon-upload"></i> Perbaharui Foto</button>
                  </form>
              </center>
            <br>
            <fieldset class="content-group">
              <hr style="margin-top:0px;">
              <i class="icon-calendar"></i> <b>Tanggal Daftar</b> :
              <?=$this->Model_data->tgl_id(date('d-m-Y H:i:s', strtotime($user->tgl_siswa))); ?>
              <hr>
            </fieldset>
          </form>
          </div>
      </div>
      </div>

    <form action="<?=site_url('panel_siswa/doupdate');?>" method="POST" enctype="multipart/form-data" >
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
                      <td><?=$user->no_pendaftaran; ?></td>
                    </tr>
                    <tr>
                      <th>N.I.S.N</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nisn; ?>" name="nisn"/></td>
                    </tr>
                    <tr>
                      <th>NKK</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nis; ?>" name="nis"></td>
                    </tr>
                    <tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nik; ?>" name="nik"></td>
                    </tr>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_lengkap; ?>" name="nama_lengkap"></td>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="jk" class="form-control"';
                            echo form_dropdown('jk', $v_jekel, $user->jk,$js);
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Tempat, Tgl Lahir</th>
                      <th>:</th>
                      <td>
                          <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Kelahiran Calon Siswa" value="<?=$user->tempat_lahir;?>" required>
                          <div class="col-sm-4" style="padding:0px">
                            <select class="form-control class"  name="tgl_lahir" required>
                              <option value="" selected>Pilih Tanggal</option>
                              <?php for ($i=1; $i <=31 ; $i++) {
                                $i = sprintf("%02d",$i);
                                $selected = "";
                                if($tgllahir[0] == $i){$selected = "selected";}
                              ?>
                                <option <?=$selected;?> value="<?=$i;?>"><?=$i;?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="col-sm-4">
                            <select class="form-control class" data-placeholder="Pilih Bulan" name="bln_lahir" required>
                              <?php foreach ($arrbln as $key => $i) {
                                  $bln = sprintf("%02d",$key);
                                  $selected = "";
                                  if($tgllahir[1] == $bln){$selected = "selected";}
                                  ?>
                                  <option <?=$selected;?> value="<?=$bln;?>"><?=$i;?></option>
                                <?php } ?>
                            </select>
                          </div>
                          <div class="col-sm-4">
                          <select class="form-control " data-placeholder="Pilih Tahun Lahir" name="thn_lahir" required>
                            <option value="" >Pilih Tahun Lahir</option>
                            <?php
                              $thn_max=date('Y') - 2;
                              for ($i=2000; $i <= $thn_max; $i++) {
                                $selected = "";
                                if($tgllahir[2] == $i){$selected = "selected";}
                            ?>
                                <option  <?=$selected;?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php } ?>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>Agama</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="agama" class="form-control"';
                          echo form_dropdown('agama', $v_agama, $user->agama,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Status dalam Keluarga</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="status_keluarga" class="form-control"';
                          echo form_dropdown('status_keluarga', $v_status_keluarga, $user->status_keluarga,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Jumlah Kakak</th>
                      <th>:</th>
                      <td>
                        <select class="form-control class"  name="kakak" required>
                          <option value="" selected>Jumlah Kakak</option>
                          <?php for ($i=0; $i <=10 ; $i++) {
                            $selected = "";
                            if($user->kakak == $i){$selected = "selected";}
                          ?>
                            <option <?=$selected;?> value="<?=$i;?>"><?=$i;?></option>
                          <?php } ?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th>Jumlah Adik</th>
                      <th>:</th>
                      <td>
                        <select class="form-control class"  name="adik" required>
                          <option value="" selected>Jumlah Adik</option>
                          <?php for ($i=0; $i <=10 ; $i++) {
                            $selected = "";
                            if($user->adik == $i){$selected = "selected";}
                          ?>
                            <option <?=$selected;?> value="<?=$i;?>"><?=$i;?></option>
                          <?php } ?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th>Anak Ke</th>
                      <th>:</th>
                      <td>
                        <select class="form-control class"  name="anak" required>
                          <option value="" selected>Jumlah Anak</option>
                          <?php for ($i=0; $i <=10 ; $i++) {
                            $selected = "";
                            if($user->anak == $i){$selected = "selected";}
                          ?>
                            <option <?=$selected;?> value="<?=$i;?>"><?=$i;?></option>
                          <?php } ?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->alamat_siswa; ?>" name="alamat_siswa"></td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->no_hp_siswa; ?>" name="no_hp_siswa"></td>
                    </tr>
					 <tr>
                      <th>Bahasa Sehari-hari</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->bahasa; ?>" name="bahasa"></td>
                    </tr>
					<tr>
                    <th>Pilih Tinggal</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="tinggal" class="form-control"';
                            echo form_dropdown('tinggal', $v_ting, $user->tinggal,$js);
                          ?>
                      </td>
                    </tr>
					<th>Golongan Darah</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="gol_darah" class="form-control"';
                            echo form_dropdown('gol_darah', $v_darah, $user->gol_darah,$js);
                          ?>
                      </td>
                    </tr>
					<tr>
                      <th>Riwayat Penyakit Yang Pernah Diderita</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->penyakit; ?>" name="penyakit"></td>
                    </tr>
					<tr>
                      <th>Kelainan Jasmani</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->kelainan_jasmani; ?>" name="kelainan_jasmani"></td>
                    </tr>
					<tr>
                      <th>Tinggi Badan</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tinggi_badan; ?>" name="tinggi_badan"> CM</td>
                    </tr>
					<tr>
                      <th>Berat Badan</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->berat_badan; ?>" name="berat_badan"> KG</td>
                    </tr>
					<tr>
                      <th>Kesenian</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->kesenian; ?>" name="kesenian"></td>
                    </tr>
					<tr>
                      <th>Olahraga</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->olahraga; ?>" name="olahraga"></td>
                    </tr>
					<tr>
                      <th>Organisasi</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->organisasi; ?>" name="organisasi"></td>
                    </tr>
					<tr>
                      <th>Lainnya</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->lainnya; ?>" name="lainnya"></td>
                    </tr>
					<tr>
                      <th>No. KPS</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->no_kps; ?>" name="no_kps"></td>
                    </tr>
					<tr>
                      <th>No. PKH</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->no_pkh; ?>" name="no_pkh"></td>
                    </tr>
					<tr>
                      <th>No. KIP</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->no_kip; ?>" name="no_kip"></td>
                    </tr>
					<tr>
                      <th>No. KMRM</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->no_kmrm; ?>" name="no_kmrm"></td>
                    </tr>
					<tr>
                      <th>Transportasi</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="transportasi" class="form-control"';
                            echo form_dropdown('transportasi', $v_trans, $user->transportasi,$js);
                          ?>
                      </td>
                    </tr>
					<tr>
                      <th>Jarak Ke Sekolah</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->jarak_tempuh; ?>" name="jarak_tempuh"> Meter</td>
                    </tr>
					<tr>
                      <th>Waktu Tempuh</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->waktu_tempuh; ?>" name="waktu_tempuh"> Menit</td>
                    </tr>
					<tr>
                      <th>Ukuran Seragam</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="seragam" class="form-control"';
                            echo form_dropdown('seragam', $v_serag, $user->seragam,$js);
                          ?>
                      </td>
                    </tr>
					<tr>
                      <th>Pilih Jurusan</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="jurusan" class="form-control"';
                            echo form_dropdown('jurusan', $v_jur, $user->jurusan,$js);
                          ?>
                      </td>
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
              <legend class="text-bold"><i class="icon-user"></i> Data Ayah</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_ayah; ?>" name="nama_ayah"></td>
                    </tr>
					<tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nik_ayah; ?>" name="nik_ayah"></td>
                    </tr>
					<tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tempat_lahir_ayah; ?>" name="tempat_lahir_ayah"></td>
                    </tr>
					<tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tgl_lahir_ayah; ?>" name="tgl_lahir_ayah"></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="pdd_ayah" class="form-control"';
                            echo form_dropdown('pdd_ayah', $v_pdd, $user->pdd_ayah,$js);
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="pekerjaan_ayah" class="form-control"';
                          echo form_dropdown('pekerjaan_ayah', $v_pekerjaan, $user->pekerjaan_ayah,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="penghasilan_ayah" class="form-control"';
                          echo form_dropdown('penghasilan_ayah', $v_penghasilan, $user->penghasilan_ayah,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->no_hp_ayah; ?>" name="no_hp_ayah"></td>
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
              <legend class="text-bold"><i class="icon-user"></i> Data Ibu</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_ibu; ?>" name="nama_ibu"></td>
                    </tr>
					<tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nik_ibu; ?>" name="nik_ibu"></td>
                    </tr>
					<tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tempat_lahir_ibu; ?>" name="tempat_lahir_ibu"></td>
                    </tr>
					<tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tgl_lahir_ibu; ?>" name="tgl_lahir_ibu"></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="pdd_ibu" class="form-control"';
                            echo form_dropdown('pdd_ibu', $v_pdd, $user->pdd_ibu,$js);
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td>
                       <?php
                          $js = 'id="pekerjaan_ibu" class="form-control"';
                          echo form_dropdown('pekerjaan_ibu', $v_pekerjaan, $user->pekerjaan_ibu,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td>
                      <?php
                          $js = 'id="penghasilan_ibu" class="form-control"';
                          echo form_dropdown('penghasilan_ibu', $v_penghasilan, $user->penghasilan_ibu,$js);
                        ?>
                        </td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                     <td><input type="input" required class="form-control" value="<?=$user->no_hp_ibu; ?>" name="no_hp_ibu"></td>
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
              <legend class="text-bold"><i class="icon-user"></i> Data Wali</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_wali; ?>" name="nama_wali"></td>
                    </tr>
					<tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nik_wali; ?>" name="nik_wali"></td>
                    </tr>
					<tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tempat_lahir_wali; ?>" name="tempat_lahir_wali"></td>
                    </tr>
					<tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tgl_lahir_wali; ?>" name="tgl_lahir_ayah"></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="pdd_wali" class="form-control"';
                            echo form_dropdown('pdd_wali', $v_pdd, $user->pdd_wali,$js);
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td>
                       <?php
                          $js = 'id="pekerjaan_wali" class="form-control"';
                          echo form_dropdown('pekerjaan_wali', $v_pekerjaan, $user->pekerjaan_wali,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="penghasilan_wali" class="form-control"';
                          echo form_dropdown('penghasilan_wali', $v_penghasilan, $user->penghasilan_wali,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                     <td><input type="input" required class="form-control" value="<?=$user->no_hp_wali; ?>" name="no_hp_wali"></td>
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
                      <td><input type="input" required class="form-control" value="<?=$user->npsn_sekolah; ?>" name="npsn_sekolah"></td>
                    </tr>
                    <tr>
                      <th>Nama Sekolah</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_sekolah; ?>" name="nama_sekolah"></td>
                    </tr>
                    <tr>
                      <th>Status Sekolah</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="status_sekolah" class="form-control"';
                          echo form_dropdown('status_sekolah', $v_status_sekolah, $user->status_sekolah,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Model Ujian Nasional</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="model_un" class="form-control"';
                          echo form_dropdown('model_un', $v_model_un, $user->model_un,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Alamat Sekolah</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->alamat_sekolah; ?>" name="alamat_sekolah"></td>
                    </tr>
                    <tr>
                      <th>Tahun Lulus</th>
                      <th>:</th>
                      <td>
                          <select class="form-control " data-placeholder="Pilih Tahun Lulus" name="thn_lulus" required>
                            <option value="" >Pilih Tahun Lulus</option>
                            <?php
                              $thn_max=date('Y');
                              for ($i=$thn_max; $i >= 2010; $i--)  {
                                $selected = "";
                                if($i ==$user->thn_lulus){$selected = "selected";}
                            ?>
                                <option  <?=$selected;?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php } ?>
                          </select>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>

      </div>
      <div class="col-md-12 ">
          <button class="btn btn-primary btn-lg pull-right" type="submit"><i class="icon-floppy-disk"></i> Perbaharui Data</button>
      </div>


                  </form>
      </div>
    </div>
    <!-- /dashboard content -->
