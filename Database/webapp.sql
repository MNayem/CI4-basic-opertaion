-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 09:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(191) NOT NULL,
  `designation` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `phone`, `email`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Md', 'Nayem', '15623850698', 'mdnayem.cse21@gmail.com', 'No designation', '2023-07-08 05:48:12', '2023-07-08 05:48:12'),
(2, 'Nayem', 'Md', '01999791578', 'nayemmd.cse21@gmail.com', 'No designation', '2023-07-08 07:12:24', '2023-07-08 07:12:24'),
(3, 'Mr', 'Luo', '+8613071806078', 'mr.luo@gmail.com', 'Manager', '2023-07-08 08:03:34', '2023-07-08 08:03:34'),
(4, 'Jasmine', 'Jasmine', '1235489789', 'jasmine.jasmine@gmail.con', 'Human Resource (HR)', '2023-07-08 08:04:34', '2023-07-08 08:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2023-07-06-013057', 'App\\Database\\Migrations\\User', 'default', 'App', 1688640236, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'iPhone 14 Pro Max', 'iPhone 14 Pro Max', '80000', '1688959709_25b98bfb06d570ac6a79.jpg', '2023-07-10 03:28:29', '2023-07-10 03:28:29'),
(2, 'Dell Laptop Updated', 'Dell Laptop Updated', '2500', '1688966375_cc756e5d5c784b2218f0.jpg', '2023-07-10 04:04:59', '2023-07-10 04:04:59'),
(5, 'Dell Inspiron 1400 Series Laptop', 'Dell Inspiron 1400 Series Laptop', '3800', '1688968767_4a1dbc346322a749421e.jpg', '2023-07-10 05:59:27', '2023-07-10 05:59:27'),
(6, 'Headphone Stereo Headphone', 'Headphone Stereo Headphone', '200', '1688968826_8f849fc16b8680bdc35d.png', '2023-07-10 06:00:26', '2023-07-10 06:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `course` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `course`, `created_at`, `updated_at`) VALUES
(1, 'MD. NAYEM', 'mdnayem.cse21@gmail.com', '01999791578', 'Web Development', '2023-07-11 06:34:49', '2023-07-11 06:34:49'),
(2, 'Nayem', 'nayemmd.cse21@gmail.com', '+8613071806078', 'PHP Development', '2023-07-11 06:38:39', '2023-07-11 06:38:39'),
(3, 'demo', 'demo@gmail.com', '123456789', 'Demo course', '2023-07-11 06:46:56', '2023-07-11 06:46:56'),
(4, 't4t', 'fwe@gg.com', '235346347', 'wewe', '2023-07-11 06:48:08', '2023-07-11 06:48:08'),
(5, 'test', 'test@gmail.com', '987654321', 'test course', '2023-07-11 06:54:28', '2023-07-11 06:54:28'),
(6, 'gg', 'gg@gmail.com', '3464373453', 'fiu', '2023-07-11 06:55:24', '2023-07-11 06:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'Md Nayem', 'mdnayem.cse21@gmail.com', '15623850698', '12345678', 'user', '2023-07-07 08:36:44', '2023-07-07 08:36:44'),
(2, 'Nayem Md', 'nayemmd.cse21@gmail.com', '13071806078', '12345678', 'user', '2023-07-07 08:52:56', '2023-07-07 08:52:56'),
(3, 'test name', 'test@gmail.com', '01999791578', '12345678', 'user', '2023-07-07 11:08:43', '2023-07-07 11:08:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
