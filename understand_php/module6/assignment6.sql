-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 06:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment6`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(2, 'Books', '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(3, 'Clothing', '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(4, 'Home & Kitchen', '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(5, 'Sports & Outdoors', '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(6, 'Toys & Games', '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(7, 'Health & Beauty', '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(8, 'Automotive', '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(9, 'Garden & Tools', '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(10, 'Music & Movies', '2023-10-31 07:06:29', '2023-10-31 07:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Alice Johnson', 'alice.johnson@email.com', '123-456-7890', '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(2, 'Bob Smith', 'bob.smith@email.com', '123-456-7891', '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(3, 'Charlie Brown', 'charlie.brown@email.com', '123-456-7892', '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(4, 'Diana Ross', 'diana.ross@email.com', '123-456-7893', '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(5, 'Edward Norton', 'edward.norton@email.com', '123-456-7894', '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(6, 'Fiona Apple', 'fiona.apple@email.com', '123-456-7895', '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(7, 'George Lucas', 'george.lucas@email.com', '123-456-7896', '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(8, 'Helen Hunt', 'helen.hunt@email.com', '123-456-7897', '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(9, 'Ian McKellen', 'ian.mckellen@email.com', '123-456-7898', '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(10, 'Julia Roberts', 'julia.roberts@email.com', '123-456-7899', '2023-10-31 07:07:16', '2023-10-31 07:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `order_date` datetime NOT NULL,
  `total_amount` decimal(5,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `order_date`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 2, '2023-11-03 18:43:30', 49.98, '2023-11-03 17:45:21', '2023-11-03 17:45:43'),
(2, 1, '2023-11-03 18:46:46', 49.97, '2023-11-03 17:47:40', '2023-11-03 17:47:40'),
(3, 6, '2023-11-03 18:48:46', 104.97, '2023-11-03 17:49:45', '2023-11-04 05:08:36'),
(4, 5, '2023-11-03 18:50:26', 54.97, '2023-11-03 17:51:35', '2023-11-04 16:46:38'),
(5, 3, '2023-11-03 18:52:06', 164.97, '2023-11-03 17:52:52', '2023-11-04 16:46:39'),
(6, 9, '2023-11-03 18:53:28', 129.98, '2023-11-03 17:53:52', '2023-11-04 05:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `unit_price` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2', '19.99', '2023-10-31 07:14:38', '2023-11-03 17:46:27'),
(2, 1, 10, '5', '29.99', '2023-10-31 07:14:38', '2023-11-04 07:59:27'),
(3, 2, 3, '100', '9.99', '2023-10-31 07:14:38', '2023-11-04 09:27:56'),
(4, 2, 4, '1', '14.99', '2023-10-31 07:14:38', '2023-11-03 17:48:15'),
(5, 2, 5, '1', '24.99', '2023-10-31 07:14:38', '2023-11-03 17:48:15'),
(6, 3, 6, '3', '34.99', '2023-10-31 07:14:38', '2023-11-03 17:50:10'),
(7, 4, 1, '2', '4.99', '2023-10-31 07:14:38', '2023-11-04 08:16:24'),
(8, 4, 8, '1', '44.99', '2023-10-31 07:14:38', '2023-11-03 17:51:53'),
(9, 5, 9, '3', '54.99', '2023-10-31 07:14:38', '2023-11-03 17:53:06'),
(10, 6, 10, '2', '64.99', '2023-10-31 07:14:38', '2023-11-03 17:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Product A', 'desc of product A', '19.99', '2023-10-31 07:10:06', '2023-11-04 05:29:06'),
(2, 1, 'Product B', 'Product B', '29.99', '2023-10-31 07:10:06', '2023-11-04 10:50:28'),
(3, 3, 'Product C', 'Product C', '9.99', '2023-10-31 07:10:06', '2023-11-04 10:50:28'),
(4, 0, 'Product D', 'Product D', '14.99', '2023-10-31 07:10:06', '2023-11-04 17:17:38'),
(5, 6, 'Product E', 'Product E', '24.99', '2023-10-31 07:10:06', '2023-11-04 11:29:44'),
(6, 2, 'Product F', 'Product F', '34.99', '2023-10-31 07:10:06', '2023-11-04 10:50:28'),
(7, 2, 'Product G', 'Product G', '4.99', '2023-10-31 07:10:06', '2023-11-04 10:50:28'),
(8, 2, 'Product H', 'Product H', '44.99', '2023-10-31 07:10:06', '2023-11-04 10:50:28'),
(9, 8, 'Product I', 'Product I', '54.99', '2023-10-31 07:10:06', '2023-11-04 11:30:14'),
(10, 0, 'Product J', 'Product J', '64.99', '2023-10-31 07:10:06', '2023-11-04 17:16:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
