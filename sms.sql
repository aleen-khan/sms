-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2023 at 08:30 AM
-- Server version: 8.0.31-0ubuntu0.20.04.2
-- PHP Version: 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `remaining_sms` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Family', 'Aleen', '2023-02-15 04:59:55', '2023-02-15 04:59:55'),
(2, 'Friends', 'Aleen', '2023-02-15 05:00:01', '2023-02-15 05:00:01'),
(3, 'Colleague', 'Aleen', '2023-02-15 05:00:05', '2023-02-15 05:00:05'),
(6, 'Rockers', 'Aleen', '2023-02-15 09:11:42', '2023-02-15 09:11:42'),
(8, 'Boys', 'Aleen', '2023-02-15 10:26:01', '2023-02-15 10:26:01'),
(9, 'Staff', 'Aleen', '2023-02-15 10:26:34', '2023-02-15 10:26:34'),
(10, 'Backbencher', 'Aleen', '2023-02-15 11:40:07', '2023-02-15 11:40:07'),
(17, 'Backbencher251408', 'Aleen', '2023-02-15 12:56:12', '2023-02-15 12:56:12'),
(18, 'Little Boys', 'Aleen', '2023-02-15 13:01:53', '2023-02-15 13:01:53'),
(19, 'Little', 'Aleen', '2023-02-15 13:03:39', '2023-02-15 13:03:39'),
(20, 'hjdgdsj', 'Aleen', '2023-02-15 13:03:50', '2023-02-15 13:03:50'),
(21, 'Backbencher', 'Aleen', '2023-02-15 13:04:33', '2023-02-15 13:04:33'),
(22, 'Backbencher25', 'Aleen', '2023-02-19 05:51:18', '2023-02-19 05:51:18'),
(23, 'Backbencher22', 'Aleen', '2023-02-19 05:52:12', '2023-02-19 05:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `group_members`
--

CREATE TABLE `group_members` (
  `id` bigint UNSIGNED NOT NULL,
  `group_id` int DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_members`
--

INSERT INTO `group_members` (`id`, `group_id`, `contact_name`, `contact_number`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Aleen Khan', '01703078602', '2023-02-15 05:23:22', '2023-02-15 05:23:22'),
(2, NULL, 'Afnan', '01677756337', '2023-02-15 05:28:33', '2023-02-15 05:28:33'),
(3, NULL, 'Sohag', '01912345698', '2023-02-15 05:33:37', '2023-02-15 05:33:37'),
(6, NULL, 'Yeasir Rafe', '01948166838', '2023-02-19 05:57:32', '2023-02-19 05:57:32'),
(8, NULL, 'Yeasir Rafe', '01948166838639696', '2023-02-22 05:49:11', '2023-02-22 05:49:11'),
(9, NULL, 'Yeasir Rafe', '01948166838639696', '2023-02-22 05:49:56', '2023-02-22 05:49:56'),
(10, NULL, 'Yeasir Rafe', '01948166838639696', '2023-02-22 05:50:08', '2023-02-22 05:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sms_count` int NOT NULL,
  `total_count` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` int NOT NULL,
  `total_receiver` int NOT NULL,
  `draft` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `body`, `sms_count`, `total_count`, `status`, `sender_id`, `total_receiver`, `draft`, `created_at`, `updated_at`) VALUES
(1, 'Hi', 1, 1, 'pending', 1911155454, 1, 0, '2023-02-15 05:01:37', '2023-02-15 05:01:37'),
(2, 'Hello', 1, 1, 'pending', 1911155454, 1, 0, '2023-02-15 05:01:46', '2023-02-15 05:01:46'),
(3, 'hlw', 1, 1, 'pending', 1911155454, 1, 0, '2023-02-15 05:02:12', '2023-02-15 05:02:12'),
(4, 'hey', 1, 1, 'pending', 1911155454, 1, 0, '2023-02-15 05:02:19', '2023-02-15 05:02:19'),
(5, 'what\'s up', 1, 1, 'pending', 1911155454, 1, 0, '2023-02-15 05:02:53', '2023-02-15 05:02:53'),
(6, 'hello wp', 1, 1, 'pending', 1911155454, 1, 0, '2023-02-15 13:03:09', '2023-02-15 13:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `message_histories`
--

CREATE TABLE `message_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `message_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_histories`
--

INSERT INTO `message_histories` (`id`, `user_id`, `message_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-02-15 05:01:37', '2023-02-15 05:01:37'),
(2, 1, 2, '2023-02-15 05:01:46', '2023-02-15 05:01:46'),
(3, 1, 3, '2023-02-15 05:02:12', '2023-02-15 05:02:12'),
(4, 1, 4, '2023-02-15 05:02:19', '2023-02-15 05:02:19'),
(5, 1, 5, '2023-02-15 05:02:53', '2023-02-15 05:02:53'),
(6, 1, 6, '2023-02-15 13:03:09', '2023-02-15 13:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_12_200442_create_accounts_table', 1),
(6, '2023_02_12_200641_create_groups_table', 1),
(7, '2023_02_12_200730_create_group_members_table', 1),
(8, '2023_02_12_200753_create_messages_table', 1),
(9, '2023_02_12_200839_create_message_histories_table', 1),
(10, '2023_02_12_200919_create_sms_infos_table', 1),
(11, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(12, '2023_02_19_083559_create_sessions_table', 2);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('219smvAUfzN6FACQu3hElSkc7kFi3voutkTc7rSd', NULL, '192.168.56.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUUxWRDF4UjhPblpNVWtSeWtxeEdDcXJES0ZEdW5uczBxaTU0QmxSMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly9zbXMudGVzdCI7fX0=', 1677049221),
('jy7pQDE3ttcrZz1BtblDvHNKafGUbFgd4h7z2Cxc', 1, '192.168.56.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV2w1ZXlUNElMTUpIOWxCclVuY2s0UHhBOUJ6TFVaVHYwaE1SdUdRSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9zbXMudGVzdC9sb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNjc2ODk4MTc0O319', 1676898174),
('MNUX7hU00dDQhFINA36OKxMab94fDXS1uvY1shxT', NULL, '192.168.56.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXpuUm9wQkxzMm4zM08zSllDR2JNcW1uOEYzUGpyaUtpZlNRbEwxbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly9zbXMudGVzdCI7fX0=', 1677049140),
('t29qU8sDj0JSW93EsmJUpFI5NOdcBjqzIxri77me', NULL, '192.168.56.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoid1NrVXBxWE9yVDhiSm40UGk3TGRrN2V6OW1rUUhabUVGMGNwdGhlViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1677050973),
('wGkHZWf4QkfIsrRoTOUCGBiQ07qnkTrTPaur4kAD', NULL, '192.168.56.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRFBRbTh0dHNrenZjM3dkamdmMm9WanlJd2xJdllCUldlV1c5M0FtRCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9zbXMudGVzdC9zZXJ2aWNlLWhpc3RvcnkiO319', 1676893021),
('wj52dzsf42czcWQjYY863AyEwYDnhDgPUJ9sY6oB', 1, '192.168.56.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaE9QTGxrVzIzcWFzakJ3SGhNRmowTjJqV0ZoQVhlR1NROU94WHNMYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly9zbXMudGVzdC9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE2NzY4OTg3NzI7fX0=', 1676898825);

-- --------------------------------------------------------

--
-- Table structure for table `sms_infos`
--

CREATE TABLE `sms_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_id` int NOT NULL,
  `group_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$A5FLf.ZI3uXCgWM2QdtIwul005dmg0iknkdmeyOXWNI.834srtyw.', NULL, NULL, NULL, NULL, '2023-02-20 12:44:37', '2023-02-20 12:44:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_members`
--
ALTER TABLE `group_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_histories`
--
ALTER TABLE `message_histories`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sms_infos`
--
ALTER TABLE `sms_infos`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `group_members`
--
ALTER TABLE `group_members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message_histories`
--
ALTER TABLE `message_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_infos`
--
ALTER TABLE `sms_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
