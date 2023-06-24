-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 04:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE `biaya` (
  `id` int(11) NOT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  `jml_pembayaran` varchar(50) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `status_pembayaran` enum('lunas','belum lunas') DEFAULT NULL,
  `pendaftaran_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `biaya`
--

INSERT INTO `biaya` (`id`, `tgl_pembayaran`, `jml_pembayaran`, `bukti_pembayaran`, `status_pembayaran`, `pendaftaran_id`) VALUES
(1, '2023-05-12', '2500000', 'bukti.jpg', 'lunas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(50) DEFAULT NULL,
  `thn_ajaran` varchar(50) DEFAULT NULL,
  `kuota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`id`, `jenjang`, `thn_ajaran`, `kuota`) VALUES
(1, 'Sekolah Menengah Pertama', '2023/2024', '50');

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE `orangtua` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` bigint(14) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`id`, `nama`, `no_hp`, `alamat`, `pekerjaan`) VALUES
(1, 'yaya', 85232724521, 'tegal', 'wirausaha');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `santri_id` int(11) NOT NULL,
  `status_pendaftaran_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `tgl_pendaftaran`, `santri_id`, `status_pendaftaran_id`) VALUES
(1, '2023-05-09', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id` int(11) NOT NULL,
  `nisn` int(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `no_hp` bigint(14) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `orangtua_id` int(11) NOT NULL,
  `jenjang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id`, `nisn`, `nama`, `alamat`, `jk`, `no_hp`, `email`, `orangtua_id`, `jenjang_id`) VALUES
(1, 1234, 'niken', 'tegal', 'P', 89876543123, 'niken@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_pendaftaran`
--

CREATE TABLE `status_pendaftaran` (
  `id` int(11) NOT NULL,
  `status_pendaftaran` enum('lolos','tidak lolos','dalam proses') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `status_pendaftaran`
--

INSERT INTO `status_pendaftaran` (`id`, `status_pendaftaran`) VALUES
(1, 'lolos');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `santri_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_biaya_pendaftaran1_idx` (`pendaftaran_id`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pendaftaran_santri1_idx` (`santri_id`),
  ADD KEY `fk_pendaftaran_status_pendaftaran1_idx` (`status_pendaftaran_id`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_santri_orangtua1_idx` (`orangtua_id`),
  ADD KEY `fk_santri_jenjang1_idx` (`jenjang_id`);

--
-- Indexes for table `status_pendaftaran`
--
ALTER TABLE `status_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_santri_idx` (`santri_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_pendaftaran`
--
ALTER TABLE `status_pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biaya`
--
ALTER TABLE `biaya`
  ADD CONSTRAINT `fk_biaya_pendaftaran1` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `fk_pendaftaran_santri1` FOREIGN KEY (`santri_id`) REFERENCES `santri` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pendaftaran_status_pendaftaran1` FOREIGN KEY (`status_pendaftaran_id`) REFERENCES `status_pendaftaran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `santri`
--
ALTER TABLE `santri`
  ADD CONSTRAINT `fk_santri_jenjang1` FOREIGN KEY (`jenjang_id`) REFERENCES `jenjang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_santri_orangtua1` FOREIGN KEY (`orangtua_id`) REFERENCES `orangtua` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_santri` FOREIGN KEY (`santri_id`) REFERENCES `santri` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
