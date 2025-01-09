-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2024 pada 16.52
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anakmagang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_pkl`
--

CREATE TABLE `permohonan_pkl` (
  `id_permohonan` int NOT NULL,
  `id_perusahaan` int DEFAULT NULL,
  `Id_siswaa` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `cv` varchar(50) NOT NULL,
  `status` enum('menunggu','diterima','ditolak') NOT NULL DEFAULT 'menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `permohonan_pkl`
--

INSERT INTO `permohonan_pkl` (`id_permohonan`, `id_perusahaan`, `Id_siswaa`, `nama`, `kelas`, `nisn`, `jenis_kelamin`, `cv`, `status`) VALUES
(1, 2, 1, 'Nurliana', 'XII RPL', '0066480245', 'Perempuan', '673aa5639e412.pdf', 'diterima'),
(4, 3, 6, 'Asliah', 'XII RPL', '0072385847', 'Perempuan', '673b6155bf8a4.pdf', 'menunggu'),
(5, 5, 12, 'Nela Ayudia', 'XII RPL', '0062385434', 'Perempuan', '673c362d2b769.pdf', 'ditolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_pkl`
--

CREATE TABLE `siswa_pkl` (
  `id` int NOT NULL,
  `Id_siswaa` int NOT NULL,
  `id_perusahaan` int NOT NULL,
  `kode_guru` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa_pkl`
--

INSERT INTO `siswa_pkl` (`id`, `Id_siswaa`, `id_perusahaan`, `kode_guru`) VALUES
(14, 1, 2, '0001'),
(15, 2, 4, '0003'),
(16, 3, 2, '0001'),
(17, 4, 2, '0001'),
(18, 5, 2, '0001'),
(19, 6, 3, '0001'),
(20, 7, 3, '0001'),
(21, 8, 4, '0003'),
(22, 9, 5, '0003'),
(23, 10, 5, '0003'),
(24, 11, 3, '0001'),
(25, 12, 4, '0003'),
(26, 13, 4, '0003'),
(27, 14, 5, '0003'),
(28, 15, 3, '0001'),
(29, 16, 4, '0003'),
(30, 17, 3, '0001'),
(31, 18, 5, '0003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'adminmagang', 'password');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cv`
--

CREATE TABLE `tb_cv` (
  `id_cv` int NOT NULL,
  `Id_siswaa` int NOT NULL,
  `kode_guru` varchar(5) DEFAULT NULL,
  `file` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kode_guru` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_guru` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `wilayah_mnr` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `kontak` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`kode_guru`, `nama_guru`, `wilayah_mnr`, `kontak`) VALUES
('0001', 'Muhammad Yusuf Abduh S.kom', 'Makassar, Gowa', '085342891320'),
('0002', 'Rahmatullah S.kom', 'Mamuju', '083137825133'),
('0003', 'Wahab ', 'Majene', '082339470298'),
('0004', 'Syarif S.pd', 'Pare-pare', '08218889585');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int NOT NULL,
  `kode_guru` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `id_perusahaan` int NOT NULL,
  `tanggal_monitoring` date NOT NULL,
  `kegiatan` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT 'belum selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `kode_guru`, `id_perusahaan`, `tanggal_monitoring`, `kegiatan`, `status`) VALUES
(1, '0001', 2, '2024-08-31', 'Monitoring Pertama', 'selesai'),
(2, '0003', 5, '2024-11-22', 'Monitoring Bersama', 'belum selesai'),
(3, '0001', 3, '2024-08-31', 'Monitoring Pertama', 'selesai'),
(4, '0001', 3, '2024-09-30', 'Monitoring Kedua', 'selesai'),
(5, '0001', 2, '2024-09-30', 'Monitoring Kedua', 'selesai'),
(6, '0001', 2, '2024-10-31', 'Monitoring Ketiga', 'belum selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurnal`
--

CREATE TABLE `tb_jurnal` (
  `id_jurnal` int NOT NULL,
  `Id_siswaa` int NOT NULL,
  `id_perusahaan` int NOT NULL,
  `kode_guru` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` text COLLATE utf8mb4_general_ci NOT NULL,
  `uraian` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci DEFAULT 'Belum terbaca'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jurnal`
--

INSERT INTO `tb_jurnal` (`id_jurnal`, `Id_siswaa`, `id_perusahaan`, `kode_guru`, `tanggal`, `kegiatan`, `uraian`, `status`) VALUES
(11, 1, 2, '0001', '2024-11-20', 'Mengerjakan projek absensi magang', 'Mengerjakan projek absensi magang', 'terbaca'),
(12, 3, 2, '0001', '2024-11-11', 'Mengimput data di aplikasi Sikeris', 'Mengimput data di aplikasi Sikeris', 'terbaca'),
(13, 4, 2, '0001', '2024-11-20', 'Mengikuti rapat perusahaan', 'Mengikuti rapat perusahaan yang membahas plan selanjutnya', 'Belum terbaca'),
(14, 2, 4, '0003', '2024-11-20', 'Mengimput data', 'Mengimput data', 'terbaca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int NOT NULL,
  `Id_siswaa` int NOT NULL,
  `tanggal_kumpul` date NOT NULL,
  `file` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `Id_siswaa`, `tanggal_kumpul`, `file`) VALUES
(13, 4, '2024-11-19', '673ca1c1b16c1.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporanmonir`
--

CREATE TABLE `tb_laporanmonir` (
  `id_laporanmonir` int NOT NULL,
  `kode_guru` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `Nama_perusahaan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Tanggal` date NOT NULL,
  `Kelas` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Kabupaten` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Jumlah_siswa` int NOT NULL,
  `Nama_siswa` text COLLATE utf8mb4_general_ci NOT NULL,
  `Cttn_perkembangan` text COLLATE utf8mb4_general_ci NOT NULL,
  `Cttn_pelanggaran` text COLLATE utf8mb4_general_ci NOT NULL,
  `Gambar` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_laporanmonir`
--

INSERT INTO `tb_laporanmonir` (`id_laporanmonir`, `kode_guru`, `Nama_perusahaan`, `Tanggal`, `Kelas`, `Kabupaten`, `Jumlah_siswa`, `Nama_siswa`, `Cttn_perkembangan`, `Cttn_pelanggaran`, `Gambar`) VALUES
(63, '0001', 'Telkom', '2024-12-02', 'XII RPL', 'Alamat Telkom', 2, 'Liana;hshsh', 'hhhhh;yyyyyyy', 'hhhhh;yyy', 'uploads/DSC_0743.jpg'),
(64, '0001', 'Indigo Hub', '2024-11-11', 'XII RPL', 'Alamat Telkom', 2, 'Liana;hshsh', 'indah;indah', 'indah;indah', 'uploads/DSC_0744.jpg'),
(65, '0003', 'Pengadilan Negeri', '2024-11-04', 'RPL ', 'Alamat Pengadilan Negeri', 1, 'Nela Ayudia', 'Baik', 'Hukuman', 'uploads/DSC_0743.jpg'),
(66, '0003', 'Komimfo Majene', '2024-11-20', 'XII RPL', 'Alamat Komimfo Majene', 1, 'Anty', 'baik', 'sanksi', 'uploads/DSC_0740_1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int NOT NULL,
  `kode_guru` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `pendiri` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_perusahaan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `bidang_industri` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lokasi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jalan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_didirikan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('menunggu','menerima','menolak') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `kode_guru`, `pendiri`, `nama_perusahaan`, `bidang_industri`, `lokasi`, `jalan`, `tahun_didirikan`, `status`) VALUES
(2, '0001', 'Alfian Dirham S.kom', 'Afila Media Karya', 'Software House', 'Gowa', 'Samata', '2020', 'menerima'),
(3, '0001', 'Noer Ni\'mat Syamsul Kabir,S.Si', 'Indigo Hub', 'Software House', 'Makassar', 'Pettrani', '2020', 'menerima'),
(4, '0003', 'Muhammad', 'Pengadilan Agama', 'Kenegaraan', 'Majene', 'Jln.Poros Majene', '2010', 'menunggu'),
(5, '0003', 'Jokowi ', 'Pengadilan Negeri', 'Mengadili perkara pidana dan perdata ', 'Majene', 'Jl.majene', '1952', 'menunggu'),
(6, '0001', 'Liana Husain', 'Metro TV', 'Edukasi Data', 'Makassar', 'Pettarani', '2019', 'menolak'),
(14, '0003', 'Nurliana', 'Anggii', 'Kenegaraan', 'Majene', 'Majene', '0003', 'menunggu'),
(15, '0003', 'Nurliana', 'Anggii', 'Kenegaraan', 'Majene', 'Majene', '2020', 'menerima'),
(16, '0003', 'Four', 'Pengadilan Agama ', 'Kenegaraan', 'Majene', 'Jln. Poros majena', '2020', 'menunggu'),
(18, '0003', 'Nurliana', 'Anggiikiaa', 'Kenegaraan', 'Majene', 'Majene', '0003', 'menunggu'),
(19, '0003', 'Nurliana', 'Anggiikiaa', 'Kenegaraan', 'Majene', 'Majene', '2020', 'menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `Id_siswaa` int NOT NULL,
  `Nis` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `Nama_siswa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Kelas_siswa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Jenis_kelamin` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `Foto_siswa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Alamat` varchar(150) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`Id_siswaa`, `Nis`, `Nama_siswa`, `Kelas_siswa`, `Jenis_kelamin`, `Foto_siswa`, `Alamat`) VALUES
(1, '0066480245', 'Nurliana', 'XI RPL', 'P', 'liana.jpg', 'Lelupang'),
(2, '0052090142', 'Dian', 'XI RPL', 'P', 'dian.jpg', 'Gonda'),
(3, '0063999007', 'Taufik', 'XI RPL', 'L', 'taufik.jpg', 'Gonda'),
(4, '0065806776', 'Saskia', 'XII RPL', 'P', 'saskia.jpg', 'Rappogading'),
(5, '  0079047697', 'Anti', 'XI RPL', 'P', 'anti.jpg', 'Rappogading'),
(6, '0072385847', 'Asliah ', 'XII RPL', 'P', 'asliah.jpg', 'Katumbangan'),
(7, '0079988208', 'Farhiah Nailul Authar', 'XI RPL', 'P', 'fhia.jpg', 'Bonde'),
(8, '0071986187', 'Hariana', 'XII RPL', 'P', 'hariana.jpg', 'Ongko'),
(9, '0066888605', 'Mawar', 'XI RPL', 'P', 'mawar.jpg', 'Lapeo'),
(10, '0075540505', 'Muhammad Fauzi Al Zahmi', 'XII RPL', 'L', 'fauzi.jpg', 'Beru Beru'),
(11, '0063301434', 'Muhammad Rifki Al Fajri', 'XI RPL', 'L', 'fiki.jpg', 'Pappang'),
(12, '0062385434', 'Nela Ayudia', 'XII RPL', 'P', 'nela.jpg', 'Pessunang'),
(13, '0069838022', 'Nurfajriani', 'XI RPL', 'P', 'fajriani.jpg', 'Beru Beru'),
(14, '0078824260', 'Nurnaila', 'XII RPL', 'P', 'naila.jpg', 'Gonda'),
(15, '0063859028', 'Putri Adelia', 'XI RPL', 'P', 'adel.jpg', 'Pappang'),
(16, '0056725777', 'Sukma', 'XII RPL', 'P', 'sukma.jpg', 'Kenje'),
(17, '0076454658', 'Tenri Rahmat', 'XI RPL', 'P', 'tenri.jpg', 'Pappang'),
(18, '0062251242', 'Fitriani', 'XI RPL', 'P', 'fitri.jpg', 'Pappang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` enum('siswa','guru','admin') NOT NULL,
  `Id_siswaa` int DEFAULT NULL,
  `kode_guru` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `username`, `password`, `role`, `Id_siswaa`, `kode_guru`) VALUES
(1, 'Admin', 'Admin', 'admin', NULL, NULL),
(2, 'Yusuf', 'Yusuf', 'guru', NULL, '0001'),
(3, 'Wahab', 'Wahab', 'guru', NULL, '0003'),
(5, 'Nurliana', '0066480245', 'siswa', 1, NULL),
(6, 'Asliah', '0072385847', 'siswa', 6, NULL),
(7, 'Saskia', '0065806776', 'siswa', 4, NULL),
(10, 'Nela Ayudia', '0062385434', 'siswa', 12, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `permohonan_pkl`
--
ALTER TABLE `permohonan_pkl`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `Id_siswaa` (`Id_siswaa`);

--
-- Indeks untuk tabel `siswa_pkl`
--
ALTER TABLE `siswa_pkl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_guru_2` (`kode_guru`),
  ADD KEY `id_perusahaan_2` (`id_perusahaan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `Id_siswaa` (`Id_siswaa`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_cv`
--
ALTER TABLE `tb_cv`
  ADD PRIMARY KEY (`id_cv`),
  ADD KEY `Id_siswaa` (`Id_siswaa`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`kode_guru`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indeks untuk tabel `tb_jurnal`
--
ALTER TABLE `tb_jurnal`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD UNIQUE KEY `id_siswa` (`Id_siswaa`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `Id_siswaa` (`Id_siswaa`);

--
-- Indeks untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD UNIQUE KEY `id_siswa` (`Id_siswaa`),
  ADD UNIQUE KEY `Id_siswaa` (`Id_siswaa`);

--
-- Indeks untuk tabel `tb_laporanmonir`
--
ALTER TABLE `tb_laporanmonir`
  ADD PRIMARY KEY (`id_laporanmonir`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indeks untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`Id_siswaa`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `Id_siswaa_2` (`Id_siswaa`),
  ADD UNIQUE KEY `kode_guru_2` (`kode_guru`),
  ADD KEY `Id_siswaa` (`Id_siswaa`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `kode_guru_3` (`kode_guru`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `permohonan_pkl`
--
ALTER TABLE `permohonan_pkl`
  MODIFY `id_permohonan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `siswa_pkl`
--
ALTER TABLE `siswa_pkl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_cv`
--
ALTER TABLE `tb_cv`
  MODIFY `id_cv` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_jurnal`
--
ALTER TABLE `tb_jurnal`
  MODIFY `id_jurnal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_laporanmonir`
--
ALTER TABLE `tb_laporanmonir`
  MODIFY `id_laporanmonir` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `Id_siswaa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `permohonan_pkl`
--
ALTER TABLE `permohonan_pkl`
  ADD CONSTRAINT `permohonan_pkl_ibfk_1` FOREIGN KEY (`Id_siswaa`) REFERENCES `tb_siswa` (`Id_siswaa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa_pkl`
--
ALTER TABLE `siswa_pkl`
  ADD CONSTRAINT `siswa_pkl_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_pkl_ibfk_2` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_pkl_ibfk_3` FOREIGN KEY (`Id_siswaa`) REFERENCES `tb_siswa` (`Id_siswaa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_cv`
--
ALTER TABLE `tb_cv`
  ADD CONSTRAINT `tb_cv_ibfk_1` FOREIGN KEY (`Id_siswaa`) REFERENCES `tb_siswa` (`Id_siswaa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jurnal`
--
ALTER TABLE `tb_jurnal`
  ADD CONSTRAINT `tb_jurnal_ibfk_2` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jurnal_ibfk_3` FOREIGN KEY (`id_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jurnal_ibfk_4` FOREIGN KEY (`Id_siswaa`) REFERENCES `tb_siswa` (`Id_siswaa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD CONSTRAINT `tb_laporan_ibfk_1` FOREIGN KEY (`Id_siswaa`) REFERENCES `tb_siswa` (`Id_siswaa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_laporanmonir`
--
ALTER TABLE `tb_laporanmonir`
  ADD CONSTRAINT `tb_laporanmonir_ibfk_3` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD CONSTRAINT `tb_perusahaan_ibfk_1` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `tb_users_ibfk_1` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_users_ibfk_2` FOREIGN KEY (`Id_siswaa`) REFERENCES `tb_siswa` (`Id_siswaa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
