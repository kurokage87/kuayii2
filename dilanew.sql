-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 07:11 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dila`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_catin`
--

CREATE TABLE `data_catin` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `tempat_tgl_lahir` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  `kewarganearaan` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `status_data` smallint(6) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nasab_a` varchar(255) DEFAULT NULL,
  `nasab_b` varchar(255) DEFAULT NULL,
  `nasab_c` varchar(255) DEFAULT NULL,
  `nama_pejabat_pemberi_izin` varchar(255) DEFAULT NULL,
  `nomor_izin_pejabat` varchar(255) DEFAULT NULL,
  `tgl_izin_surat` varchar(255) DEFAULT NULL,
  `wna_instansi` varchar(255) DEFAULT NULL,
  `wna_no_izin` varchar(255) DEFAULT NULL,
  `wna_tgl_surat` varchar(255) DEFAULT NULL,
  `izin_pengadilan_belum_umur` varchar(255) DEFAULT NULL,
  `no_izin_pengadilan_belum_umur` varchar(255) DEFAULT NULL,
  `tgl_izin_pengadilan_belum_umur` varchar(255) DEFAULT NULL,
  `nama_pemeberi_izin` varchar(255) DEFAULT NULL,
  `hubungan_keluarga` varchar(255) DEFAULT NULL,
  `tgl_surat` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `status_perkawinan` smallint(6) DEFAULT NULL,
  `nama_pasangan_sebelumnya` varchar(255) DEFAULT NULL,
  `bukti_carai_instansi` varchar(255) DEFAULT NULL,
  `bukti_cerai_no` varchar(255) DEFAULT NULL,
  `tanggal_cerai` varchar(255) DEFAULT NULL,
  `pernikahan_ke` int(11) DEFAULT NULL,
  `file_ktp` varchar(255) DEFAULT NULL,
  `file_kk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_catin`
--

INSERT INTO `data_catin` (`id`, `user_id`, `nama_lengkap`, `tempat_tgl_lahir`, `no_ktp`, `kewarganearaan`, `pekerjaan`, `agama`, `alamat`, `status_data`, `foto`, `nasab_a`, `nasab_b`, `nasab_c`, `nama_pejabat_pemberi_izin`, `nomor_izin_pejabat`, `tgl_izin_surat`, `wna_instansi`, `wna_no_izin`, `wna_tgl_surat`, `izin_pengadilan_belum_umur`, `no_izin_pengadilan_belum_umur`, `tgl_izin_pengadilan_belum_umur`, `nama_pemeberi_izin`, `hubungan_keluarga`, `tgl_surat`, `tempat_lahir`, `status_perkawinan`, `nama_pasangan_sebelumnya`, `bukti_carai_instansi`, `bukti_cerai_no`, `tanggal_cerai`, `pernikahan_ke`, `file_ktp`, `file_kk`) VALUES
(1, 6, 'Sodo', '09-Jul-2018', '1962819762918', 'Indonesia', 'Swasta', 'Islam', '<p>aksndlkansd</p>', 1, 'KBMDG 004 - Cominfo - Julisman - DKV 12 UNP.jpg', 'a', 'a', 'a', 'a', '001.jpg', '02-Jul-2018', 'a', '', '20-Jul-2018', 'a', '001.jpg', '02-Jul-2018', 'a', 'a', '30-Jul-2018', 'Padang', 12, 'Chika', 'KUA', '001.jpg', '17-Jul-2018', 5, '001.jpg', NULL),
(2, 6, 'ril', '30-Jul-2018', '1926981', 'Indonesia', 'Swasta', 'Islam', '<p>as,dbajksdn andlkasdlaksdhauhdsasd asdalsd</p>', 2, 'KBMDG 010 - Multimedia - Gusdanela - PTIK 12 UNP.jpg', 'a', 'a', 'a', 'a', '001.jpg', '10-Jul-2018', 'a', '', '24-Jul-2018', 'a', '001.jpg', '30-Jul-2018', 'a', 'a', '18-Jul-2018', 'Depok', 15, 'Mr X', 'KUA', '001.jpg', '17-Jul-2018', 2, '001.jpg', '001.jpg'),
(3, 7, 'Solo', '09-Jul-2018', '19826198', 'Indonesia', 'Swasta', 'Islam', '<p>asnalksndalskd</p>', 1, 'WhatsApp Image 2017-11-12 at 23.58.46.jpeg', 'aa', '', '', '', NULL, '', '', '', '', '', NULL, '', '', '', '', 'Depok', 11, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(4, 7, 'Sili', '23-Jul-2018', '19826912', 'Indonesia', 'Swasta', 'Islam', '<p>laksndlasdlkad</p>', 2, 'WhatsApp Image 2017-11-12 at 23.58.45 (1).jpeg', '', '', '', '', NULL, '', '', '', '', '', NULL, '', '', '', '', 'Depo', 14, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(5, 8, 'Restu Sianta', '24-Jul-2018', '112341', 'Indonesia', 'Swasta', 'Islam', '<p>laknslkansdlansldad</p>', 1, 'download-2.jpg', 'a', 'a', 'a', '', NULL, '', '', '', '', '', NULL, '', '', '', '', 'Depok', 12, 'Resty', 'KUA', 'Koala.jpg', '31-Jul-2018', 2, 'download-2.jpg', NULL),
(6, 8, 'Fenny', '23-Jul-2018', '11212', 'Indonesia', 'Swasta', 'Islam', '<p>landlaksndlaksd</p>', 2, 'e6aa26bcba9a72ac1fce0726f971e9bddcef9eca_hq.jpg', 'a', '', '', '', NULL, '', '', '', '', '', NULL, '', '', '', '', 'Depok', 14, NULL, NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_catin`
--

CREATE TABLE `detail_catin` (
  `id` int(11) NOT NULL,
  `data_catin_id` int(11) DEFAULT NULL,
  `nama_istri_pertama` varchar(255) DEFAULT NULL,
  `k_akta_nikah_pertama` varchar(255) DEFAULT NULL,
  `no_akta_pertama` varchar(255) DEFAULT NULL,
  `tgl_akta_pertama` varchar(255) DEFAULT NULL,
  `nama_istri_kedua` varchar(255) DEFAULT NULL,
  `k_akta_nikah_kedua` varchar(255) DEFAULT NULL,
  `no_akta_kedua` varchar(255) DEFAULT NULL,
  `tgl_akta_kedua` varchar(255) DEFAULT NULL,
  `nama_istri_ketiga` varchar(255) DEFAULT NULL,
  `k_akta_nikah_ketiga` varchar(255) DEFAULT NULL,
  `no_akta_ketiga` varchar(255) DEFAULT NULL,
  `tgl_akta_ketiga` varchar(255) DEFAULT NULL,
  `izin_pengadilan` varchar(255) DEFAULT NULL,
  `no_izin` varchar(255) DEFAULT NULL,
  `tgl_izin` varchar(255) DEFAULT NULL,
  `persetujuan_istri` varchar(255) DEFAULT NULL,
  `tgl_persetujuan_istri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama_kec` varchar(255) DEFAULT NULL,
  `kepala_desa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama_kec`, `kepala_desa`) VALUES
(1, 'Padang', 'Samsul Goli'),
(2, 'Pariaman', NULL),
(3, 'bukittinggi', NULL),
(4, 'Kampung Kandang', 'Aguslim');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1523277363),
('m130524_201442_init', 1523277366),
('m180316_193516_tabel_catin', 1523277373),
('m180319_084404_tambah_kolom_tempat_lahir', 1523277377),
('m180321_024050_tabel_pelaksanaan_nikah', 1523277401),
('m180409_123025_penghulu_id_to_profil', 1523277402),
('m180511_223401_tambah_upload_ktp_kk', 1526078466),
('m180513_184420_tambah_status', 1526237249),
('m180624_041318_tambah_status_kepengurusan', 1529813654),
('m180624_041936_hapus_status_kepengurusan', 1529814014),
('m180624_065554_tambah_catin_dipelakasaan', 1529836263),
('m180625_011825_hapus_penghulu_id', 1529889553),
('m180706_031543_tambahan_field_inputan', 1530848197);

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua_catin`
--

CREATE TABLE `orang_tua_catin` (
  `id` int(11) NOT NULL,
  `data_catin_id` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `tempat_tgl_lahir` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  `kewarganearaan` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `status_keluarga` smallint(6) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `file_ktp` varchar(255) DEFAULT NULL,
  `file_kk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orang_tua_catin`
--

INSERT INTO `orang_tua_catin` (`id`, `data_catin_id`, `nama_lengkap`, `tempat_tgl_lahir`, `no_ktp`, `kewarganearaan`, `pekerjaan`, `agama`, `alamat`, `status_keluarga`, `tempat_lahir`, `file_ktp`, `file_kk`) VALUES
(1, 1, 'Pada', '13-Jul-2018', '9186218982', 'Indonesia', 'Swasta', 'Islam', '<p>alksdnalsdnalksd</p>', 1, 'Depok', 'KBMDG 109 - Programming - Sandy Putra Effendi - PTIK 15 UNP.jpg', NULL),
(2, 1, 'loli', '04-Jul-2018', '10927091290', 'Indonesia', 'Ibu Rumah Tangga', 'prompt', '<p>alsnlkansdlkand</p>', 2, 'Depok', 'KBMDG 007 - Human Resources Development - Amalia Sholiha - Pend Matematika 12 UNP.jpg', NULL),
(3, 5, 'Reza', '12-Jul-2018', '12123', 'Indonesia', 'Swasta', 'Islam', '<p>a.s,da.,sd</p>', 1, 'Depok', 'foto.png', NULL),
(4, 5, 'Sri', '19-Jul-2018', '123123', 'Indonesia', 'Ibu Rumah Tangga', 'Islam', '<p>alksjdalksd</p>', 2, 'Depok', 'BnC3ihmCUAEeO0N.jpg', NULL),
(5, 6, 'Purwo', '05-Jul-2018', '1231', 'alknsdlaksndl', 'a;lsmdal;', 'Islam', '<p>a.snda.,dla;sdalkndlaksbndlakdn</p>', 1, 'Depok', 'foto.png', NULL),
(6, 6, 'nurli', '10-Jul-2018', '19286319', 'Indonesia', 'Ibu Rumah Tangga', 'Islam', '<p>anmbs,abdkjadb</p>', 2, 'Depok', 'niku.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelaksanaan_nikah`
--

CREATE TABLE `pelaksanaan_nikah` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `hari_nikah` varchar(10) DEFAULT NULL,
  `tgl_nikah` varchar(255) DEFAULT NULL,
  `waktu` varchar(25) DEFAULT NULL,
  `tempat` text,
  `tgl_daftar` varchar(255) DEFAULT NULL,
  `kec_id` int(11) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `mas_kawin` varchar(255) DEFAULT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `no_perjanjian_kawin` varchar(255) DEFAULT NULL,
  `tgl_surat_perjanjian` varchar(255) DEFAULT NULL,
  `nama_notaris` varchar(255) DEFAULT NULL,
  `status_nikah` smallint(6) DEFAULT NULL,
  `id_suami` int(11) DEFAULT NULL,
  `id_istri` int(11) DEFAULT NULL,
  `note_kelengkapan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelaksanaan_nikah`
--

INSERT INTO `pelaksanaan_nikah` (`id`, `user_id`, `hari_nikah`, `tgl_nikah`, `waktu`, `tempat`, `tgl_daftar`, `kec_id`, `kota`, `mas_kawin`, `pembayaran`, `no_perjanjian_kawin`, `tgl_surat_perjanjian`, `nama_notaris`, `status_nikah`, `id_suami`, `id_istri`, `note_kelengkapan`) VALUES
(2, 6, 'lsknl', '24-Juli-2018', '07.00', '<p>a,smda,d</p>', '06 July 2018', 1, 'Padang', 'Emas 3 Gram', 'Tunai', '11/1121//1al,sdd', '13-Juli-2018', 'asdalkds', 5, 1, 2, NULL),
(3, 8, 'Jum\'at', '11-07-2018', '13.00', '<p>jkabskdjabkjdajbsdabdkjabkajsd</p>', '15 July 2018', 2, 'alndlasdnalkd', 'Emas 3 gram', 'Tunai', '182973192', '25-07-2018', 'alnsldand', 5, 5, 6, '<p>Tolong lengkapi bagian abc</p>');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tempat_tgl_lahir` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  `alamat` text,
  `agama` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `kec_id` int(11) DEFAULT NULL,
  `file_ktp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `user_id`, `nama`, `tempat_tgl_lahir`, `no_ktp`, `alamat`, `agama`, `no_telp`, `foto`, `tempat_lahir`, `jabatan`, `kec_id`, `file_ktp`) VALUES
(1, 6, 'Argi', '', '190201', '', 'prompt', '', 'WhatsApp Image 2017-11-12 at 23.58.47 (1).jpeg', '', NULL, NULL, NULL),
(2, 1, 'Admin', '25-Jul-2018', NULL, '<p>laslasndlasd</p>', 'Islam', '081224166684', 'images1.jpeg', 'Depok', '0', NULL, NULL),
(3, 8, 'Restu Sianta', '18-Jul-2018', '112345', '<p>lakjdlkasnlkasd</p>', 'Islam', '081224166684', 'download-2.jpg', 'Depok', NULL, 2, NULL),
(4, 2, 'Pegawai Desa', '01-Aug-2018', '12312312', '<p>alksndlakndlak</p>', 'Islam', '0987090', 'foto.png', 'Depok', '6', 2, NULL),
(5, 3, 'Kepala Desa', '12-Jul-2018', '121212', '<p>a,jsbdasdk</p>', 'Islam', '00081212131', 'foto.png', 'Depok', '2', 1, NULL),
(6, 4, 'Pegawai KUA', '01-Aug-2018', '1213', '<p>alsjhdakljsdnakjdad</p>', 'Islam', '7896987', 'foto.png', 'Depok', '3', 1, NULL),
(7, 5, 'Kepala KUA', '11-Jul-2018', '19823719', '<p>akjshdkadkjasdk</p>', 'Islam', '198263918', 'foto.png', 'Depok', '4', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `level`) VALUES
(1, 'admin', 'l4OgIJRsbdazr8lqLE_e25eun-TafhKK', '$2y$13$5lKbMMoKhb4SPS8s.jglYOzgs0N90K5vVdLbI0WDeZlmRQZ4pCajC', NULL, 'admin@gmail.com', 10, 1530508056, 1530508056, 0),
(2, 'pegdes', 'HiXMqXFqcfhmMUTjAPXQiy9L3kU9vygk', '$2y$13$dFrMqSNMOQ/mSQFeOwn06O74NVr6mHEljL.hcCUXMX3Xro.s6J8mS', NULL, 'pegdes@gmail.com', 10, 1530508502, 1530508502, 6),
(3, 'kepdes', 'ni58nAiXZfOq78UaXxcJbcl5jQCrcAM_', '$2y$13$d26FU1hh549/um39.MVFqu3gYMeYt0i3V3wauzzzNr7xaop9EMI1i', NULL, 'kepdes@gmail.com', 10, 1530508529, 1530508529, 2),
(4, 'pegkua', 'e9gbsxhANUvb1M1x7f1pOedORUnQeiV-', '$2y$13$NUEDRRhaIQOD0ddpmFeGwOnFcbvd2a/NwPfGBzPMPRyIEyMBlvopC', NULL, 'pegkua@gmail.com', 10, 1530508545, 1530508545, 3),
(5, 'kepkua', 'OMXouYp5fFJmzQzIRCLKD6d5P4wzJJny', '$2y$13$CiycYox.u2.Yi4qz.Ppx4.oaBCnzGElgkNWm7FlisKD7/qXBYdal6', NULL, 'kepkua@gmail.com', 10, 1530508570, 1530508570, 4),
(6, 'argi', 'Yah8ZCNrHS8aSyHiNdi88Az3E0In0rKB', '$2y$13$x9w8AtBjZsluAy4.vFzo4uvMu548RX6MmWD7OgDGAvqx2bhaszd4u', NULL, 'argigarnadi@gmail.com', 10, 1530508620, 1530508620, 1),
(7, 'dila', 'mntU9W6G7RB6VbFySvajVKqCji9AN4cv', '$2y$13$W9CGYkG3ipZk0EKEbUNkiuFtx01Y.CD72C1YYC.WdYNE82c3vp6Wa', NULL, 'dila@gmail.com', 10, 1530843961, 1530843961, 1),
(8, 'reztu', 'ou8NJSl5eu-vRVnyEYsHwqfFG4tizyi3', '$2y$13$2MXqPmU4iqqOg2x9hMCAJedZCCE0uNBYdCR53/6x5jayWIKmaS6im', NULL, 'reztu@gmail.com', 10, 1531594467, 1531594467, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wali_nikah`
--

CREATE TABLE `wali_nikah` (
  `id` int(11) NOT NULL,
  `data_catin_id` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `status_wali` varchar(255) DEFAULT NULL,
  `hubungan_wali` varchar(255) DEFAULT NULL,
  `sebab_wali` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `bin` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  `kewarganegaraan` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `alamat` text,
  `tanggal_surat` varchar(255) DEFAULT NULL,
  `nama_pejabat_kua` varchar(255) DEFAULT NULL,
  `file_ktp` varchar(255) DEFAULT NULL,
  `file_kk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_catin`
--
ALTER TABLE `data_catin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-data_catin-user-id-user-id` (`user_id`);

--
-- Indexes for table `detail_catin`
--
ALTER TABLE `detail_catin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-detail_catin-data_catin_id-data_catin-id` (`data_catin_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `orang_tua_catin`
--
ALTER TABLE `orang_tua_catin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-orang_tua_catin-data_catin_id-data_catin-id` (`data_catin_id`);

--
-- Indexes for table `pelaksanaan_nikah`
--
ALTER TABLE `pelaksanaan_nikah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-pelaksanaan_nikah-user_id-user-id` (`user_id`),
  ADD KEY `fk-pelaksanaan_nikah-kec_id-kecamatan-id` (`kec_id`),
  ADD KEY `fk-pelaksanaan_nikah-id_suami-data_catin-id` (`id_suami`),
  ADD KEY `fk-pelaksanaan_nikah-id_istri-data_catin-id` (`id_istri`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-profil-user_id-user-id` (`user_id`),
  ADD KEY `fk-profil-kec_id-kecamatan-id` (`kec_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `wali_nikah`
--
ALTER TABLE `wali_nikah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-wali_nikah-data_catin_id-data_catin_id` (`data_catin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_catin`
--
ALTER TABLE `data_catin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `detail_catin`
--
ALTER TABLE `detail_catin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orang_tua_catin`
--
ALTER TABLE `orang_tua_catin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pelaksanaan_nikah`
--
ALTER TABLE `pelaksanaan_nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `wali_nikah`
--
ALTER TABLE `wali_nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_catin`
--
ALTER TABLE `data_catin`
  ADD CONSTRAINT `fk-data_catin-user-id-user-id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_catin`
--
ALTER TABLE `detail_catin`
  ADD CONSTRAINT `fk-detail_catin-data_catin_id-data_catin-id` FOREIGN KEY (`data_catin_id`) REFERENCES `data_catin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orang_tua_catin`
--
ALTER TABLE `orang_tua_catin`
  ADD CONSTRAINT `fk-orang_tua_catin-data_catin_id-data_catin-id` FOREIGN KEY (`data_catin_id`) REFERENCES `data_catin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelaksanaan_nikah`
--
ALTER TABLE `pelaksanaan_nikah`
  ADD CONSTRAINT `fk-pelaksanaan_nikah-id_istri-data_catin-id` FOREIGN KEY (`id_istri`) REFERENCES `data_catin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-pelaksanaan_nikah-id_suami-data_catin-id` FOREIGN KEY (`id_suami`) REFERENCES `data_catin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-pelaksanaan_nikah-kec_id-kecamatan-id` FOREIGN KEY (`kec_id`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-pelaksanaan_nikah-user_id-user-id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `fk-profil-kec_id-kecamatan-id` FOREIGN KEY (`kec_id`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-profil-user_id-user-id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wali_nikah`
--
ALTER TABLE `wali_nikah`
  ADD CONSTRAINT `fk-wali_nikah-data_catin_id-data_catin_id` FOREIGN KEY (`data_catin_id`) REFERENCES `data_catin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
