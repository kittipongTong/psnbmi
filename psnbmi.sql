-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 03:28 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psnbmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_30_044917_create_personnels_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personnels`
--

CREATE TABLE `personnels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tb_Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tb_LastName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tb_Aeg` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tb_Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `districts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amphures` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinces` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tb_LowPressure` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tb_HighPressure` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tb_Height` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bmi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meaning` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personnels`
--

INSERT INTO `personnels` (`id`, `tb_Name`, `tb_LastName`, `tb_Aeg`, `tb_Address`, `districts`, `amphures`, `provinces`, `tb_LowPressure`, `tb_HighPressure`, `weight`, `tb_Height`, `bmi`, `meaning`, `created_at`, `updated_at`) VALUES
(1, 'กิตติพงศ์', 'มะเสนัย', '22', '123/6', 'เสียว', 'นาหว้า', '9', '123', '123', '50', '160', '19.53125', 'คุณมีสุขภาพดี.', '2020-01-12 07:15:10', '2020-01-12 07:15:10'),
(2, '123', '123', '123', '123', '123', '123', '45', '123', '123', '123', '123', '81.30081300813009', 'คุณมีน้ำหนักเกิน.', '2020-01-12 07:16:53', '2020-01-12 07:16:53'),
(3, '1111111111', '1111111111', '11111', '1111111111', '1111111111', '1111111111', '17', '1111111111', '1111111111', '123', '123', '81.30081300813009', 'คุณมีน้ำหนักเกิน.', '2020-01-12 07:21:39', '2020-01-12 07:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '0610857022', 'admin', 'admin@gmail.com', NULL, '$2y$10$qP6kD68ObyjncCJnHIoR3.FXqX59l17EJ5S3fhP37vS9BDiYfuQSu', NULL, '2020-01-12 07:12:50', '2020-01-12 07:12:50'),
(2, 'user', '0610857022', NULL, 'user@gmail.com', NULL, '$2y$10$8DMr9J4ZBgdoTCvvjgGO6Og9cBfRQzI4ir4gS64BoBlWmDbI4QmGq', NULL, '2020-01-12 07:15:49', '2020-01-12 07:15:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
