-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_spms
CREATE DATABASE IF NOT EXISTS `db_spms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_spms`;

-- Dumping structure for table db_spms.adopt
CREATE TABLE IF NOT EXISTS `adopt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `no_pet` int(11) NOT NULL,
  `reason` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.adopt: ~1 rows (approximately)
INSERT INTO `adopt` (`id`, `pet_id`, `user_id`, `no_pet`, `reason`, `id_type`, `id_no`, `filename`, `is_delete`, `created_at`, `updated_at`) VALUES
	(1, 3, 4, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'Drivers License', '123-3341234-3', '1653010365drivers-license-e1527147351417.jpg', 0, '2022-05-19 17:32:46', '2022-05-19 18:52:53');

-- Dumping structure for table db_spms.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `filename` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.blog: ~4 rows (approximately)
INSERT INTO `blog` (`id`, `user_id`, `filename`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 3, 'news-3.jpg', 'Some toughly useful much walking before', 'Forwardly echidna outside tiger split thanks far vibrantly gosh hence pang. Oh while frog urgent a circa connected atro us some neutral inside elusive by more the jeez orca tarantula meadowlark barring that on clinically oh ouch far jeezpa much grizzly amidst in grabbed wallaby well expediently much giraffe constantly and forbade a one yet belligerent the robust cried goodness more sedulously vulgar yet however.', '2022-05-20 03:03:02', '2022-05-20 03:03:02'),
	(2, 2, 'news-1.jpg', 'Acute yellow re-laid less or affirmatively cats', 'Forwardly echidna outside tiger split thanks far vibrantly gosh hence pang. Oh while frog urgent a circa connected atro us some neutral inside elusive by more the jeez orca tarantula meadowlark barring that on clinically oh ouch far jeezpa much grizzly amidst in grabbed wallaby well expediently much giraffe constantly and forbade a one yet belligerent the robust cried goodness more sedulously vulgar yet however.', '2022-05-25 03:03:03', '2022-05-25 03:03:03'),
	(3, 1, 'news-2.jpg', 'X Acute yellow re-laid less or affirmatively cats', 'Forwardly echidna outside tiger split thanks far vibrantly gosh hence pang. Oh while frog urgent a circa connected atro us some neutral inside elusive by more the jeez orca tarantula meadowlark barring that on clinically oh ouch far jeezpa much grizzly amidst in grabbed wallaby well expediently much giraffe constantly and forbade a one yet belligerent the robust cried goodness more sedulously vulgar yet however.', '2022-05-25 03:03:23', '2022-05-25 03:03:23'),
	(4, 3, '1653534644pp.jpg', 'Lorem ipsum dolor xxx', 'xxx Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi', '2022-05-25 18:36:19', '2022-05-25 19:10:44');

-- Dumping structure for table db_spms.claim
CREATE TABLE IF NOT EXISTS `claim` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `witness_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witness_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `witness_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.claim: ~1 rows (approximately)
INSERT INTO `claim` (`id`, `pet_id`, `user_id`, `filename`, `witness_email`, `witness_name`, `witness_contact`, `is_delete`, `created_at`, `updated_at`) VALUES
	(1, 3, 3, '1653009565bulldog.jpg', 'richmon.d@gmail.com', 'Richmond Dee', '0944567831', 0, '2022-05-19 17:19:25', '2022-05-19 18:57:58');

-- Dumping structure for table db_spms.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.comments: ~2 rows (approximately)
INSERT INTO `comments` (`id`, `blog_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
	(7, 2, 1, 'check', '2022-05-26 01:40:13', '2022-05-26 01:40:13'),
	(8, 4, 1, 'test', '2022-05-26 01:42:25', '2022-05-26 01:42:25');

-- Dumping structure for table db_spms.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.migrations: ~9 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(10, '2014_10_12_000000_create_users_table', 1),
	(11, '2014_10_12_100000_create_password_resets_table', 1),
	(12, '2022_05_15_011440_create_role_table', 1),
	(13, '2022_05_16_054901_create_pets__table', 1),
	(14, '2022_05_16_102220_create_blog_table', 1),
	(15, '2022_05_17_042600_create_adopt_table', 1),
	(16, '2022_05_17_042834_create_claim_table', 1),
	(17, '2022_05_17_043128_create_comments_table', 1),
	(18, '2022_05_17_043646_create_reacts_table', 1);

-- Dumping structure for table db_spms.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.password_resets: ~0 rows (approximately)

-- Dumping structure for table db_spms.pets
CREATE TABLE IF NOT EXISTS `pets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` enum('adopt','lostandfound') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_vaccinated` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `is_claim` int(11) NOT NULL DEFAULT 0,
  `is_adapt` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.pets: ~6 rows (approximately)
INSERT INTO `pets` (`id`, `user_id`, `status`, `name`, `breed`, `color`, `gender`, `age`, `description`, `is_vaccinated`, `filename`, `is_approved`, `is_claim`, `is_adapt`, `created_at`, `updated_at`) VALUES
	(1, 3, 'adopt', 'Chiroo', 'Labrador', 'White', 'male', '8 months', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore', 'N/A', '1653004891labrador.jpg', 1, 0, 0, '2022-05-19 16:01:32', '2022-05-25 22:06:34'),
	(2, 4, 'adopt', 'Ollie', 'Poodle', 'White/Brown', 'male', '7 months', 'laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '3 months', '1653005178dogssss.jpg', 1, 0, 0, '2022-05-19 16:06:18', '2022-05-25 18:10:19'),
	(3, 2, 'lostandfound', 'Max', 'Bulldog', 'Brown', 'male', '1 year', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '1 month', '1653005258bulldog.jpg', 1, 0, 0, '2022-05-19 16:07:38', '2022-05-19 18:57:58'),
	(4, 2, 'adopt', 'Lorem', 'Boxer', 'White', 'female', '9 months', 'gna aliqua. Ut enim ad eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '3 months', '1653005342Afghan_dog_-_cropped.jpg', 1, 0, 0, '2022-05-19 16:09:02', '2022-05-19 18:48:25'),
	(5, 4, 'adopt', 'Test', 'test', 'test', 'male', '4 months', 'rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu', '1 month', '1653529445pngkit_cool-png_330367.png', 1, 0, 0, '2022-05-25 17:44:05', '2022-05-25 22:06:24'),
	(6, 1, 'adopt', 'Test', 'Test', 'test', 'male', '4 months', 'dsadsadsad', 'N/A', '1653531167pp.jpg', 1, 0, 0, '2022-05-25 18:12:47', '2022-05-25 18:12:47');

-- Dumping structure for table db_spms.role
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.role: ~3 rows (approximately)
INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'super admin', '2022-05-19 14:59:42', '2022-05-19 14:59:42'),
	(2, 'admin', '2022-05-19 14:59:48', '2022-05-19 14:59:48'),
	(3, 'user', '2022-05-19 14:59:53', '2022-05-19 14:59:53');

-- Dumping structure for table db_spms.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `own_pet` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `profile` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.users: ~6 rows (approximately)
INSERT INTO `users` (`id`, `role_id`, `email`, `password`, `fname`, `mname`, `lname`, `address`, `gender`, `birthday`, `contact`, `own_pet`, `status`, `is_delete`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 'saveapawmanagement@gmail.com', '$2y$10$EUrQklecqgF/Ue0ykfAkAeI8ln6AGFP.QTx0JP3Z7yxSqFadmjgEC', 'Save', 'A', 'Paw', 'Cordova, Cebu', 'male', '1999-01-01', '0912345678', 'no', 'active', 0, '1653546498elizabeth.png', 'HQmvtETSP8GRU8Hx5E1c7DtEJkKfX3N3sIbU2r4zydPd6ixRqTtgSwpDqWyK', '2022-05-19 15:01:52', '2022-05-25 22:28:18'),
	(2, 2, 'cel.savapaw@gmail.com', '$2y$10$EUrQklecqgF/Ue0ykfAkAeI8ln6AGFP.QTx0JP3Z7yxSqFadmjgEC', 'Cel', 'Kota', 'Gonzaga', 'Babag, Lapu-Lapu City', 'male', '1995-01-01', '0912345678', 'no', 'active', 0, 'avatar.png', 'ST3U8QrXdLt3dTHiPVbJbZDqZxLiW6YDdg7jxlp7WQYAjNAhxEJJAV5wTuM9', '2022-05-19 15:03:58', '2022-05-19 07:32:23'),
	(3, 3, 'reo@gmail.com', '$2y$10$QoRx1sUOw0NwwXYPa8R3.e/Wisfzari.UpekatijvMbRRcUAepTv2', 'Reo', 'Lino', 'Pagara', 'Poblacion, Cordova, Cebu', 'male', '1998-12-09', '0912321425', 'yes', 'active', 0, 'avatar.png', 'oRZs86kCfTPfSkYlsFzAxXIcUyD2Kl0CxG8URIHoLMUMGnGDt08HxAxd2s7n', '2022-05-19 07:04:55', '2022-05-19 07:04:55'),
	(4, 3, 'charles@gmail.com', '$2y$10$8kOMtAYRixakJSWQIy/.Me7S91K7r6eeQ5X8XgjphjNVf08rq2876', 'Charles', 'Pino', 'Lagnason', 'Mactan, Lapu-lapu, City x', 'male', '2001-01-01', '09184422699 x', 'yes', 'active', 0, '1653485218pngkit_cool-png_330367.png', 'LmBzdysefqvkA3Q5GsFQforcHg8qjo6ku0UBAwkt936OStwRYZhpn3yvjqjL', '2022-05-19 07:08:26', '2022-05-25 18:03:49'),
	(5, 2, 'yaslyn.saveapaw@gmail.com', '$2y$10$g1zQoAp1LflmgomeSx1kEexH.cw3wm0tCgVYE2GwsophTxFU/SfY.', 'Yaslyn', 'Tulda', 'Amoin', 'Gun-ob, Lapu-lapu City', 'female', '1995-01-01', '09234456781', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-19 07:25:49', '2022-05-19 07:25:49'),
	(6, 2, 'test123@gmail.com', '$2y$10$QjZ.12Ms/1s8QTJiKD8jGepAHRZV0NRza7Hggn9f.cpIQTa.nJMZK', 'test123', 'Pino', 'test', '729 Fairmount Avenue Suite 100', 'male', '1993-01-01', '0912345677', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-25 13:31:28', '2022-05-25 13:31:28');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
