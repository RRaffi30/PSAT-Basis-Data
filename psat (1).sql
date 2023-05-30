-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 10:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psat`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `Id_pembelian` int(11) NOT NULL,
  `Nama_pelanggan` varchar(128) NOT NULL,
  `Tanggal_pembelian` varchar(25) NOT NULL,
  `Id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`Id_pembelian`, `Nama_pelanggan`, `Tanggal_pembelian`, `Id_barang`) VALUES
(1, 'Balaram', '1-1-23', 1),
(2, 'Manto', '3-1-23', 10),
(3, 'Pragos', '5-1-23', 8),
(4, 'Burhan', '10-1-23', 4),
(5, 'Meimei', '15-1-23', 7),
(6, 'Rusdi', '20-1-23', 8),
(7, 'Rehan', '20-1-23', 6),
(8, 'Herman', '25-1-23', 1),
(9, 'Johan', '29-1-23', 3),
(10, 'Chupapi Munyeyo', '1-2-23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tas`
--

CREATE TABLE `tas` (
  `Id_barang` int(10) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `ukuran` int(10) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `Harga` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tas`
--

INSERT INTO `tas` (`Id_barang`, `jenis`, `ukuran`, `warna`, `Harga`) VALUES
(1, 'Waist Bag', 42, 'Hitam', '25000'),
(2, 'Backpack', 45, 'Hijau', '40000'),
(3, 'Envelope Bag', 18, 'Merah', '20.000'),
(4, 'Buket Bag', 46, 'Hijau', '55000'),
(5, 'Cross Body Backpack', 25, 'Grey', '35000'),
(6, 'Messenger Bag', 55, 'Blue ', '85000'),
(7, 'Shoulder Bag', 25, 'white', '45.000'),
(8, 'String Bag', 50, 'maroon', '35000'),
(9, 'Saddle Bag', 30, 'cyan', '35000'),
(10, 'Quilted Bag', 20, 'Dark Grey', '60000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`Id_pembelian`),
  ADD KEY `Id_barang` (`Id_barang`);

--
-- Indexes for table `tas`
--
ALTER TABLE `tas`
  ADD PRIMARY KEY (`Id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `Id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tas`
--
ALTER TABLE `tas`
  MODIFY `Id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD CONSTRAINT `pembeli_ibfk_1` FOREIGN KEY (`Id_barang`) REFERENCES `tas` (`Id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
