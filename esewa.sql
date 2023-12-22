-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 04:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `total_products` varchar(100) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_status` int(15) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(12, 1, 'avash', 121311, 'devilmhzn@gmail.com', 'e-sewa', 'kritipur,kathmandu', ', jorden (1) ', 15, '2023-01-23 12:56:21', 1),
(13, 1, 'avash', 2147483647, 'devilmhzn@gmail.com', 'e-sewa', 'kritipur,kathmandu', ', Vaccum Cleaner (1) ', 50, '2023-01-23 13:00:52', 1),
(14, 1, 'aavash maharjan', 2147483647, 'devilmhzn@gmail.com', 'e-sewa', 'kritipur,kathmandu', ', jordenz (2) ', 100, '2023-01-23 13:05:15', 1),
(15, 1, 'avash maharjan 1', 2147483647, 'gpmhzn@gmail.com', 'e-sewa', 'kritipur,kathmandu', ', jorden (2) ', 30, '2023-01-23 13:39:29', 1),
(17, 1, 'devil', 2147483647, 'gpmhzn@gmail.com', 'e-sewa', 'kathmandu', ', jordenz (3) ', 150, '2023-01-23 15:15:58', 1),
(18, 1, 'avash3', 985126541, 'gpmhzn@gmail.com', 'e-sewa', 'kathmandu n', ', Ricek Cooker (2) ', 300, '2023-01-23 15:21:27', 1),
(19, 6, 'avashmahrjan', 2147483647, 'devilmhzn@gmail.com', 'e-sewa', 'kritipur,kathmandu', ', jorden (1) ', 15, '2023-01-23 17:32:36', 1),
(20, 6, 'aavash mahrjan', 2147483647, 'zusa077@gmail.com', 'e-sewa', 'nagyo , kathmandu', ', jorden (2) ', 300, '2023-01-23 17:35:26', 1),
(21, 6, 'Aavash mhzn', 2147483647, 'devilmhzn@gmail.com', 'e-sewa', 'nayabazar,kathmandu-44600', ', SUPERSTAR ADIDAS (1) ', 100, '2023-01-23 17:56:58', 1),
(22, 6, 'avash', 2147483647, 'gpmhzn@gmail.com', 'e-sewa', 'kritipur,kathmandu', ', ADISSAGE SLIDES (1) ', 120, '2023-01-23 18:05:38', 1),
(23, 1, 'avash', 984125789, 'gpmhzn@gmail.com', 'e-sewa', 'kritipur,kathmandu', ', Nike Dunk Low (1) ', 300, '2023-01-23 18:32:39', 1),
(24, 1, 'aavash mhzn', 984152789, 'devilmhzn@gmail.com', 'e-sewa', 'kritipur,kathmandu', ', Nike Air Force 1 Mid (1) ', 150, '2023-01-23 19:15:22', 1),
(25, 1, 'devil', 2147483647, 'admin@gmail.com', 'e-sewa', 'kritipur,kathmandu', ', Nike Air Force 1 Mid (1) ', 150, '2023-04-04 21:10:14', 0),
(26, 4, 'AAVASH MAHARJAN', 2147483647, 'AAVASH@GMAIL.COM', 'cash on de', 'KRITIPUR,KATHMANDU', ', SUPERSTAR ADIDAS (2) ', 200, '2023-11-03 14:40:59', 0),
(27, 4, 'MHzn', 2147483647, 'gpmhzn@gmail.com', 'e-sewa', 'kathmandu', ', Nike Air Force 4 (2) ', 300, '2023-11-03 14:53:37', 1),
(28, 4, 'prajwal', 2147483647, 'zusa077@gmail.com', 'e-sewa', 'kathmandu', ', SUPERSTAR ADIDAS (1) ', 100, '2023-11-26 01:14:27', 1),
(29, 4, 'jaran', 2147483647, 'admin@gmail.com', 'e-sewa', 'kritipur,kathmandu', ', ADISSAGE SLIDES (1) ', 120, '2023-11-29 02:07:31', 1),
(30, 4, 'avasg', 2147483647, 'zusa077@gmail.com', 'e-sewa', 'kirtipur, kathamandu', ', Nike Air Force 1 Mid (3) ', 600, '2023-12-17 10:33:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Nike Air Force 1 Mid', 150, 'dk1.jpg'),
(2, 'converse high', 100, 'conv.jpg'),
(3, 'SUPERSTAR ADIDAS', 100, 'ad.jpg'),
(4, 'Converse special', 200, 'converse1.jpg'),
(5, 'ADISSAGE SLIDES', 120, 'ADISSAGE SLIDES.jpg'),
(6, 'Nike Dunk Low', 300, 'Nike Dunk Low.jpg'),
(8, 'Nike Dunk Hi Retro', 180, 'Nike Dunk Hi Retro.jpg'),
(9, 'Nike Air Force 4', 150, 'af1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'avash', 'gpmhzn@gmail.com', '123', 'admin'),
(2, 'avash', 'devilmhzn@gmail.com', '159', 'admin'),
(4, 'prajwal', 'gpmhzn@gmail.com', '1236', 'user'),
(5, 'prajwal', 'zusa077@gmail.com', '12589', 'user'),
(6, 'aavash', 'zusa077@gmail.com', '12587', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
