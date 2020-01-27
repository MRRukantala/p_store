-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 12:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` varchar(12) NOT NULL,
  `member_id` varchar(12) NOT NULL,
  `store_id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` varchar(12) NOT NULL,
  `category_name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
('K-1', 'Traditional'),
('K-2', 'Modern');

-- --------------------------------------------------------

--
-- Table structure for table `detail_cart`
--

CREATE TABLE `detail_cart` (
  `cart_id` varchar(12) NOT NULL,
  `product_id` varchar(12) NOT NULL,
  `amount` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_member`
--

CREATE TABLE `detail_member` (
  `member_id` varchar(13) NOT NULL,
  `name_member` varchar(50) NOT NULL,
  `alamat_member` varchar(250) DEFAULT '-',
  `phone_member` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaction`
--

CREATE TABLE `detail_transaction` (
  `transaction_detail_id` varchar(12) NOT NULL,
  `transaction_id` varchar(12) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_bayar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` varchar(12) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `image`) VALUES
('11', 'Screenshot (38).png');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` varchar(12) NOT NULL,
  `member_email` varchar(50) DEFAULT NULL,
  `password_member` varchar(50) DEFAULT NULL,
  `role_id` enum('0','1','2') NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_email`, `password_member`, `role_id`, `created`) VALUES
('member-1', 'rafly.hernandes@gmail.com', '123', '1', '2020-01-13 11:25:45'),
('member-2', 'rafly.hernandes@yahoo.co.id', '123', '0', '2020-01-13 11:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(12) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `store_id` varchar(12) NOT NULL,
  `image_id` varchar(12) NOT NULL,
  `category_id` varchar(12) NOT NULL,
  `uploaded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `stock`, `price`, `store_id`, `image_id`, `category_id`, `uploaded`) VALUES
('coba', 'baju', ' asda', 12, 1111, 'storeid', '11', 'K-1', '2020-01-19 02:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `role_acces`
--

CREATE TABLE `role_acces` (
  `role_id` enum('0','1','2') NOT NULL,
  `role_acces` enum('member','penjual','admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_acces`
--

INSERT INTO `role_acces` (`role_id`, `role_acces`) VALUES
('0', 'member'),
('1', 'penjual'),
('2', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` varchar(1) NOT NULL,
  `name_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` varchar(12) NOT NULL,
  `store_name` varchar(25) NOT NULL,
  `member_id` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_name`, `member_id`, `address`, `created`) VALUES
('storeid', 'Berkah', 'member-1', 'wara wiri', '2020-01-13 11:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` varchar(12) NOT NULL,
  `cart_id` varchar(12) NOT NULL,
  `total` int(11) NOT NULL,
  `Pay_code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `store_id` (`store_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `detail_cart`
--
ALTER TABLE `detail_cart`
  ADD PRIMARY KEY (`cart_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `detail_member`
--
ALTER TABLE `detail_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `detail_transaction`
--
ALTER TABLE `detail_transaction`
  ADD PRIMARY KEY (`transaction_detail_id`),
  ADD KEY `transaction_id` (`transaction_id`,`id_status`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`,`image`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `store_id` (`store_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `role_acces`
--
ALTER TABLE `role_acces`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `detail_cart` (`cart_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`store_id`) REFERENCES `store` (`store_id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `detail_cart`
--
ALTER TABLE `detail_cart`
  ADD CONSTRAINT `detail_cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `detail_member`
--
ALTER TABLE `detail_member`
  ADD CONSTRAINT `detail_member_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `detail_transaction`
--
ALTER TABLE `detail_transaction`
  ADD CONSTRAINT `detail_transaction_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`),
  ADD CONSTRAINT `detail_transaction_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status` (`status_id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `product` (`image_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `store` (`store_id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
