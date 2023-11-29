-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2023 at 12:02 AM
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
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `namalengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(25) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id_user`, `namalengkap`, `username`, `password`, `usertype`) VALUES
(1, 'Muhammad Ikhsanuddin', 'webstabber@gmail.com', '$2y$10$Aq2ZcFz2Y6DKVRdmK9G5U.C5vlL0GJ7v9CqCK.VRxPZaMf/eLVHJG', 'admin'),
(2, 'Guru', 'smawidyamandala@gmail.com', '$2y$10$WO5W.Q4WjL1poKmftXzdfeaFLaVkUZEoeMHyHPvg8J0lVfHVDRwq.', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `datasiswa`
--

DROP TABLE IF EXISTS `datasiswa`;
CREATE TABLE IF NOT EXISTS `datasiswa` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nisn` text NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `datasiswa`
--

INSERT INTO `datasiswa` (`id_siswa`, `nama`, `nisn`, `kelas`, `alamat`, `photo`) VALUES
(1, 'Adimas Widodo Saputra', '9984837098', 'Kelas XII', 'Jl Singosari Timur H.58', ''),
(2, 'Agustin Saputri Maharani', '0010343449', 'Kelas X', 'Jl Imam Bonjol No.65 C', ''),
(3, 'Aprilia Puspitasari', '0003199504', 'Kelas X', 'Jl Menoreh Timur IV/53', ''),
(4, 'Aprilia Sulistiyo', '0011854605', 'Kelas X', 'JL Srinindito VIII', ''),
(5, 'Brian Ilham Dewantara', '9997499317', 'Kelas X', 'jl stonen timur ii/5', ''),
(6, 'Dewis Adelian Tiffany', '9983131859', 'Kelas X', 'jl gergaji 1', ''),
(7, 'Eka Vinasari', '0010162817', 'Kelas X', 'Jl Tampomas Selatan IV', ''),
(8, 'Ferrel Naufal Patrick Pasha', '0003532305', 'Kelas XI', 'Jl Tampomas Selatan No 6', ''),
(9, 'Fikri Endi Zuliananta', '9970951932', 'Kelas XII', 'Asrama Kodam', ''),
(10, 'Frendy Ervi Maulana', '0005910663', 'Kelas X', 'Kalitengah', ''),
(11, 'Hafidz Yoga Pratama', '9971172443', 'Kelas X', 'Jl Bengawan G - 107', ''),
(12, 'Hannan Althaf Majeeda', '0086568722', 'Kelas X', 'Jl. Sumbermulyo RT 02 RW 01 Jatisari Mijen  Semarang', '330-1e.jpg'),
(13, 'Herdi Setiawan Kinantan', '0086238409', 'Kelas X', 'Petukangan', ''),
(14, 'Intan Sulistyo Putri', '0000714875', 'Kelas XI', 'Karangrejo', ''),
(15, 'keane dylan arizal', '0002718655', 'Kelas X', 'Jl Candi Prambanan Tengah V No 8A/732', ''),
(16, 'Kiky Alviani Saputri', '0076110491', 'Kelas X', 'Talangsari I/48C', ''),
(17, 'LANDUNG BINTANG PRIMA', '0041253516', 'Kelas XII', 'JL WIROTO RAYA NO.17 A', ''),
(18, 'LULU AMALIYA', '0068501112', 'Kelas XI', 'ASRAMA EX. BRIGIF V JANGLI SEMARANG', '286-1a.jpg'),
(19, 'M. FARI INDRIYANTO', '0047741927', 'Kelas XI', 'Simbang Kulon Blok 3 Gg. 2', ''),
(20, 'Muhammad Agus Nur Utomo', '0049889020', 'Kelas XII', 'Jl Bergota Krajan', '313-1d.jpg'),
(21, 'Osama Elwan Izzulhaq', '0011833449', 'Kelas XI', '-', ''),
(22, 'PEREGRINA PRIMA HENING KRISTIANI', '0009867570', 'Kelas XI', 'Kalialang Baru', ''),
(23, 'Septian Ponco Nugroho', '0048363107', 'Kelas XII', 'Jangli Krajan', ''),
(24, 'Shevchenko Zambrottega', '0050751656', 'Kelas XII', 'Jangli Krajan', ''),
(25, 'SILVIA PUTRI AINUNNISA', '0059435255', 'Kelas XI', 'Kalialang Baru', '775-1g.jpg'),
(26, 'Sri Aprilyani', '9986605055', 'Kelas X', 'Jl Simongan I', '');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int NOT NULL AUTO_INCREMENT,
  `id_semester` int NOT NULL,
  `kelas` varchar(11) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `id_semester` int NOT NULL AUTO_INCREMENT,
  `tahun_pelajaran` varchar(25) NOT NULL,
  `semester` varchar(11) NOT NULL,
  PRIMARY KEY (`id_semester`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_keluar`
--

DROP TABLE IF EXISTS `s_keluar`;
CREATE TABLE IF NOT EXISTS `s_keluar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tapel`
--

DROP TABLE IF EXISTS `tapel`;
CREATE TABLE IF NOT EXISTS `tapel` (
  `id_tapel` int NOT NULL AUTO_INCREMENT,
  `tahun_pelajaran` varchar(25) NOT NULL,
  PRIMARY KEY (`id_tapel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
