<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Ayah</strong></h2>
  </div>
  <div class="panel-body">

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="nama_ayah" class="form-control bg-blue" placeholder="Nama lengkap Ayah"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_ayah"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-nama_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
		<div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NIK <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="nik_ayah" class="form-control bg-blue" placeholder="NIK Ayah"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nik_ayah"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-nik_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
		<div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Lahir <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="tempat_lahir_ayah" class="form-control bg-blue" placeholder="Tempat Lahir Ayah"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-tempat_lahir_ayah"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-tempat_lahir_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
		<div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Lahir <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="tgl_lahir_ayah" class="form-control bg-blue" placeholder="Tempat Lahir Ayah"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-tgl_lahir_ayah"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-tgl_lahir_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
			<div id="pesan_komentar">*Isian dd-mm-yyyy Contoh : 12-12-1999</div>           
		   </div>
        </div>


        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pendidikan Ayah" name="pdd_ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-pdd_ayah"]' required>
                  <option value="">Pilih Pendidikan Ayah</option>
                  <?php foreach ($v_pdd as $baris): ?>
                    <option value="<?php echo $baris->nama_pdd; ?>"><?php echo $baris->nama_pdd; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-pdd_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Ayah" name="pekerjaan_ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-pekerjaan_ayah"]' required>
                  <option value="">Pilih Pekerjaan Ayah</option>
                  <?php foreach ($v_pekerjaan_ayah as $baris): ?>
                    <option value="<?php echo $baris->nama_pekerjaan; ?>"><?php echo $baris->nama_pekerjaan; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-pekerjaan_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Ayah" name="penghasilan_ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-penghasilan_ayah"]' required>
                  <option value="">Pilih Penghasilan Ayah</option>
                  <?php foreach ($v_penghasilan as $baris): ?>
                    <option value="<?php echo $baris->nama_penghasilan; ?>"><?php echo $baris->nama_penghasilan; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-penghasilan_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_hp_ayah" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="14" placeholder="No. Handphone Ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-no_hp_ayah"]' required>
              <i class="fa fa-phone" style="margin-left:15px;"></i>
              <div id="error-no_hp_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Ibu</strong></h2>
  </div>
  <div class="panel-body">

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="nama_ibu" class="form-control bg-blue" placeholder="Nama lengkap Ibu"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_ibu"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-nama_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
		
		<div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NIK <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="nik_ibu" class="form-control bg-blue" placeholder="NIK Ibu"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nik_ibu"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-nik_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
		<div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Lahir <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="tempat_lahir_ibu" class="form-control bg-blue" placeholder="Tempat Lahir Ayah"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-tempat_lahir_ibu"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-tempat_lahir_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
		<div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Lahir <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="tgl_lahir_ibu" class="form-control bg-blue" placeholder="Tempat Lahir Ayah"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-tgl_lahir_ibu"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-tgl_lahir_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
			<div id="pesan_komentar">*Isian dd-mm-yyyy Contoh : 12-12-1999</div>           
		   </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pendidikan Ibu" name="pdd_ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-pdd_ibu"]' required>
                  <option value="">Pilih Pendidikan Ibu</option>
                  <?php foreach ($v_pdd as $baris): ?>
                    <option value="<?php echo $baris->nama_pdd; ?>"><?php echo $baris->nama_pdd; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-pdd_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Ibu" name="pekerjaan_ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-pekerjaan_ibu"]' required>
                  <option value="">Pilih Pekerjaan Ibu</option>
                  <?php foreach ($v_pekerjaan_ibu as $baris): ?>
                    <option value="<?php echo $baris->nama_pekerjaan; ?>"><?php echo $baris->nama_pekerjaan; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-pekerjaan_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Ibu" name="penghasilan_ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-penghasilan_ibu"]' required>
                  <option value="">Pilih Penghasilan Ibu</option>
                  <?php foreach ($v_penghasilan as $baris): ?>
                    <option value="<?php echo $baris->nama_penghasilan; ?>"><?php echo $baris->nama_penghasilan; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-penghasilan_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_hp_ibu" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="14" placeholder="No. Handphone Ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-no_hp_ibu"]' required>
              <i class="fa fa-phone" style="margin-left:15px;"></i>
              <div id="error-no_hp_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Wali</strong></h2>
  </div>
  <div class="panel-body">

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="nama_wali" class="form-control bg-blue" placeholder="Nama lengkap Wali"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_wali"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-nama_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
		
		<div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NIK <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="nik_wali" class="form-control bg-blue" placeholder="NIK Wali"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nik_wali"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-nik_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
		<div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Lahir <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="tempat_lahir_wali" class="form-control bg-blue" placeholder="Tempat Lahir Wali"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-tempat_lahir_wali"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-tempat_lahir_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
		<div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Lahir <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="tgl_lahir_wali" class="form-control bg-blue" placeholder="Tempat Lahir Wali"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-tgl_lahir_wali"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-tgl_lahir_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
			<div id="pesan_komentar">*Isian dd-mm-yyyy Contoh : 12-12-1999</div>           
		   </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pendidikan Wali" name="pdd_wali" data-parsley-group="block2" data-parsley-errors-container='div[id="error-pdd_wali"]' required>
                  <option value="">Pilih Pendidikan Wali</option>
                  <?php foreach ($v_pdd as $baris): ?>
                    <option value="<?php echo $baris->nama_pdd; ?>"><?php echo $baris->nama_pdd; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-pdd_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Wali" name="pekerjaan_wali" data-parsley-group="block2" data-parsley-errors-container='div[id="error-pekerjaan_wali"]' required>
                  <option value="">Pilih Pekerjaan Wali</option>
                  <?php foreach ($v_pekerjaan_wali as $baris): ?>
                    <option value="<?php echo $baris->nama_pekerjaan; ?>"><?php echo $baris->nama_pekerjaan; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-pekerjaan_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Wali" name="penghasilan_wali" data-parsley-group="block2" data-parsley-errors-container='div[id="error-penghasilan_wali"]' required>
                  <option value="">Pilih Penghasilan Wali</option>
                  <?php foreach ($v_penghasilan as $baris): ?>
                    <option value="<?php echo $baris->nama_penghasilan; ?>"><?php echo $baris->nama_penghasilan; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-penghasilan_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_hp_wali" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="14" placeholder="No. Handphone Wali" data-parsley-group="block2" data-parsley-errors-container='div[id="error-no_hp_wali"]' required>
              <i class="fa fa-phone" style="margin-left:15px;"></i>
              <div id="error-no_hp_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
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
