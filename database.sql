-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 06:15 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_handphone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `password`, `jenis_kelamin`, `alamat`, `pekerjaan`, `no_handphone`) VALUES
(8, 'a', '', 'L', 'a', 'a1', '111111'),
(11, 'Epis Kuswono', '', 'L', 'Kudus', 'Desainer', '085825432037'),
(12, 'a', '', 'L', 'Jepara', 'Desainer', '085777431620'),
(13, 'Epis Kuswono', '', 'L', 'Slametharjo', 'a1', '085825432037'),
(14, 'Taufik', '', 'L', 'Kudus', 'Designer', '085825432037'),
(12346, 'udin', 'udin', 'L', 'malang', 'buruh', '081738932732'),
(12348, 'pet', 'prt', 'L', 'holo', 'hina', '09090909090'),
(12349, 'kirek', 'anjing', 'L', 'malang', 'turu', '909090909');

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE `angsuran` (
  `id_angsuran` int(11) NOT NULL,
  `tanggal_angsuran` date NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sisa_pinjaman` int(11) NOT NULL,
  `angsuran_bulanan` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`id_angsuran`, `tanggal_angsuran`, `id_anggota`, `nama`, `sisa_pinjaman`, `angsuran_bulanan`, `denda`, `total_bayar`) VALUES
(10123, '2019-03-14', 10241, 'Manil', 200000, 20000, 0, 200000),
(11111, '2019-04-03', 11111, 'Taufik', 200000, 200000, 0, 100000),
(14779, '0000-00-00', 12120, 'topek', 20000, 10000, 10000, 20000),
(10245690, '2019-05-16', 12345, 'Taufik', 200000, 200000, 0, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`) VALUES
(1, 'jinggatra', 'jinggatra'),
(2, 'episkuswono', 'episkuswono'),
(3, 'hidayatmus', 'hidayatmus'),
(4, 'bahrudin', 'bahrudin'),
(5, 'jovanka', 'jovanka'),
(6, 'arifanny', 'arifanny');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal_meminjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_anggota`, `nama`, `besar_pinjaman`, `keterangan`, `tanggal_meminjam`) VALUES
(0, 10452, 'Epis Kuswono', 20000, 'f', '2019-04-30'),
(10321, 10241, 'Manil', 200000, 'null', '2019-03-03'),
(10325, 10452, 'Min', 20000, 'a', '2019-04-03'),
(12630, 12120, 'mustofa', 10000, 'utang', '2019-05-24'),
(13051, 1234, 'kirek', 900000000, 'ini utang', '2019-05-24'),
(24568, 12345, 'Taufik', 200000, 'test', '2019-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_lunas` date NOT NULL,
  `keterangan` enum('Lunas','Belum Lunas') NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_angsuran` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`id_angsuran`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`),
  ADD UNIQUE KEY `id_angsuran` (`id_angsuran`),
  ADD UNIQUE KEY `id_peminjaman` (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12350;

--
-- AUTO_INCREMENT for table `angsuran`
--
ALTER TABLE `angsuran`
  MODIFY `id_angsuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10245691;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_angsuran`) REFERENCES `angsuran` (`id_angsuran`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
