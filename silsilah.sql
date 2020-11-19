-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 05:35 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keluarga`
--

-- --------------------------------------------------------

--
-- Table structure for table `silsilah`
--

CREATE TABLE `silsilah` (
  `id` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `orang_tua` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `silsilah`
--

INSERT INTO `silsilah` (`id`, `nama`, `status`, `gender`, `orang_tua`) VALUES
(1, 'Budi', 'bapak', 'laki laki', 'null'),
(2, 'dedi', 'anak', 'laki laki', 'budi'),
(3, 'dodi', 'anak', 'laki laki', 'budi'),
(4, 'dede', 'anak', 'laki laki', 'budi'),
(5, 'dewi', 'anak', 'perempuan', 'budi'),
(6, 'feri', 'cucu', 'laki laki', 'dedi'),
(7, 'farah', 'cucu', 'perempuan', 'dedi'),
(8, 'gugus', 'cucu', 'laki laki', 'dodi'),
(9, 'gandi', 'cucu', 'laki laki', 'dodi'),
(10, 'hani', 'cucu', 'perempuan', 'dede'),
(11, 'hana', 'cucu', 'perempuan', 'dede'),
(38, 'Wowowowowo', 'bapak', 'laki laki', 'Mbah'),
(39, 'aaaa', 'bapak', 'laki laki', 'Mbah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `silsilah`
--
ALTER TABLE `silsilah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `silsilah`
--
ALTER TABLE `silsilah`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
