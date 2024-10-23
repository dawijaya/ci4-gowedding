-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2024 at 04:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GoWedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` bigint(20) UNSIGNED NOT NULL,
  `nama_acara` varchar(50) NOT NULL,
  `date_acara` date NOT NULL,
  `info_acara` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `nama_acara`, `date_acara`, `info_acara`) VALUES
(1, 'Dandi', '2024-09-01', 'Dandi Agus Wiiaya'),
(8, 'AAgusgus wijaya', '2024-11-01', 'dnadi\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` bigint(20) UNSIGNED NOT NULL,
  `nama_contact` varchar(60) NOT NULL,
  `nama_alias` varchar(60) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `info_contact` text DEFAULT NULL,
  `id_group` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `nama_contact`, `nama_alias`, `phone`, `email`, `address`, `info_contact`, `id_group`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Harmon Fahey', NULL, '1-435-774-5475', 'esteban.gusikowski@yahoo.com', '8252 Fadel Junctions\nKundeberg, AR 17546-7173', NULL, 3, NULL, NULL, NULL),
(2, 'Cawisono Opung Nashiruddin S.T.', NULL, '0553 0052 6470', 'cpranowo@gmail.co.id', 'Kpg. Bagonwoto  No. 145, Sukabumi 21007, Gorontalo', NULL, 3, '2024-10-23 21:17:32', NULL, NULL),
(3, 'Siska Yulianti', NULL, '(+62) 557 9556 595', 'jelita62@yahoo.co.id', 'Gg. Ters. Pasir Koja No. 897, Ternate 77528, DKI', NULL, 3, '2024-10-23 21:20:14', NULL, NULL),
(4, 'Asman Saragih', NULL, '(+62) 678 8899 6496', 'kayun45@gmail.co.id', 'Ds. Cikapayang No. 965, Magelang 28849, Sumsel', NULL, 3, '2024-10-23 21:22:07', NULL, NULL),
(5, 'Gara Wahyudin', NULL, '(+62) 800 4614 5228', 'gunarto.harja@yahoo.com', 'Jr. Abdul Rahmat No. 459, Palopo 70374, Kalbar', NULL, 3, '2024-10-23 21:22:07', NULL, NULL),
(6, 'Raina Yuniar', NULL, '021 4244 0612', 'rsiregar@gmail.co.id', 'Psr. PHH. Mustofa No. 300, Semarang 19213, Kalbar', NULL, 3, '2024-10-23 21:22:07', NULL, NULL),
(7, 'Cawisadi Wasita', NULL, '(+62) 476 9813 7264', 'zelaya15@gmail.co.id', 'Gg. Laswi No. 64, Lubuklinggau 42847, Pabar', NULL, 3, '2024-10-23 21:22:07', NULL, NULL),
(8, 'Gawati Yulianti', NULL, '0876 390 878', 'rahmawati.ilyas@yahoo.com', 'Dk. Baing No. 691, Yogyakarta 37908, Aceh', NULL, 3, '2024-10-23 21:22:07', NULL, NULL),
(9, 'Laila Uyainah', NULL, '(+62) 503 8585 601', 'oktaviani.jono@yahoo.co.id', 'Dk. Flores No. 503, Palembang 67045, Bali', NULL, 3, '2024-10-23 21:22:07', NULL, NULL),
(10, 'Siska Agustina', NULL, '025 6222 342', 'martaka.nashiruddin@gmail.co.id', 'Ds. R.E. Martadinata No. 507, Kediri 11056, Papua', NULL, 3, '2024-10-23 21:22:07', NULL, NULL),
(11, 'Yono Latupono', NULL, '(+62) 553 6504 4023', 'hani02@gmail.co.id', 'Psr. Halim No. 857, Administrasi Jakarta Pusat 60290, Jambi', NULL, 3, '2024-10-23 21:22:07', NULL, NULL),
(12, 'Purwanto Luhung Sihotang', NULL, '(+62) 549 3360 625', 'purwa78@yahoo.co.id', 'Ki. Eka No. 374, Palangka Raya 83397, Babel', NULL, 3, '2024-10-23 21:22:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id_groups` bigint(20) UNSIGNED NOT NULL,
  `nama_groups` varchar(50) NOT NULL,
  `info_groups` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id_groups`, `nama_groups`, `info_groups`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Teman Tk', NULL, NULL, '2024-10-16 15:09:36', NULL),
(2, 'Teman Sd', NULL, NULL, '2024-10-21 11:23:07', NULL),
(3, 'Teman Smp', NULL, NULL, '2024-10-21 11:23:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2024-09-29-181146', 'App\\Database\\Migrations\\Acara', 'default', 'App', 1727633845, 1),
(3, '2024-10-07-014551', 'App\\Database\\Migrations\\Createuser', 'default', 'App', 1728372685, 2),
(4, '2024-10-12-041440', 'App\\Database\\Migrations\\CreateGroups', 'default', 'App', 1728792891, 3),
(6, '2024-10-23-121115', 'App\\Database\\Migrations\\CreateContacts', 'default', 'App', 1729686663, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_user` varchar(60) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(60) NOT NULL,
  `info_user` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `email_user`, `password_user`, `info_user`) VALUES
(1, 'Administrator', 'geryybangsawan@gmail.com', '$2y$10$0RUyyZclIVYicPtFsTEcQ.ZXtigAzfqJzFIHTicECxjvt.9TJsFt6', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `contacts_id_group_foreign` (`id_group`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_groups`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id_groups` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_id_group_foreign` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_groups`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
