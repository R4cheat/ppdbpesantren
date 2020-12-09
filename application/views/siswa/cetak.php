<?php $ceks = $this->session->userdata('no_pendaftaran'); 
$logo = (empty($v_user->logos) || !file_exists("fotoo/".$v_user->logos) )?"img/users.jpg":"fotoo/".$v_user->logos;
?>
<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title><?php echo $judul_web; ?></title>
    <base href="<?php echo base_url();?>"/>
  	<link rel="icon" type="image/png" href="<?=$logo;?>"/>
    <style>
    table {
        border-collapse: collapse;
    }
    thead > tr{
      background-color: #0070C0;
      color:#f1f1f1;
    }
    thead > tr > th{
      background-color: #0070C0;
      color:#fff;
      padding: 10px;
      border-color: #fff;
    }
    th, td {
      padding: 1px;
    }

    th {
        color: #222;
    }
    body{
      font-family:Arial Narrow;
    }
    </style>
  </head>
  <body onload="window.print();">
    <?php $this->load->view('kop_lap'); ?>
    <h4 align="center" style="margin-top:10px;"><u>BUKTI PENDAFTARAN</u></h4>
    <b><center>
      PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB) <br>
      <?php echo $v_user->nama_lengkap; ?> <br>
      TAHUN PELAJARAN <?php echo $thn_ppdb; ?> / <?php echo $thn_ppdb+1; ?></center>
    </b>
    <br>
<?php
  $poto = (empty($user->foto) || !file_exists("fotoo/".$user->foto) )?"img/users.jpg":"fotoo/".$user->foto;
?>
    <table width="100%" border="0">
      <tr>
        <td width="200">NO. PENDAFTARAN</td>
        <td width="1">:</td>
        <td><?php echo $user->no_pendaftaran; ?></td>
        <td rowspan="17" valign="top" ><img src="<?=$poto;?>" style="height: 200px; width: 150px;" ></td>
      </tr>
      <tr>
        <td>TANGGAL PENDAFTARAN </td>
        <td>:</td>
        <td><?php echo $this->Model_data->tgl_id(date('d-m-Y', strtotime($user->tgl_siswa))); ?></td>
      </tr>
      <tr>
        <td>NISN</td>
        <td>:</td>
        <td><?php echo $user->nisn; ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $user->nik; ?></td>
      </tr>
	  <tr>
        <td>NO. AKTA</td>
        <td>:</td>
        <td><?php echo $user->akta; ?></td>
      </tr>
      <tr>
        <td>NAMA LENGKAP</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_lengkap); ?></td>
      </tr>
      <tr>
        <td>JENIS KELAMIN</td>
        <td>:</td>
        <td><?php echo $user->jk; ?></td>
      </tr>
      <tr>
        <td>TEMPAT, TANGGAL LAHIR</td>
        <td>:</td>
        <td><?php echo "$user->tempat_lahir, ".$this->Model_data->tgl_id($user->tgl_lahir); ?></td>
      </tr>
      <tr>
        <td>AGAMA</td>
        <td>:</td>
        <td><?php echo $user->agama; ?></td>
      </tr>
      <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td><?php echo $user->alamat_siswa; ?></td>
      </tr>
      <tr>
        <td>NAMA ORANG TUA /WALI</td>
        <td>:</td>
        <td></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">AYAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_ayah); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">IBU</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_ibu); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">WALI</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_wali); ?></td>
      </tr>
      <tr>
        <td>NO. HANDPHONE (HP)</td>
        <td>:</td>
        <td><?php echo $user->no_hp_siswa; ?></td>
      </tr>
      <tr>
        <td>ASAL SEKOLAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_sekolah); ?></td>
      </tr>
    </table>
    <br>
    <center>
    <table width="90%" border="1">
      <tr align="center">
        <th>INFORMASI</th>
        <th width="100">Ket.</th>
      </tr>
      <tr>
        <td style="padding-left:10px;"><?php echo $v_materi->isi; ?></td>
        <td></td>
      </tr>
    </table>
    </center>
    <br>

    <div style="float:right;">
       <?php echo $v_user->desa; ?>, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
			Ketua Panitia PPDB,  <br>
			<br>
			<br>
      <img src="img/ttd1.jpg" alt="" width="100"><br>
      <b><u><?php echo $v_user->panitia; ?></u></b><br>
      NIY. -
    </div>
    <br><br><br><br><br><br><br><br><br><br>

    <b><u>Siapkan Berkas Berikut Ketika Anda Melakukan Verifikasi/Registrasi Ulang :</u></b>
    <br>
    <table width="100%" border="0" style="margin-left:5px;">
        <tr>
        <td>1.</td>
        <td>Biaya Pendaftaran Gratis,-</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>FC Akte Kelahiran 2 Lembar</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>FC Kartu Keluarga 2 Lembar</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>FC KTP Ayah dan Ibu Masing-Masing 2 Lembar </td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Pass Foto Ananda (3*4 Berwarna Latar Biru/Merah) 2 Lembar</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Surat Pindah Dari Sekolah Asal <b>(Hanya Untuk Siswa Pindahan)</b></td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Raport Asli<b>(Hanya Untuk Siswa Pindahan)</b></td>
      </tr>
      <tr>
          <tr>
        <td>8.</td>
        <td>Surat Mutasi Dapodik Ananda Dari Sekolah Asal<b>(Hanya Untuk Siswa Pindahan)</b></td>
      </tr>
      </table>

  </body>
</html>
