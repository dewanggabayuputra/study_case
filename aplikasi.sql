-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 09:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `klaim`
--

CREATE TABLE `klaim` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyebab_klaim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_nasabah` int(11) NOT NULL,
  `beban_klaim` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `klaim`
--

INSERT INTO `klaim` (`id`, `lob`, `penyebab_klaim`, `jumlah_nasabah`, `beban_klaim`, `created_at`, `updated_at`) VALUES
(3, 'KBG dan Suretyship', 'Macet', 1, 2, '2024-08-21 22:19:41', '2024-08-21 22:19:41'),
(4, 'KBG dan Suretyship', 'Meninggal', 2, 3, '2024-08-21 22:33:02', '2024-08-21 22:33:02'),
(5, 'Konsumtif', 'PHK', 1, 2, '2024-08-21 22:33:11', '2024-08-21 22:33:11'),
(6, 'PEN', 'Macet', 12, 3, '2024-08-21 22:33:21', '2024-08-21 22:33:21'),
(7, 'Produktif', 'Meninggal', 1, 2, '2024-08-21 22:33:31', '2024-08-21 22:33:31'),
(8, 'Konsumtif', 'Meninggal', 1, 3, '2024-08-21 22:33:38', '2024-08-21 22:33:38'),
(9, 'KBG dan Suretyship', 'Macet', 1, 2, '2024-08-21 22:33:46', '2024-08-21 22:33:46'),
(10, 'Konsumtif', 'Meninggal', 34, 231, '2024-08-21 22:36:45', '2024-08-21 22:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_aktivitas`
--

INSERT INTO `log_aktivitas` (`id`, `action`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create', 'Data klaim berhasil dibuat{\"lob\":\"KBG dan Suretyship\",\"penyebab_klaim\":\"Macet\",\"jumlah_nasabah\":\"3\",\"beban_klaim\":\"4\"}', '2024-08-21 22:01:32', '2024-08-21 22:01:32'),
(2, 'integrasi', 'Klaim berhasil diintegrasi', '2024-08-21 22:02:02', '2024-08-21 22:02:02'),
(3, 'delete', 'Data klaim berhasil dihapus', '2024-08-21 22:02:13', '2024-08-21 22:02:13'),
(4, 'delete', 'Data klaim berhasil dihapus', '2024-08-21 22:02:15', '2024-08-21 22:02:15'),
(5, 'integrasi', 'Klaim berhasil diintegrasi', '2024-08-21 22:08:49', '2024-08-21 22:08:49'),
(6, 'create', 'Data klaim berhasil dibuat{\"lob\":\"KBG dan Suretyship\",\"penyebab_klaim\":\"Macet\",\"jumlah_nasabah\":\"1\",\"beban_klaim\":\"2\"}', '2024-08-21 22:19:41', '2024-08-21 22:19:41'),
(7, 'create', 'Data klaim berhasil dibuat{\"lob\":\"KBG dan Suretyship\",\"penyebab_klaim\":\"Meninggal\",\"jumlah_nasabah\":\"2\",\"beban_klaim\":\"3\"}', '2024-08-21 22:33:02', '2024-08-21 22:33:02'),
(8, 'create', 'Data klaim berhasil dibuat{\"lob\":\"Konsumtif\",\"penyebab_klaim\":\"PHK\",\"jumlah_nasabah\":\"1\",\"beban_klaim\":\"2\"}', '2024-08-21 22:33:11', '2024-08-21 22:33:11'),
(9, 'create', 'Data klaim berhasil dibuat{\"lob\":\"PEN\",\"penyebab_klaim\":\"Macet\",\"jumlah_nasabah\":\"12\",\"beban_klaim\":\"3\"}', '2024-08-21 22:33:21', '2024-08-21 22:33:21'),
(10, 'create', 'Data klaim berhasil dibuat{\"lob\":\"Produktif\",\"penyebab_klaim\":\"Meninggal\",\"jumlah_nasabah\":\"1\",\"beban_klaim\":\"2\"}', '2024-08-21 22:33:31', '2024-08-21 22:33:31'),
(11, 'create', 'Data klaim berhasil dibuat{\"lob\":\"Konsumtif\",\"penyebab_klaim\":\"Meninggal\",\"jumlah_nasabah\":\"1\",\"beban_klaim\":\"3\"}', '2024-08-21 22:33:38', '2024-08-21 22:33:38'),
(12, 'create', 'Data klaim berhasil dibuat{\"lob\":\"KBG dan Suretyship\",\"penyebab_klaim\":\"Macet\",\"jumlah_nasabah\":\"1\",\"beban_klaim\":\"2\"}', '2024-08-21 22:33:46', '2024-08-21 22:33:46'),
(13, 'create', 'Data klaim berhasil dibuat{\"lob\":\"Konsumtif\",\"penyebab_klaim\":\"Meninggal\",\"jumlah_nasabah\":\"34\",\"beban_klaim\":\"231\"}', '2024-08-21 22:36:45', '2024-08-21 22:36:45');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_22_045522_klaim', 2),
(6, '2024_08_22_045933_log_aktivitas', 3);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `klaim`
--
ALTER TABLE `klaim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klaim`
--
ALTER TABLE `klaim`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
