-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Okt 2018 pada 15.05
-- Versi server: 5.7.23
-- Versi PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocidajao_porkes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_artikel`
--

CREATE TABLE `m_artikel` (
  `artikel_id` int(11) NOT NULL,
  `artikel_judul` varchar(100) DEFAULT NULL,
  `artikel_isi` text,
  `artikel_foto` varchar(255) DEFAULT NULL,
  `artikel_status` char(1) DEFAULT NULL,
  `artikel_aktif` char(1) DEFAULT NULL,
  `artikel_created_date` timestamp NULL DEFAULT NULL,
  `artikel_created_by` varchar(100) DEFAULT NULL,
  `artikel_updated_date` timestamp NULL DEFAULT NULL,
  `artikel_updated_by` varchar(100) DEFAULT NULL,
  `artikel_revised` int(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_info`
--

CREATE TABLE `m_info` (
  `info_id` int(11) NOT NULL,
  `info_nama` varchar(255) DEFAULT NULL,
  `info_alamat` text,
  `info_facebook` varchar(50) DEFAULT NULL,
  `info_twitter` varchar(50) DEFAULT NULL,
  `info_instagram` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_layanan`
--

CREATE TABLE `m_layanan` (
  `layanan_id` int(11) NOT NULL,
  `layanan_deskripsi` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_user`
--

CREATE TABLE `s_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_nama` varchar(255) DEFAULT NULL,
  `user_alamat` text,
  `user_email` varchar(100) DEFAULT NULL,
  `user_faskes_id` int(11) DEFAULT NULL,
  `user_level` int(1) DEFAULT NULL,
  `user_aktif` char(1) DEFAULT NULL,
  `user_created_by` varchar(255) DEFAULT NULL,
  `user_created_date` timestamp NULL DEFAULT NULL,
  `user_updated_by` varchar(255) DEFAULT NULL,
  `user_updated_date` timestamp NULL DEFAULT NULL,
  `user_revised` int(14) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `s_user`
--

INSERT INTO `s_user` (`user_id`, `user_name`, `user_password`, `user_nama`, `user_alamat`, `user_email`, `user_faskes_id`, `user_level`, `user_aktif`, `user_created_by`, `user_created_date`, `user_updated_by`, `user_updated_date`, `user_revised`) VALUES
(1, 'tomi', '1234', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `m_artikel`
--
ALTER TABLE `m_artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indeks untuk tabel `m_info`
--
ALTER TABLE `m_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indeks untuk tabel `m_layanan`
--
ALTER TABLE `m_layanan`
  ADD PRIMARY KEY (`layanan_id`);

--
-- Indeks untuk tabel `s_user`
--
ALTER TABLE `s_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `m_artikel`
--
ALTER TABLE `m_artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_info`
--
ALTER TABLE `m_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_layanan`
--
ALTER TABLE `m_layanan`
  MODIFY `layanan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `s_user`
--
ALTER TABLE `s_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
