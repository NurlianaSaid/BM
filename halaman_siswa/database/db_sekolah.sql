-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 05:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_industri`
--

CREATE TABLE `tabel_industri` (
  `id` int(11) NOT NULL,
  `nama_industri` varchar(120) NOT NULL,
  `bidang_industri` varchar(120) NOT NULL,
  `ceo` varchar(120) NOT NULL,
  `jalan` varchar(120) NOT NULL,
  `kabupaten` varchar(11) NOT NULL,
  `status` varchar(18) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_industri`
--

INSERT INTO `tabel_industri` (`id`, `nama_industri`, `bidang_industri`, `ceo`, `jalan`, `kabupaten`, `status`, `tahun`) VALUES
(19, 'Afila media karya', 'Software House', 'ALFIAN S.,KOM.', 'Abdul razak', 'Gowa', 'Menerima', '2019'),
(20, 'Indigo', 'Software House', 'Muh. Rifky Al-Fajri', 'Pettarani', 'Makassar', 'Menerima', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `Id_guru` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Alamat_mnr` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`Id_guru`, `Username`, `password`, `Alamat_mnr`) VALUES
(1, 'Guru', 'Guru', 'Makassar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporanmonir`
--

CREATE TABLE `tb_laporanmonir` (
  `Id_laporanmonir` int(11) NOT NULL,
  `Nama_perusahaan` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL,
  `Kelas` varchar(50) NOT NULL,
  `Kabupaten` varchar(50) NOT NULL,
  `Jumlah_siswa` int(10) NOT NULL,
  `Nama_siswa` text NOT NULL,
  `Cttn_perkembangan` text NOT NULL,
  `Cttn_pelanggaran` text NOT NULL,
  `Gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_laporanmonir`
--

INSERT INTO `tb_laporanmonir` (`Id_laporanmonir`, `Nama_perusahaan`, `Tanggal`, `Kelas`, `Kabupaten`, `Jumlah_siswa`, `Nama_siswa`, `Cttn_perkembangan`, `Cttn_pelanggaran`, `Gambar`) VALUES
(51, 'Afila Media Karya', '2024-10-28', 'XII RPL', 'Gowa', 2, 'Taufik;Liana', 'Baik;Iyya', 'no;no', 'uploads/_MG_5729.JPG'),
(52, 'Telkom', '2024-11-13', 'XII RPL', 'Alamat Telkom', 2, 'Sayang;cahaya', 'Aku Sayang liana;Iyya', 'Not Any;no', 'uploads/20.JPG'),
(54, 'Telkom', '2024-11-08', 'XII RPL', 'Alamat Telkom', 2, 'Liana;Alina', 'Cantik;Luar Biasa', 'baik;no', 'uploads/_MG_5770.JPG'),
(55, 'Telkom', '2023-11-30', '12', 'Pettarani', 1, 'Liana', 'Baik sekali', 'tidak ada', 'uploads/_MG_5370.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `Id_perusahaan` int(11) NOT NULL,
  `Pendiri` varchar(50) NOT NULL,
  `Nama_perusahaan` varchar(100) NOT NULL,
  `Bidang_industri` varchar(50) NOT NULL,
  `Kabupaten` varchar(150) NOT NULL,
  `Jalan` varchar(100) NOT NULL,
  `Tahun_didirikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`Id_perusahaan`, `Pendiri`, `Nama_perusahaan`, `Bidang_industri`, `Kabupaten`, `Jalan`, `Tahun_didirikan`) VALUES
(2, 'Alfian Dirham', 'Afila Media Karya', 'Software House', 'Gowa', 'Samata', '2020'),
(3, 'Nurliana', 'Software House', 'Software House', 'Makassar', 'Pettrani', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `Id_siswa` int(11) NOT NULL,
  `Nisn` varchar(15) NOT NULL,
  `Nama_siswa` varchar(50) NOT NULL,
  `Kelas_siswa` varchar(50) NOT NULL,
  `Jenis_kelamin` varchar(15) NOT NULL,
  `Foto_siswa` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`Id_siswa`, `Nisn`, `Nama_siswa`, `Kelas_siswa`, `Jenis_kelamin`, `Foto_siswa`, `Alamat`) VALUES
(1, 'siswa', 'siswa', '12 RPL', 'Lelaki', '1.jpg', 'Makassar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_industri`
--
ALTER TABLE `tabel_industri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`Id_guru`);

--
-- Indexes for table `tb_laporanmonir`
--
ALTER TABLE `tb_laporanmonir`
  ADD PRIMARY KEY (`Id_laporanmonir`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`Id_perusahaan`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`Id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_industri`
--
ALTER TABLE `tabel_industri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `Id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_laporanmonir`
--
ALTER TABLE `tb_laporanmonir`
  MODIFY `Id_laporanmonir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `Id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `Id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
