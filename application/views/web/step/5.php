<style>
  #tbl_input{width:50px;text-align: center;}
  #tbl_input2{width:100px;text-align: center;}
  #th_center > th {text-align: center;}
</style>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Nilai Rapor</strong></h2>
  </div>
  <div class="panel-body">

  <div class="table-responsive">
    <table class="table table-bordered table-striped" width="100%" border="1">
      <tr id="th_center">
        <th rowspan="2">Mata Pelajaran</th>
        <th colspan="5" width="25">Semester</th>
        <th rowspan="2">Rata-Rata Nilai</th>
      </tr>
      <tr id="th_center">
        <th width="5">1</th>
        <th width="5">2</th>
        <th width="5">3</th>
        <th width="5">4</th>
        <th width="5">5</th>
      </tr>
      <tr>
        <td>Ilmu Pengetahuan Alam (IPA)</td>
        <?php for ($i=1; $i <=5 ; $i++) {?>
        <td>
          <input type="text" name="ipa<?php echo $i;?>" value="" onkeyup="hitung('ipa');" id="tbl_input" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-ipa<?php echo $i;?>"]' required>
          <div id="error-ipa<?php echo $i;?>" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
        <?php } ?>
        <td>
          <b id="nilai_ipa">0</b>
          <input type="hidden" name="nilai_ipa" value="0">
        </td>
      </tr>
      <tr>
        <td>Ilmu Pengetahuan Sosial (IPS)</td>
        <?php for ($i=1; $i <=5 ; $i++) {?>
        <td>
          <input type="text" name="ips<?php echo $i;?>" value="" onkeyup="hitung('ips');" id="tbl_input" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-ips<?php echo $i;?>"]' required>
          <div id="error-ips<?php echo $i;?>" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
        <?php } ?>
        <td>
          <b id="nilai_ips">0</b>
          <input type="hidden" name="nilai_ips" value="0">
        </td>
      </tr>
      <tr>
        <td>Matematika </td>
        <?php for ($i=1; $i <=5 ; $i++) {?>
        <td>
          <input type="text" name="mtk<?php echo $i;?>" value="" onkeyup="hitung('mtk');" id="tbl_input" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-mtk<?php echo $i;?>"]' required>
          <div id="error-mtk<?php echo $i;?>" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
        <?php } ?>
        <td>
          <b id="nilai_mtk">0</b>
          <input type="hidden" name="nilai_mtk" value="0">
        </td>
      </tr>
      <tr>
        <td>Bahasa Indonesia </td>
        <?php for ($i=1; $i <=5 ; $i++) {?>
        <td>
          <input type="text" name="ind<?php echo $i;?>" value="" onkeyup="hitung('ind');" id="tbl_input" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-ind<?php echo $i;?>"]' required>
          <div id="error-ind<?php echo $i;?>" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
        <?php } ?>
        <td>
          <b id="nilai_ind">0</b>
          <input type="hidden" name="nilai_ind" value="0">
        </td>
      </tr>
      <tr>
        <td>Bahasa Inggris </td>
        <?php for ($i=1; $i <=5 ; $i++) {?>
        <td>
          <input type="text" name="ing<?php echo $i;?>" value="" onkeyup="hitung('ing');" id="tbl_input" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-ing<?php echo $i;?>"]' required>
          <div id="error-ing<?php echo $i;?>" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
        <?php } ?>
        <td>
          <b id="nilai_ing">0</b>
          <input type="hidden" name="nilai_ing" value="0">
        </td>
      </tr>
      <tr id="th_center">
        <th colspan="6">Rata-Rata Rapor</th>
        <th><b id="total_nilai">0</b></th>
        <input type="hidden" name="total_nilai" value="0">
      </tr>
      <tr>
        <th colspan="7">
          <div class="msg_error">

          </div>
        </th>
      </tr>
    </table>
  </div>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Nilai USBN</strong></h2>
  </div>
  <div class="panel-body">

  <div class="table-responsive">
    <table class="table table-bordered table-striped" width="100%" border="1">
      <tr id="th_center">
        <th>Mata Pelajaran</th>
        <th width="10">Nilai USBN</th>
      </tr>
      <tr>
        <td>Pendidikan Agama</td>
        <td>
          <input type="text" name="usbn_agama" value="" onkeyup="hitung1('usbn_agama');" id="tbl_input2" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-usbn_agama"]' required>
          <div id="error-usbn_agama" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
      </tr>
      <tr>
        <td>PKN</td>
        <td>
          <input type="text" name="usbn_pkn" value="" onkeyup="hitung1('usbn_pkn');" id="tbl_input2" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-usbn_pkn"]' required>
          <div id="error-usbn_pkn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
      </tr>
      <tr>
        <td>Bahasa Indonesia</td>
        <td>
          <input type="text" name="usbn_ind" value="" onkeyup="hitung1('usbn_ind');" id="tbl_input2" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-usbn_ind"]' required>
          <div id="error-usbn_ind" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
      </tr>
      <tr>
        <td>Bahasa Inggris</td>
        <td>
          <input type="text" name="usbn_ing" value="" onkeyup="hitung1('usbn_ing');" id="tbl_input2" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-usbn_ing"]' required>
          <div id="error-usbn_ing" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
      </tr>
      <tr>
        <td>Matematika</td>
        <td>
          <input type="text" name="usbn_mtk" value="" onkeyup="hitung1('usbn_mtk');" id="tbl_input2" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-usbn_mtk"]' required>
          <div id="error-usbn_mtk" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
      </tr>
      <tr>
        <td>Ilmu Pengetahuan Alam (IPA)</td>
        <td>
          <input type="text" name="usbn_ipa" value="" onkeyup="hitung1('usbn_ipa');" id="tbl_input2" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-usbn_ipa"]' required>
          <div id="error-usbn_ipa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
      </tr>
      <tr>
        <td>Ilmu Pengetahuan Sosial (IPS)</td>
        <td>
          <input type="text" name="usbn_ips" value="" onkeyup="hitung1('usbn_ips');" id="tbl_input2" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-usbn_ips"]' required>
          <div id="error-usbn_ips" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
      </tr>
      <tr id="th_center">
        <th>Jumlah Nilai USBN</th>
        <th><b id="jumlah_nilai1">0</b></th>
      </tr>
      <tr id="th_center">
        <th>Rata–Rata Nilai USBN</th>
        <th><b id="total_nilai1">0</b></th>
      </tr>
    </table>
  </div>

  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Nilai UNKP/UNBK</strong></h2>
  </div>
  <div class="panel-body">

  <div class="table-responsive">
    <table class="table table-bordered table-striped" width="100%" border="1">
      <tr id="th_center">
        <th>Mata Pelajaran</th>
        <th width="10">Nilai UNKP/UNBK</th>
      </tr>
      <tr>
        <td>Ilmu Pengetahuan Alam (IPA)</td>
        <td>
          <input type="text" name="unbk_ipa" value="" onkeyup="hitung2('unbk_ipa');" id="tbl_input2" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-unbk_ipa"]' required>
          <div id="error-unbk_ipa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
      </tr>
      <tr>
        <td>Matematika </td>
        <td>
          <input type="text" name="unbk_mtk" value="" onkeyup="hitung2('unbk_mtk');" id="tbl_input2" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-unbk_mtk"]' required>
          <div id="error-unbk_mtk" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
      </tr>
      <tr>
        <td>Bahasa Indonesia </td>
        <td>
          <input type="text" name="unbk_ind" value="" onkeyup="hitung2('unbk_ind');" id="tbl_input2" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-unbk_ind"]' required>
          <div id="error-unbk_ind" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
      </tr>
      <tr>
        <td>Bahasa Inggris </td>
        <td>
          <input type="text" name="unbk_ing" value="" onkeyup="hitung2('unbk_ing');" id="tbl_input2" maxlength="6" data-parsley-group="block5" data-parsley-errors-container='div[id="error-unbk_ing"]' required>
          <div id="error-unbk_ing" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </td>
      </tr>
      <tr id="th_center">
        <th>Jumlah Nilai UNKP/UNBK</th>
        <th><b id="jumlah_nilai2">0</b></th>
      </tr>
      <tr id="th_center">
        <th>Rata–Rata Nilai UNKP/UNBK</th>
        <th><b id="total_nilai2">0</b></th>
      </tr>
    </table>
  </div>

  </div>
</div>


<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b>Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>


<script type="text/javascript">
$('.msg_error').html('');
function hitung(name)
{
  var v1 = $('[name="'+name+'1"]').val();
  var v2 = $('[name="'+name+'2"]').val();
  var v3 = $('[name="'+name+'3"]').val();
  var v4 = $('[name="'+name+'4"]').val();
  var v5 = $('[name="'+name+'5"]').val();

  if (v1 == '') {v1 = 0;}
  if (v2 == '') {v2 = 0;}
  if (v3 == '') {v3 = 0;}
  if (v4 == '') {v4 = 0;}
  if (v5 == '') {v5 = 0;}

  jml = parseInt(v1)+parseInt(v2)+parseInt(v3)+parseInt(v4)+parseInt(v5);
  rata_rata = jml / 5;
  $('#nilai_'+name).text(rata_rata);
  $('[name="nilai_'+name+'"]').val(rata_rata);

  jml_nilai = parseInt($('#nilai_ipa').text())+parseInt($('#nilai_ips').text())+parseInt($('#nilai_mtk').text())+parseInt($('#nilai_ind').text())+parseInt($('#nilai_ing').text());
  total_nilai =  jml_nilai / parseInt(5);
  jml_nilai_fix   = jml_nilai.toFixed(2);
  total_nilai_fix = total_nilai.toFixed(2);
  $('#total_nilai').text(total_nilai);
  $('[name="total_nilai"]').val(total_nilai);

  if ($('#nilai_ipa').text() != 0 && $('#nilai_ips').text() != 0 && $('#nilai_mtk').text() != 0 && $('#nilai_ind').text() != 0 && $('#nilai_ing').text() != 0) {
    if (total_nilai < 0) {
      $('.next-btn').hide();
      $('.msg_error').html(''+
      '<div class="alert alert-danger alert-dismissible" role="alert">'+
      '   <button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
      '     <span aria-hidden="true">&times;&nbsp; &nbsp;</span>'+
      '   </button>'+
      '   <strong>MAAF ANDA TIDAK BISA MELANJUTKAN PENDAFTARAN!</strong>'+
      '</div>');
      return false;
    }else {
      $('.next-btn').show();
      $('.msg_error').html('');
      return true;
    }
  }
}

function hitung1(name)
{
  var v1 = $('[name="'+name+'"]').val();
  var v2 = $('[name="'+name+'"]').val();
  var v3 = $('[name="'+name+'"]').val();
  var v4 = $('[name="'+name+'"]').val();
  var v5 = $('[name="'+name+'"]').val();
  var v6 = $('[name="'+name+'"]').val();
  var v7 = $('[name="'+name+'"]').val();

  if (v1 == '') {v1 = 0;}
  if (v2 == '') {v2 = 0;}
  if (v3 == '') {v3 = 0;}
  if (v4 == '') {v4 = 0;}
  if (v5 == '') {v5 = 0;}
  if (v6 == '') {v6 = 0;}
  if (v7 == '') {v7 = 0;}

  jml = parseInt(v1)+parseInt(v2)+parseInt(v3)+parseInt(v4)+parseInt(v5)+parseInt(v6)+parseInt(v7);
  rata_rata = jml / 7;
  jml_fix       = jml.toFixed(2);
  rata_rata_fix = rata_rata.toFixed(2);
  $('#jumlah_nilai1').text(jml_fix);
  $('#total_nilai1').text(rata_rata_fix);
}

function hitung2(name)
{
  var v1 = $('[name="'+name+'"]').val();
  var v2 = $('[name="'+name+'"]').val();
  var v3 = $('[name="'+name+'"]').val();
  var v4 = $('[name="'+name+'"]').val();

  if (v1 == '') {v1 = 0;}
  if (v2 == '') {v2 = 0;}
  if (v3 == '') {v3 = 0;}
  if (v4 == '') {v4 = 0;}

  jml = parseInt(v1)+parseInt(v2)+parseInt(v3)+parseInt(v4);
  rata_rata = jml / 4;
  jml_fix       = jml.toFixed(2);
  rata_rata_fix = rata_rata.toFixed(2);
  $('#jumlah_nilai2').text(jml_fix);
  $('#total_nilai2').text(rata_rata_fix);
}
</script>
