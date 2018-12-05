-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 06:11 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_events`
--

CREATE TABLE `create_events` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `need_registration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `create_events`
--

INSERT INTO `create_events` (`id`, `event_name`, `date`, `time`, `need_registration`, `Venue`, `event_details`, `created_at`, `updated_at`) VALUES
(1, 'fair', '2018-11-23', '10:34', 'No', '71aduitorium', 'good', '2018-11-29 18:19:51', '2018-12-03 10:42:45'),
(2, 'swe', '2018-12-19', '01:08', 'no', '71aduitorium', 'so hard', '2018-12-01 10:24:55', '2018-12-02 06:53:24'),
(3, 'monday', '2018-12-03', '11:30', 'yes', '71aduitorium', 'must be difficult', '2018-12-02 06:53:08', '2018-12-03 09:34:49'),
(4, 'xcv', '2018-12-04', '11:02', 'yes', '71aduitorium', 'zsxdc', '2018-12-02 12:17:39', '2018-12-02 12:17:39'),
(6, 'nbas', '2018-12-04', '12:44', 'yes', 'maincampus', 'sdf', '2018-12-03 09:47:21', '2018-12-03 09:47:21'),
(8, 'nzxce', '2018-12-11', '12:30', 'Yes', 'maincampus', 'noqqzx', '2018-12-03 10:11:37', '2018-12-03 10:56:03'),
(9, 'programming seminar', '2018-11-08', '12:10', 'Yes', '71aduitorium', 'ahjsdh asssd12', '2018-12-04 01:17:52', '2018-12-04 01:30:59'),
(10, 'new 1', '2018-12-12', '12:12', 'yes', '71aduitorium', 'new comer', '2018-12-04 01:39:16', '2018-12-04 01:54:00');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 2),
(18, '2018_10_18_105411_create_create_events_table', 3),
(19, '2018_11_29_152012_create_registrations_table', 3),
(20, '2018_11_29_230541_create_todos_table', 3);

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
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `event_id`, `name`, `email`, `dept`, `s_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 100, 'mim', 'NISHU@gmail.com', 'SWE', '100', NULL, '2018-11-29 18:29:15', '2018-11-29 18:29:15'),
(2, 100, 'mim', 'NISHU@gmail.com', 'SWE', '100555', NULL, '2018-11-29 18:32:24', '2018-11-29 18:32:24'),
(3, 100, 'mim', 'NISHU@gmail.com', 'SWE', '100555', NULL, '2018-11-29 18:32:53', '2018-11-29 18:32:53'),
(4, 1, 'Nishu', 'ni@gmail.com', 'SWE', '100', NULL, '2018-11-29 18:57:59', '2018-11-29 18:57:59'),
(5, 1, 'Nishu11', 'ni@gmail.com', 'SWE', '100', NULL, '2018-11-29 18:59:14', '2018-11-29 18:59:14'),
(6, 1, 'Nishu11', 'ni@gmail.com', 'SWE', '100', NULL, '2018-11-29 19:00:35', '2018-11-29 19:00:35'),
(7, 1, 'Nishu11', 'ni@gmail.com', 'SWE', '100', NULL, '2018-11-29 19:01:01', '2018-11-29 19:01:01'),
(8, 1, 'Nishu', 'nishu111@gmail.com', 'SWE', '100', NULL, '2018-11-29 19:02:08', '2018-11-29 19:02:08'),
(9, 1, 'Nishu', 'NISHU@gmail.com', 'SWE', '100555', NULL, '2018-11-29 19:04:23', '2018-11-29 19:04:23'),
(10, 3, 'nishu', 'asasd@gmail.com', 'SWE', '161-35-1444', NULL, '2018-12-02 06:54:26', '2018-12-02 06:54:26'),
(11, 1, 'x', 'xx', 'x', '100', NULL, '2018-12-02 09:47:11', '2018-12-02 09:47:11'),
(12, 4, 'nur nishu', 'nur@gmail.com', 'swe', '161-35-1444', NULL, '2018-12-02 20:28:46', '2018-12-02 20:28:46'),
(13, 1, '123', 'dfg@df', 'swe', '12', NULL, '2018-12-02 23:53:24', '2018-12-02 23:53:24'),
(14, 5, 'zx', 'zxc', 'zxc', '123', NULL, '2018-12-03 10:39:54', '2018-12-03 10:39:54'),
(15, 3, 'tusar', 'as@gmail.com', 'swe', '161-35-1485', NULL, '2018-12-03 23:34:21', '2018-12-03 23:34:21'),
(16, 3, 'ashik', 'ashik@gmail.com', 'swe', '1134', NULL, '2018-12-04 01:33:40', '2018-12-04 01:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Nishu', 'mim@gmail.com', '$2y$10$cuAMSNYgGd9eO6F9eVUjI.rXlUqo31hDDDqNcoM/o3Ph/TvI18Ixe', NULL, '2018-12-01 10:12:30', '2018-12-01 10:12:30'),
(2, 'nishu14', 'nishu14@gmail.com', '$2y$10$JuhJUBi92YdoEWJ3DtEkr.gqeY3eI5gIUbJ2mvRpZlfcRGQ.4qEMa', 'ZLMx5uS6SAoxVb85wKhid0wooGM9KfWLW4XpukKN4O39zWjXfnjXSPyQCPpB', '2018-12-02 06:46:50', '2018-12-02 06:46:50'),
(3, 'nishu14', 'nishu18@gmail.com', '$2y$10$7MCA3SIKIVpW84DsiM12xu.bS9sEv0urgJZsfyvCUfXh/3ESKoYIG', 'WCuEkXr2xwsK1KBIUUYmew1KoHf032RSQTaZbdWL6xwWsw9IDcGh4E9Pr7oa', '2018-12-02 06:51:34', '2018-12-02 06:51:34'),
(4, 'tushar', 'tushar@gmail.com', '$2y$10$qqXLu2vGDfq5O/1k0KDP0ODbqSV6Ygy2JaG8rheCyDllaQ/v32Ubm', NULL, '2018-12-04 01:16:10', '2018-12-04 01:16:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_events`
--
ALTER TABLE `create_events`
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
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
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
-- AUTO_INCREMENT for table `create_events`
--
ALTER TABLE `create_events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
