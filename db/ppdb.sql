-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 07:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pdd`
--

CREATE TABLE `tbl_pdd` (
  `id_pdd` int(11) NOT NULL,
  `nama_pdd` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pdd`
--

INSERT INTO `tbl_pdd` (`id_pdd`, `nama_pdd`) VALUES
(1, 'Tdk Sekolah'),
(2, 'SD/MI'),
(3, 'SMP/MTs'),
(4, 'SMA/SMK/MA'),
(5, 'DIPLOMA'),
(6, 'S1'),
(7, 'S2'),
(8, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan`
--

CREATE TABLE `tbl_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) DEFAULT NULL,
  `ket_pekerjaan` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `ket_pekerjaan`) VALUES
(1, 'Buruh', 'ayah'),
(2, 'Tani', 'ayah'),
(3, 'Wiraswasta', 'ayah'),
(4, 'PNS', 'ayah'),
(5, 'TNI/POLRI', 'ayah'),
(6, 'Perangkat Desa', 'ayah'),
(7, 'Nelayan', 'ayah'),
(8, 'Lain-lain ', 'ayah'),
(9, 'Ibu Rumah Tangga\r\n', 'ibu'),
(10, 'Buruh', 'ibu'),
(11, 'Tani', 'ibu'),
(12, 'Wiraswasta', 'ibu'),
(13, 'PNS', 'ibu'),
(14, 'TNI/POLRI', 'ibu'),
(15, 'Perangkat Desa', 'ibu'),
(16, 'Nelayan', 'ibu'),
(17, 'Lain-lain', 'ibu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penghasilan`
--

CREATE TABLE `tbl_penghasilan` (
  `id_penghasilan` int(10) NOT NULL,
  `nama_penghasilan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penghasilan`
--

INSERT INTO `tbl_penghasilan` (`id_penghasilan`, `nama_penghasilan`) VALUES
(1, '< 500rb'),
(2, '500-1jt'),
(3, '1jt-3jt'),
(4, '3jt-5jt'),
(5, '5jt-10jt'),
(6, '>10jt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `ket_pengumuman` text,
  `tgl_pengumuman` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `ket_pengumuman`, `tgl_pengumuman`) VALUES
(1, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Keterangan :</u></strong></span></span></span></p>\r\n\r\n<ol>\r\n	<li style=\"margin-left: 0cm; margin-right: 0cm;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">Jadwal Observasi Untuk Setiap Unit (TK-SD-SMP-SMA) Akan Diinformasikan Waktu Pelaksanaannya</span></span></span></span></li>\r\n	<li style=\"margin-left: 0cm; margin-right: 0cm;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">Silakan Mencetak &amp; Membawa Bukti Pendaftaran&nbsp;Bersama Dengan Berkas Pendukung Lainnya (<strong>Lihat Menu Cetak Bukti&nbsp; Pendaftaran</strong>)</span></span></span></span></li>\r\n	<li style=\"margin-left: 0cm; margin-right: 0cm;\">Pembayaran Biaya PPDB Rp. 350.000,- Transfer Ke(BNI Syariah&nbsp;<strong>088 1277 128 a.n Muhammad Al Fatih</strong>)</li>\r\n</ol>\r\n</body>\r\n</html>\r\n', '2018-04-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `kakak` varchar(30) DEFAULT NULL,
  `adik` varchar(30) DEFAULT NULL,
  `anak` varchar(30) DEFAULT NULL,
  `id_siswa` int(100) NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `password` text,
  `nis` varchar(30) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `akta` varchar(30) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `tempat_lahir` text,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `status_keluarga` varchar(30) DEFAULT NULL,
  `alamat_siswa` text,
  `no_hp_siswa` varchar(14) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `pdd_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `penghasilan_ayah` varchar(100) DEFAULT NULL,
  `no_hp_ayah` varchar(14) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `pdd_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `penghasilan_ibu` varchar(100) DEFAULT NULL,
  `no_hp_ibu` varchar(14) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `pdd_wali` varchar(100) DEFAULT NULL,
  `pekerjaan_wali` varchar(100) DEFAULT NULL,
  `penghasilan_wali` varchar(100) DEFAULT NULL,
  `no_hp_wali` varchar(14) DEFAULT NULL,
  `npsn_sekolah` varchar(100) DEFAULT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `status_sekolah` varchar(100) DEFAULT NULL,
  `model_un` varchar(100) DEFAULT NULL,
  `alamat_sekolah` text,
  `thn_lulus` year(4) DEFAULT NULL,
  `rayonisasi` varchar(100) DEFAULT NULL,
  `foto` text,
  `tgl_siswa` datetime DEFAULT NULL,
  `status_verifikasi` varchar(30) DEFAULT NULL,
  `status_pendaftaran` varchar(20) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `kwg` varchar(20) DEFAULT NULL,
  `anak_ytm` varchar(20) DEFAULT NULL,
  `bahasa` varchar(30) DEFAULT NULL,
  `tinggal` varchar(30) DEFAULT NULL,
  `jarak` varchar(30) DEFAULT NULL,
  `gol_darah` varchar(20) DEFAULT NULL,
  `penyakit` varchar(50) DEFAULT NULL,
  `kelainan_jasmani` varchar(50) DEFAULT NULL,
  `tinggi_badan` varchar(20) DEFAULT NULL,
  `berat_badan` varchar(20) DEFAULT NULL,
  `kesenian` varchar(30) DEFAULT NULL,
  `olahraga` varchar(30) DEFAULT NULL,
  `organisasi` varchar(30) DEFAULT NULL,
  `lainnya` varchar(30) DEFAULT NULL,
  `penerima_kartu_sosial` varchar(10) DEFAULT NULL,
  `kps` varchar(50) DEFAULT NULL,
  `pkh` varchar(50) DEFAULT NULL,
  `kip` varchar(50) DEFAULT NULL,
  `kmrm` varchar(50) DEFAULT NULL,
  `no_kps` varchar(50) DEFAULT NULL,
  `no_pkh` varchar(50) DEFAULT NULL,
  `no_kip` varchar(50) DEFAULT NULL,
  `no_kmrm` varchar(50) DEFAULT NULL,
  `transportasi` varchar(30) DEFAULT NULL,
  `jarak_tempuh` varchar(30) DEFAULT NULL,
  `waktu_tempuh` varchar(30) DEFAULT NULL,
  `seragam` varchar(15) DEFAULT NULL,
  `nik_ayah` varchar(30) DEFAULT NULL,
  `nik_ibu` varchar(30) DEFAULT NULL,
  `nik_wali` varchar(30) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(30) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(30) DEFAULT NULL,
  `tempat_lahir_wali` varchar(30) DEFAULT NULL,
  `tgl_lahir_ayah` varchar(15) DEFAULT NULL,
  `tgl_lahir_ibu` varchar(15) DEFAULT NULL,
  `tgl_lahir_wali` varchar(15) DEFAULT NULL,
  `buktibayar` varchar(255) DEFAULT NULL,
  `ijasah` varchar(100) DEFAULT NULL,
  `kartu_keluarga` varchar(100) DEFAULT NULL,
  `aktalahir` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`kakak`, `adik`, `anak`, `id_siswa`, `no_pendaftaran`, `password`, `nis`, `nisn`, `nik`, `akta`, `nama_lengkap`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_keluarga`, `alamat_siswa`, `no_hp_siswa`, `nama_ayah`, `pdd_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_hp_ayah`, `nama_ibu`, `pdd_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp_ibu`, `nama_wali`, `pdd_wali`, `pekerjaan_wali`, `penghasilan_wali`, `no_hp_wali`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `model_un`, `alamat_sekolah`, `thn_lulus`, `rayonisasi`, `foto`, `tgl_siswa`, `status_verifikasi`, `status_pendaftaran`, `jurusan`, `kwg`, `anak_ytm`, `bahasa`, `tinggal`, `jarak`, `gol_darah`, `penyakit`, `kelainan_jasmani`, `tinggi_badan`, `berat_badan`, `kesenian`, `olahraga`, `organisasi`, `lainnya`, `penerima_kartu_sosial`, `kps`, `pkh`, `kip`, `kmrm`, `no_kps`, `no_pkh`, `no_kip`, `no_kmrm`, `transportasi`, `jarak_tempuh`, `waktu_tempuh`, `seragam`, `nik_ayah`, `nik_ibu`, `nik_wali`, `tempat_lahir_ayah`, `tempat_lahir_ibu`, `tempat_lahir_wali`, `tgl_lahir_ayah`, `tgl_lahir_ibu`, `tgl_lahir_wali`, `buktibayar`, `ijasah`, `kartu_keluarga`, `aktalahir`) VALUES
('0', '0', '1', 68, 'ALFATIH-001', '12345678', '7371026801140001', '12345678', '7371026801140001', '7371-LU-10022014-0093', 'Ayunda Nafiza Syakira', 'P', 'Makassar', '28-01-2014', 'Islam', 'Anak Kandung', 'Jl. Dg Tata 1 Blok 4 F No.4 RT/RW 003/007 Desa Bontoduri Kec. Tamalate Makassar 90224 Sulawesi Selatan', '082192829111', 'Eka Wahyudi Saputro', 'S1', 'PNS', '5jt-10jt', '082192829111', 'Wulansari Mansyur Tottong', 'S1', 'PNS', '5jt-10jt', '082192829111', 'Wulansari Mansyur Tottong', 'S1', 'PNS', '5jt-10jt', '082192829111', '0', '-', 'NEGERI', 'UNBK', '-', 2019, NULL, 'a1d734662e5e4a5383213e675356a970.png', '2020-04-07 16:40:27', '0', 'lulus', 'IPA', 'WNI', 'Lengkap', 'Bahasa Indonesia', 'Orang Tua', NULL, 'A', '-', '-', '116', '19', '-', '-', '-', '-', 'TIDAK', NULL, NULL, NULL, NULL, '', '', '', '', 'Kendaraan Pribadi', '4000', '15', 'L', '7371021303860001', '7371105101870006', '7371105101870006', 'Ujung Pandang', 'Kupang', 'Kupang', '13-03-1986', '11-01-1987', '11-01-1987', '021460ea9ff9a7d2d1e426e5790f0a40.jpeg', '5d718aa76f27a1c79e782fd71d637eb0.png', 'c4a1fe50cdd70c08c058676f0fd95a15.jpg', '2ca290bf25b74545121a054a3df88ff8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nama_sekolah` varchar(60) DEFAULT NULL,
  `alamat_sekolah` varchar(200) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL,
  `kepala_sekolah` varchar(200) DEFAULT NULL,
  `panitia` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `logos` text,
  `desa` varchar(100) DEFAULT NULL,
  `dev` varchar(50) DEFAULT NULL,
  `no_lulus` varchar(200) DEFAULT NULL,
  `info_ppdb` varchar(1000) DEFAULT NULL,
  `infoppdb` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `nama_sekolah`, `alamat_sekolah`, `level`, `tgl_daftar`, `kepala_sekolah`, `panitia`, `email`, `website`, `telp`, `logos`, `desa`, `dev`, `no_lulus`, `info_ppdb`, `infoppdb`) VALUES
(1, 'admin', 'admin', 'MA HIDAYATUS SHOLIHIN', NULL, 'JL. DOMBA NO.12, MARICAYA, KEC. MAKASSAR, KOTA MAKASSAR, SULAWESI SELATAN  90142', 'admin', '2018-04-12 00:00:00', 'Massofik Syahsa', 'Massofik', 'den.sofik@gmail.com', '-', '0011223344', 'c324205091e415460e25a6ef08a91f2a.png', 'Turus', 'GST-Dev', '...../PPDB/SIT/ALFATIH/VII/2020', NULL, NULL),
(2, 'ratih', '12345678', 'Ratih Faramita S.K.M', NULL, NULL, 'admin', '2018-04-12 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifikasi`
--

CREATE TABLE `tbl_verifikasi` (
  `id_verifikasi` int(10) NOT NULL,
  `isi` text,
  `ket` text,
  `tgl_verifikasi` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_verifikasi`
--

INSERT INTO `tbl_verifikasi` (`id_verifikasi`, `isi`, `ket`, `tgl_verifikasi`) VALUES
(1, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><strong>Selama Masa Pandemi Akibat Virus Corona,&nbsp;</strong>Jadwal Observasi Untuk Setiap Unit (TK-SD-SMP-SMA) Akan Diinformasikan Waktu Pelaksanaannya Atau Sampai Pemberitahuan Resmi Selanjutnya. Terima Kasih Perhatiannya</p>\r\n</body>\r\n</html>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web`
--

CREATE TABLE `tbl_web` (
  `id_web` int(10) NOT NULL,
  `status_ppdb` varchar(30) DEFAULT NULL,
  `tgl_diubah` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_web`
--

INSERT INTO `tbl_web` (`id_web`, `status_ppdb`, `tgl_diubah`) VALUES
(1, 'buka', '2020-04-01 22:41:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  ADD PRIMARY KEY (`id_pdd`) USING BTREE;

--
-- Indexes for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`) USING BTREE;

--
-- Indexes for table `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  ADD PRIMARY KEY (`id_penghasilan`) USING BTREE;

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`) USING BTREE;

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`) USING BTREE;

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- Indexes for table `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`) USING BTREE;

--
-- Indexes for table `tbl_web`
--
ALTER TABLE `tbl_web`
  ADD PRIMARY KEY (`id_web`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  MODIFY `id_pdd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  MODIFY `id_penghasilan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  MODIFY `id_verifikasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_web`
--
ALTER TABLE `tbl_web`
  MODIFY `id_web` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
