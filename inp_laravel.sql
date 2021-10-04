-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 11:34 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inp_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(8, 'Program INIS', '2021-08-26 08:17:52', '2021-09-13 23:55:21'),
(9, 'Program Kemasyarakatan', '2021-08-26 08:18:08', '2021-08-26 08:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `developments`
--

CREATE TABLE `developments` (
  `id` int(11) UNSIGNED NOT NULL,
  `program_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `developments`
--

INSERT INTO `developments` (`id`, `program_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(6, 16, 'pemasangan batu pertama', '<p>dable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2021-08-31 09:00:01', '2021-08-31 09:00:01'),
(7, 16, 'Pemasangan Pondasi', '<p>dable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2021-08-31 09:01:06', '2021-08-31 09:01:06'),
(8, 17, 'Pemasangan batu pertama', '<p>dable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2021-08-31 09:01:52', '2021-08-31 09:01:52'),
(9, 17, 'Pemasangan Pondasi', '<p>dable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2021-08-31 09:02:10', '2021-08-31 09:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `donation_confirmations`
--

CREATE TABLE `donation_confirmations` (
  `id` int(11) UNSIGNED NOT NULL,
  `program_id` int(11) UNSIGNED NOT NULL,
  `users_id` int(11) UNSIGNED DEFAULT NULL,
  `id_transaksi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama_donatur` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nominal_donasi` int(11) NOT NULL,
  `dukungan` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `bukti_pembayaran` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bukti_tf` tinyint(4) NOT NULL DEFAULT 0,
  `verifikasi` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donation_confirmations`
--

INSERT INTO `donation_confirmations` (`id`, `program_id`, `users_id`, `id_transaksi`, `nama_donatur`, `email`, `nominal_donasi`, `dukungan`, `bukti_pembayaran`, `bukti_tf`, `verifikasi`, `created_at`, `updated_at`) VALUES
(45, 20, NULL, '1222001', 'Hamba Allah', 'satriasuryatria@gmail.com', 1000000, 'Semoga Allah Mudahkan', '1.jpg', 0, 1, '2021-08-31 08:35:29', '2021-08-31 08:38:41'),
(46, 21, NULL, '1223046', 'Andriy Sevchenko', 'andriy@mail.com', 20000000, 'Semoga Berkah', '2.jpg', 0, 0, '2021-08-31 08:39:34', '2021-08-31 08:39:42'),
(47, 17, NULL, '1219047', 'Agisurrahman', 'agis@mail.com', 100000000, 'semoga menjadi pahala jariyah ana', '3.jpg', 0, 1, '2021-08-31 08:40:48', '2021-08-31 08:42:33'),
(48, 20, NULL, '1222048', 'Hamba Allah', 'satriasuryatria@gmail.com', 20000000, 'Semoga saudara kami disana terbantu', '4.jpg', 0, 1, '2021-08-31 08:41:56', '2021-08-31 08:42:25'),
(49, 21, NULL, '1223049', 'Satria Suryanegara', 'satriasuryatria@gmail.com', 10000000, 'Semoga mereka bahagia', '5.png', 0, 1, '2021-08-31 08:43:17', '2021-09-21 02:11:29'),
(50, 20, NULL, '1222050', 'Satria Suryanegara', 'satriasuryatria@gmail.com', 600000, 'sadssa asdsa a', '4.jpg', 0, 1, '2021-09-20 23:46:10', '2021-09-20 23:48:09'),
(51, 20, NULL, '1222051', 'Satria Suryanegara', 'satriasuryatria@gmail.com', 300000, 'fsfd sdfds fsfs', NULL, 0, 0, '2021-09-20 23:47:23', '2021-09-20 23:47:23'),
(52, 21, NULL, '1223052', 'Satria Suryanegara', 'satriasuryatria@gmail.com', 250000, 'lancar yaa', '4.jpg', 0, 0, '2021-09-27 19:33:56', '2021-09-27 19:39:20'),
(53, 20, NULL, '1222053', 'Satria Suryanegara', 'satriasuryatria@gmail.com', 123456, 'trrt rtyrtr rtyr', NULL, 0, 0, '2021-09-27 20:00:31', '2021-09-27 20:00:31'),
(54, 20, NULL, '1222054', 'Hamba Allah', 'satriasuryatria@gmail.com', 765544, 'jhjh hjh hjhj', NULL, 0, 0, '2021-09-27 20:40:28', '2021-09-27 20:40:28'),
(55, 16, NULL, '1218055', 'Hamba Allah', 'satriasuryatria@gmail.com', 4345425, 'rhrhwvd sdfs dssdf', NULL, 0, 0, '2021-09-27 21:00:32', '2021-09-27 21:00:32'),
(56, 17, NULL, '1219056', 'Hamba Allah', 'satriasuryatria@gmail.com', 300000, 'semoga berkah guys', '2.jpg', 0, 1, '2021-09-28 03:32:34', '2021-09-28 03:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) UNSIGNED NOT NULL,
  `users_id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `brief_explanation` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `donation_target` int(100) UNSIGNED NOT NULL,
  `time_is_up` date NOT NULL,
  `shelter_account_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `donation_collected` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `isPublished` tinyint(1) NOT NULL DEFAULT 0,
  `isSelected` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `users_id`, `category_id`, `title`, `photo`, `brief_explanation`, `donation_target`, `time_is_up`, `shelter_account_number`, `donation_collected`, `description`, `isPublished`, `isSelected`, `created_at`, `updated_at`) VALUES
(16, 4, 8, 'Perbaikan Pesantren Putra Imam Nawawi Ciomas', 'old-deserted-ruined-house-middle-450w-755000641.jpg', NULL, 500000000, '2021-12-31', '1234-13124-12123-1212 (bca) - 23423-23432-2423-2432 (bsm) a.n YAYASAN IMAM NAWAWI', NULL, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, 1, '2021-08-31', '2021-08-31 08:32:54'),
(17, 4, 8, 'Bantu pembangunan Masjid Annawawi', 'old-deserted-ruined-house-middle-450w-755000641.jpg', NULL, 300000000, '2021-11-25', '1234-13124-12123-1212 (bca) - 23423-23432-2423-2432 (bsm) a.n YAYASAN IMAM NAWAWI', 100300000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, 1, '2021-08-31', '2021-09-28 03:33:53'),
(18, 4, 9, 'Bantu beasiswa sekolah anak-anak yang kurang mampu', '4.-Membantu-orang-lain-dari-Ummi-Online.jpg', NULL, 100000000, '2023-11-07', '1234-13124-12123-1212 (bca) - 23423-23432-2423-2432 (bsm) a.n YAYASAN IMAM NAWAWI', NULL, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, 0, '2021-08-31', '2021-09-07 03:09:01'),
(19, 4, 9, 'Bantuan sembako untuk korban banjir jakarta', 'reality-tsunami-disaster-outbreak-unprecedented-450w-256600405.jpg', NULL, 50000000, '2021-11-06', '1234-13124-12123-1212 (bca) - 23423-23432-2423-2432 (bsm) a.n YAYASAN IMAM NAWAWI', NULL, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, 0, '2021-08-31', '2021-08-31 08:27:48'),
(20, 4, 9, 'Bantu saudara-saudara kita di Palestina', '4.-Membantu-orang-lain-dari-Ummi-Online.jpg', NULL, 1000000000, '2023-12-31', '1234-13124-12123-1212 (bca) - 23423-23432-2423-2432 (bsm) a.n YAYASAN IMAM NAWAWI', 21900000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, 1, '2021-08-31', '2021-09-20 23:48:08'),
(21, 4, 9, 'Mari ringankan beban para pengungsi rohingya', 'Hummingbird_by_Shu_Le.jpg', NULL, 40000000, '2023-12-29', '1234-13124-12123-1212 (bca) - 23423-23432-2423-2432 (bsm) a.n YAYASAN IMAM NAWAWI', 30000000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, 1, '2021-08-31', '2021-09-21 02:11:28'),
(22, 4, 8, 'Bantu pembangunan pesantren ikhwan', 'bayu-prayuda-4ZVqqDAZD2o-unsplash.jpg', NULL, 100000000, '2021-11-27', '1234-13124-12123-1212 (bca) - 23423-23432-2423-2432 (bsm) a.n YAYASAN IMAM NAWAWI', NULL, '<p>lorem, ipsum sad dasd</p>', 1, 0, '2021-09-14', '2021-09-20 23:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) UNSIGNED NOT NULL,
  `program_id` int(11) UNSIGNED NOT NULL,
  `report` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(3) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `no_hp`, `email`, `password`, `role`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(4, 'Admin', '085725351694', 'admin@admin.com', '$2y$10$HN.bH9iogfvSXoPnHv/1TeE71HOZsYvSHOqHF/mKokvqYIc4eh2/2', 1, NULL, NULL, '2021-08-28 00:31:34', '2021-08-28 00:31:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developments`
--
ALTER TABLE `developments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `donation_confirmations`
--
ALTER TABLE `donation_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `users_id` (`users_id`);

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
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `users_id_2` (`users_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`program_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `developments`
--
ALTER TABLE `developments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donation_confirmations`
--
ALTER TABLE `donation_confirmations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `developments`
--
ALTER TABLE `developments`
  ADD CONSTRAINT `developments_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation_confirmations`
--
ALTER TABLE `donation_confirmations`
  ADD CONSTRAINT `donation_confirmations_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programs_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
