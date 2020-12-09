<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Siswa</strong></h2>
  </div>
  <div class="panel-body">

  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.S.N <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="nisn" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="Nomor Induk Siswa Nasional" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nisn"]' required>
        <i class="fa fa-users" style="margin-left:15px;"></i>
        <div id="error-nisn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
         <div id="pesan_komentar">*isi 10 Angka bisa di tulis Nis Tk/Ra  <a target="_blank" href="http://nisn.data.kemdikbud.go.id">http://nisn.data.kemdikbud.go.id</a></div>
      </div>
  </div>
  
  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NKK<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="nis" class="form-control bg-blue class" placeholder="Nomor Induk Kependudukan" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nis"]' required>
        <i class="fa fa-building" style="margin-left:15px;"></i>
        <div id="error-nis" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan Kartu Keluarga</div>
      </div>
	  </div>
  
  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NIK<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="nik" class="form-control bg-blue class" placeholder="Nomor Induk Kependudukan" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nik"]' required>
        <i class="fa fa-building" style="margin-left:15px;"></i>
        <div id="error-nik" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan Kartu Keluarga</div>
      </div>
	  </div>
	  
	  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No Reg Akta Lahir<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="akta" class="form-control bg-blue class" placeholder="No Reg Akta Lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-akta"]' required>
        <i class="fa fa-building" style="margin-left:15px;"></i>
        <div id="error-akta" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan Akta Kelahiran</div>
      </div>
	  </div>

  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_lengkap" class="form-control bg-blue" placeholder="Nama lengkap Calon Siswa" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan ijazah</div>
      </div>
  </div>
  
  
 <div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jenis Kelamin <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Jenis Kelamin" name="jk" data-parsley-group="block1" data-parsley-errors-container='div[id="jk"]' required>
              <option value="">Pilih Jenis Kelamin</option>
              <option value="L">Laki - laki</option>
              <option value="P">Perempuan</option>
      </select>
      <div id="error-jk" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>

  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Kelahiran <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="tempat_lahir" class="form-control bg-blue class" placeholder="Tempat Kelahiran Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tempat_lahir"]' required>
        <i class="fa fa-building" style="margin-left:15px;"></i>
        <div id="error-tempat_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>
 <div class="form-group" >
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <div class="col-sm-4" style="padding:0px">
         <select class="form-control bg-blue class"  name="tgl_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tgl_lahir"]' required>
              <option value="" selected>Pilih Tanggal</option>
              <?php for ($i=1; $i <=31 ; $i++) {
                if ($i < 10) {
                  $i = "0".$i;
                }?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php } ?>
         </select>
         <div id="error-tgl_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
      <div class="col-sm-4"  style="padding-left:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-bln_lahir"]' required>
              <option value="" selected>Pilih Bulan</option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
         </select>
        <div id="error-bln_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
      <div class="col-sm-4" style="margin-left:-27px;">

         <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="thn_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-thn_lahir"]' required>
          <option value="" selected>Pilih Tahun Lahir</option>
          <?php
          $thn_max=date('Y') - 2;
          for ($i=2000; $i <= $thn_max; $i++) {?>
          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
          <?php } ?>
         </select>
          <div id="error-thn_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>

    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kewarganegaraan <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Kewarganegaraan" name="kwg" data-parsley-group="block1" data-parsley-errors-container='div[id="error-kwg"]' required>
              <option value="">Pilih Kewarganegaraan</option>
              <option value="WNI">WNI</option>
              <option value="WNA">WNA</option>
      </select>
      <div id="error-kwg" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status dalam Keluarga <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Status dalam Keluarga" name="status_keluarga" data-parsley-group="block1" data-parsley-errors-container='div[id="error-status_keluarga"]' required>
              <option value="">Pilih Status dalam Keluarga</option>
              <option value="Anak Kandung">Anak Kandung</option>
              <option value="Anak Angkat">Anak Angkat</option>
      </select>
      <div id="error-status_keluarga" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jumlah Kakak <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Jumlah Kakak" name="kakak" data-parsley-group="block1" data-parsley-errors-container='div[id="error-jumlah_kakak"]' required>
              <option value="">Pilih Jumlah Kakak</option>
			  <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
      </select>
      <div id="error-jumlah_kakak" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jumlah Adik <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Jumlah Adik" name="adik" data-parsley-group="block1" data-parsley-errors-container='div[id="error-jumlah_adik"]' required>
              <option value="">Pilih Jumlah Adik</option>
			  <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
      </select>
      <div id="error-jumlah_adik" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Anak Ke <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Anak Ke" name="anak" data-parsley-group="block1" data-parsley-errors-container='div[id="error-anak_ke"]' required>
              <option value="">Pilih Anak Ke</option>
              <option value="1">1</option>
              <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
      </select>
      <div id="error-anak_ke" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status Anak <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Yatim-Piatu-Yatim Piatu" name="anak_ytm" data-parsley-group="block1" data-parsley-errors-container='div[id="error-anak_ytm"]' required>
              <option value="">Pilih</option>
              <option value="Lengkap">Lengkap</option>
              <option value="Yatim">Yatim</option>
			  <option value="Piatu">Piatu</option>
			  <option value="Yatim Piatu">Yatim Piatu</option>
      </select>
      <div id="error-anak_ytm" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>

<div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Bahasa Sehari hari <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="bahasa" class="form-control bg-blue" placeholder="Bahasa Sehari hari" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-bahasa"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-bahasa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>
		
        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="alamat_siswa" class="form-control bg-blue class" placeholder="Alamat Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-alamat_siswa"]' required>
              <i class="fa fa-map-marker" style="margin-left:15px;"></i>
              <div id="error-alamat_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              <div id="pesan_komentar">*Di tulis mulai dari Jalan, RT/RW, Dusun, Desa, Kecamatan, Kabupaten, kode pos dan provinsi. Contoh : Jl. Kayu Besar RT/RW 01/01 Ds. Tumpatan Nibung Kec. Batang Kuis Kab. Deli Serdang 78393 Sumatera Utara</div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_hp_siswa" class="form-control bg-blue class" maxlength="14" onkeypress="return hanyaAngka(this);" placeholder="No. Handphone Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-no_hp_siswa"]' required>
              <i class="fa fa-phone" style="margin-left:15px;"></i>
              <div id="error-no_hp_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
        
<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tinggal<span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Tinggal" name="tinggal" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tinggal"]' required>
              <option value="">Tinggal</option>
              <option value="Orang Tua">Orang Tua</option>
              <option value="Saudara">Saudara</option>
			  <option value="Asrama">Asrama</option>
			  <option value="Kost">Kost</option>
      </select>
      <div id="error-tinggal" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>
    
   
     <div class="form-group" style="padding-bottom:20px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jarak Ke Sekolah<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="jarak_tempuh" class="form-control bg-blue" placeholder="Jarak Kesekolah" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-jarak_tempuh"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-jarak_tempuh" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Hitungan meter</div>
      </div>
  </div>
  
   <div class="form-group" style="padding-bottom:20px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Waktu Tempuh<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="waktu_tempuh" class="form-control bg-blue" placeholder="Waktu Tempuh" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-waktu_tempuh"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-waktu_tempuh" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Hitungan menit</div>
      </div>
  </div>
  
<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Ukuran Seragam<span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Seragam" name="seragam" data-parsley-group="block1" data-parsley-errors-container='div[id="error-seragam"]' required>
              <option value="">Pilih Ukuran Seragam</option>
			  <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
      </select>
      <div id="error-seragam" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>

    </div>
    </div>


<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>
