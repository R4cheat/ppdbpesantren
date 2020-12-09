<?php
// koneksi database
include 'database.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($database,"delete from mahasiswa where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:panel_admin/verifikasi");
 
?>