-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 05:00 AM
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
-- Database: `dbcatalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `name`, `description`, `address`, `email`, `phone`) VALUES
(1, 'Wanawat company', ' Dep by RMUTSV', 'อยู่นี้ไหง', 'RMUTSV@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `User` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `firstname`, `lastname`, `email`, `phone`, `image`, `User`, `pass`, `status`, `created_datetime`) VALUES
(10, 'hello', 'hi', 'admin@gmail.com', '0926485658', '1695609112admintest.jpg', 'admin4', '7410', 0, '2023-09-21 03:42:59'),
(11, 'prayut', 'jak', 'tu@gmail.com', '1150', '1695287681papa.jpg', 'papa', '123456', 0, '2023-09-21 09:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `type_product_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `detail` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `type_product_id`, `image`, `title`, `detail`, `status`, `created_datetime`) VALUES
(1, 13, '1695451508download.jpg', 'มีดคมจัด', 'แพงหนัด อย่าซื้อต่ะ', 0, '2023-09-23 06:45:08'),
(4, 13, '1695453685download.jpg', 'ไม้กวาด', 'ไม้โครตไม้กวาด', 0, '2023-09-23 07:21:25'),
(6, 15, '1695608786download.jpg', 'เครื่องตัดหญ้าสุดเท่', 'ตัดแล้วดี ตัดแล้วรวย', 0, '2023-09-25 02:26:26'),
(7, 16, '1695610254download.jpg', 'ปิ้งไก่', 'อร่อยมากครับลองดูได้ไม่เชื่ออ่ะ', 0, '2023-09-25 02:50:54'),
(8, 19, '1695868114download.jpg', 'หิน', 'หินปูสุดแกร่ง\r\n', 0, '2023-09-28 02:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type_product`
--

CREATE TABLE `tb_type_product` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_type_product`
--

INSERT INTO `tb_type_product` (`id`, `title`, `created_datetime`) VALUES
(13, 'เครื่องครัว', '2023-09-23 06:10:29'),
(15, 'เครื่องมือทำสวน', '2023-09-23 06:11:12'),
(16, 'อาหารหมา', '2023-09-23 07:53:22'),
(17, 'เหล็ก', '2023-09-28 02:27:56'),
(18, 'ไม้', '2023-09-28 02:28:01'),
(19, 'หิน', '2023-09-28 02:28:04'),
(20, 'ปูน', '2023-09-28 02:28:09'),
(21, 'กระเบื้อง', '2023-09-28 02:28:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_type_product`
--
ALTER TABLE `tb_type_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_type_product`
--
ALTER TABLE `tb_type_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
