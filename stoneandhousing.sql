-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 01:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stoneandhousing`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(18, 'jodhpuri Blocks', '100', 'p17.png', 1),
(20, 'Dholpur Sandstone', '350', 'jali1.png', 1),
(21, 'Wood Land Block', '300', 'p16.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone_no`, `message`) VALUES
(1, 'Samit Sankhla', 'samitsankhla@gmail.com', '08529408256', 'hi ! my name samit sankhla i want to buy expensive sandstone for my projects'),
(28, 'Suresh', 'Suresh@gmail.com', '6377050033', 'I want to buy some stones for my project .'),
(29, 'tanmay', 'tanmaysankhla@gmail.com', '6375115775', 'i want to purchase some new variety products for my house'),
(30, 'Sidh', 'srathi@gmail.com', '6352414758', 'i want to buy some sandstone block. before buying i want to talk you.'),
(31, 'sourabh', 'bhattar@gmail.com', '6396852574', 'i want to purchase some jali work stone for house and slabs for floor .');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `order_placeat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`, `order_placeat`) VALUES
(3, 'Suresh', '6377050033', 'Suresh@gmail.com', 'cash on delivery', 'chopasni road', 'chb', 'jaipur', 'rajasthan', 'india', 342001, 'jodhpuri Blocks (1) , Dholpur Sandstone (1) , Wood Land Block (1) ', '750', '2024-05-11 16:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thickness` varchar(50) NOT NULL,
  `Form` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `thickness`, `Form`, `size`, `product_type`) VALUES
(26, 'Red Sandstone Slab, For Flooring and Cladding', '25', 'p1.webp', '25mm', 'big slab', '2 x 2', 'sandstone'),
(27, 'Agra Natural Red Stone Slab, For Wall Tile', '35', 'p2.jpg', '20mm', 'solid', '2 x 2', 'red sandstone'),
(28, 'Sahara Gold Sandstone Slab ', '95', 'p3.jpg', '16mm', 'slab', '3 x 3  ', 'Gold Sandstone'),
(29, 'Red stone slab', '175', 'p4.webp', '40', 'slab', '3 x 5', 'red  Sandstone'),
(30, 'Red Sandstone Slab', '85', 'p5.webp', '40mm', 'slab', '6 x 4', 'Red Sandstone'),
(32, 'Gwalior Sandstone ', '1002', 'p6.jpg', '25mm', 'slab', '5 x 5', 'Sandstone'),
(33, 'Matte Red  slab', '250', 'p7.webp', '18 Mm', 'stone', '2 x 2', 'Sandstone'),
(34, 'Dholpur Sandstone', '350', 'jali1.png', '20mm', 'stone jali', ' 3 x 6', 'Red Jali'),
(35, 'Beige Sandstone Slab', '60', 'p9.png', '8 inch', 'sandstone', '8 x 4', 'Beige Stone'),
(36, 'Kandla Grey Sandstone', '90', 'p10.png', '20mm', 'wall tile', '5 x 3', 'Shotblasted Slabs'),
(37, 'Unpolished Gray stone', '55', 'p11.png', '16mm', 'slab', '24 x 24 inch', 'Unpolished Sandstone'),
(38, 'Unpolished Gray stone', '55', 'p12.png', '16mm', 'slab', '24 x 24 inch', 'Unpolished Sandstone'),
(39, 'Door Frame slab', '300', 'p13.png', '17.5mm', 'big slab', '2 x 1', 'Frame Slab'),
(40, 'Camel Dust slab', '80', 'p14.webp', '18mm', 'slab', '2 x 2', 'Dust slab'),
(41, 'White Honed slab', '150', 'p15.webp', '40mm', 'mint sandstone', '1 x 2', 'Honed Slab'),
(42, 'Wood Land Block', '300', 'p16.png', '15 inch above', 'Block', 'On demand ', 'Big Block'),
(43, 'jodhpuri Blocks', '100', 'p17.png', '2 fit', 'block', 'On demand ', 'Yellow Block'),
(44, 'Gwalior Mint Block', '300', 'p18.jpg', '5 - 7 feet', 'sandstone', 'On demand ', 'Mint Big Block');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `name`, `email`, `contact_no`, `password`, `created_at`) VALUES
(1, 'Samit Sankhla', 'samitsankhla@gmail.com', '8529408256', '098f6bcd4621d373cade4e832627b4f6', '2024-04-15 12:16:28'),
(2, 'ram', 'ram@gmailcom', '8529408253', '5a105e8b9d40e1329780d62ea2265d8a', '2024-04-15 12:20:49'),
(4, 'test21', 'dalamas465@gosarlar.com', '56469616524', '202cb962ac59075b964b07152d234b70', '2024-04-16 20:59:25'),
(5, 'kimg', 'ram@gmailcom', '8529408256', '202cb962ac59075b964b07152d234b70', '2024-04-22 16:14:09'),
(7, 'Suresh', 'Suresh@gmail.com', '6377050033', '202cb962ac59075b964b07152d234b70', '2024-05-11 15:25:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
