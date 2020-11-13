-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 02:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akta`
--

CREATE TABLE `tb_akta` (
  `id_akta` int(11) NOT NULL,
  `nomor_akta` varchar(50) NOT NULL,
  `judul_akta` varchar(128) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `created_akta` datetime NOT NULL,
  `id_pemilik_akta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akta`
--

INSERT INTO `tb_akta` (`id_akta`, `nomor_akta`, `judul_akta`, `kelurahan`, `kecamatan`, `kabupaten`, `created_akta`, `id_pemilik_akta`) VALUES
(1, '0812391231', 'Pembangunan Rumah', 'Jakarta ', 'Jaksel', 'Jaksel', '2020-08-02 16:09:28', 2),
(6, '652604528', 'Pembangunan Cafe', 'Real', 'Fake', 'Fake', '2020-08-03 04:24:39', 1),
(7, '9383297191', 'Pembangunan Majid', 'Real', 'Fake', 'Fake', '2020-08-03 04:24:57', 1),
(8, 'Testing', 'Test', 'Test', 'Test', '2020-08-07', '2020-08-07 00:00:00', 0),
(10, '7472436438', 'Pembangunan Rumah 2', 'Bojong ', 'Nangka ', 'Jabar', '2020-08-03 09:57:44', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `email`, `password`, `role`) VALUES
(1, 'ekomh13@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
(2, 'irma20@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
(3, 'pembimbing1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pembimbing'),
(4, 'rena13@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pembimbing');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemilik_akta`
--

CREATE TABLE `tb_pemilik_akta` (
  `id_pemilik_akta` int(11) NOT NULL,
  `nama_panjang` varchar(128) NOT NULL,
  `nama_pendek` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `status_diri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemilik_akta`
--

INSERT INTO `tb_pemilik_akta` (`id_pemilik_akta`, `nama_panjang`, `nama_pendek`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `kewarganegaraan`, `status_diri`) VALUES
(1, 'Eko Muchamad Haryono', 'Eko', 'Bogor', 'Bogor', '2003-03-29', 'Indonesia', 'Lajang'),
(2, 'Testing', 'Test', 'Test', 'Test', '2020-08-03', 'Indonesia', 'Lajang'),
(3, 'Irma Fatmawati', 'Irma', 'Bogor', 'Bogor', '2003-02-06', 'Indonesia', 'Lajang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akta`
--
ALTER TABLE `tb_akta`
  ADD PRIMARY KEY (`id_akta`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_pemilik_akta`
--
ALTER TABLE `tb_pemilik_akta`
  ADD PRIMARY KEY (`id_pemilik_akta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akta`
--
ALTER TABLE `tb_akta`
  MODIFY `id_akta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pemilik_akta`
--
ALTER TABLE `tb_pemilik_akta`
  MODIFY `id_pemilik_akta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
