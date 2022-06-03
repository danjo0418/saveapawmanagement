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
	(1, 3, 4, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'Drivers License', '123-3341234-3', '1653010365drivers-license-e1527147351417.jpg', 0, '2022-05-19 17:32:46', '2022-05-27 07:03:02');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.blog: ~6 rows (approximately)
INSERT INTO `blog` (`id`, `user_id`, `filename`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 3, 'news-3.jpg', 'Some toughly useful much walking before', 'Forwardly echidna outside tiger split thanks far vibrantly gosh hence pang. Oh while frog urgent a circa connected atro us some neutral inside elusive by more the jeez orca tarantula meadowlark barring that on clinically oh ouch far jeezpa much grizzly amidst in grabbed wallaby well expediently much giraffe constantly and forbade a one yet belligerent the robust cried goodness more sedulously vulgar yet however.', '2022-05-20 03:03:02', '2022-05-20 03:03:02'),
	(2, 2, 'news-1.jpg', 'Acute yellow re-laid less or affirmatively cats', 'Forwardly echidna outside tiger split thanks far vibrantly gosh hence pang. Oh while frog urgent a circa connected atro us some neutral inside elusive by more the jeez orca tarantula meadowlark barring that on clinically oh ouch far jeezpa much grizzly amidst in grabbed wallaby well expediently much giraffe constantly and forbade a one yet belligerent the robust cried goodness more sedulously vulgar yet however.', '2022-05-25 03:03:03', '2022-05-25 03:03:03'),
	(3, 1, 'news-2.jpg', 'X Acute yellow re-laid less or affirmatively cats', 'Forwardly echidna outside tiger split thanks far vibrantly gosh hence pang. Oh while frog urgent a circa connected atro us some neutral inside elusive by more the jeez orca tarantula meadowlark barring that on clinically oh ouch far jeezpa much grizzly amidst in grabbed wallaby well expediently much giraffe constantly and forbade a one yet belligerent the robust cried goodness more sedulously vulgar yet however.', '2022-05-25 03:03:23', '2022-05-25 03:03:23'),
	(4, 3, '1653534644pp.jpg', 'Lorem ipsum dolor xxx', 'xxx Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi', '2022-05-25 18:36:19', '2022-05-25 19:10:44'),
	(5, 7, '1653575515dog4.png', 'Justine The Dalmatian', 'I just want to flex the one that makes my day even brighter!', '2022-05-26 06:31:56', '2022-05-26 06:31:56'),
	(6, 11, '1653618998cat2.jpg', 'Queen Cat', 'This is Doja. She likes to just sit all day and care about nothing. She\'s the real queen.', '2022-05-26 18:36:39', '2022-05-26 18:36:39');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.claim: ~2 rows (approximately)
INSERT INTO `claim` (`id`, `pet_id`, `user_id`, `filename`, `witness_email`, `witness_name`, `witness_contact`, `is_delete`, `created_at`, `updated_at`) VALUES
	(1, 3, 3, '1653009565bulldog.jpg', 'richmon.d@gmail.com', 'Richmond Dee', '0944567831', 0, '2022-05-19 17:19:25', '2022-05-27 06:49:23'),
	(2, 7, 7, '1653629815ShihTzuBreed.jpg', 'maria@gmail.com', 'maria panas', '092657352', 1, '2022-05-26 21:36:55', '2022-05-26 21:37:29');

-- Dumping structure for table db_spms.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.comments: ~15 rows (approximately)
INSERT INTO `comments` (`id`, `blog_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
	(7, 2, 1, 'check', '2022-05-26 01:40:13', '2022-05-26 01:40:13'),
	(8, 4, 1, 'test', '2022-05-26 01:42:25', '2022-05-26 01:42:25'),
	(9, 4, 4, 'ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi', '2022-05-26 02:02:34', '2022-05-26 02:02:34'),
	(11, 4, 7, 'kyuddie', '2022-05-26 06:29:25', '2022-05-26 06:29:25'),
	(12, 4, 7, 'sadboi', '2022-05-26 06:33:00', '2022-05-26 06:33:00'),
	(13, 5, 11, 'so cute', '2022-05-26 18:32:19', '2022-05-26 18:32:19'),
	(14, 6, 15, 'hi', '2022-05-27 05:06:37', '2022-05-27 05:06:37'),
	(15, 6, 15, 'test', '2022-05-27 05:10:40', '2022-05-27 05:10:40'),
	(16, 5, 15, 'sheeesh!', '2022-05-27 05:18:59', '2022-05-27 05:18:59'),
	(17, 6, 15, 'Test', '2022-05-27 05:30:58', '2022-05-27 05:30:58'),
	(18, 6, 11, 'check', '2022-05-27 05:31:22', '2022-05-27 05:31:22'),
	(19, 6, 15, 'ehsdasdsa', '2022-05-27 05:34:22', '2022-05-27 05:34:22'),
	(20, 6, 11, 'aw', '2022-05-27 05:35:26', '2022-05-27 05:35:26'),
	(27, 6, 4, 'aw', '2022-05-27 07:27:43', '2022-05-27 07:27:43'),
	(28, 3, 1, 'hellow', '2022-05-27 07:49:27', '2022-05-27 07:49:27');

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

-- Dumping structure for table db_spms.notifications
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('p_approved','p_declined','adopt_approved','adopt_declined','claim_approved','claim_declined','comments') DEFAULT NULL,
  `url_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_At` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_spms.notifications: ~0 rows (approximately)

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
  `age` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_vaccinated` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `is_claim` int(11) NOT NULL DEFAULT 0,
  `is_adopt` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.pets: ~8 rows (approximately)
INSERT INTO `pets` (`id`, `user_id`, `status`, `name`, `breed`, `color`, `gender`, `age`, `description`, `is_vaccinated`, `filename`, `is_approved`, `is_claim`, `is_adopt`, `created_at`, `updated_at`) VALUES
	(1, 3, 'adopt', 'Chiroo', 'Labrador', 'White', 'male', '8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore', 'N/A', '1653004891labrador.jpg', 0, 0, 0, '2022-05-19 16:01:32', '2022-05-25 22:06:34'),
	(2, 4, 'adopt', 'Ollie', 'Poodle', 'White/Brown', 'male', '7', 'laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '3 months', '1653005178dogssss.jpg', 2, 0, 0, '2022-05-19 16:06:18', '2022-05-27 06:33:58'),
	(3, 2, 'lostandfound', 'Max', 'Bulldog', 'Brown', 'male', '1', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '1 month', '1653005258bulldog.jpg', 0, 1, 0, '2022-05-19 16:07:38', '2022-05-27 06:46:20'),
	(4, 2, 'adopt', 'Lorem', 'Boxer', 'White', 'female', '9', 'gna aliqua. Ut enim ad eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '3 months', '1653005342Afghan_dog_-_cropped.jpg', 0, 0, 0, '2022-05-19 16:09:02', '2022-05-19 18:48:25'),
	(5, 4, 'adopt', 'Test 1', 'test', 'test', 'male', '4', 'rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu', '1 month', '1653529445pngkit_cool-png_330367.png', 1, 0, 0, '2022-05-25 17:44:05', '2022-05-27 06:33:51'),
	(6, 1, 'adopt', 'Test', 'Test', 'test', 'male', '4', 'dsadsadsad', 'N/A', '1653531167pp.jpg', 1, 0, 0, '2022-05-25 18:12:47', '2022-05-25 18:12:47'),
	(7, 11, 'lostandfound', 'unknown', 'Pomeranian', 'brown', 'male', '3 to 5 years', 'Found this dog at Camolinas Street today. I brought it to my house for the main time before turning him to the pound. If this is your pet feel free to contact me.', 'unknown', '1653629092Lost-15.jpg', 1, 1, 0, '2022-05-26 21:24:53', '2022-05-26 21:37:29'),
	(8, 16, 'adopt', 'Pretty', 'Bengal Cat', 'BlacknOrange', 'female', '2', 'Qualifications for adopting:\r\n-food\r\n-love\r\n-care\r\n-more food', 'Yes, Vaccinated !', '1653644663adopt20.jpg', 0, 0, 0, '2022-05-27 01:44:24', '2022-05-27 01:44:24');

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
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `own_pet` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `profile` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.users: ~31 rows (approximately)
INSERT INTO `users` (`id`, `role_id`, `email`, `password`, `fname`, `mname`, `lname`, `address`, `gender`, `birthday`, `contact`, `own_pet`, `status`, `is_delete`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 'saveapawmanagement@gmail.com', '$2y$10$EUrQklecqgF/Ue0ykfAkAeI8ln6AGFP.QTx0JP3Z7yxSqFadmjgEC', 'Save', 'A', 'Paw', 'Cordova, Cebu', 'male', '1999-01-01', '912345678', 'no', 'active', 0, '1653546498elizabeth.png', '2sz0azgevDjnj62UDzW3pPFv6tpqQwequ5daFWETzEUytrOOBccfDerH8gBk', '2022-05-19 15:01:52', '2022-05-25 22:28:18'),
	(2, 2, 'cel.savapaw@gmail.com', '$2y$10$EUrQklecqgF/Ue0ykfAkAeI8ln6AGFP.QTx0JP3Z7yxSqFadmjgEC', 'Cel', 'Kota', 'Gonzaga', 'Babag, Lapu-Lapu City', 'male', '1995-01-01', '912345678', 'no', 'active', 0, 'avatar.png', 'ST3U8QrXdLt3dTHiPVbJbZDqZxLiW6YDdg7jxlp7WQYAjNAhxEJJAV5wTuM9', '2022-05-19 15:03:58', '2022-05-19 07:32:23'),
	(3, 3, 'reo@gmail.com', '$2y$10$QoRx1sUOw0NwwXYPa8R3.e/Wisfzari.UpekatijvMbRRcUAepTv2', 'Reo', 'Lino', 'Pagara', 'Poblacion, Cordova, Cebu', 'male', '1998-12-09', '912321425', 'yes', 'active', 0, 'avatar.png', 'vJI8RhwGXm5UmYNaltcXmdWxTupklv2xlQCP8nW5z8znJh10O5tFugtTxWBL', '2022-05-19 07:04:55', '2022-05-19 07:04:55'),
	(4, 3, 'charles@gmail.com', '$2y$10$8kOMtAYRixakJSWQIy/.Me7S91K7r6eeQ5X8XgjphjNVf08rq2876', 'Charles', 'Pino', 'Lagnason', 'Mactan, Lapu-lapu, City x', 'male', '2001-01-01', '2147483647', 'yes', 'active', 0, '1653485218pngkit_cool-png_330367.png', 'UgbeI6gF7o37meEtdY5t0YlEEudScfyXqsGCUaoPAJjIbmy9B0cnIOZBNcGv', '2022-05-19 07:08:26', '2022-05-25 18:03:49'),
	(5, 2, 'yaslyn.saveapaw@gmail.com', '$2y$10$g1zQoAp1LflmgomeSx1kEexH.cw3wm0tCgVYE2GwsophTxFU/SfY.', 'Yaslyn', 'Tulda', 'Amoin', 'Gun-ob, Lapu-lapu City', 'female', '1995-01-01', '2147483647', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-19 07:25:49', '2022-05-19 07:25:49'),
	(6, 2, 'test123@gmail.com', '$2y$10$QjZ.12Ms/1s8QTJiKD8jGepAHRZV0NRza7Hggn9f.cpIQTa.nJMZK', 'test123', 'Pino', 'test', '729 Fairmount Avenue Suite 100', 'male', '1993-01-01', '912345677', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-25 13:31:28', '2022-05-25 13:31:28'),
	(7, 3, 'cel@gmail.com', '$2y$10$ILicCS8ywrEGcz0C3tLDD.mqXJ8XzbK9EUr9wWIw2dhlcK7aSr.n.', 'Cel', 'Mill', 'Benitez', 'motorpool', 'female', '2022-05-26', '933333333', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 06:28:07', '2022-05-26 06:28:07'),
	(8, 2, 'a@gmail.com', '$2y$10$85CP7K05C00.Cm9U/wzzwesc4aZ6s4lMYdc.6YAD0fu2R6v28V5gW', 'Cel', 'ew', 'Benitez', 'motorpool', 'female', '2022-05-26', '933333333', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 07:39:15', '2022-05-26 07:39:15'),
	(9, 3, 'diego@gmail.com', '$2y$10$3rIPgblb6uc4UGimMkF5OOqbyynxC0ZwNQ8.kQjuLi1nnxghrfPca', 'diego', 'imba', 'gott', 'dikoy', 'male', '2013-02-04', '933333333', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 09:57:09', '2022-05-26 09:57:09'),
	(10, 3, 'jeffreymabanal@gmail.com', '$2y$10$ItSVAfNox7hou3Nj8BIJIegeON1jP.ui7cDYxj8vPA./jHfdQkzrK', 'Jeffrey', 'N', 'Mabanal', 'Sudtonggan Basak LLC', 'male', '1997-12-02', '933333333', 'no', 'active', 0, 'avatar.png', NULL, '2022-05-26 11:20:39', '2022-05-26 11:20:39'),
	(11, 3, 'bryne@gmail.com', '$2y$10$qM9JQmDBZOKtJqA/N5NsI.dCtEEPIIpbKgNKEO54pPylSoLVqOmN.', 'gab', 'eli', 'abuzo', 'Sudtonggan Basak LLC', 'male', '2011-05-09', '928185435', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 18:16:36', '2022-05-26 18:16:36'),
	(12, 3, 'Lau@gmail.com', '$2y$10$iY.j4G/xkVk.iSBZbtwL6edEBp0u/mE9PlVWi276oEidYdKZu38dG', 'Lau', 'Rynne', 'Conde', 'gunob', 'female', '2002-05-22', '928185435', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 21:48:06', '2022-05-26 21:48:06'),
	(13, 3, 'Chad@gmail.com', '$2y$10$9zwK1hiTNlOPT.UizO8LV.dQK.NStLfGy//6z/UyUPGN359ftAAhe', 'Chad', 'Degamo', 'Baguio', 'Pilipog,Cordova,Cebu', 'male', '1998-09-09', '988573424', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 22:00:11', '2022-05-26 22:00:11'),
	(14, 3, 'Kayra@gmail.com', '$2y$10$1aIR1lW9zYIh400tWOA4ouVPwruVvKiOZspsLSmjTJDU05/wkmjJ2', 'Kayra', 'Corro', 'Smith', 'Dapitan,Cordova,Cebu', 'female', '1997-09-27', '987234561', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 22:06:22', '2022-05-26 22:06:22'),
	(15, 3, 'Nancy@gmail.com', '$2y$10$m5Nm3AkwZyg6tO0/Y8sFAeM5pCmcxGb.wCjrZ0VeSRxZt.NdkN27e', 'Nancy', 'Davis', 'Garcia', 'Ibabao,Cordova,Cebu', 'female', '1995-02-02', '985342166', 'yes', 'active', 0, '1653657636elizabeth.png', NULL, '2022-05-26 22:11:05', '2022-05-27 05:20:36'),
	(16, 3, 'yassy@gmail.com', '$2y$10$mGPmAtYJt.lvDLfEbugE9.6AGfGvjKmoFUVmFzpg1qk6CpQDT8ia6', 'yaslyn', 'panal', 'ortega', 'Alegria', 'female', '2019-01-09', '927002062', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:23:28', '2022-05-26 23:23:28'),
	(17, 3, 'Jayra@gmail.com', '$2y$10$TA2T9Jw14OTpLwWHNOvLzOBQ7FZaObAg.3IWwADgqcscRDT24Tdly', 'Jayra', 'Macalandag', 'Cajelo', 'Pilipog,Cordova,Cebu', 'female', '1996-09-27', '923678124', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:27:21', '2022-05-26 23:27:21'),
	(18, 3, 'Laila@gmail.com', '$2y$10$PEqM3nLK.xXX4h/TRVcRGOEZHLlf81.ksjjhHXuOmSQ4zTUyxpXwq', 'Laila', 'Dauis', 'Miller', 'Gabi,Cordova,Cebu', 'female', '1994-02-24', '927882723', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:29:39', '2022-05-26 23:29:39'),
	(19, 3, 'Victoria@gmail.com', '$2y$10$2j0FEYxDx8Gjpwt03K6wVeQvh8WBernNyNumH2VTzTnhEShLAKWou', 'Victoria', 'Raut', 'Potot', 'Cogon,Cordova,Cebu', 'female', '1990-04-14', '923773265', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:31:48', '2022-05-26 23:31:48'),
	(20, 3, 'Tiona@gmail.com', '$2y$10$2XVlp.2iqdYOWkMwCtQ1yOjlkRXdlX.9Iuw7bfcI/kH4wA/FPzlLS', 'Tiona', 'Casul', 'Smith', 'Poblacion,Cordova,Cebu', 'female', '1998-08-21', '987654521', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:34:37', '2022-05-26 23:34:37'),
	(21, 3, 'Lian@gmail.com', '$2y$10$/tSKZQOja7s54faL0/fkL.6iCMd4AaTA.vDVAB0Rb/HgGTcwFe14y', 'Lian', 'Pitagara', 'Tura', 'Sudtonggan Basak LLC', 'male', '1990-09-27', '923543243', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:37:11', '2022-05-26 23:37:11'),
	(22, 3, 'Caithlyn@gmail.com', '$2y$10$dhc2zMyRqx/qlBmA581E/ODhiFsSqEtV7swI3CG6YQ92lYtuQqIfG', 'Caithlyn', 'Jones', 'Garcia', 'agus LLC', 'female', '1992-04-05', '927543412', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:41:03', '2022-05-26 23:41:03'),
	(23, 3, 'Jorge@gmail.com', '$2y$10$zEtxfNdHPfQBMSZfq5KwEuzn8EElFTiQT8QHh.4kJtb.Jxue2b4zW', 'Jorge', 'Rylle', 'Miller', 'gunob', 'male', '1999-07-26', '927453154', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:43:34', '2022-05-26 23:43:34'),
	(24, 3, 'Kianna@gmail.com', '$2y$10$MCHpuiRf9dFJ1WtOtU0Gh.r1XFlnef.eK9l33EtT98ahbjkfxc1QG', 'Kianna', 'Julse', 'Williams', 'aldea', 'female', '1999-01-21', '923413452', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:45:41', '2022-05-26 23:45:41'),
	(25, 3, 'Michelle@gmail.com', '$2y$10$VQdqxj/RrFFhNHe3vmAI0OgDJiccEwX.c.gbd30y8zFRbLOHQgmFu', 'Michelle', 'Mill', 'Potot', 'aldea', 'female', '2003-05-23', '987234512', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:48:08', '2022-05-26 23:48:08'),
	(26, 3, 'Sarah@gmail.com', '$2y$10$r.soBmEP/aSbcKbfo1qu3OwgdP59uNLlq0HXMG3Yl7Z/ZZWPQ4LKG', 'Sarah Kane', 'Brown', 'Abendan', 'Sudtonggan Basak LLC', 'female', '1995-09-20', '967543216', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:49:54', '2022-05-26 23:49:54'),
	(27, 3, 'Larry@gmail.com', '$2y$10$p/vGiDx2E.1lgruC49KchODLoHW8NMCKgebU.npKHAAdGxuWJByUe', 'Larry', 'Eli', 'Conde', 'aldea', 'male', '1994-06-21', '987234516', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:54:03', '2022-05-26 23:54:03'),
	(28, 3, 'Geraldine@gmail.com', '$2y$10$pvv/1KkE5AT9zN4B1XbysOkKhzvYcMnV4HE7a4exdjQMRDwZY4dDK', 'Geraldine', 'Bohol', 'Balo', 'agus LLC', 'female', '1990-04-28', '923413421', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:56:21', '2022-05-26 23:56:21'),
	(29, 3, 'Kimberly@gmail.com', '$2y$10$IgwZ6sudfXfqvB7bav3BR.GU/9CdYJOyt/HxvUZt9PBCCTPvSg9RG', 'Kimberly', 'Lopez', 'Brown', 'gunob', 'female', '1994-06-26', '978653421', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-26 23:58:24', '2022-05-26 23:58:24'),
	(30, 3, 'Larra@gmail.com', '$2y$10$m0oYXm.OoOrWo0ip.2efzea.as0cGig.2T6TzGqCsHyWIb8udaI0m', 'Larra', 'Lee', 'Sanchez', 'Sudtonggan Basak LLC', 'female', '1998-02-23', '943765432', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-27 00:00:37', '2022-05-27 00:00:37'),
	(31, 3, 'test@gmail.com', '$2y$10$ujH3zch72aQ0Pcqd/A.El.goEozj.K00Mxr.ufuycVUeUrNrF8JMi', 'test', 'test', 'test', 'Sudtonggan Basak LLC', 'male', '2000-01-01', '12345678900', 'yes', 'active', 0, 'avatar.png', NULL, '2022-05-27 01:55:18', '2022-05-27 01:55:18');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
