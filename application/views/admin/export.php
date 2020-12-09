<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=export_$v_thn.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title><?php echo $judul_web; ?></title>
    <base href="<?php echo base_url();?>"/>
  	<link rel="icon" type="image/png" href="assets/images/favicon.png"/>
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
      padding: 2px;
    }

    th {
        color: #222;
    }
    body{
      font-family:Calibri;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2
    }
    </style>
  </head>
  <body>

    <table width="100%" border="1">
     
      <tr>
	    <th>NO.</th>
        <th>NO. PENDAFTARAN</th>
		<th>PILIH SEKOLAH</th>
        <th>NISN</th>
        <th>NKK</th>
        <th>NIK</th>
		<th>NO REG AKTA LAHIR</th>
        <th>NAMA LENGKAP</th>
        <th>JENIS KELAMIN</th>
        <th>TEMPAT, TANGGAL LAHIR</th>
        <th>AGAMA</th>
		<th>KEWARGANEGARAAN</th>
		<th>JUMLAH KAKAK</th>
		<th>JUMLAH ADIK</th>
		<th>ANAK KE</th>
        <th>STATUS DALAM KELUARGA</th>
		<th>STATUS ANAK (YATIM/TIDAK)</th>
        <th>ALAMAT SISWA</th>
        <th>NO. HANDPHONE</th>
		<th>TINGGAL DENGAN</th>
		<th>GOLONGAN DARAH</th>
		<th>PENYAKIT YANG PERNAH DI DERITA</th>
		<th>KELAINAN JASMANI</th>
		<th>ASAL SEKOLAH/MADRASAH</th>
		<th>NPSN</th>
		<th>TAHUN LULUS</th>
		<th>NAMA AYAH</th>
		<th>NIK AYAH</th>
		<th>TEMPAT LAHIR AYAH</th>
		<th>TANGAL LAHIR AYAH</th>
		<th>PENDIDIKAN AYAH</th>
		<th>PEKERJAAN AYAH</th>
		<th>PENGHASILAN AYAH</th>
		<th>NO. HP AYAH</th>
		<th>NAMA IBU</th>
		<th>NIK IBU</th>
		<th>TEMPAT LAHIR IBU</th>
		<th>TANGAL LAHIR IBU</th>
		<th>PENDIDIKAN IBU</th>
		<th>PEKERJAAN IBU</th>
		<th>PENGHASILAN IBU</th>
		<th>NO. HP IBU</th>
		<th>NAMA WALI</th>
		<th>NIK WALI</th>
		<th>TEMPAT LAHIR WALI</th>
		<th>TANGAL LAHIR WALI</th>
		<th>PENDIDIKAN WALI</th>
		<th>PEKERJAAN WALI</th>
		<th>PENGHASILAN WALI</th>
		<th>NO. HP WALI</th>
		<th>KESENIAN</th>
		<th>OLAHRAGA</th>
		<th>ORGANISASI</th>
		<th>LAINNYA</th>
		<th>NOMOR KPS</th>
		<th>NOMOR PKH</th>
		<th>NOMOR KIP</th>
		<th>NOMOR KM/RM</th>
		<th>ALAT TRANSPORTASI</th>
		<th>JARAK DOMISILI</th>
		<th>WAKTU TEMPUH</th>

      </tr>

        <tr>
		  <?php $no=1;
      error_reporting(0);
      foreach ($v_siswa->result() as $baris):
	  ?>
          <th><?php echo $no++; ?></th>
          <td><?php echo $baris->no_pendaftaran; ?></td>
		  <td><?php echo $baris->jurusan; ?></td>
          <td>'<?php echo $baris->nisn; ?></td>
          <td>'<?php echo $baris->nis; ?></td>
          <td>'<?php echo $baris->nik; ?></td>
		  <td><?php echo $baris->akta; ?></td>
          <td><?php echo ucwords($baris->nama_lengkap); ?></td>
          <td><?php echo $baris->jk; ?></td>
          <td><?php echo "$baris->tempat_lahir, ".$this->Model_data->tgl_id($baris->tgl_lahir); ?></td>
          <td><?php echo $baris->agama; ?></td>
		  <td><?php echo $baris->kwg; ?></td>
		  <td><?php echo $baris->kakak; ?></td>
		  <td><?php echo $baris->adik; ?></td>
		  <td><?php echo $baris->anak; ?></td>
          <td><?php echo $baris->status_keluarga; ?></td>
		  <td><?php echo $baris->anak_ytm; ?></td>
          <td><?php echo $baris->alamat_siswa; ?></td>
          <td>'<?php echo $baris->no_hp_siswa; ?></td>
		  <td><?php echo $baris->tinggal; ?></td>
		  <td><?php echo $baris->gol_darah; ?></td>
		  <td><?php echo $baris->penyakit; ?></td>
		  <td><?php echo $baris->kelainan_jasmani; ?></td>
		  <td><?php echo $baris->nama_sekolah; ?></td>
		  <td><?php echo $baris->npsn_sekolah; ?></td>
		  <td><?php echo $baris->thn_lulus; ?></td>
		  <td><?php echo $baris->nama_ayah; ?></td>
		  <td>'<?php echo $baris->nik_ayah; ?></td>
		  <td><?php echo $baris->tempat_lahi_ayah; ?></td>
		  <td><?php echo $baris->tgl_lahir_ayah; ?></td>
		  <td><?php echo $baris->pdd_ayah; ?></td>
		  <td><?php echo $baris->pekerjaan_ayah; ?></td>
		  <td><?php echo $baris->penghasilan_ayah; ?></td>
		  <td>'<?php echo $baris->no_hp_ayah; ?></td>
		  <td><?php echo $baris->nama_ibu; ?></td>
		  <td>'<?php echo $baris->nik_ibu; ?></td>
		  <td><?php echo $baris->tempat_lahi_ibu; ?></td>
		  <td><?php echo $baris->tgl_lahir_ibu; ?></td>
		  <td><?php echo $baris->pdd_ibu; ?></td>
		  <td><?php echo $baris->pekerjaan_ibu; ?></td>
		  <td><?php echo $baris->penghasilan_ibu; ?></td>
		  <td>'<?php echo $baris->no_hp_ibu; ?></td>
		  <td><?php echo $baris->nama_wali; ?></td>
		  <td>'<?php echo $baris->nik_wali; ?></td>
		  <td><?php echo $baris->tempat_lahi_wali; ?></td>
		  <td><?php echo $baris->tgl_lahir_wali; ?></td>
		  <td><?php echo $baris->pdd_wali; ?></td>
		  <td><?php echo $baris->pekerjaan_wali; ?></td>
		  <td><?php echo $baris->penghasilan_wali; ?></td>
		  <td>'<?php echo $baris->no_hp_wali; ?></td>
		  <td><?php echo $baris->kesenian; ?></td>
		  <td><?php echo $baris->olahraga; ?></td>
		  <td><?php echo $baris->organisasi; ?></td>
		  <td><?php echo $baris->lainnya; ?></td>
		  <td>'<?php echo $baris->no_kps; ?></td>
		  <td>'<?php echo $baris->no_pkh; ?></td>
		  <td>'<?php echo $baris->no_kip; ?></td>
		  <td>'<?php echo $baris->no_kmrm; ?></td>
		  <td><?php echo $baris->transportasi; ?></td>
		  <td><?php echo $baris->jarak_tempuh; ?> M</td>
		  <td><?php echo $baris->waktu_tempuh; ?></td>
		  

        </tr>
      <?php
      endforeach; ?>
    </table>

  </body>
</html>
