-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2021 pada 14.58
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `distro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `gambar`, `harga`, `stok`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'T-Shirt White Adidas', 't-shirt-white-adidas.jpg', 150000, 10, 'asjkdhaskdhasdhsakdas', '2021-05-23 01:57:41', '2021-08-08 00:57:21'),
(2, 'T-Shirt White Tanpa Lengan', 't-shirt-white-tanpalengan.jpg', 120000, 12, 'hskjdajdhsakhdsakjhdskada', '2021-05-23 02:00:06', '2021-06-13 07:47:47'),
(3, 'T-Shirt Black Evening', 't-shirt-black-evening.jpg', 100000, 7, 'adajdisadksahdkjashdka', '2021-05-23 02:01:34', '2021-06-13 08:14:11'),
(4, 'T-Shirt Important', 't-shirt-important.jpg', 125000, 8, 'kjlkjljkljkklklkjlkjlkjl', '2021-05-23 02:02:38', '2021-06-13 07:13:29'),
(5, 'T-Shirt Batik', 't-shirt-batik.jpg', 200000, 9, 'jhdkasjhdksahdjkashjkdsahj', '2021-05-23 02:04:42', '2021-06-13 07:51:52'),
(6, 'T-Shirt Putih Polos', 't-shirt-white.jpg', 80000, 9, 'klsjkdlsjajdsakljdlasdlk', '2021-05-23 02:06:31', '2021-06-13 07:51:26'),
(7, 'T-Shirt LinePoint', 't-shirt.jpg', 125000, 10, 'ahsjdksdjhsakhdsjkadsa', '2021-05-23 03:09:17', '2021-05-23 03:09:17'),
(8, 'T-Shirt Black Men', 'kemeja.jpg', 100000, 23, 'dadsadasdsadsadsad', '2021-05-27 01:04:15', '2021-06-09 03:27:34'),
(9, 'T-Shirt Arms Lengan Panjang', 't-shirt-women.jpg', 80000, 15, 'sdasdsadsadsadsada', '2021-05-27 01:09:40', '2021-05-27 01:09:40'),
(10, 'T-Shirt L - Men', 'kaoshitam.jpg', 130000, 18, 'adsadadsadsdasdasa', '2021-05-27 01:18:00', '2021-05-27 01:18:00'),
(11, 'T-Shirt Green X', 't-shirt-green.jpg', 100000, 25, 'asdsadsadaasdasdas', '2021-05-27 01:23:59', '2021-05-27 01:23:59'),
(12, 'T-Shirt Calm', 't-shirt-calm.jpg', 100000, 15, 'sdsaasdasdsadsaad', '2021-05-27 01:25:38', '2021-05-27 01:25:38'),
(13, 'T-Shirt Rainbow', 't-shirt-rainbow.jpg', 99000, 15, 'asdsadsadsadasdasdas', '2021-05-27 01:31:40', '2021-05-27 01:31:40'),
(14, 'T-Shirt OSAKA', 't-shirt-osaka.jpeg', 110000, 25, 'asdasasdasdasdasdasdas', '2021-05-27 01:32:37', '2021-05-27 01:32:37'),
(15, 'T-Shirt Blue X', 't-shirt-kemeja.jpg', 150000, 14, 'adsadsadsadsadasdasda', '2021-05-27 01:34:32', '2021-06-13 08:14:11'),
(16, 'T-Shirt Green BearFruit', 't-shirt-green-bearfruit.jpg', 130000, 10, 'asdsadsadsadasdas', '2021-05-27 01:36:30', '2021-05-27 01:36:30'),
(17, 'T-Shirt Black YY', 't-shirt-black-YY.jpg', 130000, 14, 'asdsasadsadasdasd', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanans`
--

CREATE TABLE `detail_pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_pesanans`
--

INSERT INTO `detail_pesanans` (`id`, `id_barang`, `id_pesanan`, `jumlah`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(65, 1, 28, 1, 150000, '2021-08-08 00:57:17', '2021-08-08 00:57:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2021_05_21_130210_create_detail_pesanans_table', 1),
(6, '2021_05_21_125508_create_barangs_table', 2),
(9, '2021_05_21_125950_create_pesanans_table', 3),
(14, '2021_06_02_121620_create_pembayarans_table', 4);

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
-- Struktur dari tabel `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanans`
--

INSERT INTO `pesanans` (`id`, `id_user`, `tanggal`, `status`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(28, 7, '2021-07-31', '1', 150000, '2021-07-30 22:48:48', '2021-08-08 00:57:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `nohp`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Naufal Zaki Musyaffa', 'nouvalzaki87@gmail.com', NULL, '$2y$10$uYz/m2Iy0I6bELivqtILgOyDUVPyKgSGDjskIEIfjkHiIwYWaUIEu', 'Jl.BKR.1', '085871703385', NULL, '2021-06-01 21:37:28', '2021-06-07 08:30:24'),
(7, 'Naufal Zaki M', 'nouvalzaki@yahoo.com', NULL, '$2y$10$qrUSk3NUCjpwTyvy1nXDmeDJCPV5b0Rtdtko4XqIwLxRXdc2nmJwa', 'Jl.Cibolerang', '085871703385', NULL, '2021-06-13 05:46:52', '2021-06-13 05:48:00'),
(8, 'Naufal Zaki', 'nouvalzaki2@gmail.com', NULL, '$2y$10$AEbhREpZOkdxzNzVq2dzF.BNnrjSJXlmwehyleD3cf/M3wa6EOiQi', NULL, NULL, NULL, '2021-06-13 06:43:30', '2021-06-13 06:43:30'),
(9, 'Naufal Zaki M', 'naufal@yahoo.com', NULL, '$2y$10$vAxjOkMFXj6rmhzEcAMatO5c4gip2CF8ZCQySrQDHRP4WPZTBwZya', 'asdasdasdasd', '085871703385', NULL, '2021-06-13 07:01:34', '2021-06-13 07:13:25'),
(10, 'Naufal Zaki', 'nouvalzaki1@gmail.com', NULL, '$2y$10$6BgJHxrgjzyh5t0fqduCnuBt/5UOPhBhHOcbsx2h.w4pE8VbFBxai', 'jl.cibolerang no.00', '085871703385', NULL, '2021-06-13 08:04:50', '2021-06-13 08:14:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_pesanans`
--
ALTER TABLE `detail_pesanans`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
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
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `detail_pesanans`
--
ALTER TABLE `detail_pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
