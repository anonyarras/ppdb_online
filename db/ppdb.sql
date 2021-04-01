-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2021 at 05:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `foto`, `created_at`, `updated_at`) VALUES
(6, 'cungur', 'aaassdddd', 'sekolah_img/beritab80bb7740288fda1f201890375a60c8f.landing.jpg', '2021-02-27 09:18:57', '2021-02-27 09:28:47'),
(9, 'dsadasdas', 'kwkwkwkkwkwkkw\r\nkwkwkkwkwkkwkw\r\nkwkwkwkwkwkwkwk\r\nkwkwkwkwkwkwkw\r\nkwkwkwkwkwkwkwk\r\nwkwkkwkwkwkwk', 'sekolah_img/beritab80bb7740288fda1f201890375a60c8f.rumah2.png', '2021-02-27 09:24:17', '2021-02-27 09:24:17'),
(10, 'dasdasfggffsdfsdfsd', 'aaassdddd dasdsad', 'sekolah_img/beritab80bb7740288fda1f201890375a60c8f.WhatsApp Image 2021-02-27 at 16.44.04.jpeg', '2021-02-27 09:27:08', '2021-02-27 09:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(10) UNSIGNED NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp_ortu` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto_ijazah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_raport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `users`, `no_hp`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `alamat_ortu`, `no_tlp_ortu`, `created_at`, `updated_at`, `foto_ijazah`, `foto_raport`) VALUES
(7, 5, '32141241223', 'dasdasdasfdsf', 'dsadasdasda', '2021-02-16', 'Laki - Laki', 'asdasdasdas', 'dasdasdadasda', 'asdasdafasdasd', '1231241232', '2021-02-24 05:02:46', '2021-02-27 00:13:13', 'biodata_files/ijazah-3584859062ea9ecfb39b93bfcef8e869.jpg', 'biodata_files/raport-3584859062ea9ecfb39b93bfcef8e869.jpg'),
(15, 7, '23123123', 'dsadasdasdsa', 'dasdasdas', '2021-02-17', 'Laki - Laki', 'dasdasdasd', 'dasdasdasd', 'dasdasdas', '231312312312', NULL, '2021-02-26 23:32:25', NULL, NULL),
(16, 11, '412421432', 'dasdasdasdada', 'bogor', '2021-01-17', 'Laki - Laki', 'dasdasdads', 'fdsfdsfdsfs', 'asdasdadsads', '31231312', '2021-03-17 08:48:16', '2021-03-17 08:48:16', 'biodata_files/ijazah-3584859062ea9ecfb39b93bfcef8e869.jpg', 'biodata_files/raport-3584859062ea9ecfb39b93bfcef8e869.jpg'),
(17, 12, '12412', 'ciapus', 'bogor', '2021-03-26', 'Laki - Laki', 'ayah', 'saya', 'ciapus', '123124', '2021-03-17 09:00:38', '2021-03-17 09:00:38', 'biodata_files/ijazah-3584859062ea9ecfb39b93bfcef8e869.jpg', 'biodata_files/raport-3584859062ea9ecfb39b93bfcef8e869.jpg');

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
(4, '2021_02_22_050509_altern_users', 2),
(5, '2021_02_22_051636_add_photo', 3),
(6, '2021_02_22_055744_add_id_registrasi', 4),
(7, '2014_10_12_200000_add_two_factor_columns_to_users_table', 5),
(8, '2021_02_22_132012_create_sessions_table', 5),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(10, '2021_02_24_030152_create_biodata', 7),
(11, '2021_02_24_173035_alter_users_verifikasi', 8),
(12, '2021_02_25_152739_add_file', 9),
(13, '2021_02_26_125016_add_role_users', 10),
(15, '2021_02_26_145401_table_pesan', 11),
(16, '2021_02_26_150900_alter_pesan', 12),
(17, '2021_02_26_165017_add_berita', 13),
(18, '2021_02_27_073535_add_pembayaran_user', 14),
(19, '2021_02_27_150548_add_ilulus', 15);

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
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `bukti` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `users`, `bukti`, `created_at`, `updated_at`) VALUES
(2, 5, 'pembayaran/bukti-3584859062ea9ecfb39b93bfcef8e869.jpeg', '2021-02-27 06:15:02', '2021-02-27 06:15:02'),
(3, 10, 'pembayaran/bukti-3584859062ea9ecfb39b93bfcef8e869.png', '2021-03-17 08:44:45', '2021-03-17 08:44:45'),
(4, 11, 'pembayaran/bukti-3584859062ea9ecfb39b93bfcef8e869.jpg', '2021-03-17 08:48:31', '2021-03-17 08:48:31'),
(5, 12, 'pembayaran/bukti-3584859062ea9ecfb39b93bfcef8e869.jpg', '2021-03-17 09:02:24', '2021-03-17 09:02:24');

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
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(10) UNSIGNED NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `users`, `judul`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 'test pesan', 'pesannnnnnnnnnnnnnnnnnnnn', 1, '2021-02-26 08:21:54', '2021-02-26 09:38:46'),
(2, 7, 'dasdasdasd', 'dasffdfsdfadasdas', 1, '2021-02-26 08:35:03', '2021-02-27 00:10:54'),
(3, 5, 'kwkwkwkw', 'dsadada', 1, '2021-02-26 09:01:47', '2021-02-27 00:00:25'),
(4, 11, 'verifikasi kode', 'REG-20210317154512', 1, '2021-03-17 08:50:27', '2021-03-17 08:51:09'),
(5, 12, 'verifikasi', 'REG-20210317155803', 1, '2021-03-17 09:02:05', '2021-03-17 09:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `profile_sekolah`
--

CREATE TABLE `profile_sekolah` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_sekolah`
--

INSERT INTO `profile_sekolah` (`id`, `nama`, `alamat`, `no_tlp`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'MTS Insan Takwa', 'Cibogel Ciapus', '0215123455', 'sekolah_img/logo1.png', '2021-02-27 09:23:09', '2021-02-27 09:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3lnR9nmSrBjgwwtElLlomUlXNVQ1ZPd63zwP528s', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibEpxeTlqNTg3V24wVjIwdGVNT1JzOUhoYkx5U1d1d3NpTVpDRzhLdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRhUzVVSXhtSG5vWFJkNlcyTTI1SFl1VG9vL2FkVGxWeWxjWlFVVjVJTFhVTWxPUEY4MDdVTyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkYVM1VUl4bUhub1hSZDZXMk0yNUhZdVRvby9hZFRsVnlsY1pRVVY1SUxYVU1sT1BGODA3VU8iO30=', 1613981522);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_registrasi` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_verifikasi` int(11) DEFAULT NULL,
  `is_lulus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `nisn`, `email`, `id_registrasi`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `photo`, `remember_token`, `created_at`, `updated_at`, `is_verifikasi`, `is_lulus`) VALUES
(5, NULL, 'rifki aas', '1234678', 'rifki.aditya77@gmail.com', 'REG-20210222060427', NULL, '$2y$10$aS5UIxmHnoXRd6W2M25HYuToo/adTlVylcZQUV5ILXUMlOPF807UO', NULL, NULL, 'uploads/WhatsApp Image 2021-02-20 at 19.12.54 (1).jpeg', NULL, NULL, '2021-02-27 08:29:50', 1, 1),
(7, 1, 'admin', '1', 'admin@gmail.com', 'admin', NULL, '$2y$10$D0k35pRWkKled1Yjau5c3eVDn8lTamXIw82..S9h0XXXeIzV4108.', NULL, NULL, 'uploads/img-1-1200x1000.jpg', NULL, NULL, '2021-02-26 23:32:25', NULL, NULL),
(9, NULL, 'Rifki Aditya', '54345553343', 'rifki.aditya77@outlook.com', 'REG-20210227071937', NULL, '$2y$10$mxxdTkC18/LWhJXRP8krUuroz1BTnddboZQybj9/r8F7p6qJG8eqW', NULL, NULL, 'uploads/profile.jpg', NULL, NULL, NULL, NULL, NULL),
(10, NULL, 'kokokok', '12315512', 'koko@gmail.com', 'REG-20210317134840', NULL, '$2y$10$EH2kGanMjVNLKPWqmqg3Vue3ReU66hOQ244ohgn7f7U5s3p06gLBi', NULL, NULL, 'uploads/3691111.jpg', NULL, NULL, '2021-03-17 08:51:49', NULL, 1),
(11, NULL, 'user3', '1231231', 'user3@gmail.com', 'REG-20210317154512', NULL, '$2y$10$bxtgIwCyBSAw7ZyZ6oqbBusWtiAstfNw6ReeCUCIKwV5U/xVxzbeS', NULL, NULL, NULL, NULL, NULL, '2021-03-17 08:51:24', 1, NULL),
(12, NULL, 'tyo', '1414', 'tyopsh@gmail.com', 'REG-20210317155803', NULL, '$2y$10$PiuDWk447ZGOFDLD6SdbtO8/8S2Zz/YgDITl.XmEinGvPA585GkM.', NULL, NULL, 'uploads/default.jpg', NULL, NULL, '2021-03-17 09:04:26', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_users_foreign` (`users`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayaran_users_foreign` (`users`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_users_foreign` (`users`);

--
-- Indexes for table `profile_sekolah`
--
ALTER TABLE `profile_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profile_sekolah`
--
ALTER TABLE `profile_sekolah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `biodata_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
