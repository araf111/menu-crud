-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 02:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `eng_name` varchar(255) NOT NULL,
  `bng_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `footer_one` varchar(255) DEFAULT NULL,
  `footer_two` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `image_one` varchar(255) DEFAULT NULL,
  `image_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `eng_name`, `bng_name`, `email`, `mobile`, `title`, `subtitle`, `description`, `footer_one`, `footer_two`, `status`, `image_one`, `image_two`, `created_at`, `updated_at`) VALUES
(1, 'organize-one', 'organize-one', 'organize1@gmail.com', '01737312488', 'Title', 'sub-title', 'content goes here...', 'footer here', 'footer here', 0, 'images/slmylZKyrJ2yT1k6vQfcI3MWvMTmVAFxYnFkqe0v.png', 'images/ojs1TrtKMXYTtYP50TjrTUSXZHGWx544EhrxDHEE.png', '2023-11-19 22:44:46', '2023-11-19 22:44:46'),
(4, 'Organize-Two', 'Organize-Two', 'admin11@gmail.com', '01737312622', 'dsgdg', 'gdgdgdf', 'dgdgd', 'dgdgdg', 'dgdgd', 1, 'images/dSSq3pgde7AvGZRwd5LsqzX1ADDz5vMZBo7D0uL7.png', 'images/8nRyVj6t5ckUkfpCzb1XH1TtTKJFshVINaDAZdXo.png', '2023-11-20 06:31:14', '2023-11-20 06:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organization_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image_one` varchar(255) DEFAULT NULL,
  `image_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `organization_id`, `name`, `name_bn`, `title`, `subtitle`, `description`, `status`, `image_one`, `image_two`, `created_at`, `updated_at`) VALUES
(1, 1, 'Menu-one', 'Menu-one', 'Main Menu Item', 'Main Menu Item sub', 'content here....', 1, NULL, NULL, NULL, NULL),
(3, 1, 'tyutyu', 'utu', 'tyutu', 'tyut', 'tuyt', 1, 'manu-images/hsi1QzJ3VF7K8S5LExVtE6S1CcupjQfCI4BVzWAL.png', 'manu-images/uZfwa3mLkCn4GcyM8y7ZiaYJ1GXdWCwzm4Eu06Q8.png', '2023-11-19 23:55:12', '2023-11-19 23:55:12'),
(4, 1, 'tyutyu okk', 'utu', 'tyutu', 'tyut', 'tuyt', 0, '', '', '2023-11-20 00:19:55', '2023-11-20 00:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_11_19_064445_create_masters_table', 2),
(6, '2023_11_20_044725_create_menus_table', 3),
(7, '2023_11_20_045734_add_organize_id_to_users_table', 3),
(8, '2023_11_20_062912_create_sub_menu_ones_table', 4),
(9, '2023_11_20_062959_create_sub_menu_twos_table', 4),
(10, '2023_11_20_063130_create_sub_menu_threes_table', 4),
(11, '2023_11_20_063157_create_child_menus_table', 4),
(12, '2023_11_20_063404_create_grand_menus_table', 4),
(13, '2023_11_20_091139_add_menu_id_to_sub_menu_twos_table', 5),
(14, '2023_11_20_100249_create_sub_menu_threes_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_ones`
--

CREATE TABLE `sub_menu_ones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image_one` varchar(255) DEFAULT NULL,
  `image_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menu_ones`
--

INSERT INTO `sub_menu_ones` (`id`, `menu_id`, `name`, `name_bn`, `title`, `subtitle`, `description`, `status`, `image_one`, `image_two`, `created_at`, `updated_at`) VALUES
(2, 3, 'dgdgdg-okk', 'dgdgd', 'dgdg', 'dgdgd', 'dgdgd', 1, '', '', '2023-11-20 01:18:02', '2023-11-20 02:12:39'),
(3, 4, 'sub-menu-1', 'sub-menu-1', 'dghg', 'fgjhfgjh', 'fgyjgjg', 1, 'manu-images/ZEq6qbNAI3swvdnE3bBVYdaOgRWBrYvUR8vt360w.png', 'manu-images/LCyaJ2HCGLP5bX00ZBYk796eS3NGJdXYNpaVpj4n.png', '2023-11-20 02:19:07', '2023-11-20 02:19:07'),
(4, 3, 'sub-menu-2', 'sub-menu-2', 'gfgddgd', 'dgdg', 'dgdg', 1, 'manu-images/ZLDE0635JFcqCsWLWmbO8DGBSOEcp2bEToRdtvvs.png', 'manu-images/xd2zbMKFa9CHaee4XyPULKD4sBdz8pODNLcAXpvN.png', '2023-11-20 02:19:46', '2023-11-20 02:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_threes`
--

CREATE TABLE `sub_menu_threes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_one_id` int(11) NOT NULL,
  `sub_menu_two_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image_one` varchar(255) DEFAULT NULL,
  `image_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menu_threes`
--

INSERT INTO `sub_menu_threes` (`id`, `menu_id`, `sub_menu_one_id`, `sub_menu_two_id`, `name`, `name_bn`, `title`, `subtitle`, `description`, `status`, `image_one`, `image_two`, `created_at`, `updated_at`) VALUES
(2, 3, 2, 1, 'Menu-Two-okk', 'Menu-Two', 'gddgdg', 'dgdfg', 'dgdg', 1, '', '', '2023-11-20 04:41:46', '2023-11-20 05:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_twos`
--

CREATE TABLE `sub_menu_twos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_one_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image_one` varchar(255) DEFAULT NULL,
  `image_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menu_twos`
--

INSERT INTO `sub_menu_twos` (`id`, `menu_id`, `sub_menu_one_id`, `name`, `name_bn`, `title`, `subtitle`, `description`, `status`, `image_one`, `image_two`, `created_at`, `updated_at`) VALUES
(3, 3, 2, 'Menu-one', 'Menu-one', 'gfdgdg', 'dgd', 'dgdgd', 1, 'manu-images/ezuTtvzLdlpvdSaW73v8eIeySiP2G3XrRWHSR9jV.png', 'manu-images/LOz8EfhrSsNZgrWWr3Z6vwvKirGfNsYqynK33zDm.png', '2023-11-20 06:54:20', '2023-11-20 06:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `organize_id` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `organize_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 0, NULL, '$2y$10$EkYWOC9THtsP0mXYt6AcXuMpjZSLlkgney//fJ5U14rBATRKQiGrG', NULL, '2023-11-18 23:02:20', '2023-11-18 23:02:20'),
(2, 'araf12', 'araff@gmail.com', 0, NULL, '$2y$10$CBkja4euRzhvUss2Gn7vZ.7RUrxYWD0BEaFumwu2biflDKZ6Y3VOu', NULL, '2023-11-19 00:31:02', '2023-11-19 00:31:02'),
(3, 'organize-one', 'organize1@gmail.com', 1, NULL, '$2y$10$7mbTyuhNRuWPuVnCucgQgOF/OmwIiJG3u4lTOjUfZUqaxtnj9OjY.', NULL, '2023-11-19 22:44:46', '2023-11-19 22:44:46'),
(4, 'Organize-Two', 'admin11@gmail.com', 4, NULL, '$2y$10$S5sEDCHDQxkJnOw6Jva/7uvoYHjTTAXP0HvpjdVzbJzV927I1gBYK', NULL, '2023-11-20 06:31:15', '2023-11-20 06:31:15');

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
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `sub_menu_ones`
--
ALTER TABLE `sub_menu_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu_threes`
--
ALTER TABLE `sub_menu_threes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu_twos`
--
ALTER TABLE `sub_menu_twos`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_menu_ones`
--
ALTER TABLE `sub_menu_ones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_menu_threes`
--
ALTER TABLE `sub_menu_threes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_menu_twos`
--
ALTER TABLE `sub_menu_twos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
