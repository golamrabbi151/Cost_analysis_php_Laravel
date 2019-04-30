-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 10:57 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `costanalysis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_04_23_213424_create_user_costs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'golam  rabbi', 'golamrabbi@gmail.com', NULL, '$2y$10$jRJBKQrjOPxHmLK413iYEOHjrxW55DI.guI3Rp/xrGa2etcr47VyW', 'BRZ9N1Et2DErD1ExL0q3gdiJJEz0r9d15QJ405BAKomJVkPYLJUA5gOnqEjH', '2019-04-28 13:53:19', '2019-04-28 13:53:19'),
(2, 'gulu', 'gulu@gmail.com', NULL, '$2y$10$uswGnbzKJTMCQHPxvcVbDuzSNLbjBcYrBKBjPfuzWaguvEbLHiJm2', 'm2PaktOhNwamVrviFh0C3pIXG55ymr8s5mDpJOTfnHTf4l1kPfwP66xgdqUk', '2019-04-28 14:01:56', '2019-04-28 14:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_costs`
--

CREATE TABLE `user_costs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `income` int(11) NOT NULL DEFAULT '0',
  `costName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_costs`
--

INSERT INTO `user_costs` (`id`, `user_id`, `income`, `costName`, `cost`, `created_at`, `updated_at`) VALUES
(1, 1, 5000, 'tea', 260, '2019-04-28 13:54:10', '2019-04-28 13:54:10'),
(2, 1, 0, 'book', 500, '2019-04-28 13:54:21', '2019-04-28 13:54:21'),
(3, 2, 7000, 'khata', 400, '2019-04-28 14:20:30', '2019-04-28 14:20:30'),
(4, 2, 200, 'pen', 100, '2019-04-28 14:20:49', '2019-04-28 14:20:49'),
(5, 1, 0, '0', 0, '2019-04-30 09:08:20', '2019-04-30 09:08:20'),
(6, 1, 5000, 'cigarette', 100, '2019-04-30 10:36:51', '2019-04-30 10:36:51'),
(7, 1, 0, 'food', 200, '2019-04-30 11:45:13', '2019-04-30 11:45:13'),
(8, 1, 0, 'Book', 500, '2019-04-30 11:45:36', '2019-04-30 11:45:36'),
(9, 1, 0, 'coffee', 60, '2019-04-30 11:46:35', '2019-04-30 11:46:35'),
(10, 1, 0, '0', 0, '2019-04-30 14:51:21', '2019-04-30 14:51:21');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_costs`
--
ALTER TABLE `user_costs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_costs`
--
ALTER TABLE `user_costs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
