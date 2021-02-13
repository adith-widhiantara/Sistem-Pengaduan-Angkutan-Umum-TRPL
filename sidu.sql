-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2019 pada 03.20
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_10_17_035025_create_pengaduan_table', 2),
(16, '2019_10_17_092527_create_pengaduan_table', 3),
(18, '2019_10_17_134117_create_pengaduan_table', 4),
(19, '2019_10_17_135433_create_pengaduan1_table', 5),
(20, '2019_10_17_135450_create_pengaduan2_table', 5),
(21, '2019_10_21_035015_create_pengaduan_table', 6),
(22, '2019_10_25_221439_create_comments_table', 7),
(23, '2019_10_30_003357_create_comment_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `judul`, `uraian`, `nama`, `nomor`, `tempat`, `waktu`, `foto`, `rating`, `status`, `pesan`, `created_at`, `updated_at`) VALUES
(24, 'Kerusakan kursi', 'Kerusakan pada kursi bus membuat para penumpang tidak merasa nyaman', 'Dani', 'PP-3234-VA', 'Jember-Banyuwangi', '10/25/2019 7:47 PM', '1803063961.png', '★', 'Proses', 'Kapan selesai', '2019-10-25 05:48:03', '2019-10-29 15:12:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan1`
--

CREATE TABLE `pengaduan1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaduan1`
--

INSERT INTO `pengaduan1` (`id`, `judul`, `uraian`, `nama`, `nomor`, `tempat`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Kerusakan kursi', 'Kerusakan kursi membuat para penumpang merasa tidak nyaman', 'Dani', 'PP-2131-VA', 'Jember-Bali', '385698850.png', 'Proses', '2019-10-29 05:18:25', '2019-10-29 16:08:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan2`
--

CREATE TABLE `pengaduan2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaduan2`
--

INSERT INTO `pengaduan2` (`id`, `judul`, `uraian`, `nama`, `nomor`, `tempat`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', 'a', 'AS-1232-TF', 'Surabaya-Malang', '58595107.png', '', '2019-10-29 09:58:16', '2019-10-29 09:58:16'),
(2, 'b', 'b', 'b', 'AS-4234-JH', 'Jember-Bali', '796729915.png', '', '2019-10-29 10:05:14', '2019-10-29 10:05:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `address`, `telp`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dinas', 'Jember', '081234567891', '1_avatar1571028143.jpg', 'dinas@gmail.com', NULL, '$2y$10$lGJXEq4iCsf3O25FJlB/nOev5h.xKziN1cXyiqUEGTrUnyz5/glD6', NULL, '2019-10-13 03:03:44', '2019-10-13 21:42:23'),
(2, 1, 'Owner', 'Jember', '081234567892', '2_avatar1571028415.jpg', 'owner@gmail.com', NULL, '$2y$10$NLBF9tN9SIXfDO3HwxDUB.pHlstyivB0xXWk5qnrV.l9BHlV6Tz0W', NULL, '2019-10-13 03:04:58', '2019-10-13 21:46:55'),
(3, 0, 'User', 'Jember', '081234567893', '3_avatar1571368966.jpg', 'user@gmail.com', NULL, '$2y$10$8CtTqx/.ROT8oG2UkhMLtewtfVvUgwz1vxoF0kIpayqMSS3U2vlIS', NULL, '2019-10-13 03:06:26', '2019-10-17 20:22:46'),
(4, 0, 'a', 'a', '1', 'user.png', 'a@gmail.com', NULL, '$2y$10$WdmbovbEr6/uCC3C75F3EOYCScRlMZLnxQAY7ZIfJvKw8CY20NV/.', 'jGY0Nes4ck8ux1TZ07qiVg3Ms0EGaGx5sSAYacskhcizDUMPkBgjGzV07pjl', '2019-10-15 15:32:26', '2019-10-15 15:44:54'),
(5, 0, 'mujib', 'Jember', '08123', '5_avatar1571370935.jpg', 'mujib@gmail.com', NULL, '$2y$10$mehsiORYZYfJfK.pqfbrceee.ZHXxuRqFzFLgUR0Q.hkpYCqrdJNy', NULL, '2019-10-17 20:54:57', '2019-10-17 20:55:35'),
(6, 0, 'b', 'b', '081234567893', 'user.png', 'b@gmail.com', NULL, '$2y$10$na3s4RryjviRh0gbs.oDTu4DioRfXMmdbLZcolk9n5xpsHO6jM.uy', NULL, '2019-10-29 16:59:05', '2019-10-29 16:59:05');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan1`
--
ALTER TABLE `pengaduan1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan2`
--
ALTER TABLE `pengaduan2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pengaduan1`
--
ALTER TABLE `pengaduan1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengaduan2`
--
ALTER TABLE `pengaduan2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
