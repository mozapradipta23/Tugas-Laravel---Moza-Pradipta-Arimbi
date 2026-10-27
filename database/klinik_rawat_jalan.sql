-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2026 at 04:27 AM
-- Server version: 8.4.3
-- PHP Version: 8.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_rawat_jalan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `no_sip` varchar(50) NOT NULL,
  `spesialisasi` varchar(100) NOT NULL,
  `id_poli` int NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `tempat_lahir`, `no_sip`, `spesialisasi`, `id_poli`, `kontak`, `email`, `tanggal_lahir`) VALUES
(1236, 'Dr. Rafli kurniawan', 'Bekasi ', 'SIP-123458', 'dokter umum', 1, '0814-5678-9012', 'akupelarikalcer@gmail.com', '2005-12-05'),
(1237, 'citra wulandari', 'Bandung', 'SIP-223456', 'Spesialis anak', 3, '0815-6789-0123', 'citrawuland@gmail.com', '1960-01-30'),
(1238, 'Dr. Muhammad Fachrezi ', 'Padang ', 'SIP-223457', 'spesialis anak', 3, '0816-7890-1234', 'rejiminangasli@gmail.com', '2000-01-01'),
(1239, 'Dr. Ayu Kartika ', 'Bandung ', 'SIP-323456', 'Spesialisasi penyakit dalam', 4, '0817-8901-2345', 'bukanayutingting@gmail.com', '1960-01-20'),
(12310, 'Dr. Siti zakiyah', 'Lampung ', 'SIP-323456', 'penyakit dalam', 4, '0817-8901-2345', 'sitiiiii@gmail.com', '2005-01-20'),
(12311, 'Dr. Andre Gibran', 'Bali', 'SIP-323456', 'spesialis ortodonti', 2, '0817-8901-2345', 'andregibran12@gmail.com', '1960-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int NOT NULL,
  `nama_poli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`) VALUES
(1, 'poli umum'),
(2, 'poli gigi'),
(3, 'poli anak '),
(4, 'poli penyakit dalam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12316;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
