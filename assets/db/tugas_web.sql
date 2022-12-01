-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 08:51 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `psw`, `level`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$rNqslY6zi2aHeeC3QkHvh.zYZeLgAtYTS/zeDFDOqYh7iILHdE9vG', 'admin'),
(5, 'nopenul', 'nopenul@gmail.com', '$2y$10$73FBV2DAzLVvUZoPImXzTO5USBNslk.UCo.D8jsVJ9YTKma45klRu', ''),
(14, 'user', 'user@gmail.com', '$2y$10$U8wrCDV3hjWyIJycZc4l/u.B7taiQrwVmbVNS/Q6g8Bgou2w8oQQm', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `harga_beli` float NOT NULL,
  `harga_jual` float NOT NULL,
  `expired_date` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_barang`, `kode`, `quantity`, `harga_beli`, `harga_jual`, `expired_date`, `gambar`) VALUES
(5, 'Facewash ', '18025798', 30, 25000, 27000, '2024-05-23', 'Facewash .png'),
(10, 'Sunscreen Emina', '19031739', 4, 10000, 20000, '2022-12-09', 'Sunscreen Emina.png');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `page_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(13, 1, 'Warren Mills', 'Everything is awesome!', 5, '2020-01-16 19:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `reviews2`
--

CREATE TABLE `reviews2` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews2`
--

INSERT INTO `reviews2` (`id`, `page_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(15, 1, 'Refal Hady', 'Pelembab bibir yang keluaran January itu bagus banget si, tapi sayang kurang yang minat jadinya diganti ke produk baru, dan formulanya berkurang menurut aku.', 4, '2022-12-02 01:37:13'),
(16, 1, 'Novia Ramadhani', 'Bagusssss brutallll, lip carenya kalian harus coba!', 5, '2022-12-02 03:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `reviews3`
--

CREATE TABLE `reviews3` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews3`
--

INSERT INTO `reviews3` (`id`, `page_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(15, 1, 'Sule', 'Best banget buat cleanser yang edisi terbaru, bener-bener bikin muka bersih habis dari luar rumah. TOP', 5, '2022-12-02 01:33:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews2`
--
ALTER TABLE `reviews2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews3`
--
ALTER TABLE `reviews3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews2`
--
ALTER TABLE `reviews2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reviews3`
--
ALTER TABLE `reviews3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
