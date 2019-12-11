-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2019 at 03:12 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11853233_ssipgrouph`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_User`
--

CREATE TABLE `tbl_User` (
  `ID_User` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_User` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Jabatan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_User`
--

INSERT INTO `tbl_User` (`ID_User`, `Nama_User`, `Jabatan`, `Password`) VALUES
('D12345', 'Joko', 'Dosen', 12345678),
('A12345', 'Ujang', 'Admin', 12345678);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
