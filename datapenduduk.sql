-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 11:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapenduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapenduduk`
--

CREATE TABLE `datapenduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `noktp` varchar(100) NOT NULL,
  `nokk` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapenduduk`
--

INSERT INTO `datapenduduk` (`id_penduduk`, `nama`, `noktp`, `nokk`, `nohp`, `tgl_lahir`) VALUES
(1, 'Budi', '1270002304012030', '1270002304012131', '08123456', '1996-05-23'),
(2, 'Rendi', '1270002304012033', '1270002304012121', '08123457', '1996-05-25'),
(3, 'Siti', '1270002304012055', '1270002304012111', '08123458', '1996-05-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapenduduk`
--
ALTER TABLE `datapenduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapenduduk`
--
ALTER TABLE `datapenduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
