-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2023 at 02:30 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `abspagi`
--

DROP TABLE IF EXISTS `abspagi`;
CREATE TABLE IF NOT EXISTS `abspagi` (
  `id_mu` int NOT NULL AUTO_INCREMENT,
  `time` date NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pesan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `maxjam` time NOT NULL,
  `hadir` time NOT NULL,
  `btime` date NOT NULL,
  `imageb` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pesanb` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `minjam` time NOT NULL,
  `pulang` time NOT NULL,
  PRIMARY KEY (`id_mu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bagian` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `bagian`) VALUES
(3, 'SIANIO', 'ADMIN'),
(4, 'TRI MINARNI', 'ADMIN'),
(5, 'AYUNI', 'ADMIN'),
(6, 'ARI HARYANI', 'ADMIN'),
(7, 'TITIK SUCI RAHAYU', 'CHECKER'),
(8, 'KUWAT SANTOSO', 'CLEANING/UMUM'),
(9, 'SAHLAN', 'COOK'),
(10, 'SAIFUDIN', 'COOK'),
(11, 'MUTAWAR', 'COOK'),
(12, 'HARLY M', 'COOK'),
(13, 'KHABIB', 'COOK'),
(14, 'RONI', 'COOK'),
(15, 'JUMIYEM', 'DAPUR'),
(16, 'ANTIEN', 'DAPUR'),
(17, 'WAREH WULANDARI', 'DAPUR'),
(18, 'SANIYAH', 'DAPUR'),
(19, 'ELI', 'DAPUR'),
(20, 'DJOKO', 'GUDANG/UMUM'),
(21, 'MUHAMMAD IKHSANUDDIN', 'IT'),
(22, 'TRI HANDAYANI', 'KASIR'),
(23, 'NINIEK SETIAWAN', 'MANAJER'),
(24, 'MUJIATI', 'PANTRY'),
(25, 'SRI P. NUGRAHENI', 'PANTRY'),
(26, 'SUHARI', 'SATPAM'),
(27, 'WIDI MAULANA', 'SATPAM'),
(28, 'AGUNG', 'SOPIR'),
(29, 'ZAENAL', 'TEKNISI'),
(30, 'ATIEK B', 'WAITERS'),
(31, 'IINIAH', 'WAITERS'),
(32, 'DWI ARIYANTI', 'WAITERS'),
(33, 'SITI ROKAYAH', 'WAITERS'),
(34, 'SAIFUL', 'WAITERS'),
(35, 'CECILIA ARSY', 'WAITERS'),
(36, 'IOK', 'TEKNISI');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
