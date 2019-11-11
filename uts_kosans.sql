-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 01:08 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_kosans`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Kost');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_tipe` int(10) NOT NULL,
  `nama_tipe` varchar(10) DEFAULT NULL,
  `harga_perbulan` int(10) DEFAULT NULL,
  `jumlah_unit` int(3) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `unit_tersedia` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_tipe`, `nama_tipe`, `harga_perbulan`, `jumlah_unit`, `foto`, `keterangan`, `unit_tersedia`) VALUES
(1, 'Tipe A', 500000, 3, 'tipe_a.jpg', NULL, 0),
(2, 'Tipe B', 400000, 2, 'tipe_b.jpg', NULL, 0),
(3, 'Tipe C', 600000, 3, 'tipe_c.jpg', NULL, 1),
(4, 'Tipe D', 500000, 5, 'tipe_d.jpg', NULL, 1),
(5, 'Tipe E', 900000, 1, 'tipe_e.jpg', NULL, 1),
(6, 'Tipe F', 400000, 4, 'tipe_f.jpg', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `no_transaksi` varchar(255) DEFAULT NULL,
  `id_kamar` int(10) DEFAULT NULL,
  `jumlah` int(3) DEFAULT NULL,
  `harga` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`no_transaksi`, `id_kamar`, `jumlah`, `harga`) VALUES
('5dc0df922fc68', 2, 2, 400000),
('5dc0e1a9403e5', 1, 1, 500000),
('5dc0e231195b5', 1, 2, 500000),
('5dc0e231195b5', 4, 4, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` varchar(255) NOT NULL DEFAULT 'Belum Bayar',
  `tanggal` datetime DEFAULT NULL,
  `total_bayar` int(13) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `alamat` text,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `tanggal`, `total_bayar`, `nama`, `no_hp`, `alamat`, `status`) VALUES
('5dc0df922fc68', '2019-11-05 03:34:01', 800000, 'Rizky', '08123456788', 'margaasih', 'Belum Bayar'),
('5dc0e1a9403e5', '2019-11-05 03:42:59', 500000, 'ri 2', '08123456788', 'sini', 'Sudah Bayar'),
('5dc0e231195b5', '2019-11-05 03:45:14', 3000000, 'peyewa', '08123456788', 'margaasih', 'Sudah Bayar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_tipe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
