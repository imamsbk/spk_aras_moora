-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 04:19 PM
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
-- Database: `spk_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(1) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bobot`
--

CREATE TABLE `tabel_bobot` (
  `id_bobot` int(5) NOT NULL,
  `w1` float NOT NULL,
  `w2` float NOT NULL,
  `w3` float NOT NULL,
  `w4` float NOT NULL,
  `w5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_bobot`
--

INSERT INTO `tabel_bobot` (`id_bobot`, `w1`, `w2`, `w3`, `w4`, `w5`) VALUES
(1, 0.3, 0.2, 0.2, 0.15, 0.15);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id_kriteria` int(5) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `c1` int(4) NOT NULL,
  `c2` int(4) NOT NULL,
  `c3` int(4) NOT NULL,
  `c4` int(4) NOT NULL,
  `c5` int(4) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_kriteria`, `nisn`, `c1`, `c2`, `c3`, `c4`, `c5`, `tahun`) VALUES
(1, '2101321', 1500000, 2, 2, 80, 80, '2025'),
(2, '20041006', 2000000, 3, 2, 80, 78, '2025'),
(3, '20041008', 300000, 2, 2, 79, 79, '2025'),
(5, '20041012', 2000000, 2, 3, 80, 80, '2025');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_normalisasi`
--

CREATE TABLE `tabel_normalisasi` (
  `nisn` int(20) NOT NULL,
  `rangking_aras` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_normalisasi`
--

INSERT INTO `tabel_normalisasi` (`nisn`, `rangking_aras`, `c1`, `c4`) VALUES
(2101321, '0.5466591392136', '', ''),
(20041006, '0.54825318809777', '', ''),
(20041008, '0.97011158342189', '', ''),
(20041010, '0.97011158342189', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ranking`
--

CREATE TABLE `tabel_ranking` (
  `id_ranking` int(5) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_ranking`
--

INSERT INTO `tabel_ranking` (`id_ranking`, `nisn`, `nilai`, `tahun`) VALUES
(36, '2101321', '0.035', '2025'),
(37, '20041006', '0.03', '2025'),
(38, '20041008', '0.147', '2025'),
(39, '20041012', '0.032', '2025');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `nisn` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`nisn`, `nama_siswa`, `jenis_kelamin`) VALUES
(2101321, 'Faizal Maulana', 'Laki-laki'),
(20041006, 'Faza Nur', 'Laki-Laki'),
(20041008, 'Damar Wibowo', 'Laki-laki'),
(20041010, 'Mahesa Fatir', 'Laki-laki'),
(20041012, 'Alif Nurrochman', 'Laki-laki'),
(20041013, 'Satrio Dinda', 'Laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tabel_normalisasi`
--
ALTER TABLE `tabel_normalisasi`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `tabel_ranking`
--
ALTER TABLE `tabel_ranking`
  ADD PRIMARY KEY (`id_ranking`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  MODIFY `id_bobot` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_ranking`
--
ALTER TABLE `tabel_ranking`
  MODIFY `id_ranking` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `nisn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
