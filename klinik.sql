-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 04:05 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klinik`
--
CREATE DATABASE IF NOT EXISTS `klinik` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `klinik`;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `iddokter` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `haripraktek` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `poli` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `no_hp` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medis`
--

CREATE TABLE IF NOT EXISTS `medis` (
  `id pasien` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `keluhan` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `poli` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `riwayat pengobatan` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `No HP/WA` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `poli` varchar(100) NOT NULL,
  `tgl_daftar` varchar(100) NOT NULL,
  `tgl_janji` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `keluhan`, `poli`, `tgl_daftar`, `tgl_janji`, `no_hp`, `password`) VALUES
('<br /><b>Warning</b>:  mysqli_fetch_array() expects parameter 1 to be mysqli_result, boolean given i', 'aasdsd', 'adsa', 'Poli Gigi', '', '', '085232225828', ''),
('RM00001', 'Yoga Prasetia', 'Sakit Hati', 'Poli Gigi', '10/10/2020', '10/10/2020', '0292992', 'qwerty'),
('RM00002', 'VIKY FRIANDIKA UTAMANDANI', 'sakit hati', 'Poli Hati', '2020-07-02', '2020-07-04', '085232225828', '321987654viky'),
('RM00003', 'efef', 'afdf', 'Poli Gigi', '2020-07-02', '2020-07-18', '085232225828', '321987654viky'),
('RM00004', 'klambi', 'sakit hati', 'Poli Umum', '2020-07-04', '2020-07-31', '085232225828', 'qwertyu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `level_user` varchar(150) NOT NULL DEFAULT 'member',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `level_user`) VALUES
(1, 'Admin Klinik', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
