-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 06:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `nama_kec` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('m180625_011825_hapus_penghulu_id', 1529889553);

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
  `penguhulu_id` int(11) DEFAULT NULL,
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
  ADD KEY `fk-pelaksanaan_nikah-penguhulu_id-profil-id` (`penguhulu_id`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_catin`
--
ALTER TABLE `detail_catin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orang_tua_catin`
--
ALTER TABLE `orang_tua_catin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelaksanaan_nikah`
--
ALTER TABLE `pelaksanaan_nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `fk-pelaksanaan_nikah-penguhulu_id-profil-id` FOREIGN KEY (`penguhulu_id`) REFERENCES `profil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
