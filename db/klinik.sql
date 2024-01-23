-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 07:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_dosen`
--

CREATE TABLE `anggota_dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proposal` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota_dosen`
--

INSERT INTO `anggota_dosen` (`id`, `nama`, `nidn`, `id_proposal`, `created_at`, `updated_at`) VALUES
(1, 'Pak Ganjar', '10121317', 1, '2024-01-21 10:23:30', '2024-01-21 10:23:30'),
(2, 'David Afdal', '10121319', 2, '2024-01-21 20:32:19', '2024-01-21 20:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_mahasiswa`
--

CREATE TABLE `anggota_mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proposal` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota_mahasiswa`
--

INSERT INTO `anggota_mahasiswa` (`id`, `nama`, `npm`, `id_proposal`, `created_at`, `updated_at`) VALUES
(1, 'David Afdal', '10121319', 1, '2024-01-21 10:23:16', '2024-01-21 10:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nidn_dosen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proposal` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `nidn_dosen`, `review`, `id_proposal`, `created_at`, `updated_at`) VALUES
(1, '10121317', 'coba 1', 1, '2024-01-21 10:26:47', '2024-01-21 10:26:47'),
(2, '10121317', 'Perlu ada perbaikan di bagian judulnya', 1, '2024-01-21 10:33:40', '2024-01-21 10:33:40'),
(3, '10121317', 'coba lagi', 1, '2024-01-21 10:35:11', '2024-01-21 10:35:11'),
(4, '10121317', 'asdoihsadyhaiusydiuyhsaiouydioysaiodyioasyiodioydyaidyosyodyoiasydioyaisdioysaiuodysyioysioydisaodioydsa', 1, '2024-01-21 12:06:40', '2024-01-21 12:06:40'),
(5, '1021327', 'Proposal anda sudah baik', 2, '2024-01-22 05:05:47', '2024-01-22 05:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dosen',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama`, `password`, `role`, `created_at`, `updated_at`) VALUES
('10121317', 'David Afdal Kaizar Mutahadi', '$2y$10$mogGBKqtGm.mc.tOQcsEyOHmqF2EUOrNKNeBJ7vh2sUP6Y.JvkVg2', 'peninjau', '2024-01-21 10:25:04', '2024-01-21 10:25:04'),
('10121318', 'David Afdal Kaizar Mutahadi', '$2y$10$jHG85nEGMXdhZZmn0M9olubYDUcJYpdZxFyQ2IsH.EFk4kCreFITm', 'admin', '2024-01-21 13:19:57', '2024-01-21 13:19:57'),
('10121319', 'David Afdal Kaizar Mutahadi', '$2y$10$4oXA93dgdJrFC7RFH8sKGuqn4Yaj/PZpkOrtgpMXnw4WNCxFzh1YG', 'dosen', '2024-01-21 10:21:44', '2024-01-21 10:21:44'),
('1021327', 'Kusumawadhana', '$2y$10$ENIKafwo.cyctcdLRWnixe1qoE1mbVOkqvcschiCCxklRV73uCI2G', 'peninjau', '2024-01-22 03:48:20', '2024-01-22 03:48:20');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_01_15_132920_create_dosen_table', 1),
(3, '2024_01_15_135450_create_proposal_table', 1),
(4, '2024_01_21_081602_create_anggota_dosen', 1),
(5, '2024_01_21_083214_create_anggota_mahasiswa', 1),
(6, '2024_01_21_083339_create_mitra', 1),
(7, '2024_01_21_083628_create_comment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proposal` bigint(20) UNSIGNED NOT NULL,
  `Pemimpin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `nama`, `id_proposal`, `Pemimpin`, `created_at`, `updated_at`) VALUES
(1, 'PT INDOSAT', 2, 'Satria Baja Hitam', '2024-01-21 20:32:10', '2024-01-21 20:32:10');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nidn_dosen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn_peninjau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peneliti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `topik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_ilmu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sedang Ditinjau',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id`, `nidn_dosen`, `nidn_peninjau`, `file`, `peneliti`, `judul`, `tanggal`, `topik`, `bidang_ilmu`, `skema`, `status`, `created_at`, `updated_at`) VALUES
(1, '10121319', '10121317', '1705857788_andi-Ecommerce.pdf', 'David Afdal Kaizar Mutahadi', 'Pembuatan Webiste Klinik Proposal', '2024-01-22 00:00:00', 'Pembuatan Website', 'Teknologi', 'Metode RAD', 'Sudah Baik', '2024-01-21 10:23:08', '2024-01-21 12:06:40'),
(2, '10121319', '1021327', '1705894013_Figma pengertian kedua.pdf', 'David Afdal Kaizar Mutahadi', 'Pembuatan Webiste Klinik Proposal', '2024-01-23 00:00:00', 'Coba 1', 'sadsadd', 'Metode Rad', 'Sudah Baik', '2024-01-21 20:26:53', '2024-01-22 08:28:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_dosen`
--
ALTER TABLE `anggota_dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_dosen_id_proposal_foreign` (`id_proposal`);

--
-- Indexes for table `anggota_mahasiswa`
--
ALTER TABLE `anggota_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_mahasiswa_id_proposal_foreign` (`id_proposal`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id_proposal_foreign` (`id_proposal`),
  ADD KEY `comment_nidn_dosen_foreign` (`nidn_dosen`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mitra_id_proposal_foreign` (`id_proposal`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proposal_nidn_dosen_foreign` (`nidn_dosen`),
  ADD KEY `proposal_nidn_peninjau_foreign` (`nidn_peninjau`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota_dosen`
--
ALTER TABLE `anggota_dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anggota_mahasiswa`
--
ALTER TABLE `anggota_mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota_dosen`
--
ALTER TABLE `anggota_dosen`
  ADD CONSTRAINT `anggota_dosen_id_proposal_foreign` FOREIGN KEY (`id_proposal`) REFERENCES `proposal` (`id`);

--
-- Constraints for table `anggota_mahasiswa`
--
ALTER TABLE `anggota_mahasiswa`
  ADD CONSTRAINT `anggota_mahasiswa_id_proposal_foreign` FOREIGN KEY (`id_proposal`) REFERENCES `proposal` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_id_proposal_foreign` FOREIGN KEY (`id_proposal`) REFERENCES `proposal` (`id`),
  ADD CONSTRAINT `comment_nidn_dosen_foreign` FOREIGN KEY (`nidn_dosen`) REFERENCES `dosen` (`nidn`);

--
-- Constraints for table `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `mitra_id_proposal_foreign` FOREIGN KEY (`id_proposal`) REFERENCES `proposal` (`id`);

--
-- Constraints for table `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `proposal_nidn_dosen_foreign` FOREIGN KEY (`nidn_dosen`) REFERENCES `dosen` (`nidn`),
  ADD CONSTRAINT `proposal_nidn_peninjau_foreign` FOREIGN KEY (`nidn_peninjau`) REFERENCES `dosen` (`nidn`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
