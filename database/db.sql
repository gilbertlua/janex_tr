-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 06:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `angkatan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id`, `nama`, `nim`, `angkatan`, `jenis_kelamin`, `password`) VALUES
(25, 'janex budo', '6720902901', '2021', 'laki-laki', 'asd'),
(27, 'janex budo2', '6720902901', '2020', 'laki-laki', '321'),
(28, 'janex budo3', '672090122', '2020', 'perempuan', '123'),
(29, 'janex budo4', '6720902922', '2020', 'perempuan', '4342');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_matakuliah`
--

CREATE TABLE `tabel_matakuliah` (
  `id` int(11) NOT NULL,
  `matakuliah` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `sampai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_matakuliah`
--

INSERT INTO `tabel_matakuliah` (`id`, `matakuliah`, `kode`, `hari`, `dari`, `sampai`) VALUES
(5, 'Agama', '4625', 'Senin', '07', '10'),
(6, 'Matematika', '1234', 'Rabu', '08', '12'),
(7, 'Pancasila', '3421', 'Kamis', '09', '12'),
(8, 'Dasar Pemrograman', '1234', 'Jumat', '09', '12'),
(9, 'Diskret', '4231', 'Rabu', '08', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_matakuliah`
--
ALTER TABLE `tabel_matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tabel_matakuliah`
--
ALTER TABLE `tabel_matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
