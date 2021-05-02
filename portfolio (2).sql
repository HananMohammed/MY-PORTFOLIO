-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 11:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `text`, `image`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Hanan Mohammed is a fullstack software engineer\",\"ar\":\"\\u062d\\u0646\\u0627\\u0646 \\u0645\\u062d\\u0645\\u062f\"}', '{\"en\":\"<p>                    Your website success is not just a dream! It is a right start, with your sure desire and professional experience from us ...... and experience is the best proof Not every website on the Internet that we see will be successful and achieve its desired goal,&nbsp;<span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">I\'m Senior Full-Stack developer . care about clean code, best practices, micro-services, and design patterns&nbsp;<\\/span><\\/p><p>\\r\\n                <\\/p>\",\"ar\":\"\\u0646\\u062c\\u0627\\u062d \\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0627\\u0644\\u062e\\u0627\\u0635 \\u0628\\u0643 \\u0644\\u064a\\u0633 \\u0645\\u062c\\u0631\\u062f \\u062d\\u0644\\u0645! \\u0625\\u0646\\u0647\\u0627 \\u0628\\u062f\\u0627\\u064a\\u0629 \\u0635\\u062d\\u064a\\u062d\\u0629 \\u060c \\u0628\\u0631\\u063a\\u0628\\u062a\\u0643 \\u0627\\u0644\\u0623\\u0643\\u064a\\u062f\\u0629 \\u0648\\u062e\\u0628\\u0631\\u062a\\u0643 \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629 \\u0645\\u0646\\u0627 ...... \\u0648\\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0647\\u064a \\u0623\\u0641\\u0636\\u0644 \\u062f\\u0644\\u064a\\u0644 \\u060c \\u0641\\u0644\\u064a\\u0633 \\u0643\\u0644 \\u0645\\u0648\\u0642\\u0639 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0625\\u0646\\u062a\\u0631\\u0646\\u062a \\u0646\\u0631\\u0627\\u0647 \\u0633\\u064a\\u0643\\u0648\\u0646 \\u0646\\u0627\\u062c\\u062d\\u064b\\u0627 \\u0648\\u064a\\u062d\\u0642\\u0642 \\u0647\\u062f\\u0641\\u0647 \\u0627\\u0644\\u0645\\u0646\\u0634\\u0648\\u062f \\u060c\\u0648\\u0623\\u064a\\u0636\\u0627 \\u0623\\u0646\\u0627 \\u0645\\u0637\\u0648\\u0631&nbsp; Full-Stack. \\u064a\\u0647\\u062a\\u0645 \\u0628\\u0627\\u0644\\u0643\\u0648\\u062f \\u0627\\u0644\\u0646\\u0638\\u064a\\u0641 \\u0648\\u0623\\u0641\\u0636\\u0644 \\u0627\\u0644\\u0645\\u0645\\u0627\\u0631\\u0633\\u0627\\u062a \\u0648\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u062f\\u0642\\u064a\\u0642\\u0629 \\u0648\\u0623\\u0646\\u0645\\u0627\\u0637 \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645\"}', 'image1618903779.png', 1, '2021-04-20 05:29:39', '2021-04-20 05:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `adresses`
--

CREATE TABLE `adresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adresses`
--

INSERT INTO `adresses` (`id`, `address`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Cairo, Egypt.\",\"ar\":\"\\u0645\\u0635\\u0631 , \\u0627\\u0644\\u0642\\u0627\\u0647\\u0631\"}', 1, '2021-04-20 04:53:32', '2021-04-20 04:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_contacts` tinyint(4) DEFAULT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `receive_contacts`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'hananmohammed2468@gmail.com', 1, 1, '2021-04-20 04:52:48', '2021-04-20 04:52:48'),
(2, 'info@we-coders.com', 1, 1, '2021-04-20 04:53:00', '2021-04-20 04:53:00');

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
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `related_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `title`, `icon`, `related_to`, `created_at`, `updated_at`) VALUES
(3, 'github', '<svg enable-background=\"new 0 0 24 24\" height=\"30\" viewBox=\"0 0 24 24\" width=\"25\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z\"></path></svg>', 'social_media', NULL, NULL),
(4, 'linked-in', '<svg height=\"30\" viewBox=\"0 0 512 512\" width=\"25\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m475.074219 0h-438.148438c-20.394531 0-36.925781 16.53125-36.925781 36.925781v438.148438c0 20.394531 16.53125 36.925781 36.925781 36.925781h438.148438c20.394531 0 36.925781-16.53125 36.925781-36.925781v-438.148438c0-20.394531-16.53125-36.925781-36.925781-36.925781zm-293.464844 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0\" ></path></svg>', 'social_media', NULL, NULL),
(5, 'codepen', '<svg enable-background=\"new 0 0 24 24\" height=\"25\" viewBox=\"0 0 24 24\" width=\"25\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m.455 16.512 10.969 7.314c.374.23.774.233 1.152 0l10.969-7.314c.281-.187.455-.522.455-.857v-7.312c0-.335-.174-.67-.455-.857l-10.969-7.313c-.374-.23-.774-.232-1.152 0l-10.969 7.313c-.281.187-.455.522-.455.857v7.312c0 .335.174.67.455.857zm10.514 4.528-8.076-5.384 3.603-2.411 4.473 2.987zm2.062 0v-4.808l4.473-2.987 3.603 2.411zm8.907-7.314-2.585-1.727 2.585-1.728zm-8.907-10.767 8.076 5.384-3.603 2.411-4.473-2.987zm-1.031 6.602 3.643 2.438-3.643 2.438-3.643-2.438zm-1.031-6.602v4.808l-4.473 2.987-3.603-2.411zm-8.906 7.314v-.001l2.585 1.728-2.585 1.728z\"></path></svg>', 'social_media', NULL, NULL),
(6, 'facebook', '<svg fill=\"#000000\" xmlns=\"http://www.w3.org/2000/svg\"  viewBox=\"0 0 26 26\" width=\"26px\" height=\"26px\"><path d=\"M 21.125 0 L 4.875 0 C 2.183594 0 0 2.183594 0 4.875 L 0 21.125 C 0 23.816406 2.183594 26 4.875 26 L 21.125 26 C 23.816406 26 26 23.816406 26 21.125 L 26 4.875 C 26 2.183594 23.816406 0 21.125 0 Z M 20.464844 14.003906 L 18.03125 14.003906 L 18.03125 23.007813 L 13.96875 23.007813 L 13.96875 14.003906 L 12.390625 14.003906 L 12.390625 10.96875 L 13.96875 10.96875 L 13.96875 9.035156 C 13.96875 6.503906 15.019531 5 18.007813 5 L 21.03125 5 L 21.03125 8.023438 L 19.273438 8.023438 C 18.113281 8.023438 18.035156 8.453125 18.035156 9.265625 L 18.03125 10.96875 L 20.796875 10.96875 Z\"/></svg>', 'social_media', NULL, NULL),
(7, 'twitter', '<svg fill=\"#000000\" xmlns=\"http://www.w3.org/2000/svg\"  viewBox=\"0 0 50 50\" width=\"50px\" height=\"50px\">    <path d=\"M25,2C12.317,2,2,12.317,2,25s10.317,23,23,23s23-10.317,23-23S37.683,2,25,2z M36.237,20.524 c0.01,0.236,0.016,0.476,0.016,0.717C36.253,28.559,30.68,37,20.491,37c-3.128,0-6.041-0.917-8.491-2.489 c0.433,0.052,0.872,0.077,1.321,0.077c2.596,0,4.985-0.884,6.879-2.37c-2.424-0.044-4.468-1.649-5.175-3.847 c0.339,0.065,0.686,0.1,1.044,0.1c0.505,0,0.995-0.067,1.458-0.195c-2.532-0.511-4.441-2.747-4.441-5.432c0-0.024,0-0.047,0-0.07 c0.747,0.415,1.6,0.665,2.509,0.694c-1.488-0.995-2.464-2.689-2.464-4.611c0-1.015,0.272-1.966,0.749-2.786 c2.733,3.351,6.815,5.556,11.418,5.788c-0.095-0.406-0.145-0.828-0.145-1.262c0-3.059,2.48-5.539,5.54-5.539 c1.593,0,3.032,0.672,4.042,1.749c1.261-0.248,2.448-0.709,3.518-1.343c-0.413,1.292-1.292,2.378-2.437,3.064 c1.122-0.136,2.188-0.432,3.183-0.873C38.257,18.766,37.318,19.743,36.237,20.524z\"/></svg>', 'social_media', NULL, NULL);

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_01_05_153436_create_sessions_table', 1),
(8, '2021_01_18_085021_create_sliders_table', 1),
(9, '2021_01_23_110619_create_abouts_table', 1),
(10, '2021_01_26_120254_create_contacts_table', 1),
(11, '2021_02_07_133510_create_blogs_table', 1),
(14, '2021_01_06_091134_create_icons_table', 2),
(15, '2021_03_04_080728_create_settings_table', 3),
(16, '2021_03_04_124046_create_phones_table', 3),
(17, '2021_03_04_124217_create_emails_table', 3),
(18, '2021_03_05_073859_create_adresses_table', 3),
(19, '2021_03_05_083001_create_social_media_table', 3),
(20, '2021_03_13_074413_create_services_table', 3),
(21, '2021_03_13_104500_create_project_categories_table', 3),
(22, '2021_03_13_110302_create_projects_table', 3);

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
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `phone`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '01009245890', 1, '2021-04-20 04:52:01', '2021-04-20 04:52:01'),
(2, '01201611733', 1, '2021-04-20 04:52:14', '2021-04-20 04:52:14'),
(3, '01551223187', 1, '2021-04-20 04:52:30', '2021-04-20 04:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `text`, `image`, `url`, `category_id`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"GYM Fit\",\"ar\":\"\\u062c\\u064a\\u0645 \\u0641\\u064a\\u062a\"}', '{\"en\":\"GYM Fit Website\",\"ar\":\"\\u0648\\u064a\\u0628 \\u0633\\u0627\\u064a\\u062a \\u062e\\u0627\\u0635 \\u0628\\u062c\\u064a\\u0645 \\u0641\\u064a\\u062a\"}', 'image1619966949.png', 'http://localhost/MY-PORTFOLIO/en/', 1, 1, '2021-05-02 12:49:09', '2021-05-02 12:49:09'),
(2, '{\"en\":\"Future Academy Istitute\",\"ar\":\"\\u0627\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0647 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0642\\u0628\\u0644\"}', '{\"en\":\"Educational site\",\"ar\":\"\\u0645\\u0648\\u0642\\u0639 \\u062a\\u0639\\u0644\\u064a\\u0645\\u064a\"}', 'image1619967202.png', 'http://future-mansoura-eg.com/', 1, 1, '2021-05-02 12:53:22', '2021-05-02 12:53:22'),
(3, '{\"en\":\"Ostora\",\"ar\":\"\\u0627\\u0633\\u0637\\u0648\\u0631\\u0647\"}', '{\"en\":\"Ecommerce Website\",\"ar\":\"\\u0645\\u0648\\u0642\\u0639 \\u062a\\u062c\\u0627\\u0631\\u064a\"}', 'image1619967481.png', 'http://smartgroup-demo.com/new-projects/ostora/ar', 1, 1, '2021-05-02 12:57:05', '2021-05-02 12:58:01'),
(4, '{\"en\":\"Evntrix\",\"ar\":\"\\u0627\\u064a\\u0641\\u064a\\u0646\\u062a\\u0631\\u064a\\u0643\\u0633\"}', '{\"en\":\"Online Event Ticketing System<br>\",\"ar\":\"\\u0633\\u064a\\u0633\\u062a\\u0645 \\u0644\\u062d\\u062c\\u0632 \\u0627\\u0644\\u062a\\u0630\\u0627\\u0643\\u0631 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0627\\u0646\\u062a\\u0631\\u0646\\u062a\"}', 'image1619968369.PNG', 'https://eventrex.net/', 1, 1, '2021-05-02 13:11:15', '2021-05-02 13:12:49'),
(5, '{\"en\":\"We Souria\",\"ar\":\"\\u0646\\u062d\\u0646\\u0627 \\u0633\\u0648\\u0631\\u064a\\u0627\"}', '{\"en\":\"We Souria Social Media Community Website For Sorian People\",\"ar\":\"\\u0646\\u062d\\u0646\\u0627 \\u0633\\u0648\\u0631\\u064a\\u0627 \\u0645\\u0648\\u0642\\u0639 \\u0644\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0627\\u0644\\u0627\\u062c\\u062a\\u0645\\u0627\\u0639\\u064a \\u0644\\u0644\\u0633\\u0648\\u0631\\u064a\\u064a\\u0646\"}', 'image1619968615.png', 'http://wesouria.com/', 1, 1, '2021-05-02 13:16:55', '2021-05-02 13:16:55'),
(6, '{\"en\":\"Akwan Media\",\"ar\":\"\\u0623\\u0643\\u0648\\u0627\\u0646 \\u0645\\u064a\\u062f\\u064a\\u0627\"}', '{\"en\":\"Marketing and development Agency\",\"ar\":\"\\u0634\\u0631\\u0643\\u0647 \\u0645\\u062a\\u062e\\u0635\\u0635\\u0647 \\u0628\\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u0647 \\u0648\\u0627\\u0644\\u062a\\u0633\\u0648\\u064a\\u0642\"}', 'image1619981926.PNG', 'https://akwanmedia.com/ar', 1, 1, '2021-05-02 16:58:46', '2021-05-02 16:58:46'),
(7, '{\"en\":\"Cyberroot\",\"ar\":\"\\u0633\\u064a\\u0628\\u0631\\u0631\\u0648\\u062a\"}', '{\"en\":\"<span style=\\\"color: rgb(51, 51, 51); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px;\\\">&nbsp;<\\/span><span style=\\\"color: rgb(51, 51, 51); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px;\\\">Cyberroots&nbsp;<\\/span><span style=\\\"color: rgb(51, 51, 51); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px;\\\">websites for&nbsp;<\\/span><span style=\\\"color: rgb(51, 51, 51); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px;\\\">buying&nbsp; photos and Audios&nbsp;<\\/span><span style=\\\"color: rgb(51, 51, 51); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px;\\\">at the lowest prices<\\/span>\",\"ar\":\"\\u0633\\u064a\\u0628\\u0631\\u0631\\u0648\\u062a \\u0645\\u0648\\u0642\\u0639 \\u0645\\u062a\\u062e\\u0635\\u0635 \\u0644\\u0634\\u0631\\u0627\\u0621 \\u0627\\u0644\\u0635\\u0648\\u0631 \\u0648\\u0627\\u0644\\u0635\\u0648\\u062a\\u064a\\u0627\\u062a \\u0628\\u0623\\u0642\\u0644 \\u0627\\u0644\\u0627\\u0633\\u0639\\u0627\\u0631\"}', 'image1619982196.PNG', 'http://cyberroots.net/demo/', 1, 1, '2021-05-02 17:03:16', '2021-05-02 17:03:16'),
(8, '{\"en\":\"Rowad\",\"ar\":\"\\u0631\\u0648\\u0627\\u062f\"}', '{\"en\":\"A company specialized in constructing and installing swimming pools\",\"ar\":\"\\u0634\\u0631\\u0643\\u0647 \\u0645\\u062a\\u062e\\u0635\\u0635\\u0647 \\u0644\\u0627\\u0646\\u0634\\u0627\\u0621 \\u0648\\u062a\\u0631\\u0643\\u064a\\u0628 \\u0627\\u0644\\u0645\\u0633\\u0627\\u0628\\u062d&nbsp;\"}', 'image1619982483.PNG', 'https://rowadun.com/', 1, 1, '2021-05-02 17:08:03', '2021-05-02 17:08:03'),
(9, '{\"en\":\"farmkem\",\"ar\":\"\\u0641\\u0627\\u0631\\u0645\\u0643\\u064a\\u0645\"}', '{\"en\":\"<p><span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">A special site for agricultural products<\\/span><br><\\/p><p>                    \\r\\n                <\\/p>\",\"ar\":\"<p style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">\\u0645\\u0648\\u0642\\u0639 \\u062e\\u0627\\u0635 \\u0628\\u0627\\u0644\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0627\\u0644\\u0632\\u0631\\u0627\\u0639\\u064a\\u0629<\\/p>\"}', 'image1619982783.PNG', 'http://farmkem.net', 1, 1, '2021-05-02 17:13:03', '2021-05-02 17:13:03'),
(10, '{\"en\":\"attcar\",\"ar\":\"\\u0627\\u0644\\u0633\\u064a\\u0627\\u0631\\u0647 \\u0627\\u0644\\u062c\\u0630\\u0627\\u0628\\u0647\"}', '{\"en\":\"Buying, selling and importing cars, trucks and heavy equipment\",\"ar\":\"\\u0634\\u0631\\u0627\\u0621 \\u0648\\u0628\\u064a\\u0639 \\u0648\\u0627\\u0633\\u062a\\u064a\\u0631\\u0627\\u062f \\u0627\\u0644\\u0633\\u064a\\u0627\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u0634\\u0627\\u062d\\u0646\\u0627\\u062a \\u0648\\u0627\\u0644\\u0645\\u0639\\u062f\\u0627\\u062a \\u0627\\u0644\\u062b\\u0642\\u064a\\u0644\\u0629\"}', 'image1619983029.PNG', 'http://attcar.com/', 1, 1, '2021-05-02 17:17:09', '2021-05-02 17:17:09'),
(11, '{\"en\":\"Meriamco\",\"ar\":\"\\u0645\\u0631\\u064a\\u0627\\u0645\\u0643\\u0648\"}', '{\"en\":\"portfolio Website\",\"ar\":\"\\u0628\\u0648\\u0631\\u062a\\u0641\\u0648\\u0644\\u064a\\u0648 \\u0648\\u064a\\u0628\\u0633\\u0627\\u064a\\u062a\"}', 'image1619983267.PNG', 'http://meriamco.com/', 1, 1, '2021-05-02 17:21:07', '2021-05-02 17:21:07'),
(12, '{\"en\":\"Waitless\",\"ar\":\"\\u0648\\u064a\\u062a\\u0644\\u064a\\u0633\"}', '{\"en\":\"Booking App\",\"ar\":\"\\u0627\\u0628\\u0644\\u064a\\u0643\\u064a\\u0634\\u0646 \\u062d\\u062c\\u0648\\u0632\\u0627\\u062a\"}', 'image1619983652.png', 'https://play.google.com/store/apps/details?id=com.awamer.waitless', 2, 1, '2021-05-02 17:27:32', '2021-05-02 17:27:32'),
(13, '{\"en\":\"Ebair\",\"ar\":\"\\u0627\\u0628\\u064a\\u0626\\u064a\\u0631\"}', '{\"en\":\"Ebair&nbsp; Conditioner\",\"ar\":\"\\u0645\\u0648\\u0642\\u0639 \\u0644\\u0634\\u0631\\u0643\\u0647 \\u0645\\u062a\\u062d\\u0635\\u0635\\u0647 \\u0641\\u064a \\u0627\\u0644\\u062a\\u0643\\u064a\\u064a\\u0641\\u0627\\u062a\"}', 'image1619984062.png', 'https://404island.com/projects/ebair/', 1, 1, '2021-05-02 17:34:22', '2021-05-02 17:34:22'),
(14, '{\"en\":\"InterPharma\",\"ar\":\"\\u0627\\u0646\\u062a\\u0631\\u0641\\u0627\\u0631\\u0645\\u0627\"}', '{\"en\":\"<span style=\\\"color: rgb(108, 117, 125); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 17px; text-align: center;\\\">Interpharma Egycare<\\/span>\",\"ar\":\"\\u0627\\u0646\\u062a\\u0631\\u0641\\u0627\\u0631\\u0645\\u0627 \\u0627\\u064a\\u062c\\u064a\\u0643\\u064a\\u0631\"}', 'image1619984200.PNG', 'https://404island.com/projects/interpharma/en', 1, 1, '2021-05-02 17:36:40', '2021-05-02 17:36:40'),
(15, '{\"en\":\"Ahlya\",\"ar\":\"\\u0623\\u0647\\u0644\\u064a\\u0647\"}', '{\"en\":\"Portfolio Website\",\"ar\":\"\\u0645\\u0648\\u0642\\u0639 \\u062a\\u0639\\u0631\\u064a\\u0641\\u064a\"}', 'image1619984319.PNG', 'https://404island.com/projects/elahlya/', 1, 1, '2021-05-02 17:38:39', '2021-05-02 17:38:39'),
(16, '{\"en\":\"Whats market\",\"ar\":\"\\u0648\\u0627\\u062a\\u0633 \\u0645\\u0627\\u0631\\u0643\\u062a\"}', '{\"en\":\"Mobile App\",\"ar\":\"\\u0645\\u0648\\u0628\\u0627\\u064a\\u0644 \\u0627\\u0628\\u0644\\u0643\\u064a\\u0634\\u0646\"}', 'image1619984445.png', 'http://localhost/MY-PORTFOLIO/en', 2, 1, '2021-05-02 17:40:45', '2021-05-02 17:40:45'),
(17, '{\"en\":\"Thanweya\",\"ar\":\"\\u062b\\u0627\\u0646\\u0648\\u064a\\u0627\"}', '{\"en\":\"Mobile App\",\"ar\":\"\\u0645\\u0648\\u0628\\u0627\\u064a\\u0644 \\u0627\\u0628\\u0644\\u0643\\u064a\\u0634\\u0646\"}', 'image1619984526.png', 'http://localhost/MY-PORTFOLIO/en', 2, 1, '2021-05-02 17:42:06', '2021-05-02 17:42:06'),
(18, '{\"en\":\"Responsive Dashboard\",\"ar\":\"\\u062f\\u0627\\u0634\\u0628\\u0648\\u0631\\u062f \\u0631\\u064a\\u0633\\u0628\\u0648\\u0646\\u0633\\u064a\\u0641\"}', '{\"en\":\"Responsive Dashboard\",\"ar\":\"\\u062f\\u0627\\u0634\\u0628\\u0648\\u0631\\u062f \\u0631\\u064a\\u0633\\u0628\\u0648\\u0646\\u0633\\u064a\\u0641\"}', 'image1619984697.png', 'http://localhost/MY-PORTFOLIO/en/admin', 3, 1, '2021-05-02 17:44:57', '2021-05-02 17:44:57'),
(19, '{\"en\":\"Dashboard\",\"ar\":\"\\u062f\\u0627\\u0634\\u0628\\u0648\\u0631\\u062f\"}', '{\"en\":\"Multi Roles And Permissions Dashboard\",\"ar\":\"\\u062f\\u0627\\u0634\\u0628\\u0648\\u0631\\u062f \\u0645\\u062a\\u0639\\u062f\\u062f\\u0647 \\u0627\\u0644\\u0635\\u0644\\u0627\\u062d\\u064a\\u0627\\u062a\"}', 'image1619984847.png', 'http://localhost/MY-PORTFOLIO/en', 3, 1, '2021-05-02 17:47:27', '2021-05-02 17:47:27'),
(20, '{\"en\":\"Whatsapp CRM\",\"ar\":\"\\u0648\\u0627\\u062a\\u0633\\u0627\\u0628CRM\"}', '{\"en\":\"Whatsapp CRM\",\"ar\":\"\\u0648\\u0627\\u062a\\u0633\\u0627\\u0628CRM\"}', 'image1619985019.png', 'http://localhost/MY-PORTFOLIO/en/', 3, 1, '2021-05-02 17:50:19', '2021-05-02 17:50:19'),
(21, '{\"en\":\"Whatsapp CRM\",\"ar\":\"\\u0648\\u0627\\u062a\\u0633\\u0627\\u0628 CRM\"}', '{\"en\":\"whatsapp crm allow open whasapp business on multi browsers\",\"ar\":\"\\u064a\\u0633\\u0645\\u062d whatsapp crm \\u0628\\u0641\\u062a\\u062d \\u0623\\u0639\\u0645\\u0627\\u0644 whatsapp \\u0639\\u0644\\u0649 \\u0645\\u062a\\u0635\\u0641\\u062d\\u0627\\u062a \\u0645\\u062a\\u0639\\u062f\\u062f\\u0629\"}', 'image1619985590.png', 'http://localhost/MY-PORTFOLIO/en', 1, 1, '2021-05-02 17:59:50', '2021-05-02 17:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `title`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Web\",\"ar\":\"\\u0627\\u0644\\u0648\\u064a\\u0628\"}', 1, '2021-05-02 12:46:59', '2021-05-02 12:46:59'),
(2, '{\"en\":\"App\",\"ar\":\"\\u0623\\u0628\\u0644\\u0643\\u064a\\u0634\\u0646\"}', 1, '2021-05-02 17:22:29', '2021-05-02 17:22:29'),
(3, '{\"en\":\"Dashboard\",\"ar\":\"\\u062f\\u0627\\u0634\\u0628\\u0648\\u0631\\u062f\"}', 1, '2021-05-02 17:24:54', '2021-05-02 17:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `text`, `image`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Web Development\",\"ar\":\"\\u0628\\u0631\\u0645\\u062c\\u0647 \\u0627\\u0644\\u0648\\u064a\\u0628\"}', '{\"en\":\"A website is the foundation of a business\\u2019s digital presence and a beautiful, informative, and user-friendly website one of the best ways to engage customers.\",\"ar\":\"\\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0647\\u0648 \\u0623\\u0633\\u0627\\u0633 \\u0627\\u0644\\u0648\\u062c\\u0648\\u062f \\u0627\\u0644\\u0631\\u0642\\u0645\\u064a \\u0644\\u0644\\u0646\\u0634\\u0627\\u0637 \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a \\u060c \\u0648\\u064a\\u0639\\u062f \\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0627\\u0644\\u062c\\u0645\\u064a\\u0644 \\u0648\\u0627\\u0644\\u0645\\u0641\\u064a\\u062f \\u0648\\u0633\\u0647\\u0644 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0623\\u062d\\u062f \\u0623\\u0641\\u0636\\u0644 \\u0627\\u0644\\u0637\\u0631\\u0642 \\u0644\\u062c\\u0630\\u0628 \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621.\"}', 'image1619966107.svg', 1, '2021-05-02 12:35:07', '2021-05-02 12:35:07'),
(2, '{\"en\":\"Mobil Applications\",\"ar\":\"\\u062a\\u0637\\u0628\\u064a\\u0642\\u0627\\u062a \\u0627\\u0644\\u0645\\u0648\\u0628\\u0627\\u064a\\u0644\"}', '{\"en\":\"Create all applications and games with excellent quality in the fastest time by using mobile experiences and Backend Development Experience&nbsp;\",\"ar\":\"\\u0642\\u0645 \\u0628\\u0625\\u0646\\u0634\\u0627\\u0621 \\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642\\u0627\\u062a \\u0648\\u0627\\u0644\\u0623\\u0644\\u0639\\u0627\\u0628 \\u0628\\u062c\\u0648\\u062f\\u0629 \\u0645\\u0645\\u062a\\u0627\\u0632\\u0629 \\u0641\\u064a \\u0623\\u0633\\u0631\\u0639 \\u0648\\u0642\\u062a \\u0628\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u062a\\u062c\\u0627\\u0631\\u0628 \\u0627\\u0644\\u0623\\u062c\\u0647\\u0632\\u0629 \\u0627\\u0644\\u0645\\u062d\\u0645\\u0648\\u0644\\u0629 \\u0648\\u062a\\u062c\\u0631\\u0628\\u0629 \\u062a\\u0637\\u0648\\u064a\\u0631 \\u0627\\u0644\\u0648\\u0627\\u062c\\u0647\\u0629 \\u0627\\u0644\\u062e\\u0644\\u0641\\u064a\\u0629\"}', 'image1619966414.svg', 1, '2021-05-02 12:39:39', '2021-05-02 12:40:14'),
(3, '{\"en\":\"Hosting Services\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0627\\u0633\\u062a\\u0636\\u0627\\u0641\\u0629\"}', '{\"en\":\"The presence of your site on strong hosting has many advantages, the most important of which is the speed of your site, and the fact that many visitors have more time on your site, which will make you have a low bounce rate, which is what Google requires to appear on the first pages.\",\"ar\":\"\\u0625\\u0646 \\u0648\\u062c\\u0648\\u062f \\u0645\\u0648\\u0642\\u0639\\u0643 \\u0639\\u0644\\u0649 \\u0625\\u0633\\u062a\\u0636\\u0627\\u0641\\u0629 \\u0642\\u0648\\u064a\\u0629 \\u0644\\u0647 \\u0627\\u0644\\u0639\\u062f\\u064a\\u062f \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0632\\u0627\\u064a\\u0627 \\u0623\\u0647\\u0645\\u0647\\u0627 \\u0633\\u0631\\u0639\\u0629 \\u0645\\u0648\\u0642\\u0639\\u0643 \\u060c \\u0648\\u062d\\u0642\\u064a\\u0642\\u0629 \\u0623\\u0646 \\u0627\\u0644\\u0643\\u062b\\u064a\\u0631 \\u0645\\u0646 \\u0627\\u0644\\u0632\\u0648\\u0627\\u0631 \\u0644\\u062f\\u064a\\u0647\\u0645 \\u0648\\u0642\\u062a \\u0623\\u0637\\u0648\\u0644 \\u0639\\u0644\\u0649 \\u0645\\u0648\\u0642\\u0639\\u0643 \\u0645\\u0645\\u0627 \\u064a\\u062c\\u0639\\u0644\\u0643 \\u062a\\u062d\\u0635\\u0644 \\u0639\\u0644\\u0649 \\u0645\\u0639\\u062f\\u0644 \\u0627\\u0631\\u062a\\u062f\\u0627\\u062f \\u0645\\u0646\\u062e\\u0641\\u0636 \\u060c \\u0648\\u0647\\u0648 \\u0645\\u0627 \\u064a\\u062a\\u0637\\u0644\\u0628 Google \\u0627\\u0644\\u0638\\u0647\\u0648\\u0631 \\u0641\\u064a \\u0627\\u0644\\u0635\\u0641\\u062d\\u0627\\u062a \\u0627\\u0644\\u0623\\u0648\\u0644\\u0649.\"}', 'image1619966631.svg', 1, '2021-05-02 12:43:51', '2021-05-02 12:43:51'),
(4, '{\"en\":\"seo services\",\"ar\":\"\\u062e\\u062f\\u0645\\u0627\\u062a \\u062a\\u062d\\u0633\\u064a\\u0646 \\u0645\\u062d\\u0631\\u0643\\u0627\\u062a \\u0627\\u0644\\u0628\\u062d\\u062b\"}', '{\"en\":\"<span style=\\\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; text-align: center;\\\">You can get your customers through searches, and take advantage of the power of search engines in that.You can access the first results in Google, Yandex and Bing and in the most popular search sites<\\/span>\",\"ar\":\"\\u064a\\u0645\\u0643\\u0646\\u0643 \\u0627\\u0644\\u062d\\u0635\\u0648\\u0644 \\u0639\\u0644\\u0649 \\u0639\\u0645\\u0644\\u0627\\u0626\\u0643 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0639\\u0645\\u0644\\u064a\\u0627\\u062a \\u0627\\u0644\\u0628\\u062d\\u062b \\u060c \\u0648\\u0627\\u0644\\u0627\\u0633\\u062a\\u0641\\u0627\\u062f\\u0629 \\u0645\\u0646 \\u0642\\u0648\\u0629 \\u0645\\u062d\\u0631\\u0643\\u0627\\u062a \\u0627\\u0644\\u0628\\u062d\\u062b \\u0641\\u064a \\u0630\\u0644\\u0643 \\u060c \\u064a\\u0645\\u0643\\u0646\\u0643 \\u0627\\u0644\\u0648\\u0635\\u0648\\u0644 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c \\u0627\\u0644\\u0623\\u0648\\u0644\\u0649 \\u0641\\u064a Google \\u0648 Yandex \\u0648 Bing \\u0648\\u0641\\u064a \\u0645\\u0648\\u0627\\u0642\\u0639 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0627\\u0644\\u0623\\u0643\\u062b\\u0631 \\u0634\\u0647\\u0631\\u0629\"}', 'image1619966731.svg', 1, '2021-05-02 12:45:31', '2021-05-02 12:45:31');

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
('KdAf60gMt7W1OyRhvNvgiZYDK5qKdGyXWj4CS8IF', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoibHYzRjR4cjVlZ3dsUVZ2MWFXZUJSdUVsN3BCNUtwMU5wMmEwb3ZvcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vbG9jYWxob3N0L01ZLVBPUlRGT0xJTy9hciI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR6SUFGMnJNaVhyTTg2Z2ovOVQ0bklPNUIvZnkzYUE5U0dYT1VqWjdRMmxiSkhSbWVPSm9FYSI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHpJQUYyck1pWHJNODZnai85VDRuSU81Qi9meTNhQTlTR1hPVWpaN1EybGJKSFJtZU9Kb0VhIjt9', 1619991265);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `map`, `whatsapp`, `image`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Hanan Mohammed\",\"ar\":\"\\u062d\\u0646\\u0627\\u0646 \\u0645\\u062d\\u0645\\u062f\"}', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13675.954867336583!2d31.393407493066395!3d31.026563998248662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79c514db1838f%3A0x2c85107942109750!2z2YXYs9iq2LTZgdmJINin2YTYqtij2YXZitmGINin2YTYtdit2YnYjCDYp9mE2YfYr9mJINmIINin2YTZhtmI2LHYjCDYp9mE2YXZhti12YjYsdip2Iwg2KfZhNiv2YLZh9mE2YrYqQ!5e0!3m2!1sar!2seg!4v1618901344056!5m2!1sar!2seg\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '1201611733', 'image1618901394.png', 1, '2021-04-20 04:49:54', '2021-04-20 04:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `text`, `image`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Hanan Mohammed\",\"ar\":\"\\u062d\\u0646\\u0627\\u0646 \\u0645\\u062d\\u0645\\u062f\"}', '{\"en\":\"<p><span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">Passionate about Web-Development.&nbsp;<\\/span><span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">&nbsp;<\\/span><span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">providing all websites development services to local and international companies<\\/span><br><\\/p><p>\\r\\n                <\\/p>\",\"ar\":\"\\u0634\\u063a\\u0648\\u0641\\u0647 \\u0628\\u062a\\u0637\\u0648\\u064a\\u0631 \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0648 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062c\\u0645\\u064a\\u0639 \\u062e\\u062f\\u0645\\u0627\\u062a \\u062a\\u0637\\u0648\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0642\\u0639 \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a\\u0629 \\u0644\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a \\u0627\\u0644\\u0645\\u062d\\u0644\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a\\u0629\"}', 'image1618902929.png', 1, '2021-02-25 07:22:33', '2021-04-20 05:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_id` int(11) NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `url`, `icon_id`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'https://github.com/HananMohammed', 3, 1, '2021-04-20 04:57:05', '2021-04-20 04:57:05'),
(2, 'https://www.linkedin.com/in/hanan-mohammed-75a28a139/', 4, 1, '2021-04-20 04:59:20', '2021-04-20 04:59:20'),
(3, 'https://codepen.io/hananmohammed', 5, 1, '2021-04-20 05:05:03', '2021-04-20 05:05:03'),
(4, 'https://www.facebook.com/hanan.mohamed2468/', 6, 1, '2021-04-20 05:08:39', '2021-04-20 05:08:39'),
(5, 'https://twitter.com/HananM7md1', 7, 1, '2021-04-20 05:11:22', '2021-04-20 05:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Hanan', 'admin@gmail.com', NULL, NULL, '$2y$10$zIAF2rMiXrM86gj/9T4nIO5B/fy3aA9SGXOUjZ7Q2lbJHRmeOJoEa', NULL, NULL, 'TrpgZ2fjBy7I3SU1ac5GRVv2OLSnT84PH7LgMpLHHEoVOmfHYonqZrnHh790', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abouts_created_by_index` (`created_by`);

--
-- Indexes for table `adresses`
--
ALTER TABLE `adresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_created_by_index` (`created_by`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emails_created_by_index` (`created_by`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `icons_related_to_index` (`related_to`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phones_created_by_index` (`created_by`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_category_id_index` (`category_id`),
  ADD KEY `projects_created_by_index` (`created_by`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_categories_created_by_index` (`created_by`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_created_by_index` (`created_by`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_created_by_index` (`created_by`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_created_by_index` (`created_by`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adresses`
--
ALTER TABLE `adresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
