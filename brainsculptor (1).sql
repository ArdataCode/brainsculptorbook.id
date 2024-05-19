-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 07 Nov 2022 pada 03.37
-- Versi server: 8.0.27-18
-- Versi PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainsculptor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auto_numbers`
--

CREATE TABLE `auto_numbers` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_03_055212_create_auto_numbers', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2022_07_01_101245_create_video_mst', 1),
(6, '2022_07_01_143003_create_slider', 1),
(7, '2022_07_20_133058_create_template', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_m` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `judul`, `foto`, `foto_m`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'KOMIK', 'image/upload/slider/Slider_1660278047.png', 'image/upload/slider/Slider_Mobile_1660278047.png', 0, '2022-08-11 12:59:45', 1, '2022-08-12 11:20:47', NULL, NULL),
(2, 'ULASAN', 'image/upload/slider/Slider_1660278064.png', 'image/upload/slider/Slider_Mobile_1660278064.png', 0, '2022-08-11 12:59:45', 1, '2022-08-12 11:21:04', NULL, NULL),
(3, 'CATATAN UNTUK MOMS', 'image/upload/slider/Slider_1660278095.png', 'image/upload/slider/Slider_Mobile_1660278103.png', 0, '2022-08-11 12:59:45', 1, '2022-08-12 11:21:43', NULL, NULL),
(4, 'BRAIN SCULPTORS GUIDE', 'image/upload/slider/Slider_1660278121.png', 'image/upload/slider/Slider_Mobile_1660278121.png', 0, '2022-08-11 12:59:45', 1, '2022-08-12 11:22:01', NULL, NULL),
(5, 'TEA FOR MOMS', 'image/upload/slider/Slider_1660278133.png', 'image/upload/slider/Slider_Mobile_1660278133.png', 0, '2022-08-11 12:59:45', 1, '2022-08-12 11:22:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `template`
--

CREATE TABLE `template` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang_kami` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_besar` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_kecil` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `template`
--

INSERT INTO `template` (`id`, `nama`, `email`, `no_hp`, `alamat`, `meta_desc`, `meta_key`, `tentang_kami`, `logo_besar`, `logo_kecil`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Brain Sculptor', 'brainsculptor@gmail.com', '0811111111', '', '', '', NULL, 'image/upload/logo/Logo_Besar_1660198145.png', 'image/upload/logo/Logo_Kecil_1660198145.png', 0, '2022-08-11 12:59:45', 1, '2022-08-11 13:09:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `no_wa` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'l = Laki-laki ; p = Perempuan',
  `alamat` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `provinsi` int DEFAULT '0',
  `kabupaten` int DEFAULT '0',
  `kecamatan` int DEFAULT '0',
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_level` int NOT NULL COMMENT '1=Admin ; 2=User',
  `is_active` int NOT NULL COMMENT '0 = Tidak Aktif ; 1 = Aktif',
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `no_wa`, `jenis_kelamin`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `photo`, `user_level`, `is_active`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'admin', 'Admin', 'admin@gmail.com', NULL, NULL, 'p', NULL, 0, 0, 0, '', 1, 1, '$2y$10$6ehJB2Qiy57zf45ZF0M4vuFNjRGghEivp.MZjedmu.a2qNjH9kwz6', NULL, '2022-08-11 12:59:45', '2022-08-11 12:59:45', NULL, NULL),
(2, NULL, 'asd', 'drama2713@gmail.com', NULL, '34234234234', NULL, 'asd', 0, 0, 0, NULL, 2, 0, '', NULL, '2022-08-11 15:01:03', '2022-08-11 15:01:03', NULL, NULL),
(3, NULL, 'ramadhani', 'drama2713@gmail.com', NULL, '34234234234', NULL, 'Jakarta', 0, 0, 0, NULL, 2, 0, '', NULL, '2022-08-11 15:01:10', '2022-08-11 15:01:10', NULL, NULL),
(4, NULL, 'Ardi', 'info@gmai', NULL, '0832535252', NULL, 'Smg', 0, 0, 0, NULL, 2, 0, '', NULL, '2022-08-11 15:05:47', '2022-08-11 15:05:47', NULL, NULL),
(5, NULL, 'imelda', 'imelda.ttann1001@gmail.com', NULL, '082182888888', NULL, 'palembang', 0, 0, 0, NULL, 2, 0, '', NULL, '2022-08-13 13:25:58', '2022-08-13 13:25:58', NULL, NULL),
(6, NULL, 'Bekti Wahyuningsih', 'bwahyuningsih@gmail.com', NULL, '081212346526', NULL, 'Cileungsi', 0, 0, 0, NULL, 2, 0, '', NULL, '2022-08-22 16:55:43', '2022-08-22 16:55:43', NULL, NULL),
(7, NULL, 'JONI FONDA', 'Jonifonda@gmail.com', NULL, '0818697966', NULL, 'Jakarta', 0, 0, 0, NULL, 2, 0, '', NULL, '2022-08-27 06:55:49', '2022-08-27 06:55:49', NULL, NULL),
(8, NULL, 'Kholisoh', 'kholisohadnan12@gmail.com', NULL, '085892093310', NULL, 'Bogor', 0, 0, 0, NULL, 2, 0, '', NULL, '2022-10-16 14:11:42', '2022-10-16 14:11:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `video_mst`
--

CREATE TABLE `video_mst` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_by` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `video_mst`
--

INSERT INTO `video_mst` (`id`, `judul`, `link`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, '1', '<iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/Csd6tyk1lD8\" title=\"BrainFit Talks Ep. 29 - Melatih Anak Yang Susah Fokus\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, '2022-08-12 19:38:50', 1, '2022-08-12 19:38:50', NULL, NULL),
(2, '2', '<iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/BqD4RcGRftw\" title=\"BrainFit Talks Ep. 38 - Perbaiki Pola Komunikasi Dengan Anak\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, '2022-08-12 19:39:21', 1, '2022-08-12 19:39:21', NULL, NULL),
(3, '3', '<iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/NxJq6PRdDbA\" title=\"BrainFit Talks Ep. 33 - Mengapa Anak Malas Menulis?\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, '2022-08-12 19:39:49', 1, '2022-08-12 19:39:49', NULL, NULL),
(4, '4', '<iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/TR4scpr7sv4\" title=\"BrainFit Talks Ep. 24 - Menghadapi Anak yang Susah Kontrol Emosi\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, '2022-08-12 19:40:18', 1, '2022-08-12 19:40:18', NULL, NULL),
(5, '5', '<iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/CfiJnpQo9F8\" title=\"BrainFit Talks Ep. 35 - Stress Management untuk Mama dan Anak\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, '2022-08-12 19:40:59', 1, '2022-08-12 19:40:59', NULL, NULL),
(6, '6', '<iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/GlSfW_32fl0\" title=\"BrainFit Talks Ep. 39 - Melatih Otak Anak Agar Berpikir Kreatif\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, '2022-08-12 19:41:26', 1, '2022-08-12 19:41:26', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auto_numbers`
--
ALTER TABLE `auto_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indeks untuk tabel `video_mst`
--
ALTER TABLE `video_mst`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auto_numbers`
--
ALTER TABLE `auto_numbers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `template`
--
ALTER TABLE `template`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `video_mst`
--
ALTER TABLE `video_mst`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
