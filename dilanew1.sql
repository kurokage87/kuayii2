-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 06:29 PM
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
(1, 6, 'a', '27-Aug-2018', '1', 'a', 'a', 'Islam', '<p>sdasdasd</p>', 1, 'download-2.jpg', '', '', '', '', NULL, '', '', '', '', '', NULL, '', '', '', '', 'a', 11, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(2, 6, 'b', '28-Aug-2018', '1', 'a', 'a', 'Islam', '<p>bbbbb</p>', 2, 'e6aa26bcba9a72ac1fce0726f971e9bddcef9eca_hq.jpg', '', '', '', '', NULL, '', '', '', '', '', NULL, '', '', '', '', 'b', 14, NULL, NULL, NULL, NULL, 1, NULL, NULL);

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
(2, 'Pariaman', 'ppp'),
(3, 'bukittinggi', 'oktaaa'),
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
('m180706_031543_tambahan_field_inputan', 1530848197),
('m180802_155551_tambah_field_upload', 1533225622);

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
  `note_kelengkapan` text,
  `pilihan_lokasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelaksanaan_nikah`
--

INSERT INTO `pelaksanaan_nikah` (`id`, `user_id`, `hari_nikah`, `tgl_nikah`, `waktu`, `tempat`, `tgl_daftar`, `kec_id`, `kota`, `mas_kawin`, `pembayaran`, `no_perjanjian_kawin`, `tgl_surat_perjanjian`, `nama_notaris`, `status_nikah`, `id_suami`, `id_istri`, `note_kelengkapan`, `pilihan_lokasi`) VALUES
(3, 6, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, 2, NULL, NULL);

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
(1, 6, 'Argi', '29-Aug-2018', '190201', '<p>asdadsasd</p>', 'Islam', '987900 ', 'foto.png', 'aaaaaa', NULL, 1, NULL),
(2, 1, 'Admin', '25-Jul-2018', NULL, '<p>laslasndlasd</p>', 'Islam', '081224166684', 'images1.jpeg', 'Depok', '0', NULL, NULL),
(3, 8, 'Restu Sianta', '18-Jul-2018', '112345', '<p>lakjdlkasnlkasd</p>', 'Islam', '081224166684', 'download-2.jpg', 'Depok', NULL, 2, NULL),
(4, 2, 'Pegawai Desa', '01-Aug-2018', '12312312', '<p>alksndlakndlak</p>', 'Islam', '0987090', 'foto.png', 'Depok', '6', 1, NULL),
(5, 3, 'Kepala Desa', '12-Jul-2018', '121212', '<p>a,jsbdasdk</p>', 'Islam', '00081212131', 'foto.png', 'Depok', '2', 1, NULL),
(6, 4, 'Pegawai KUA', '01-Aug-2018', '1213', '<p>alsjhdakljsdnakjdad</p>', 'Islam', '7896987', 'foto.png', 'Depok', '3', 1, NULL),
(7, 5, 'Kepala KUA', '11-Jul-2018', '19823719', '<p>akjshdkadkjasdk</p>', 'Islam', '198263918', 'foto.png', 'Depok', '4', 2, NULL),
(8, 12, 'pegawai desa ', '23-Jul-2018', '11218969891', '<p>chchvkjvbk jhjbjhkjbkjbk</p>', 'Islam', '081224166684', 'foto.png', 'Depok', '6', 2, NULL),
(9, 13, 'kepala desa', '25-Jul-2018', '11121', '<p>xcccvxvasdasfsdfsdddddddddddddfgsa</p>', 'Islam', '00081212131', 'foto.png', 'Depok', '2', 1, NULL),
(10, 15, 'Pegawai KUA', '26-Jul-2018', '19281792', '<p>zsadasdadasdasdasd</p>', 'Islam', '00081212131', 'foto.png', 'Depok', '3', 1, NULL),
(11, 16, 'kepala KUAa', '24-Jul-2018', '11218969891', '<p>sdasdadasd</p>', 'Islam', '00081212131', 'foto.png', 'Depok', '4', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upload_bukti`
--

CREATE TABLE `upload_bukti` (
  `id` int(11) NOT NULL,
  `pelaksanaan_nikah_id` int(11) DEFAULT NULL,
  `nama_rek` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `tanggal_kirim` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 'reztu', 'ou8NJSl5eu-vRVnyEYsHwqfFG4tizyi3', '$2y$13$2MXqPmU4iqqOg2x9hMCAJedZCCE0uNBYdCR53/6x5jayWIKmaS6im', NULL, 'reztu@gmail.com', 10, 1531594467, 1531594467, 1),
(9, 'lori', '66cFRydwoJ9CJikLvnH-5-BaxdN1CY7L', '$2y$13$fvMxDyMT9P.1n9oa7Z8gpOlmVPdDO58JKf3kAtK/6tLhEzneq.zOy', NULL, 'lori@gmail.com', 10, 1532139203, 1532139203, 1),
(12, 'pegdes1', '4FNT3gVGuQlisrSmO48vFcmtq5JqMUSP', '$2y$13$CL1LtKcwRn7xsO.u06tgWuPZtmhoVFtGlOtIk2xE9yvC2.l/jD5mS', NULL, 'pegdes1@gmail.com', 10, 1532148671, 1532148671, 6),
(13, 'kepdes1', 'odOGwLol4SLDSgvATI919OGpHigmGJOe', '$2y$13$UO9/VU5KegfKbIxHcsaeeeSRxTVCq9i8KM73mfQXXHrkAjPrzR8Qu', NULL, 'kepdes1@g.b', 10, 1532148705, 1532148705, 2),
(15, 'pegkua1', 'EMGAipGdUs33KuKA--KK-UqSbqS-BvMi', '$2y$13$4LddF6HZHQtErhbAtwS/9eTxbH0XtSDjZl2vtPi/ce8VB5EccMoDK', NULL, 'pegkua1@g.m', 10, 1532148854, 1532148854, 3),
(16, 'kepkua1', 'S9YdCTrnF4g19Uyw6_7I8bmZPjn0nRq_', '$2y$13$2Wh.ZNJVhm5e1IsYuUIIS.PX9k.K4hliQXTg02yHuOzQHxhNBJH2i', NULL, 'kepkua1@g.v', 10, 1532148966, 1532148966, 4),
(17, 'lotus', 'ttE9d-pKAvIIADqFHHo13uILgQWeCy7c', '$2y$13$ZFMNTG92UvZ0pjLXCo7xfOWdWNAFbMcjoO.nVTsyWT/UJ5ggEFEWe', NULL, 'lotus@g.com', 10, 1532155371, 1532155371, 1);

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
-- Indexes for table `upload_bukti`
--
ALTER TABLE `upload_bukti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-upload_bukti-pelaksanaan_nikah_id-pelaksanaan_nikah-id` (`pelaksanaan_nikah_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelaksanaan_nikah`
--
ALTER TABLE `pelaksanaan_nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `upload_bukti`
--
ALTER TABLE `upload_bukti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
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
-- Constraints for table `upload_bukti`
--
ALTER TABLE `upload_bukti`
  ADD CONSTRAINT `fk-upload_bukti-pelaksanaan_nikah_id-pelaksanaan_nikah-id` FOREIGN KEY (`pelaksanaan_nikah_id`) REFERENCES `pelaksanaan_nikah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wali_nikah`
--
ALTER TABLE `wali_nikah`
  ADD CONSTRAINT `fk-wali_nikah-data_catin_id-data_catin_id` FOREIGN KEY (`data_catin_id`) REFERENCES `data_catin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
