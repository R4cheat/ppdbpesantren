<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model{

   public function view(){
     return $this->db->get('tbl_data')->result(); // Tampilkan semua data yang ada di tabel siswa
   }

   function statistik($thn='', $aksi='')
   {
     if ($aksi == 'diverifikasi') {
       $status = "AND status_verifikasi='1'";
     }elseif ($aksi == 'diterima') {
       $status = "AND status_pendaftaran='lulus'";
     }elseif ($aksi == 'tidak diterima') {
       $status = "AND status_pendaftaran='tidak lulus'";
     }else {
       $status = "";
     }

    $sql= $this->db->query("
    select
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=1) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `Januari`,
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=2) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `Februari`,
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=3) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `Maret`,
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=4) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `April`,
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=5) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `Mei`,
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=6) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `Juni`,
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=7) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `Juli`,
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=8) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `Agustus`,
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=9) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `September`,
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=10) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `Oktober`,
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=11) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `Nopember`,
      ifnull((SELECT count(id_siswa) FROM (tbl_siswa)WHERE((Month(tgl_siswa)=12) $status AND (YEAR(tgl_siswa)='$thn'))),0) AS `Desember`
     from tbl_siswa GROUP BY YEAR(tgl_siswa)
    ");
    return $sql;
   }

   // Fungsi untuk melakukan proses upload file
   public function upload_file($filename){

     $config['upload_path'] = './assets/excel/';
     $config['allowed_types'] = 'xlsx';
     $config['max_size']  = '10048'; //10 MB
     $config['overwrite'] = true;
     $config['file_name'] = $filename;

     $this->upload->initialize($config); // Load konfigurasi uploadnya
     if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
       // Jika berhasil :
       $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
       return $return;
     }else{
       // Jika gagal :
       $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
       return $return;
     }
   }

   // Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
   public function insert_multiple($data){
     $this->db->insert_batch('tbl_data', $data);
   }


   public function date($aksi)
   {
     date_default_timezone_set('Asia/Jakarta');
     if ($aksi == 'waktu') {
       $date	 = date('d-m-Y H:i:s');
     }elseif ($aksi == 'waktu_default') {
       $date	 = date('Y-m-d H:i:s');
     }elseif ($aksi == 'thn') {
       $date	 = date('Y');
     }elseif ($aksi == 'bln') {
       $date	 = date('m');
     }elseif ($aksi == 'tgl_default') {
       $date	 = date('Y-m-d');
     }elseif ($aksi == 'tgl') {
       $date	 = date('d-m-Y');
     }elseif ($aksi == 'jam') {
       $date	 = date('H:i:s');
     }else {
       $date  = 'Null';
     }

     return $date;
   }

   public static function tgl_id($date)
 	{
 			$str = explode('-', $date);
 			$bulan = array(
 				'01' => 'Januari',
 				'02' => 'Februari',
 				'03' => 'Maret',
 				'04' => 'April',
 				'05' => 'Mei',
 				'06' => 'Juni',
 				'07' => 'Juli',
 				'08' => 'Agustus',
 				'09' => 'September',
 				'10' => 'Oktober',
 				'11' => 'November',
 				'12' => 'Desember',
 			);
 			return $str['0'] . " " . $bulan[$str[1]] . " " .$str[2];
 	}
 	
 	public function getDelete ($where='')
	{
		return $this->db->where($where)->delete('admin'); 
	}
	
   public static function bln_id($date)
 	{
     $str = explode('-', $date);
 			$bulan = array(
 				'01' => 'Januari',
 				'02' => 'Februari',
 				'03' => 'Maret',
 				'04' => 'April',
 				'05' => 'Mei',
 				'06' => 'Juni',
 				'07' => 'Juli',
 				'08' => 'Agustus',
 				'09' => 'September',
 				'10' => 'Oktober',
 				'11' => 'November',
 				'12' => 'Desember',
 			);
 			return $bulan[$str[0]];
 	}

}
?>