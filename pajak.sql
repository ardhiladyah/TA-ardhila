-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2021 pada 04.26
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_objekpajak`
--

CREATE TABLE `data_objekpajak` (
  `id_objekpajak` int(25) NOT NULL,
  `id_wajibpajak` int(25) NOT NULL,
  `nop` varchar(50) NOT NULL,
  `alamat_objekpajak` varchar(200) NOT NULL,
  `luas_bumi` varchar(200) NOT NULL,
  `luas_bangunan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_objekpajak`
--

INSERT INTO `data_objekpajak` (`id_objekpajak`, `id_wajibpajak`, `nop`, `alamat_objekpajak`, `luas_bumi`, `luas_bangunan`) VALUES
(1, 5, '11', 'Balerejo', '2225', '225'),
(2, 6, '12', 'Kuwu Balerejo ', '2225', '225');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `alamat_pegawai` varchar(225) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `alamat_pegawai`, `jabatan`, `keterangan`) VALUES
(1, '1234567890', 'Yuni', 'Dusun Sekar Petak ', 'Bendahara Desa', 'Bendahara Pajak'),
(5, '1234567892', 'Marno', 'Dusun Pilangpatok', 'Perangkat Desa', 'Penagih'),
(8, '1234567894', 'Dwi Dyah', 'Dusun Pilangpatok', 'Bendahara Desa', 'Bendahara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wajibpajak`
--

CREATE TABLE `data_wajibpajak` (
  `id_wajibpajak` int(11) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `nama_wajibpajak` varchar(225) NOT NULL,
  `alamat_wajibpajak` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_wajibpajak`
--

INSERT INTO `data_wajibpajak` (`id_wajibpajak`, `npwp`, `nama_wajibpajak`, `alamat_wajibpajak`) VALUES
(3, '122334455', 'Suyanto', 'RT. 21 Rw.004 Dusun Sekar Petak'),
(5, '11223344552', 'kahfi', 'a'),
(6, '11223344555', 'dilla', 'kuwu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_objekpajak`
--
ALTER TABLE `data_objekpajak`
  ADD PRIMARY KEY (`id_objekpajak`),
  ADD KEY `id_wajibpajak` (`id_wajibpajak`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `data_wajibpajak`
--
ALTER TABLE `data_wajibpajak`
  ADD PRIMARY KEY (`id_wajibpajak`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_objekpajak`
--
ALTER TABLE `data_objekpajak`
  MODIFY `id_objekpajak` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_wajibpajak`
--
ALTER TABLE `data_wajibpajak`
  MODIFY `id_wajibpajak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_objekpajak`
--
ALTER TABLE `data_objekpajak`
  ADD CONSTRAINT `data_objekpajak_ibfk_1` FOREIGN KEY (`id_wajibpajak`) REFERENCES `data_wajibpajak` (`id_wajibpajak`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
