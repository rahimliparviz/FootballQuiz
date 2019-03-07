-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2019 at 07:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `user_id`, `level`, `created_at`, `updated_at`, `count`) VALUES
(14, 17, 1, '2019-01-18 06:53:27', '2019-01-18 08:12:50', 1),
(15, 18, 1, '2019-01-18 09:49:14', '2019-01-18 10:14:40', 1),
(16, 19, 1, '2019-01-19 04:57:58', '2019-01-19 05:03:47', 2),
(17, 20, 1, '2019-01-19 05:40:09', '2019-01-19 05:40:17', 1),
(18, 19, 2, '2019-01-19 09:13:25', '2019-01-19 09:13:25', 0),
(19, 19, 3, '2019-01-19 09:14:46', '2019-01-19 09:14:46', 0),
(20, 19, 4, '2019-01-19 09:16:41', '2019-01-19 09:16:41', 0),
(21, 19, 5, '2019-01-19 09:16:41', '2019-01-19 09:16:41', 0),
(22, 19, 6, '2019-01-19 09:16:41', '2019-01-19 09:16:41', 0),
(23, 19, 7, '2019-01-19 09:32:18', '2019-01-19 09:32:18', 0),
(24, 19, 8, '2019-01-19 09:32:18', '2019-01-19 09:32:18', 0),
(25, 19, 9, '2019-01-19 09:32:18', '2019-01-19 09:32:18', 0),
(26, 19, 10, '2019-01-19 09:32:18', '2019-01-19 09:32:18', 0),
(27, 19, 11, '2019-01-19 09:32:18', '2019-01-19 09:32:18', 0),
(28, 19, 12, '2019-01-19 09:32:18', '2019-01-19 09:32:18', 0),
(29, 19, 13, '2019-01-19 09:32:18', '2019-01-19 09:32:18', 0),
(30, 19, 14, '2019-01-19 09:32:19', '2019-01-19 09:32:19', 0),
(31, 19, 15, '2019-01-19 09:32:19', '2019-01-19 09:32:19', 0),
(32, 21, 1, '2019-01-21 02:37:34', '2019-01-21 02:37:42', 1),
(33, 21, 2, '2019-01-21 02:37:34', '2019-01-21 02:37:34', 0),
(34, 21, 3, '2019-01-21 02:37:35', '2019-01-21 02:37:35', 0),
(35, 21, 4, '2019-01-21 02:37:35', '2019-01-21 02:37:35', 0),
(36, 21, 5, '2019-01-21 02:37:35', '2019-01-21 02:37:35', 0),
(37, 21, 6, '2019-01-21 02:37:35', '2019-01-21 02:37:35', 0),
(38, 21, 7, '2019-01-21 02:37:35', '2019-01-21 02:37:35', 0),
(39, 21, 8, '2019-01-21 02:37:35', '2019-01-21 02:37:35', 0),
(40, 21, 9, '2019-01-21 02:37:35', '2019-01-21 02:37:35', 0),
(41, 21, 10, '2019-01-21 02:37:35', '2019-01-21 02:37:35', 0),
(42, 21, 11, '2019-01-21 02:37:36', '2019-01-21 02:37:36', 0),
(43, 21, 12, '2019-01-21 02:37:36', '2019-01-21 02:37:36', 0),
(44, 21, 13, '2019-01-21 02:37:36', '2019-01-21 02:37:36', 0),
(45, 21, 14, '2019-01-21 02:37:36', '2019-01-21 02:37:36', 0),
(46, 21, 15, '2019-01-21 02:37:36', '2019-01-21 02:37:36', 0),
(62, 23, 1, '2019-01-21 03:10:53', '2019-01-21 03:10:53', 0),
(63, 23, 2, '2019-01-21 03:10:54', '2019-01-21 03:10:54', 0),
(64, 23, 3, '2019-01-21 03:10:54', '2019-01-21 03:10:54', 0),
(65, 23, 4, '2019-01-21 03:10:54', '2019-01-21 03:10:54', 0),
(66, 23, 5, '2019-01-21 03:10:54', '2019-01-21 03:10:54', 0),
(67, 23, 6, '2019-01-21 03:10:54', '2019-01-21 03:10:54', 0),
(68, 23, 7, '2019-01-21 03:10:55', '2019-01-21 03:10:55', 0),
(69, 23, 8, '2019-01-21 03:10:55', '2019-01-21 03:10:55', 0),
(70, 23, 9, '2019-01-21 03:10:55', '2019-01-21 03:10:55', 0),
(71, 23, 10, '2019-01-21 03:10:55', '2019-01-21 03:10:55', 0),
(72, 23, 11, '2019-01-21 03:10:55', '2019-01-21 03:10:55', 0),
(73, 23, 12, '2019-01-21 03:10:55', '2019-01-21 03:10:55', 0),
(74, 23, 13, '2019-01-21 03:10:55', '2019-01-21 03:10:55', 0),
(75, 23, 14, '2019-01-21 03:10:55', '2019-01-21 03:10:55', 0),
(76, 23, 15, '2019-01-21 03:10:55', '2019-01-21 03:10:55', 0),
(77, 24, 1, '2019-01-21 06:31:33', '2019-01-21 06:31:37', 1),
(78, 24, 2, '2019-01-21 06:31:33', '2019-01-21 06:31:33', 0),
(79, 24, 3, '2019-01-21 06:31:33', '2019-01-21 06:31:33', 0),
(80, 24, 4, '2019-01-21 06:31:33', '2019-01-21 06:31:33', 0),
(81, 24, 5, '2019-01-21 06:31:33', '2019-01-21 06:31:33', 0),
(82, 24, 6, '2019-01-21 06:31:33', '2019-01-21 06:31:33', 0),
(83, 24, 7, '2019-01-21 06:31:33', '2019-01-21 06:31:33', 0),
(84, 24, 8, '2019-01-21 06:31:33', '2019-01-21 06:31:33', 0),
(85, 24, 9, '2019-01-21 06:31:33', '2019-01-21 06:31:33', 0),
(86, 24, 10, '2019-01-21 06:31:33', '2019-01-21 06:31:33', 0),
(87, 24, 11, '2019-01-21 06:31:34', '2019-01-21 06:31:34', 0),
(88, 24, 12, '2019-01-21 06:31:34', '2019-01-21 06:31:34', 0),
(89, 24, 13, '2019-01-21 06:31:34', '2019-01-21 06:31:34', 0),
(90, 24, 14, '2019-01-21 06:31:34', '2019-01-21 06:31:34', 0),
(91, 24, 15, '2019-01-21 06:31:34', '2019-01-21 06:31:34', 0),
(92, 26, 1, '2019-01-22 04:28:08', '2019-01-22 04:28:08', 0),
(93, 26, 2, '2019-01-22 04:28:08', '2019-01-22 04:28:08', 0),
(94, 26, 3, '2019-01-22 04:28:08', '2019-01-22 04:28:08', 0),
(95, 26, 4, '2019-01-22 04:28:08', '2019-01-22 04:28:08', 0),
(96, 26, 5, '2019-01-22 04:28:08', '2019-01-22 04:28:08', 0),
(97, 26, 6, '2019-01-22 04:28:08', '2019-01-22 04:28:08', 0),
(98, 26, 7, '2019-01-22 04:28:08', '2019-01-22 04:28:08', 0),
(99, 26, 8, '2019-01-22 04:28:08', '2019-01-22 04:28:08', 0),
(100, 26, 9, '2019-01-22 04:28:09', '2019-01-22 04:28:09', 0),
(101, 26, 10, '2019-01-22 04:28:09', '2019-01-22 04:28:09', 0),
(102, 26, 11, '2019-01-22 04:28:09', '2019-01-22 04:28:09', 0),
(103, 26, 12, '2019-01-22 04:28:09', '2019-01-22 04:28:09', 0),
(104, 26, 13, '2019-01-22 04:28:09', '2019-01-22 04:28:09', 0),
(105, 26, 14, '2019-01-22 04:28:09', '2019-01-22 04:28:09', 0),
(106, 26, 15, '2019-01-22 04:28:09', '2019-01-22 04:28:09', 0),
(107, 31, 1, '2019-01-23 02:23:46', '2019-01-23 02:23:46', 0),
(108, 31, 2, '2019-01-23 02:23:46', '2019-01-23 02:23:46', 0),
(109, 31, 3, '2019-01-23 02:23:46', '2019-01-23 02:23:46', 0),
(110, 31, 4, '2019-01-23 02:23:47', '2019-01-23 02:23:47', 0),
(111, 31, 5, '2019-01-23 02:23:47', '2019-01-23 02:23:47', 0),
(112, 31, 6, '2019-01-23 02:23:47', '2019-01-23 02:23:47', 0),
(113, 31, 7, '2019-01-23 02:23:47', '2019-01-23 02:23:47', 0),
(114, 31, 8, '2019-01-23 02:23:47', '2019-01-23 02:23:47', 0),
(115, 31, 9, '2019-01-23 02:23:47', '2019-01-23 02:23:47', 0),
(116, 31, 10, '2019-01-23 02:23:47', '2019-01-23 02:23:47', 0),
(117, 31, 11, '2019-01-23 02:23:48', '2019-01-23 02:23:48', 0),
(118, 31, 12, '2019-01-23 02:23:48', '2019-01-23 02:23:48', 0),
(119, 31, 13, '2019-01-23 02:23:49', '2019-01-23 02:23:49', 0),
(120, 31, 14, '2019-01-23 02:23:49', '2019-01-23 02:23:49', 0),
(121, 31, 15, '2019-01-23 02:23:49', '2019-01-23 02:23:49', 0),
(122, 32, 1, '2019-01-25 08:12:25', '2019-01-25 08:28:22', 2),
(123, 32, 2, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(124, 32, 3, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(125, 32, 4, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(126, 32, 5, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(127, 32, 6, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(128, 32, 7, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(129, 32, 8, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(130, 32, 9, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(131, 32, 10, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(132, 32, 11, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(133, 32, 12, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(134, 32, 13, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(135, 32, 14, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(136, 32, 15, '2019-01-25 08:12:26', '2019-01-25 08:12:26', 0),
(137, 33, 1, '2019-03-02 04:24:43', '2019-03-02 04:24:43', 0),
(138, 33, 2, '2019-03-02 04:24:43', '2019-03-02 04:24:43', 0),
(139, 33, 3, '2019-03-02 04:24:43', '2019-03-02 04:24:43', 0),
(140, 33, 4, '2019-03-02 04:24:43', '2019-03-02 04:24:43', 0),
(141, 33, 5, '2019-03-02 04:24:43', '2019-03-02 04:24:43', 0),
(142, 33, 6, '2019-03-02 04:24:43', '2019-03-02 04:24:43', 0),
(143, 33, 7, '2019-03-02 04:24:43', '2019-03-02 04:24:43', 0),
(144, 33, 8, '2019-03-02 04:24:43', '2019-03-02 04:24:43', 0),
(145, 33, 9, '2019-03-02 04:24:44', '2019-03-02 04:24:44', 0),
(146, 33, 10, '2019-03-02 04:24:44', '2019-03-02 04:24:44', 0),
(147, 33, 11, '2019-03-02 04:24:44', '2019-03-02 04:24:44', 0),
(148, 33, 12, '2019-03-02 04:24:44', '2019-03-02 04:24:44', 0),
(149, 33, 13, '2019-03-02 04:24:44', '2019-03-02 04:24:44', 0),
(150, 33, 14, '2019-03-02 04:24:44', '2019-03-02 04:24:44', 0),
(151, 33, 15, '2019-03-02 04:24:45', '2019-03-02 04:24:45', 0),
(152, 8, 1, '2019-03-02 04:41:47', '2019-03-06 14:00:51', 2),
(153, 8, 2, '2019-03-02 04:41:47', '2019-03-02 04:41:47', 0),
(154, 8, 3, '2019-03-02 04:41:47', '2019-03-02 04:41:47', 0),
(155, 8, 4, '2019-03-02 04:41:47', '2019-03-02 04:41:47', 0),
(156, 8, 5, '2019-03-02 04:41:47', '2019-03-02 04:41:47', 0),
(157, 8, 6, '2019-03-02 04:41:47', '2019-03-02 04:41:47', 0),
(158, 8, 7, '2019-03-02 04:41:48', '2019-03-02 04:41:48', 0),
(159, 8, 8, '2019-03-02 04:41:48', '2019-03-02 04:41:48', 0),
(160, 8, 9, '2019-03-02 04:41:48', '2019-03-02 04:41:48', 0),
(161, 8, 10, '2019-03-02 04:41:48', '2019-03-02 04:41:48', 0),
(162, 8, 11, '2019-03-02 04:41:48', '2019-03-02 04:41:48', 0),
(163, 8, 12, '2019-03-02 04:41:48', '2019-03-02 04:41:48', 0),
(164, 8, 13, '2019-03-02 04:41:48', '2019-03-02 04:41:48', 0),
(165, 8, 14, '2019-03-02 04:41:48', '2019-03-02 04:41:48', 0),
(166, 8, 15, '2019-03-02 04:41:48', '2019-03-02 04:41:48', 0),
(167, 34, 1, '2019-03-04 16:05:20', '2019-03-04 16:05:30', 1),
(168, 34, 2, '2019-03-04 16:05:21', '2019-03-04 16:05:21', 0),
(169, 34, 3, '2019-03-04 16:05:21', '2019-03-04 16:05:21', 0),
(170, 34, 4, '2019-03-04 16:05:21', '2019-03-04 16:05:21', 0),
(171, 34, 5, '2019-03-04 16:05:21', '2019-03-04 16:05:21', 0),
(172, 34, 6, '2019-03-04 16:05:21', '2019-03-04 16:05:21', 0),
(173, 34, 7, '2019-03-04 16:05:21', '2019-03-04 16:05:21', 0),
(174, 34, 8, '2019-03-04 16:05:21', '2019-03-04 16:05:21', 0),
(175, 34, 9, '2019-03-04 16:05:22', '2019-03-04 16:05:22', 0),
(176, 34, 10, '2019-03-04 16:05:22', '2019-03-04 16:05:22', 0),
(177, 34, 11, '2019-03-04 16:05:22', '2019-03-04 16:05:22', 0),
(178, 34, 12, '2019-03-04 16:05:22', '2019-03-04 16:05:22', 0),
(179, 34, 13, '2019-03-04 16:05:22', '2019-03-04 16:05:22', 0),
(180, 34, 14, '2019-03-04 16:05:22', '2019-03-04 16:05:22', 0),
(181, 34, 15, '2019-03-04 16:05:22', '2019-03-04 16:05:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_06_172711_add_birthdate_and_gender_to_users', 2),
(4, '2018_11_06_174351_create_quizzes_table', 2),
(5, '2018_11_06_175308_create_questions_table', 2),
(6, '2018_11_06_175528_create_options_table', 2),
(7, '2018_11_06_180752_change_gender_type', 3),
(8, '2018_11_07_174534_create_oauth_identities_table', 4),
(9, '2018_11_06_1743511_create_quizzes_table', 5),
(10, '2018_11_06_1753088_create_questions_table', 5),
(11, '2018_11_06_1755288_create_options_table', 5),
(12, '2018_11_06_17552888_create_options_table', 6),
(13, '2018_11_06_175528888_create_options_table', 7),
(14, '2018_11_09_085803_add_image_to_question_table', 8),
(15, '2018_11_06_17435111_create_quizzes_table', 9),
(16, '2018_11_09_192422_update_table', 9),
(17, '2018_11_09_1924222_update_table', 10),
(18, '2018_11_11_201313_is_admin', 11),
(19, '2018_11_12_070019_create_settings_table', 12),
(20, '2018_11_12_073517_add_locale_to_setting', 13),
(21, '2018_11_14_0719344_create_question_trs_table', 14),
(22, '2019_01_07_113122_add_level_to_question_table', 15),
(23, '2019_01_07_132152_add_locale_to_options_table', 16),
(24, '2019_01_09_135736_create_levels_table', 17),
(25, '2019_01_09_140650_add_count_to_levels_table', 18),
(26, '2019_01_18_124636_add_number_to_users', 19);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_identities`
--

CREATE TABLE `oauth_identities` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_identities`
--

INSERT INTO `oauth_identities` (`id`, `user_id`, `provider_user_id`, `provider`, `access_token`, `created_at`, `updated_at`) VALUES
(1, 6, '1960116324076396', 'facebook', 'EAAQ5pWZBUi8MBACfhq074UgAx6lzjGgibEarc6uRD2zgNoD2HnXThjyGZBmNxMYul9MIIgmihGD5F0g1TChTETZAgd6v9PrrhtTFHUR76f9tJbWLIva1PIcxSdJWqEYZAExELGdFWDP1pOyqJM7MMONY5nlYz4pxX6A6jrXd2AZDZD', '2018-11-07 14:41:26', '2018-11-15 02:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isTrue` tinyint(1) NOT NULL DEFAULT '0',
  `question_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option`, `isTrue`, `question_id`, `created_at`, `updated_at`, `locale`) VALUES
(53, 'en', 0, 52, '2019-01-09 08:25:05', '2019-01-09 08:25:05', 'en'),
(54, 'c az', 1, 52, '2019-01-09 08:25:05', '2019-01-09 08:25:05', 'az'),
(55, 'az', 0, 52, '2019-01-09 08:25:05', '2019-01-09 08:25:05', 'az'),
(56, 'c en', 1, 52, '2019-01-09 08:25:05', '2019-01-09 08:25:05', 'en'),
(57, 'az', 0, 52, '2019-01-09 08:25:05', '2019-01-09 08:25:05', 'az'),
(58, 'az', 0, 52, '2019-01-09 08:25:05', '2019-01-09 08:25:05', 'az'),
(59, 'en', 0, 52, '2019-01-09 08:25:06', '2019-01-09 08:25:06', 'en'),
(60, 'en', 0, 52, '2019-01-09 08:25:06', '2019-01-09 08:25:06', 'en'),
(61, 'correct az', 1, 53, '2019-01-09 09:17:55', '2019-01-09 09:17:55', 'az'),
(62, 'h65h', 0, 53, '2019-01-09 09:17:56', '2019-01-09 09:17:56', 'az'),
(63, 'g54g6', 0, 53, '2019-01-09 09:17:56', '2019-01-09 09:17:56', 'en'),
(64, '6hy65', 0, 53, '2019-01-09 09:17:56', '2019-01-09 09:17:56', 'en'),
(65, 'h65h', 0, 53, '2019-01-09 09:17:56', '2019-01-09 09:17:56', 'en'),
(66, 'correct en', 1, 53, '2019-01-09 09:17:56', '2019-01-09 09:17:56', 'en'),
(67, '56h5h', 0, 53, '2019-01-09 09:17:56', '2019-01-09 09:17:56', 'az'),
(68, '6h65h', 0, 53, '2019-01-09 09:17:56', '2019-01-09 09:17:56', 'az'),
(69, '6u5ru65', 0, 54, '2019-01-09 09:33:12', '2019-01-09 09:33:12', 'az'),
(70, '56u5', 0, 54, '2019-01-09 09:33:13', '2019-01-09 09:33:13', 'az'),
(71, 'jy75j', 0, 54, '2019-01-09 09:33:13', '2019-01-09 09:33:13', 'en'),
(72, 'correct az', 1, 54, '2019-01-09 09:33:13', '2019-01-09 09:33:13', 'az'),
(73, 'correct en', 1, 54, '2019-01-09 09:33:13', '2019-01-09 09:33:13', 'en'),
(74, 'j65uj', 0, 54, '2019-01-09 09:33:13', '2019-01-09 09:33:13', 'en'),
(75, '56ju56', 0, 54, '2019-01-09 09:33:13', '2019-01-09 09:33:13', 'en'),
(76, '6u5u', 0, 54, '2019-01-09 09:33:13', '2019-01-09 09:33:13', 'az'),
(77, 'wefwef', 0, 55, '2019-01-18 03:49:52', '2019-01-18 03:49:52', 'az'),
(78, 'wefwe', 1, 55, '2019-01-18 03:49:52', '2019-01-18 03:49:52', 'en'),
(79, 'wefwe', 0, 55, '2019-01-18 03:49:52', '2019-01-18 03:49:52', 'en'),
(80, 'wefwef', 0, 55, '2019-01-18 03:49:52', '2019-01-18 03:49:52', 'az'),
(81, 'wefewf', 0, 55, '2019-01-18 03:49:52', '2019-01-18 03:49:52', 'az'),
(82, 'fwef', 1, 55, '2019-01-18 03:49:52', '2019-01-18 03:49:52', 'az'),
(83, 'fewfw', 0, 55, '2019-01-18 03:49:52', '2019-01-18 03:49:52', 'en'),
(84, 'wefwef', 0, 55, '2019-01-18 03:49:52', '2019-01-18 03:49:52', 'en'),
(85, 'wef', 0, 56, '2019-01-18 03:50:06', '2019-01-18 03:50:06', 'az'),
(86, 'wefwef', 1, 56, '2019-01-18 03:50:06', '2019-01-18 03:50:06', 'en'),
(87, 'wfefwf', 0, 56, '2019-01-18 03:50:06', '2019-01-18 03:50:06', 'az'),
(88, 'wfwee', 0, 56, '2019-01-18 03:50:06', '2019-01-18 03:50:06', 'en'),
(89, 'wfewef', 0, 56, '2019-01-18 03:50:06', '2019-01-18 03:50:06', 'en'),
(90, 'wfwef', 0, 56, '2019-01-18 03:50:06', '2019-01-18 03:50:06', 'en'),
(91, 'wfefew', 0, 56, '2019-01-18 03:50:06', '2019-01-18 03:50:06', 'az'),
(92, 'wefwef', 1, 56, '2019-01-18 03:50:06', '2019-01-18 03:50:06', 'az'),
(93, 'wefewf', 0, 57, '2019-01-18 03:50:17', '2019-01-18 03:50:17', 'en'),
(94, 'fwef', 0, 57, '2019-01-18 03:50:17', '2019-01-18 03:50:17', 'az'),
(95, 'fewf', 1, 57, '2019-01-18 03:50:17', '2019-01-18 03:50:17', 'az'),
(96, 'wfew', 0, 57, '2019-01-18 03:50:17', '2019-01-18 03:50:17', 'az'),
(97, 'wefwe', 1, 57, '2019-01-18 03:50:17', '2019-01-18 03:50:17', 'en'),
(98, 'efwef', 0, 57, '2019-01-18 03:50:17', '2019-01-18 03:50:17', 'az'),
(99, 'wefwef', 0, 57, '2019-01-18 03:50:17', '2019-01-18 03:50:17', 'en'),
(100, 'fwefwfe', 0, 57, '2019-01-18 03:50:17', '2019-01-18 03:50:17', 'en'),
(101, 'fwefwe', 0, 58, '2019-01-18 03:50:37', '2019-01-18 03:50:37', 'az'),
(102, 'wefwef', 1, 58, '2019-01-18 03:50:37', '2019-01-18 03:50:37', 'en'),
(103, 'wefwefwf', 0, 58, '2019-01-18 03:50:37', '2019-01-18 03:50:37', 'en'),
(104, 'wefwefewf', 0, 58, '2019-01-18 03:50:37', '2019-01-18 03:50:37', 'az'),
(105, 'fwefwefwe', 1, 58, '2019-01-18 03:50:38', '2019-01-18 03:50:38', 'az'),
(106, 'wefwef', 0, 58, '2019-01-18 03:50:38', '2019-01-18 03:50:38', 'az'),
(107, 'wefwfe', 0, 58, '2019-01-18 03:50:38', '2019-01-18 03:50:38', 'en'),
(108, 'wefwef', 0, 58, '2019-01-18 03:50:38', '2019-01-18 03:50:38', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rahimliparviz@gmail.com', '$2y$10$9XX8k/KvwpNKkpIaV/u8LOreKoQa02jxRttlyZMoXiVLOcBZdOkZG', '2018-11-05 15:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `created_at`, `updated_at`, `img`, `level`) VALUES
(52, '2019-01-09 08:25:05', '2019-01-09 08:25:05', 'Uploads/1547036705chef.png', '15'),
(53, '2019-01-09 09:17:55', '2019-01-09 09:17:55', NULL, '11'),
(54, '2019-01-09 09:33:12', '2019-01-09 09:33:12', NULL, '10'),
(55, '2019-01-18 03:49:51', '2019-01-18 03:49:51', NULL, '1'),
(56, '2019-01-18 03:50:06', '2019-01-18 03:50:06', NULL, '1'),
(57, '2019-01-18 03:50:16', '2019-01-18 03:50:16', NULL, '1'),
(58, '2019-01-18 03:50:37', '2019-01-18 03:50:37', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `question_tr`
--

CREATE TABLE `question_tr` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_tr`
--

INSERT INTO `question_tr` (`id`, `locale`, `question`, `question_id`, `created_at`, `updated_at`) VALUES
(9, 'en', 'question 2', 52, '2019-01-09 08:25:05', '2019-01-09 08:25:05'),
(10, 'az', 'question 2 az', 52, '2019-01-09 08:25:05', '2019-01-09 08:25:05'),
(11, 'en', 'question 3 eng', 53, '2019-01-09 09:17:55', '2019-01-09 09:17:55'),
(12, 'az', 'question 3 az', 53, '2019-01-09 09:17:55', '2019-01-09 09:17:55'),
(13, 'en', 'question 1 eng', 54, '2019-01-09 09:33:12', '2019-01-09 09:33:12'),
(14, 'az', 'question 1 aze', 54, '2019-01-09 09:33:12', '2019-01-09 09:33:12'),
(15, 'en', 'frwfrwf', 55, '2019-01-18 03:49:51', '2019-01-18 03:49:51'),
(16, 'az', 'fwrfwfw', 55, '2019-01-18 03:49:51', '2019-01-18 03:49:51'),
(17, 'en', 'wefwef', 56, '2019-01-18 03:50:06', '2019-01-18 03:50:06'),
(18, 'az', 'fwefwefw', 56, '2019-01-18 03:50:06', '2019-01-18 03:50:06'),
(19, 'en', 'fwefwef', 57, '2019-01-18 03:50:16', '2019-01-18 03:50:16'),
(20, 'az', 'wefwef', 57, '2019-01-18 03:50:16', '2019-01-18 03:50:16'),
(21, 'en', 'wefwef', 58, '2019-01-18 03:50:37', '2019-01-18 03:50:37'),
(22, 'az', 'wefwef', 58, '2019-01-18 03:50:37', '2019-01-18 03:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(10) UNSIGNED NOT NULL,
  `quiz_date` date NOT NULL,
  `duration` time NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `result` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total` int(11) NOT NULL,
  `success` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `quiz_date`, `duration`, `user_id`, `result`, `created_at`, `updated_at`, `total`, `success`) VALUES
(1, '2018-11-15', '00:02:00', 8, 0, '2018-11-15 12:46:13', '2018-11-15 12:46:13', 3, 0.00),
(2, '2018-11-15', '10:00:00', 8, 0, '2018-11-15 12:46:39', '2018-11-15 12:46:39', 3, 0.00),
(3, '2018-11-15', '00:03:00', 8, 2, '2018-11-15 12:56:23', '2018-11-15 12:56:23', 3, 0.67),
(4, '2018-11-16', '10:00:00', 8, 0, '2018-11-16 04:26:50', '2018-11-16 04:26:50', 3, 0.00),
(5, '2018-11-16', '10:00:00', 8, 0, '2018-11-16 04:31:35', '2018-11-16 04:31:35', 4, 0.00),
(6, '2018-11-16', '10:00:00', 16, 0, '2018-11-16 04:37:32', '2018-11-16 04:37:32', 4, 0.00),
(7, '2018-11-16', '10:00:00', 16, 0, '2018-11-16 04:56:11', '2018-11-16 04:56:11', 4, 0.00),
(8, '2018-11-16', '10:00:00', 8, 0, '2018-11-16 15:02:15', '2018-11-16 15:02:15', 3, 0.00),
(9, '2018-11-16', '10:00:00', 8, 0, '2018-11-16 15:02:39', '2018-11-16 15:02:39', 3, 0.00),
(10, '2018-11-16', '09:49:00', 8, 0, '2018-11-16 15:09:41', '2018-11-16 15:09:41', 3, 0.00),
(11, '2018-11-17', '09:43:00', 17, 2, '2018-11-17 09:05:46', '2018-11-17 09:05:46', 3, 0.67),
(12, '2018-11-17', '09:48:00', 17, 3, '2018-11-17 09:06:06', '2018-11-17 09:06:06', 3, 1.00),
(13, '2018-11-17', '09:47:00', 17, 0, '2018-11-17 09:06:26', '2018-11-17 09:06:26', 3, 0.00),
(14, '2019-01-18', '09:51:00', 17, 1, '2019-01-18 05:32:56', '2019-01-18 05:32:56', 7, 0.14),
(15, '2019-01-18', '09:50:00', 17, 0, '2019-01-18 05:38:28', '2019-01-18 05:38:28', 7, 0.00),
(16, '2019-01-18', '09:47:00', 17, 0, '2019-01-18 05:46:54', '2019-01-18 05:46:54', 7, 0.00),
(17, '2019-01-18', '09:58:00', 17, 1, '2019-01-18 05:48:16', '2019-01-18 05:48:16', 7, 0.14),
(18, '2019-01-18', '09:55:00', 17, 0, '2019-01-18 05:48:34', '2019-01-18 05:48:34', 7, 0.00),
(19, '2019-01-18', '09:58:00', 17, 1, '2019-01-18 05:51:43', '2019-01-18 05:51:43', 7, 0.14),
(20, '2019-01-18', '09:57:00', 17, 1, '2019-01-18 05:51:53', '2019-01-18 05:51:53', 7, 0.14),
(21, '2019-01-18', '09:56:00', 17, 1, '2019-01-18 05:57:58', '2019-01-18 05:57:58', 7, 0.14),
(22, '2019-01-18', '09:56:00', 17, 0, '2019-01-18 06:01:04', '2019-01-18 06:01:04', 7, 0.00),
(23, '2019-01-18', '09:58:00', 17, 1, '2019-01-18 06:05:11', '2019-01-18 06:05:11', 7, 0.14),
(24, '2019-01-18', '09:55:00', 17, 1, '2019-01-18 06:10:19', '2019-01-18 06:10:19', 7, 0.14),
(25, '2019-01-18', '09:58:00', 17, 2, '2019-01-18 06:14:35', '2019-01-18 06:14:35', 7, 0.29),
(26, '2019-01-18', '09:32:00', 17, 1, '2019-01-18 06:35:11', '2019-01-18 06:35:11', 7, 0.14),
(27, '2019-01-18', '09:58:00', 17, 0, '2019-01-18 06:40:43', '2019-01-18 06:40:43', 7, 0.00),
(28, '2019-01-18', '09:58:00', 17, 1, '2019-01-18 06:46:58', '2019-01-18 06:46:58', 7, 0.14),
(29, '2019-01-18', '09:56:00', 17, 0, '2019-01-18 06:48:50', '2019-01-18 06:48:50', 7, 0.00),
(30, '2019-01-18', '09:58:00', 17, 1, '2019-01-18 06:50:04', '2019-01-18 06:50:04', 7, 0.14),
(31, '2019-01-18', '09:58:00', 17, 1, '2019-01-18 06:52:40', '2019-01-18 06:52:40', 7, 0.14),
(32, '2019-01-18', '09:58:00', 17, 1, '2019-01-18 06:53:35', '2019-01-18 06:53:35', 7, 0.14),
(33, '2019-01-18', '09:58:00', 17, 1, '2019-01-18 06:54:22', '2019-01-18 06:54:22', 7, 0.14),
(34, '2019-01-18', '09:58:00', 17, 1, '2019-01-18 06:58:31', '2019-01-18 06:58:31', 7, 0.14),
(35, '2019-01-18', '09:56:00', 17, 1, '2019-01-18 07:22:27', '2019-01-18 07:22:27', 7, 0.14),
(36, '2019-01-18', '09:56:00', 17, 1, '2019-01-18 07:25:27', '2019-01-18 07:25:27', 7, 0.14),
(37, '2019-01-18', '09:38:00', 17, 0, '2019-01-18 07:27:13', '2019-01-18 07:27:13', 7, 0.00),
(38, '2019-01-18', '09:53:00', 17, 1, '2019-01-18 07:29:02', '2019-01-18 07:29:02', 7, 0.14),
(39, '2019-01-18', '09:58:00', 17, 0, '2019-01-18 07:30:08', '2019-01-18 07:30:08', 7, 0.00),
(40, '2019-01-18', '10:00:00', 17, 1, '2019-01-18 07:57:42', '2019-01-18 07:57:42', 7, 0.14),
(41, '2019-01-18', '09:16:00', 18, 1, '2019-01-18 09:50:42', '2019-01-18 09:50:42', 7, 0.14),
(42, '2019-01-18', '09:58:00', 18, 0, '2019-01-18 10:05:07', '2019-01-18 10:05:07', 7, 0.00),
(43, '2019-01-18', '09:51:00', 18, 1, '2019-01-18 10:07:27', '2019-01-18 10:07:27', 7, 0.14),
(44, '2019-01-18', '09:50:00', 18, 0, '2019-01-18 10:07:57', '2019-01-18 10:07:57', 7, 0.00),
(45, '2019-01-18', '09:41:00', 18, 0, '2019-01-18 10:15:11', '2019-01-18 10:15:11', 7, 0.00),
(46, '2019-01-19', '09:20:00', 19, 0, '2019-01-19 04:58:49', '2019-01-19 04:58:49', 7, 0.00),
(47, '2019-01-19', '09:57:00', 19, 1, '2019-01-19 05:03:53', '2019-01-19 05:03:53', 7, 0.14),
(48, '2019-01-19', '09:53:00', 20, 1, '2019-01-19 05:40:28', '2019-01-19 05:40:28', 7, 0.14),
(49, '2019-01-21', '09:57:00', 21, 1, '2019-01-21 02:37:51', '2019-01-21 02:37:51', 7, 0.14),
(52, '2019-01-25', '09:53:00', 32, 0, '2019-01-25 08:12:43', '2019-01-25 08:12:43', 7, 0.00),
(53, '2019-01-25', '09:55:00', 32, 0, '2019-01-25 08:15:37', '2019-01-25 08:15:37', 7, 0.00),
(54, '2019-01-25', '09:57:00', 32, 0, '2019-01-25 08:17:55', '2019-01-25 08:17:55', 7, 0.00),
(55, '2019-01-25', '09:56:00', 32, 2, '2019-01-25 08:20:32', '2019-01-25 08:20:32', 7, 0.29),
(56, '2019-01-25', '09:56:00', 32, 2, '2019-01-25 08:20:34', '2019-01-25 08:20:34', 7, 0.29),
(57, '2019-01-25', '09:56:00', 32, 2, '2019-01-25 08:20:35', '2019-01-25 08:20:35', 7, 0.29),
(58, '2019-01-25', '09:56:00', 32, 2, '2019-01-25 08:20:36', '2019-01-25 08:20:36', 7, 0.29),
(59, '2019-01-25', '09:56:00', 32, 2, '2019-01-25 08:20:37', '2019-01-25 08:20:37', 7, 0.29),
(60, '2019-01-25', '07:23:00', 32, 0, '2019-01-25 08:24:38', '2019-01-25 08:24:38', 7, 0.00),
(61, '2019-01-25', '09:58:00', 32, 0, '2019-01-25 08:24:57', '2019-01-25 08:24:57', 7, 0.00),
(62, '2019-01-25', '09:57:00', 32, 0, '2019-01-25 08:26:13', '2019-01-25 08:26:13', 7, 0.00),
(63, '2019-01-25', '09:55:00', 32, 0, '2019-01-25 08:27:07', '2019-01-25 08:27:07', 7, 0.00),
(64, '2019-01-25', '09:58:00', 32, 0, '2019-01-25 08:27:55', '2019-01-25 08:27:55', 7, 0.00),
(65, '2019-01-25', '09:54:00', 32, 0, '2019-01-25 08:28:32', '2019-01-25 08:28:32', 7, 0.00),
(66, '2019-03-04', '09:54:00', 34, 0, '2019-03-04 16:05:41', '2019-03-04 16:05:41', 7, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_title`, `app_description`, `created_at`, `updated_at`, `locale`) VALUES
(2, '<p><b style=\"background-color: rgb(255, 0, 0);\">Football quiz</b></p>', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', NULL, '2019-01-10 06:12:10', 'az'),
(3, 'To participate in the game, sign up by typing your name, surname and phone number in the appropriate boxes.\r\nThe stages of the game will be removed from the block every week on predefined days.\r\nEach stage will consist of 7 questions.\r\nYou can play the same stroke maximum 3 times to change the ball you have collected.\r\nIn order to be the first in the participants\' schedule, you need to answer the questions quickly and most accurately.\r\nThe winners of each month will be presented with valuable gifts.\r\nAt the end of the game, the player who scores more points throughout the race will win 2 tickets to the UEFA Europa League final.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', NULL, '2019-01-10 06:32:27', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `rank`, `admin`, `number`) VALUES
(8, 'admin', 'admin@gmail.com', '$2y$10$dU61QuxW6att1UOMHVwHt.FIGoRa9REAjOIZ9ZWbcqy0nfhkd9UOS', 'kqebndxagJYXoUvdfyg2ds9vGbc9UFIZmzJdR543PnzZV8AYAeJrzx7j1jez', NULL, '2018-11-12 05:15:08', NULL, 1, '278578'),
(16, 'ffff', 'fff@gmail.com', '$2y$10$LEK424SqpBfCXFKC6S7iNOs4SDLiFW/mUJnVrothtiuZifMrFUsKW', NULL, '2018-11-16 04:37:18', '2018-11-16 04:37:18', NULL, 0, '578578'),
(17, 'Parviz', 'r@gmail.com', '$2y$10$tV7qBdcFBVIurjLkmkxUQuAe9C1j73QH8c3bai/eWIU13zjvlmoeS', 'YPWpH2fBn8XqRpnFJaefuQhPxnEgBp7kacrZ8yLqvXtTgs69bkY5ByPOQZES', '2018-11-17 09:01:53', '2018-11-17 09:01:53', NULL, 0, '5785875'),
(18, 'Parviz2', 'r2@gmail.com', '$2y$10$d2NZYnqk/qIFd5g.yIfEC.Cd.KYbzG8y9/8RWE4pBj2VogN2uYYIq', NULL, '2019-01-18 09:46:11', '2019-01-18 09:46:11', NULL, 0, '287528758'),
(19, 'Dorian', 'dorian@gmail.com', '$2y$10$v5o82Yp5Nuic28/ZAjOlxu3/qY49RwbxR4Y1QNFLKizjrvPpAblFe', 'fsym2B6t1zuouYQdxS6VPTtjtVyDVEHitSphwSqi28GfGY5O5VZAclRVcdYx', '2019-01-19 04:57:34', '2019-01-19 04:57:34', NULL, 0, '6666666'),
(20, 'Tofiq', 'tofiq@gmail.com', '$2y$10$vkb3B7wPplMHhlyA4qqgg.l7oNCseHUx2KunjamrEiQaleXq8K5w2', '9FRqolQnBD2BQOv89NsDi4jlWWNcTo9EhwU4jXhvEUV1Oj7dFsLjmq10iFtS', '2019-01-19 05:28:44', '2019-01-19 05:28:44', NULL, 0, '12121212'),
(21, 'january', 'january@gmail.com', '$2y$10$KTSRnwGdcfg4xGdo.18j2OpQAzYFJjAnDhvlIyx0Ax3AJTpvkbHES', '0ymG7DJwXIHNi8DtgRX3YbZJhphGFl2ZWG0UkIAhLSkSd5bpMi9cbqMQOYIx', '2019-01-21 02:31:08', '2019-01-21 02:31:08', NULL, 0, '01010101'),
(23, 'nog', 'nog@gmail.com', '$2y$10$wo9WK2ndKZsLNu.Xdzu3IO7DEkOvnYJyXCeFZUXSVNkTef5u0VDjm', 'bw2IjiqJDgftNvzX1zgXUQCSBdCVWyDp5pyyJJUBMmtSRQWb2UYBTVyZhSuy', '2019-01-21 03:05:26', '2019-01-21 03:05:26', NULL, 0, '2542452'),
(24, 'hj', 'hj@gmail.com', '$2y$10$QuKaD0Us7NAAY6/TqSMtMOzYNaqzMkPFK7HW2qbfDNMzh/kIVfh.C', 'ZzTgggL4KTRYXMrYtZgl8qXAjAWH6OR3Ei9J4whTH3vjaYpWqH290Ff2C5NW', '2019-01-21 06:31:21', '2019-01-21 06:31:21', NULL, 0, '55554'),
(25, 'rur6u', 'maya2@gmail.com', '$2y$10$qatq01XMAjl7OOHyigYPau6hjWyqOBo8RCLenPEXJ3Dv5vj6Ib1Hu', 'ty2BRlDksPJQMdzufIJQql0FzjnaQuoSVK6tpDxqw3ZwGNH10yjBuF2KC0dT', '2019-01-22 04:10:56', '2019-01-22 04:10:56', NULL, 0, '666'),
(26, 'hryhrysj', 'maya82@gmail.com', '$2y$10$ZiX.BrSJxOmJjprPltLVWehwHhulNjTSLbcjz38VST4uWzqmruRti', 'yDJJdlvOMPjMmD9UodZEOwSxQUMEyV5IA1SB9DtmCMIgYWxGWj1HbxWhgF3B', '2019-01-22 04:27:54', '2019-01-22 04:27:54', NULL, 0, '2783778'),
(27, 'Parviz', 'maya8hng2@gmail.com', '$2y$10$FJKJeBrztHKNwrSpBJTzRODGEWozFYhKG3O7IYlcmRqthSywxv4bW', 'Gvboj4wi9zqhiWU1ulleTmSAyxZkkiNeYcapK1SPVy8fu9twGMnI9CsEM8mb', '2019-01-22 04:51:00', '2019-01-22 04:51:00', NULL, 0, '53454668'),
(28, 'Parviz', 'maya8642@gmail.com', '$2y$10$vDEaH3FDn9aayITPF4z9KerBFKcjLYq.R1zkUNaPxF0vGH0pg./62', 'HHPp5EV90OUNuWmJZBjPH0fZFqLzVzqtyQi7yKifZPv3t17Y4GWQYs4Efwqq', '2019-01-22 04:51:36', '2019-01-22 04:51:36', NULL, 0, '24643646'),
(30, 'rhrthrthtr', 'may546a82@gmail.com', '$2y$10$/PQMmltWbEtHBAuQid5OGugiS5et/8knY1NCpdQGLAnpmmZNwbbFe', NULL, '2019-01-22 05:29:30', '2019-01-22 05:29:30', NULL, 0, '546546'),
(31, 'eththt', 'maya28782@gmail.com', '$2y$10$ai8u4Cr7MVjNDTsg68GZ7ep7FeHWdhW7EzdCfhZXmBhVeA4IBxiDm', NULL, '2019-01-23 02:21:02', '2019-01-23 02:21:02', NULL, 0, '287527'),
(32, 't2', 't2@gmail.com', '$2y$10$qEKbQziEerDci8m/Wv8HuObiSGLG1oN1G.6/KrHeyYCilASgTLX66', NULL, '2019-01-25 08:12:18', '2019-01-25 08:12:18', NULL, 0, '6786786'),
(33, 'PARVİZ', 'ferger@gmail.com', '$2y$10$H9YYdk.hdP8gBzLO5K29..2WJfVvyrZQ9yDNDbcUcsG6zd1hwsMeC', 'VOUilZ4d2r25TBu3YsxxnwFLLxb3ZAROTIVMS27gDBRERYT8WMlVOYFXUdN3', '2019-03-02 03:03:04', '2019-03-02 03:03:04', NULL, 0, '265655256'),
(34, 'testd', 'admidn@gmail.com', '$2y$10$MrD8IN0PU5yRceHwwMxrPuXkesX8UU/H9TL6i9bazZV12g2XH5wum', NULL, '2019-03-04 16:05:15', '2019-03-04 16:05:15', NULL, 0, '123556');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `levels_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_identities`
--
ALTER TABLE `oauth_identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_tr`
--
ALTER TABLE `question_tr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_tr_question_id_foreign` (`question_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `oauth_identities`
--
ALTER TABLE `oauth_identities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `question_tr`
--
ALTER TABLE `question_tr`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `levels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `question_tr`
--
ALTER TABLE `question_tr`
  ADD CONSTRAINT `question_tr_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
