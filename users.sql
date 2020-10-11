-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2020 pada 06.21
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Petugas', 'Administrator', 'admin@gmail.com', NULL, '$2y$10$ghY4BC4mZr.1L0OiHSUw5./KLtx4R6NkS1cjXl3jBEQghqEDnOX8i', 'Mengwi', 'Fvy7cUxqZLOmUPh3wrYuFCRQ4nUiYh0un82AK4YMCApq5WdM0zbhS0MviaaT', '2020-09-07 23:57:33', '2020-09-07 23:57:33'),
(2, 'Kadis', 'Kepala Dinas', 'kadis@gmail.com', NULL, '$2y$10$zm6IXOd3zuoQ/f9DusCmr.D.IbksHGlr/pGnpw6pL5JxwjdqiCDcq', 'Mengwi', 'rWX6HnDBL89q4jwDEPsrzsXGs0yHkNNUlPjpeyno9afDiUDmbF6FfJHtD0Uz', '2020-09-13 06:43:35', '2020-09-13 06:43:35'),
(3, 'Masyarakat', 'Masyarakat Umum', 'masumum@gmail.com', NULL, '$2y$10$DBvJ0XfgPoQvPx7Y3aw7i.8F10jSZBFErZRlBuhOYw12arbQCdOVS', 'Mengwi', 'gVvG69S58K0ZTL90CA4SDV2zJx6cR0F0r99vkg6GelKRL21rlnsDuD59riZm', '2020-09-13 06:46:12', '2020-09-13 06:46:12'),
(4, 'Petugas', 'Testing', 'testing@gmail.com', NULL, '$2y$10$VRA.uU44Qan4z.2BVLjkSuHwgWY7xOLDMdIvI8mdbBfrTxqKDy7PK', 'testing alamat', 'WbBK2sl5EDMwENJSVwMJJD2DFNO6JNuDuiZdYNfTUV8qi9HKSMKmBKMbHIGu', '2020-09-13 06:50:04', '2020-09-13 06:50:04'),
(5, 'Masyarakat', 'rikaaaaaa', 'rikaaaaa@gmail.com', NULL, '$2y$10$zgvnTiAn0ItaF2gHgee5O.trqUnnlLVPJCz2qQzDy2zQhrEHI2byG', 'Gianyar', '4uGJHvN0qN1PZ1Nu2B0yNy37w0VFPgCFRU6CJw2tRmI1gtKDHagKYOO854k6', '2020-09-17 19:29:30', '2020-09-17 19:29:30'),
(6, 'Petugas', 'Petugas', 'petugas@gmail.com', NULL, '$2y$10$ak2Me/wg5ZXaa28/kCWheuiEPCD5winj47F3ufGV4LWlUDqvmLRGS', 'fsasdffa', 'CxPe9tGvY0ZI31KhkXy2Qa0TdhjOOLxjziZXqJKf0ValAHStYhcCrGIu5qy0', '2020-10-10 20:20:17', '2020-10-10 20:20:17');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
