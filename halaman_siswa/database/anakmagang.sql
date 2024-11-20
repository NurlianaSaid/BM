-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2024 pada 09.08
-- Versi server: 10.4.32-MariaDB-log
-- Versi PHP: 8.2.12

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
-- Struktur dari tabel `siswa_pkl`
--

CREATE TABLE `siswa_pkl` (
  `id_siswa` int(11) NOT NULL,
  `Id_siswaa` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `kode_guru` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa_pkl`
--

INSERT INTO `siswa_pkl` (`id_siswa`, `Id_siswaa`, `id_perusahaan`, `kode_guru`) VALUES
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
-- Struktur dari tabel `tabel_industri`
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
-- Dumping data untuk tabel `tabel_industri`
--

INSERT INTO `tabel_industri` (`id`, `nama_industri`, `bidang_industri`, `ceo`, `jalan`, `kabupaten`, `status`, `tahun`) VALUES
(19, 'Afila media karya', 'Software House', 'ALFIAN S.,KOM.', 'Abdul razak', 'Gowa', 'Menerima', '2019'),
(20, 'Indigo', 'Software House', 'Muh. Rifky Al-Fajri', 'Pettarani', 'Makassar', 'Menerima', '2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `password`) VALUES
(1, 'adminmagang', 'password');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kode_guru` varchar(5) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `wilayah_mnr` varchar(150) NOT NULL,
  `kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`kode_guru`, `nama_guru`, `wilayah_mnr`, `kontak`) VALUES
('0001', 'Muhammad Yusuf Abduh S.kom', 'Makassar, Gowa', '085342891320'),
('0003', 'Wahab ', 'Majene', '082339470298');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `tanggal_monitoring` date NOT NULL,
  `kegiatan` text NOT NULL,
  `status` varchar(50) DEFAULT 'belum selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `kode_guru`, `id_perusahaan`, `tanggal_monitoring`, `kegiatan`, `status`) VALUES
(1, '0001', 2, '2024-08-31', 'Monitoring Pertama', 'selesai'),
(2, '0003', 3, '2024-11-22', 'Monitoring Bersama', 'belum selesai'),
(3, '0001', 3, '2024-08-31', 'Monitoring Pertama', 'selesai'),
(4, '0001', 3, '2024-09-30', 'Monitoring Kedua', 'selesai'),
(5, '0001', 2, '2024-09-30', 'Monitoring Kedua', 'selesai'),
(6, '0001', 2, '2024-10-31', 'Monitoring Ketiga', 'belum selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurnal`
--

CREATE TABLE `tb_jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `Id_siswaa` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` text NOT NULL,
  `uraian` text NOT NULL,
  `status` varchar(20) DEFAULT 'Belum terbaca'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jurnal`
--

INSERT INTO `tb_jurnal` (`id_jurnal`, `Id_siswaa`, `id_perusahaan`, `kode_guru`, `tanggal`, `kegiatan`, `uraian`, `status`) VALUES
(11, 1, 2, '0001', '2024-11-20', 'Mengerjakan projek absensi magang', 'Mengerjakan projek absensi magang', 'Belum terbaca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `tanggal_kumpul` date NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporanmonir`
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
-- Dumping data untuk tabel `tb_laporanmonir`
--

INSERT INTO `tb_laporanmonir` (`Id_laporanmonir`, `Nama_perusahaan`, `Tanggal`, `Kelas`, `Kabupaten`, `Jumlah_siswa`, `Nama_siswa`, `Cttn_perkembangan`, `Cttn_pelanggaran`, `Gambar`) VALUES
(51, 'Afila Media Karya', '2024-10-28', 'XII RPL', 'Gowa', 2, 'Taufik;Liana', 'Baik;Iyya', 'no;no', 'uploads/_MG_5729.JPG'),
(52, 'Telkom', '2024-11-13', 'XII RPL', 'Alamat Telkom', 2, 'Sayang;cahaya', 'Aku Sayang liana;Iyya', 'Not Any;no', 'uploads/20.JPG'),
(54, 'Telkom', '2024-11-08', 'XII RPL', 'Alamat Telkom', 2, 'Liana;Alina', 'Cantik;Luar Biasa', 'baik;no', 'uploads/_MG_5770.JPG'),
(56, 'Yamaha', '2024-12-04', 'XII RPL', 'Alamat Yamaha', 1, 'Nabila cantik', 'Sangat baik', 'no', 'uploads/DSC_0746.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `pendiri` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `bidang_industri` varchar(50) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `tahun_didirikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `pendiri`, `nama_perusahaan`, `bidang_industri`, `lokasi`, `jalan`, `tahun_didirikan`) VALUES
(2, 'Alfian Dirham S.kom', 'Afila Media Karya', 'Software House', 'Gowa', 'Samata', '2020'),
(3, 'Noer Ni\'mat Syamsul Kabir,S.Si', 'Software House', 'Software House', 'Makassar', 'Pettrani', '2020'),
(4, 'Muhammad', 'Pengadilan Agama', 'Kenegaraan', 'Majene', 'Jln.Poros Majene', '2010'),
(5, 'Jokowi ', 'Pengadilan Negeri', 'Mengadili perkara pidana dan perdata ', 'Majene', 'Jl. Jend. Sudirman', '1952');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `Id_siswaa` int(11) NOT NULL,
  `Nis` varchar(15) NOT NULL,
  `Nama_siswa` varchar(50) NOT NULL,
  `Kelas_siswa` varchar(50) NOT NULL,
  `Jenis_kelamin` varchar(15) NOT NULL,
  `Foto_siswa` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL
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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa_pkl`
--
ALTER TABLE `siswa_pkl`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `kode_guru_2` (`kode_guru`),
  ADD KEY `id_perusahaan_2` (`id_perusahaan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `Id_siswaa` (`Id_siswaa`);

--
-- Indeks untuk tabel `tabel_industri`
--
ALTER TABLE `tabel_industri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

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
  ADD UNIQUE KEY `id_siswa` (`id_siswa`),
  ADD KEY `tb_laporan_ibfk_1` (`kode_guru`);

--
-- Indeks untuk tabel `tb_laporanmonir`
--
ALTER TABLE `tb_laporanmonir`
  ADD PRIMARY KEY (`Id_laporanmonir`);

--
-- Indeks untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`Id_siswaa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa_pkl`
--
ALTER TABLE `siswa_pkl`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tabel_industri`
--
ALTER TABLE `tabel_industri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_jurnal`
--
ALTER TABLE `tb_jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_laporanmonir`
--
ALTER TABLE `tb_laporanmonir`
  MODIFY `Id_laporanmonir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `Id_siswaa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa_pkl`
--
ALTER TABLE `siswa_pkl`
  ADD CONSTRAINT `siswa_pkl_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_pkl_ibfk_2` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_pkl_ibfk_3` FOREIGN KEY (`Id_siswaa`) REFERENCES `tb_siswa` (`Id_siswaa`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `tb_laporan_ibfk_1` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_laporan_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa_pkl` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
