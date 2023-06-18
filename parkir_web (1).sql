-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 07:03 AM
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
-- Database: `parkir_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` bigint(20) NOT NULL,
  `noKendaraan` varchar(255) NOT NULL,
  `nomor` varchar(8) DEFAULT NULL,
  `ruangParkir` varchar(255) DEFAULT NULL,
  `lantai` varchar(1) DEFAULT NULL,
  `jamMasuk` time DEFAULT current_timestamp(),
  `jamKeluar` time DEFAULT current_timestamp(),
  `tanggalMasuk` date DEFAULT current_timestamp(),
  `tanggalKeluar` date DEFAULT NULL,
  `menginap` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT NULL,
  `updateAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `noKendaraan`, `nomor`, `ruangParkir`, `lantai`, `jamMasuk`, `jamKeluar`, `tanggalMasuk`, `tanggalKeluar`, `menginap`, `bayar`, `status`, `createdAt`, `updateAt`) VALUES
(31, 'W 9876 K', NULL, NULL, NULL, '13:46:57', '13:46:57', '2023-04-11', NULL, NULL, 5000, '0', NULL, NULL),
(43, 'S 1234 BN', NULL, NULL, NULL, '14:59:14', '14:59:14', '2023-04-17', NULL, NULL, 5000, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id` bigint(20) NOT NULL,
  `namaRuang` varchar(255) NOT NULL,
  `lantai` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `createdAt` timestamp NULL DEFAULT NULL,
  `updateAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `user_name` varchar(35) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(35) NOT NULL,
  `mall` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `user_name`, `password`, `role`, `mall`) VALUES
(6, 'bessotu itokk', 'itok', '$2y$10$qSRCdR0JTXSe4khn4wiqsuEQki9VaIDdmwCwY4.byjTna95azC9uu', 'PMasuk', NULL),
(12, 'farras', 'naufal', '$2y$10$p4G72c9hruSjeGHqhBx1fu2HircBWYZAllHyrd0ujNZKR.QprkMdO', 'PMasuk', NULL),
(13, 'hendra admajaa', 'hendra', '$2y$10$NOblsZbCjfUnedzoZna.yezDIXNqw8q.Nx0yFhGrYXxzI3ukmPxsy', 'PMasuk', NULL),
(18, 'admin', 'admin', '$2y$10$5hrg0.0Fw808jEWKfNrYV.YUMPkruvZC2LAeKWoS/C4niVr1goeOC', 'PMasuk', NULL),
(22, 'aman', 'aman', '$2y$10$e1yFvMKHKAn/K16OJJQK3u.wQw8oSkWjJ5ZiXy8LQpufiTIXQp02G', 'PMasuk', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `user_name` varchar(35) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(35) NOT NULL,
  `mall` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `user_name`, `password`, `role`, `mall`) VALUES
(7, 'Naufal farras', 'Naufal', '$2y$10$8c/Wpvzyv6sNXsJ4Jc4n7e91bfQzeLLwZtpP/DVoD9JX8iKIjugIC', 'PMasuk', NULL),
(8, 'Hendra Admaja', 'Hendra', '$2y$10$gcsiIlaeouPA4idvA9QvaO/rokmEx3lQioTF4cvZkFQA7LCxhv9nW', 'PKeluar', NULL),
(9, 'Bessotu Itok', 'Itok', '$2y$10$V9hBbmjgLtxFuj3SntCQU.Q3N4FQA1gu5gaPupzNte/5RsN1Dj8fK', 'PRuang', NULL),
(13, 'Herman', 'Admin', '$2y$10$JTgHGcYlm0AKVo2fiIL0SuD8c7yND7e3GU67Lask0TaFwCdUdHmnq', 'Admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
