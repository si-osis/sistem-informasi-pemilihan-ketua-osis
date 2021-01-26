-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2018 at 03:38 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbosis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id` int(5) NOT NULL,
  `nama_calon` varchar(25) NOT NULL,
  `kepemimpinan` int(5) NOT NULL,
  `pengetahuan_skill` int(5) NOT NULL,
  `tanggung_jawab` int(5) NOT NULL,
  `kedisiplinan` int(5) NOT NULL,
  `status` varchar(25) NOT NULL,
  `total` varchar(10) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id`, `nama_calon`, `kepemimpinan`, `pengetahuan_skill`, `tanggung_jawab`, `kedisiplinan`, `status`, `total`) VALUES
(6, 'Muhammad Budianto', 9, 10, 10, 10, 'Siswa', '39'),
(7, 'Rizky Aditya', 10, 9, 11, 9, 'Siswa', '39'),
(8, 'Cindy Khairunnisa', 8, 9, 10, 10, 'Siswa', '37'),
(9, 'Khairul Salim', 10, 9, 9, 9, 'Siswa', '37'),
(10, 'Rezim Ananta', 10, 9, 11, 10, 'Siswa', '40'),

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `nama_calon` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nilai` int(5) NOT NULL,
  `hasil_persentasi` int(5) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`nama_calon`, `kelas`, `nilai`, `hasil_persentasi`, `kategori`, `id`) VALUES
('Muhammad Budianto', 'X', '39', 2, 'Baik', 4),
('Rizky Aditya', 'XI', '39', 0, 'Baik', 5),
('Cindy Khairunnisa', 'X', '37', 0, 'Baik', 6),
('Khairul Salim', 'XI', '37', 1, 'Baik', 7),
('Rezim Ananta', 'X', '39', 1, 'Baik', 8),

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'als@gmail.com', 'ALS SI-7C', 1, 'Staff Kepanitiaan Osis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
