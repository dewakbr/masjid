-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2025 pada 05.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `donasi_id` int(11) NOT NULL,
  `donasi_no` varchar(20) NOT NULL,
  `donasi_tgl` date NOT NULL,
  `donasi_donatur_id` int(11) NOT NULL,
  `donasi_jenis_id` int(11) NOT NULL,
  `donasi_jenisnom_id` int(11) NOT NULL,
  `donasi_nominal` double(20,0) NOT NULL,
  `donasi_create_user_id` int(11) NOT NULL,
  `donasi_create_lastupdate` datetime NOT NULL,
  `donasi_user_id` int(11) NOT NULL,
  `donasi_lastupdate` datetime NOT NULL,
  `donasi_aktif` int(1) NOT NULL DEFAULT 1 COMMENT '1=aktif, 2=hapus',
  `donasi_foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
--

CREATE TABLE `donatur` (
  `donatur_id` int(11) NOT NULL,
  `donatur_no` varchar(20) NOT NULL,
  `donatur_nama` varchar(100) NOT NULL,
  `donatur_alamat` varchar(300) NOT NULL,
  `donatur_telp` varchar(20) NOT NULL,
  `donatur_create_user_id` int(11) NOT NULL,
  `donatur_create_lastupdate` datetime NOT NULL,
  `donatur_aksi_user` varchar(20) NOT NULL,
  `donatur_user_id` int(11) NOT NULL,
  `donatur_aktif` int(1) NOT NULL DEFAULT 1 COMMENT '1=aktif, 0=tidak aktif, 2=dihapus',
  `donatur_lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`donatur_id`, `donatur_no`, `donatur_nama`, `donatur_alamat`, `donatur_telp`, `donatur_create_user_id`, `donatur_create_lastupdate`, `donatur_aksi_user`, `donatur_user_id`, `donatur_aktif`, `donatur_lastupdate`) VALUES
(1, '002', 'suta', 'aa', '120205025', 1, '2025-03-07 17:27:14', 'tambah', 1, 1, '2025-03-07 17:27:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `jenis_id` int(11) NOT NULL,
  `jenis_no` varchar(20) NOT NULL,
  `jenis_nama` varchar(100) NOT NULL,
  `jenis_keterangan` varchar(300) NOT NULL,
  `jenis_create_user_id` int(11) NOT NULL,
  `jenis_create_lastupdate` datetime NOT NULL,
  `jenis_aktif` int(1) NOT NULL DEFAULT 1,
  `jenis_user_id` int(11) NOT NULL,
  `jenis_lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`jenis_id`, `jenis_no`, `jenis_nama`, `jenis_keterangan`, `jenis_create_user_id`, `jenis_create_lastupdate`, `jenis_aktif`, `jenis_user_id`, `jenis_lastupdate`) VALUES
(1, '01', 'donasi sapi kolektif', 'donasi ini diperuntukan untuk Qurban sapi secara kolektif 1/7', 1, '2025-03-07 17:59:16', 1, 1, '2025-03-07 17:59:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_nominal`
--

CREATE TABLE `jenis_nominal` (
  `jenisnom_id` int(11) NOT NULL,
  `jenisnom_jenis_id` int(11) NOT NULL,
  `jenisnom_nominal` double(20,0) NOT NULL,
  `jenisnom_create_user_id` int(11) NOT NULL,
  `jenisnom_create_lastupdate` datetime NOT NULL,
  `jenisnom_user_id` int(11) NOT NULL,
  `jenisnom_aktif` int(1) NOT NULL DEFAULT 1,
  `jenisnom_lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `pegawai_no` varchar(20) NOT NULL,
  `pegawai_nama` varchar(100) NOT NULL,
  `pegawai_alamat` varchar(300) NOT NULL,
  `pegawai_telp` varchar(20) NOT NULL,
  `pegawai_create_user_id` int(11) NOT NULL,
  `pegawai_create_lastupdate` datetime NOT NULL,
  `pegawai_aksi_user` varchar(20) NOT NULL,
  `pegawai_user_id` int(11) NOT NULL,
  `pegawai_aktif` int(1) NOT NULL DEFAULT 1,
  `pegawai_lastupdate` datetime NOT NULL,
  `pegawai_default` int(1) NOT NULL DEFAULT 0 COMMENT '1=default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `pegawai_no`, `pegawai_nama`, `pegawai_alamat`, `pegawai_telp`, `pegawai_create_user_id`, `pegawai_create_lastupdate`, `pegawai_aksi_user`, `pegawai_user_id`, `pegawai_aktif`, `pegawai_lastupdate`, `pegawai_default`) VALUES
(1, '001', 'akbar', 'nayu', '08585858585', 1, '2025-03-07 17:14:21', 'tambah', 1, 1, '2025-03-07 17:14:21', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_donasi`
--

CREATE TABLE `tmp_donasi` (
  `donasi_id` int(11) NOT NULL,
  `donasi_no` varchar(20) NOT NULL,
  `donasi_tgl` date NOT NULL,
  `donasi_donatur_id` int(11) NOT NULL,
  `donasi_jenis_id` int(11) NOT NULL,
  `donasi_jenisnom_id` int(11) NOT NULL,
  `donasi_nominal` double(20,0) NOT NULL,
  `donasi_create_user_id` int(11) NOT NULL,
  `donasi_create_lastupdate` datetime NOT NULL,
  `donasi_user_id` int(11) NOT NULL,
  `donasi_lastupdate` datetime NOT NULL,
  `donasi_aktif` int(1) NOT NULL DEFAULT 1 COMMENT '1=aktif, 2=hapus',
  `donasi_foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_pegawai_id` int(11) NOT NULL,
  `user_donatur_id` int(11) NOT NULL,
  `user_aktif` int(1) NOT NULL DEFAULT 1,
  `user_lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_nama`, `user_password`, `user_pegawai_id`, `user_donatur_id`, `user_aktif`, `user_lastupdate`) VALUES
(1, 'tiar', 'tiar123', 1, 0, 1, '2025-03-07 17:16:42'),
(2, 'aku', 'aku123', 0, 1, 1, '2025-03-07 17:28:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`donasi_id`);

--
-- Indeks untuk tabel `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`donatur_id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indeks untuk tabel `jenis_nominal`
--
ALTER TABLE `jenis_nominal`
  ADD PRIMARY KEY (`jenisnom_id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indeks untuk tabel `tmp_donasi`
--
ALTER TABLE `tmp_donasi`
  ADD PRIMARY KEY (`donasi_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `donasi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `donatur`
--
ALTER TABLE `donatur`
  MODIFY `donatur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `jenis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jenis_nominal`
--
ALTER TABLE `jenis_nominal`
  MODIFY `jenisnom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tmp_donasi`
--
ALTER TABLE `tmp_donasi`
  MODIFY `donasi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
