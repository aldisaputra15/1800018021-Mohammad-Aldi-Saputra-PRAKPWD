-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2021 pada 10.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `khs`
--

CREATE TABLE `khs` (
  `NIM` varchar(5) NOT NULL,
  `kodeMK` varchar(5) NOT NULL,
  `nilai` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `khs`
--

INSERT INTO `khs` (`NIM`, `kodeMK`, `nilai`) VALUES
('MHS01', 'M003', '80'),
('MHS02', 'M005', '80'),
('MHS03', 'M002', '75'),
('MHS04', 'M004', '65'),
('MHS02', 'M001', '85');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jkel` varchar(1) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgllhr` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jkel`, `alamat`, `tgllhr`) VALUES
('MHS01', 'Siti Aminah', 'P', 'SOLO', '1995-10-01'),
('MHS02', 'Rita', 'P', 'SOLO', '1999-01-01'),
('MHS03', 'Amirudin', 'L', 'SEMARANG', '1998-08-11'),
('MHS04', 'Siti Maryam', 'P', 'JAKARTA', '1995-04-15'),
('MHS05', 'Mohammad Aldi Saputra', 'L', 'PALU\r\n', '2000-01-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode` varchar(5) NOT NULL,
  `namaMK` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode`, `namaMK`, `sks`, `sem`) VALUES
('M001', 'Data Mining', 3, 7),
('M002', 'Pemrograman Web Dinamis', 3, 7),
('M003', 'Dasar Pemrograman', 3, 1),
('M004', 'Bahasa Indonesia', 2, 4),
('M005', 'Pancasila', 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `password`, `nama`, `ttl`, `email`, `level`) VALUES
('aldi15', '827ccb0eea8a706c4c34a16891f84e7b', 'Mohammad Aldi Saputra', '2000-01-15', 'aldywatch15@gmail.com', ''),
('alu123', '827ccb0eea8a706c4c34a16891f84e7b', 'Aldi Alu', '2000-10-19', 'mohammad1800018021@webmail.uad.ac.id', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `khs`
--
ALTER TABLE `khs`
  ADD KEY `NIM` (`NIM`),
  ADD KEY `kodeMK` (`kodeMK`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `khs`
--
ALTER TABLE `khs`
  ADD CONSTRAINT `khs_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `khs_ibfk_2` FOREIGN KEY (`kodeMK`) REFERENCES `matakuliah` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
