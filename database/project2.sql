-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 12:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abcde`
--

CREATE TABLE `abcde` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abcde`
--

INSERT INTO `abcde` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'public/image/1659049653014385.jpg', NULL, NULL),
(3, 'public/image/1659050302453628.png', NULL, NULL),
(4, 'public/image/1659051442573091.jpeg', NULL, NULL),
(5, 'public/image/1659051620123868.jpeg', NULL, NULL),
(6, 'public/image/1659051762045198.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Tazwar Islam', 'tazwar_96@gmail.com', '018838545', 'hiiiiiiiiiiiiiiiiiiiii', NULL, NULL),
(3, 'Jabed Sadek emaaaaaaaaaaaaaaaa', 'jabed97@gmail.com', '013883239434', 'o bhai maroo mujhe', NULL, NULL),
(5, 'Abdul Alim', 'werwr@eff.com', '32465465', 'wenfjnf nfnijrfnr nnrnf i jriefrjrrrkekrfkerkqofkrqk kqrkr', NULL, NULL),
(6, 'Sameer Ul Haque', 'same@rd.com', '2343535656', 'grg ireiggregq', NULL, NULL),
(7, 'Tanvir', 'tanvir@eg.com', '23454655757', 'hi ihihhi eh', NULL, NULL),
(8, 'Daniel', 'daniel@efjfj.com', '3254354646', 'fkgk kgreokgor rkgok', NULL, NULL),
(9, 'Tazwar Islam', 'tazwar_96@gmyyail.com', '01883854785', 'hiiiiiiiiiiiiiiiiiiiii', NULL, NULL),
(10, 'Jabed sadek', 'jsadek456@gmail.com', '02040430504', 'tgwtgk tktrwkrth thkwth', NULL, NULL),
(11, 'daniel hoque', 'dfff@k.com', '334546567567', 'hiii trh thh', NULL, NULL),
(12, 'sobuj mia', 'sobujr_96@yahoo.com', '054654646383', 'hi ami sonuj', NULL, NULL),
(13, 'sobufrj mia', 'sofdfbujr_96@yahoo.com', '0544354646383', 'hi ami sonuj', NULL, NULL),
(14, 'Md Tazwa', 'tar_96@yahoo.com', '01387642655', 'trtr tgtrg', NULL, NULL),
(16, 'Jabed  sadek ema', 'jabed97@gmail.com', '013883239434', 'o bhai maroo mujhe', NULL, NULL),
(19, 'habul', 'habul565@gmail.com', '40502460560', 'regrthtrh ttrh', NULL, NULL),
(20, 'Taz', 'tazwujar_96@yahoo.com', '018356742655', 'hiiiiiiiii', NULL, NULL),
(21, 'shahid', 'tafregwar_96@yahoo.com', '01456446383', 'eiojgreiojgi jriogj', NULL, NULL);

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
(4, '2020_02_20_074659_add_image_column_to_contacts', 1),
(5, '2020_02_20_091057_rayhan', 1),
(6, '2020_02_20_091505_create_abcde_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rayhan`
--

CREATE TABLE `rayhan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abcde`
--
ALTER TABLE `abcde`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rayhan`
--
ALTER TABLE `rayhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abcde`
--
ALTER TABLE `abcde`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rayhan`
--
ALTER TABLE `rayhan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
