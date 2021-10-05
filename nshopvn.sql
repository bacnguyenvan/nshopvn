-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 03:28 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nshopvn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `home` int(11) NOT NULL DEFAULT 1 COMMENT '1: hiện, 0:ẩn',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `home`, `created_at`) VALUES
(1, 'Mạch điện', 1, '2019-12-14 09:34:17'),
(2, 'module', 1, '2019-12-14 09:36:52'),
(6, 'cảm biến', 1, '2019-12-14 10:03:20'),
(7, 'robot công nghệ', 1, '2019-12-14 10:03:29'),
(8, 'phụ kiện dụng cụ', 1, '2019-12-14 10:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT 0,
  `image` varchar(150) DEFAULT NULL,
  `type_of_product_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `number`, `sale`, `image`, `type_of_product_id`, `content`, `created_at`, `deleted_at`) VALUES
(1, 'Arduino Nano V3.0 ATmega328P', 59000, 10, 0, 'Arduino-nano-V3.0-1-300x300.jpg', 1, NULL, '2019-12-14 15:04:29', NULL),
(2, 'Pin năng lượng mặt trời 9V 2W  ', 85000, 5, 0, 'pin-nang-luong-mat-troi-9v-2w-704Y-300x300.jpg', 8, NULL, '2019-12-14 15:36:23', NULL),
(4, 'LCD 2004 Xanh Dương    ', 100000, 5, 0, 'LCD-2004-xanh-duongWVEZ-300x300.jpg', 4, NULL, '2019-12-15 04:10:15', NULL),
(5, '     Arduino Ethernet Shield    ', 125000, 6, 0, 'arduino_ethernet_shield_grande-300x300.jpg', 1, NULL, '2019-12-15 04:11:00', NULL),
(6, 'Thẻ Trắng RFID 125Khz', 6500, 9, 0, 'the-trang-RFID125Khz-GVXW-300x300.jpg', 4, NULL, '2019-12-15 04:13:12', NULL),
(8, '     Module ESP-800L Core Board 5V    ', 118000, 2, 0, 'module-esp-800l-core-board-5v-2OLO-300x300.jpg', 5, NULL, '2019-12-15 04:15:25', NULL),
(9, '     Module Thu Phát RF CC1101 + Antenna    ', 142000, 6, 0, 'module-thu-phat-RF-CC1101-7FO4-300x300.jpg', 5, NULL, '2019-12-15 04:17:10', NULL),
(10, '     Mạch khuếch đại âm thanh bluetooth XY-P15 2x15W    ', 90000, 2, 0, 'mach-khuech-dai-am-thanh-2x15w-xy-p15-300x300.jpg', 6, NULL, '2019-12-15 04:20:40', NULL),
(11, '     Mạch nháy theo nhạc V2    ', 160000, 2, 0, 'mach-nhay-theo-nhac-v2-300x300.jpg', 6, NULL, '2019-12-15 04:21:37', NULL),
(12, '     Mạch điều khiển 32 Servo    ', 500000, 2, 0, 'mach-dieu-khien-32-servo-300x300.jpg', 7, NULL, '2019-12-15 04:23:11', NULL),
(13, '     Module Điều Khiển Động Cơ L298 mini 2.5A    ', 29000, 1, 0, 'mach-dieu-khien-dong-co-L298-mini-VMUN-1-300x300.jpg', 7, NULL, '2019-12-15 04:24:24', NULL),
(14, '     Mạch sạc nhanh hỗ trợ Iphone    ', 128000, 2, 0, 'mach-sac-nhanh-ho-tro-iphone-ILO0-1-300x300.png', 8, NULL, '2019-12-15 04:25:44', NULL),
(15, '     Mạch tạo trễ đóng ngắt thiết bị (Delay relay module)    ', 220000, 2, 0, 'mach-tao-tre-dong-ngat-thiet-bi-GR2P-1-300x300.png', 9, NULL, '2019-12-15 04:27:27', NULL),
(16, '     Module kích hoạt relay bằng nút nhấn    ', 40000, 2, 0, 'module-kich-hoat-relay-bang-nut-nhan-300x300.jpg', 9, NULL, '2019-12-15 04:28:19', NULL),
(17, '     Module 1 Relay Kích Mức Thấp 5VDC    ', 12000, 2, 0, 'module-1-relay-kich-muc-thap-300x300.jpg', 9, NULL, '2019-12-15 04:29:24', NULL),
(18, '     Cảm biến cường độ ánh sáng quang trở    ', 14000, 2, 0, '634553834223_module-cam-bien-anh-sang-quang-tro-cds-300x300.jpg', 10, NULL, '2019-12-15 04:31:17', NULL),
(19, '     Cảm biến chuyển động hồng ngoại    ', 130000, 2, 0, 'cam-bien-chuyen-dong-hong-ngoai-1-1-300x300.jpg', 10, NULL, '2019-12-15 04:32:01', NULL),
(20, '     Cảm biến mực chất lỏng không tiếp xúc    ', 120000, 4, 0, 'cam-bien-muc-chat-long-khong-tiep-xuc-nshop-001-300x300.jpg', 11, NULL, '2019-12-15 04:32:44', NULL),
(21, '     Cảm Ứng 1 Chạm Điện Dung TTP223B Mini    ', 6000, 5, 0, 'cam-ung-1-cham-dien-dung-TTP223-mini-300x300.jpg', 11, NULL, '2019-12-15 04:33:40', NULL),
(22, 'Bánh Xe Vàng', 7000, 4, 0, 'banh-xe-vang-300x300.jpg', 12, NULL, '2019-12-15 04:35:19', NULL),
(23, '     Kit Xe Robot Dò Đường Hàn Linh Kiện    ', 70000, 4, 0, '135275319918_xe-lo-line-300x300.jpg', 12, NULL, '2019-12-15 04:35:56', NULL),
(24, '     Nam châm đất hiếm 10x3mm    ', 2500, 5, 0, 'nam-cham-dat-hiem-12-3mm-300x300.jpg', 14, NULL, '2019-12-15 04:37:17', NULL),
(25, '     Trụ đồng đực cái  40mm    ', 3800, 3, 0, 'tru-dong-duc-cai-40mm-L6EQ-300x300.jpg', 14, NULL, '2019-12-15 04:37:50', NULL),
(26, '     Hộp nhựa có ron 250x160x80    ', 120000, 5, 0, 'hop-nhua-co-ron-250x160x80-3-300x300.jpg', 15, NULL, '2019-12-15 04:38:36', NULL),
(27, '     Hộp nhựa 1 vít 120x67x34    ', 11000, 7, 0, 'hop-nhua-1-vit-120-67-34-0D04-300x300.jpg', 15, NULL, '2019-12-15 04:39:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` double DEFAULT NULL COMMENT 'tổng đơn đặt hàng',
  `status` int(11) DEFAULT 0 COMMENT 'trạng thái đã thanh toán chưa,1:roi,0:chua',
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `typeofproduct`
--

CREATE TABLE `typeofproduct` (
  `id` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeofproduct`
--

INSERT INTO `typeofproduct` (`id`, `id_category`, `name`, `created_at`) VALUES
(1, 1, 'Arduino', '2019-12-14 04:17:00'),
(4, 1, 'RF, GSM, GPS, Bluetooth, Wifi, RFID', '2019-12-14 10:44:19'),
(5, 1, 'Kit phát triển và mạch nạp', '2019-12-14 10:44:38'),
(6, 2, 'Âm thanh & Khuếch đại', '2019-12-14 10:47:11'),
(7, 2, 'Điều khiển động cơ', '2019-12-14 10:47:29'),
(8, 2, 'Dimmer & tạo xung', '2019-12-14 10:47:39'),
(9, 2, 'Đóng ngắt & Relay', '2019-12-14 10:48:00'),
(10, 6, 'Ánh sáng, âm thanh, màu sắc', '2019-12-14 10:48:24'),
(11, 6, ' Áp suất, lưu lượng, cân nặng', '2019-12-14 10:48:28'),
(12, 7, 'Động cơ', '2019-12-14 10:49:07'),
(13, 7, 'Nhà thông minh', '2019-12-14 10:49:14'),
(14, 8, 'Dụng cụ linh kiện cơ khí', '2019-12-14 10:49:44'),
(15, 8, 'Hộp Nhựa', '2019-12-14 10:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `adrress` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typeofproduct`
--
ALTER TABLE `typeofproduct`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `typeofproduct`
--
ALTER TABLE `typeofproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
