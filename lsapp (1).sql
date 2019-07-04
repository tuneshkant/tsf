-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 07:04 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `healthnews`
--

CREATE TABLE `healthnews` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `healthnews`
--

INSERT INTO `healthnews` (`id`, `title`, `body`, `cover_image`, `created_at`, `updated_at`) VALUES
(1, 'First news', '<p>HII akdnsklfn</p>', 'g1_1542540989.jpg', '2018-11-17 08:43:54', '2018-11-18 06:06:29'),
(3, 'fkdfnvfv', '<p>vfbgb</p>', '20160918_173301_1542905455.jpg', '2018-11-18 05:32:43', '2018-11-22 11:20:56'),
(4, 'First news', '<p>HII akdnsklfn</p>', 'g5_1542540693.jpg', '2018-11-18 06:01:33', '2018-11-18 06:01:33'),
(6, 'First news', '<p>HII akdnsklfn</p>', 'g1_1542859756.jpg', '2018-11-18 06:02:27', '2018-11-21 22:39:16'),
(7, 'ffsf', '<p>fsdf</p>', 'g4_1542859735.jpg', '2018-11-18 06:08:25', '2018-11-21 22:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `jointeams`
--

CREATE TABLE `jointeams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyjoin` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jointeams`
--

INSERT INTO `jointeams` (`id`, `name`, `mobileno`, `email`, `address`, `education`, `skills`, `whyjoin`, `member_image`, `verify`, `created_at`, `updated_at`) VALUES
(1, 'ghn', '34567890', 'sdxfcghjk@gmail.com', 'srdtcfgjkml,\r\ndxrgvbkml\r\nftghjnkml\r\n\\', 'ghn', 'ghn', 'sxdcfghjk\r\ndtfyghjk\r\nfyghjkl\r\nfyguhjjhb', '20160918_173043_1542742528.jpg', '1', '2018-11-20 13:50:26', '2018-11-20 14:05:28'),
(3, 'setfh', '123456789', 'tuneshkant@gmail.com', 'dfgvbhjnkm', 'setfh', 'setfh', 'sdcfvbhj', '20160918_173301_1542742550.jpg', '1', '2018-11-20 13:55:46', '2018-11-20 14:05:50'),
(11, 'SUSHMA LATA', '7654341612', 'bhagt.sourav007@gmail.com', 'VILL-RACHANGA   P.O- PARTANGA   DIST-HAZRIBAG', 'frgfre', 'dxrctfgbhnj', 'efjfgbjrkgb', '20160918_173043_1542748064.jpg', '0', '2018-11-20 15:37:44', '2018-11-20 15:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `livesessions`
--

CREATE TABLE `livesessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livesessions`
--

INSERT INTO `livesessions` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, 'second session', '<p><a href="http://ischzb.in/grocery_store">http://ischzb.in/grocery_store</a></p>', '2018-11-17 07:35:09', '2018-11-17 07:36:38'),
(3, 'first session', '<p>fjebrjkg</p>', '2018-11-17 07:37:08', '2018-11-17 07:37:08'),
(5, 'fourthsession', '<p><a href="http://google.com">http://google.com</a></p>', '2018-11-17 07:38:01', '2018-11-17 07:38:01'),
(7, 'dfg', '<p>yryrey</p>', '2018-12-12 10:28:18', '2018-12-12 10:28:18'),
(8, 'Api Test Api', 'Api Test Body', '2019-07-02 20:28:58', '2019-07-02 20:32:26');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_16_184525_create_upcomingevents_table', 1),
(4, '2018_11_16_185510_upcomingevent', 1),
(6, '2018_11_17_051157_create_upcomingevents_table', 2),
(8, '2018_11_17_121253_create_livesessions_table', 3),
(9, '2018_11_17_132935_create_healthnews_table', 4),
(11, '2018_11_20_142229_create_testimonials_table', 5),
(15, '2018_11_20_170028_create_jointeams_table', 6);

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
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `body`, `user_image`, `verify`, `created_at`, `updated_at`) VALUES
(3, 'mnemonics', '<p>vufkgvrkgv vjrkevgbkhrb</p>', '20160918_173043_1542752115.jpg', '1', '2018-11-20 16:45:15', '2018-11-22 19:39:55'),
(4, 'mnemonicsdfxcgvhbjnkl', '<p>vufkgvrkgv vjrkevgbvhhjvhhvjkhrbhrukgjh</p>', '20160918_173043_1542752167.jpg', '1', '2018-11-20 16:46:07', '2018-11-22 17:55:08'),
(5, 'mnemonics', '<p>bmmuyt</p>', '20160918_173301_1542928748.jpg', '1', '2018-11-22 17:49:08', '2018-11-22 19:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `upcomingevents`
--

CREATE TABLE `upcomingevents` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upcomingevents`
--

INSERT INTO `upcomingevents` (`id`, `date`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, '2018-12-23', 'first event', 'This is the event body', '2018-11-17 00:31:26', '2018-11-17 00:31:26'),
(4, '2018-11-24', 'Developed Library Management System', '<p>fdighdfkjgbds</p>\r\n\r\n<p>gioerygierk</p>\r\n\r\n<p>fhreuitgreu</p>', '2018-11-17 03:24:19', '2018-11-17 04:38:48'),
(7, '2018-11-30', 'ugiolij', '<p>ryxtyivuo;</p>', '2018-11-20 17:24:38', '2018-11-20 17:24:38'),
(8, '2019-07-30', 'Test Api', 'Test Body', '2019-07-02 20:46:35', '2019-07-02 20:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'tuneshkant@gmail.com', '$2y$10$qwMzp0n.JUbmqZpPz7zopO7RyMA1wou6gL7knMQefz93pi/2pHRtq', 'jv1N529vr5T9dMmOKuUZ46ebp3aVBZxZ3A0AyCJNWFtsyfHU346vYZPfWzcS', '2018-11-16 13:44:41', '2018-12-12 14:08:55'),
(2, 'Tunesh', 'tuneshkant@yahoo.com', '$2y$10$vbtqgyP3Tl3V7XYdEPHLWOLQADfEw9wIVQFShkb6k0SvGKO8p2WwK', 'qgitJGUrAdRvsuL62Y1IK63kwH63ZgVRVVjQiwzAqfJW5fRxlR73YPNn1u33', '2018-12-12 14:03:20', '2018-12-12 14:14:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `healthnews`
--
ALTER TABLE `healthnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jointeams`
--
ALTER TABLE `jointeams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jointeams_email_unique` (`email`);

--
-- Indexes for table `livesessions`
--
ALTER TABLE `livesessions`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcomingevents`
--
ALTER TABLE `upcomingevents`
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
-- AUTO_INCREMENT for table `healthnews`
--
ALTER TABLE `healthnews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jointeams`
--
ALTER TABLE `jointeams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `livesessions`
--
ALTER TABLE `livesessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `upcomingevents`
--
ALTER TABLE `upcomingevents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
