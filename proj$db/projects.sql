-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 09:11 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `stall` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mall` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `stall`, `name`, `mall`, `price`, `paid`, `balance`, `status`, `created_at`, `updated_at`) VALUES
(3, '1', NULL, 'Sarit Center', 230000, 500000, -270000, 'Decline', '2017-11-17 05:00:23', '2017-11-17 10:28:07'),
(4, '1', NULL, 'Sarit Center', 230000, 500000, -270000, 'Approve', '2017-11-17 05:00:51', '2017-11-17 10:26:56'),
(5, '2', 'collins', 'Two Rivers', 400000, 4000000, -3600000, 'Approve', '2017-11-17 07:39:18', '2017-11-17 10:29:23'),
(7, '3', 'Jack', 'Sarit Center', 3000, 450000, -447000, 'Decline', '2017-11-17 07:41:46', '2017-11-17 10:29:30'),
(8, '3', 'Denis', 'Sarit Center', 3000, 4500000, -4497000, 'Pending', '2017-11-19 04:24:13', '2017-11-19 04:24:13'),
(9, '1', 'zak', 'Sarit Center', 150000, 1500000000, -1499850000, 'Pending', '2017-11-19 05:36:36', '2017-11-19 05:36:36'),
(10, 'p3', 'zak', 'Garden city', 4000, 150000, -146000, 'Decline', '2017-11-22 05:48:37', '2017-11-22 05:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `malls`
--

CREATE TABLE `malls` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `malls`
--

INSERT INTO `malls` (`id`, `name`, `location`, `area`, `image`, `manager`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Sarit Center', 'Westlands Nairobi', '300000', '1510900033.jpg', 'Malladmin', 'available', '2017-11-17 03:27:13', '2017-11-17 03:27:13'),
(3, 'Two Rivers', 'kiambu', '10000000', '1510914578.jpg', 'Malladmin', 'available', '2017-11-17 07:29:38', '2017-11-17 07:29:38'),
(4, 'T-mall', 'Nairobi West', '400000', '1510925655.jpg', 'Malladmin', 'available', '2017-11-17 10:34:15', '2017-11-17 10:34:15'),
(5, 'Garden city', 'kiambu', '5000000', '1511340361.jpeg', '', 'available', '2017-11-22 05:46:01', '2017-11-22 05:46:01'),
(6, 'Garden city', 'kiambu', '5000000', '1511340362.jpeg', '', 'available', '2017-11-22 05:46:02', '2017-11-22 05:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(123) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mall` varchar(233) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(123) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(222) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `mall`, `image`, `phone`, `created_at`, `updated_at`) VALUES
(1, ' 1', '2', '1510923666.jpg', 702333444, '2017-11-17 10:01:06', '2017-11-17 10:01:06'),
(2, '8', '3', '1511079838.jpeg', 720306645, '2017-11-19 05:23:58', '2017-11-19 05:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2017_11_17_032350_create_malls_table', 2),
(7, '2017_11_17_032603_create_managers_table', 2),
(8, '2017_11_17_032652_create_clients_table', 2),
(9, '2017_11_17_060530_create_stalls_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stalls`
--

CREATE TABLE `stalls` (
  `id` int(10) UNSIGNED NOT NULL,
  `mall` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rent` bigint(20) DEFAULT NULL,
  `year` bigint(20) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stalls`
--

INSERT INTO `stalls` (`id`, `mall`, `number`, `area`, `rent`, `year`, `image`, `manager`, `status`, `created_at`, `updated_at`) VALUES
(5, '2', '1', '150000', 225000000, 2700000000, '1511080138.jpg', 'lop', 'Booked', '2017-11-19 05:28:58', '2017-11-19 05:36:36'),
(6, '3', '2', '10000', 16000000, 192000000, '1511080178.jpeg', 'lop', 'available', '2017-11-19 05:29:38', '2017-11-19 05:29:38'),
(7, '5', 'p3', '4000', 2000000, 24000000, '1511340452.jpg', 'lop', 'available', '2017-11-22 05:47:32', '2017-11-22 05:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `tenantID` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`tenantID`, `user`, `email`, `pass`) VALUES
(1, 'Morzey', 'isaackmotanya6@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'collins', 'collins@gmail.com', '$2y$10$qaoIbIV6aUXEAhx/jdwgkOBjJ69pwhW.8/tJ5aG8WlwMU6eyAWwd2', 1, 702333444, 'iqBqIseYnvjotqjVJ2Bz6YGyaUXRXjmojPjkBeNynA6OfOANgNtKPL4HQQgx', '2017-11-17 02:44:57', '2017-11-19 11:54:43'),
(2, 'Jack', 'jack@gmail.com', '$2y$10$e3sor35Wb3qbQjEeilc01.iXYA8SN8pEKjOeYSC7yf06JksQ8Z0DO', 2, NULL, NULL, '2017-11-17 07:41:22', '2017-11-17 07:41:22'),
(3, 'mike', 'mike@gmail.com', '$2y$10$ntPRinIPWut6VQK8b3XVLujmLl7qwjpsUlcHQUAnXyFd2zOK6M6Xi', NULL, NULL, 'WQfVNLdwEZPxOGTKxnJyPHGn00zVhOBU2GCaqZUNWBZUbn23aewT8rbV78z4', '2017-11-19 02:37:13', '2017-11-19 04:15:31'),
(7, 'derrick', 'lop@gmail.com', '$2y$10$qU/wstWo3EaA6a.A4T/7buZtPcI56/DqYnXtdHsEy0/FzuIpxZJMe', 1, NULL, '9aTDVmXnUnr0dVZsxo477HNM1RN836vbFAsudcIbQDRlPVx6V7Nbb2ae4ABU', '2017-11-19 04:28:51', '2017-11-22 05:46:12'),
(8, 'lop', 'kip@gmail.com', '$2y$10$3t6iatDkxUia3KQIKVCw9eBz0JaWdcpUCCELVOQtgCVFKwPY72zWO', 2, 720306645, 'qml2CVlH5OC3Iv2EneumaO9TPWgJeTeZfRKVSwsf4kYLbRGEUWjbxdVyK1QM', '2017-11-19 05:17:23', '2017-11-22 05:50:58'),
(9, 'zak', 'zak@gmail.com', '$2y$10$xPPepyqbAm..JbsTABZTbOB1o0LXgUhVVv3e62GtZH6orM0hReC4W', NULL, NULL, 'i6lH9Wuu60z0mEUYaT482LOuZw8ij5sAQKYkFbVOP5U4Zs1SBAFZIl56dbQ1', '2017-11-19 05:19:42', '2017-11-22 05:51:25'),
(10, 'Denis', 'jop@gmail.com', '$2y$10$BH2c8OsHW72SF41ZYF.zQe5rjY.R.KOtBvcO03RRApsBkFbivO6su', NULL, NULL, 'dmMeuRSWiKBEa32l19xEUyQV18V49x6HVeeSl7g4jxQXWvHO6VlI0RmGe2tH', '2017-11-19 12:13:54', '2017-11-19 12:14:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malls`
--
ALTER TABLE `malls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `stalls`
--
ALTER TABLE `stalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`tenantID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `malls`
--
ALTER TABLE `malls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stalls`
--
ALTER TABLE `stalls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `tenantID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_ibfk_1` FOREIGN KEY (`id`) REFERENCES `migrations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
