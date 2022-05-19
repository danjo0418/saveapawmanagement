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
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.adopt: ~3 rows (approximately)
INSERT INTO `adopt` (`id`, `pet_id`, `user_id`, `no_pet`, `reason`, `id_type`, `id_no`, `filename`, `is_delete`, `created_at`, `updated_at`) VALUES
	(1, 5, 2, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi u', 'Drivers License', '123-3341234-3', '1652929841drivers-license-e1527147351417.jpg', 0, '2022-05-18 19:10:41', '2022-05-18 19:10:41'),
	(2, 9, 3, 3, 'e et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Drivers License', '123-3341234-3', '1652933861drivers-license-e1527147351417.jpg', 0, '2022-05-18 20:17:41', '2022-05-18 20:17:41'),
	(3, 12, 2, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Unified Multi-Purpose (UMID)', '123-3341234-3', '1652964103umid.jpg', 0, '2022-05-19 04:41:43', '2022-05-19 04:41:43');

-- Dumping structure for table db_spms.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.blog: ~0 rows (approximately)

-- Dumping structure for table db_spms.claim
CREATE TABLE IF NOT EXISTS `claim` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `witness_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witness_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `witness_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.claim: ~4 rows (approximately)
INSERT INTO `claim` (`id`, `pet_id`, `user_id`, `filename`, `witness_email`, `witness_name`, `witness_contact`, `is_delete`, `created_at`, `updated_at`) VALUES
	(1, 10, 2, '1652931445lost.jpg', 'dsad@gmail.com', 'Yawa', '3213213', 0, '2022-05-18 19:37:25', '2022-05-18 19:37:25'),
	(2, 5, 10, '1652934095lost.jpg', 'dsad@gmail.com', 'Yawa', '3213213', 0, '2022-05-18 20:21:35', '2022-05-18 20:21:35'),
	(3, 5, 2, '1652964298lost.jpg', 'dsad3123@gmail.com', 'Test312', '0912321312', 0, '2022-05-19 04:44:58', '2022-05-19 04:44:58'),
	(4, 5, 2, '1652964671lost.jpg', 'dsad3123@gmail.com', 'Test312', '0912321312', 0, '2022-05-19 04:51:11', '2022-05-19 04:51:11');

-- Dumping structure for table db_spms.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.comments: ~0 rows (approximately)

-- Dumping structure for table db_spms.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.migrations: ~9 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2022_05_15_011440_create_role_table', 1),
	(4, '2022_05_16_054901_create_pets__table', 1),
	(5, '2022_05_16_102220_create_blog_table', 1),
	(6, '2022_05_17_042600_create_adopt_table', 1),
	(7, '2022_05_17_042834_create_claim_table', 1),
	(8, '2022_05_17_043128_create_comments_table', 1),
	(9, '2022_05_17_043646_create_reacts_table', 1);

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
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `is_claim` int(11) NOT NULL DEFAULT 0,
  `is_adapt` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.pets: ~11 rows (approximately)
INSERT INTO `pets` (`id`, `user_id`, `status`, `name`, `breed`, `color`, `gender`, `age`, `description`, `filename`, `is_approved`, `is_claim`, `is_adapt`, `created_at`, `updated_at`) VALUES
	(1, 1, 'adopt', 'Apoo', 'Bulldog', 'Brown', 'male', '3 months', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '1652834282bulldog.jpg', 0, 0, 0, '2022-05-17 16:38:02', '2022-05-17 16:38:02'),
	(2, 1, 'adopt', 'Test', 'Labrador', 'White', 'male', '7 months', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi', '1652834524labrador.jpg', 0, 0, 0, '2022-05-17 16:42:04', '2022-05-17 16:42:04'),
	(3, 2, 'lostandfound', 'Lorem Test', 'Puppy', 'Black', 'male', '7 months', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '1652835344puppy.jpg', 2, 0, 0, '2022-05-17 16:55:44', '2022-05-18 17:32:23'),
	(5, 4, 'lostandfound', 'Dolor', 'Chihuahua', 'Dark Brown', 'male', '8 months', 'abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '1652835955Chihuahua-standing-in-three-quarter-view.jpg', 1, 0, 0, '2022-05-17 17:05:55', '2022-05-18 17:03:47'),
	(6, 2, 'adopt', 'Cillium x', 'Boxer x', 'Brown x', 'female', '1 year x', 'The Boxer is a medium to large, short-haired dog breed of mastiff-type, developed in Germany. The coat is smooth and tight-fitting; colors are fawn, brindled, or white, with or without white markings. yawaaaaa x', '165292046116528362541200px-Male_fawn_Boxer_undocked.jpg', 2, 0, 0, '2022-05-17 17:10:54', '2022-05-18 17:03:56'),
	(8, 2, 'adopt', 'Miky', 'Boston Terrier', 'White/Black', 'male', '6 months', 'The Boston Terrier is a breed of dog originating in the United States of America. This "American Gentleman" was accepted in 1893 by the American Kennel Club as a non-sporting breed. Color and markings are important when distinguishing this breed from the AKC standard.', '1652836776Boston-Terrier-On-White-03.jpg', 0, 0, 0, '2022-05-17 17:19:36', '2022-05-17 17:19:36'),
	(9, 1, 'adopt', 'Riki', 'Afghan Hound', 'Light Brown', 'male', '8 months', 'The Afghan Hound is a hound that is distinguished by its thick, fine, silky coat and its tail with a ring curl at the end. The breed is selectively bred for its unique features in the cold mountains of Afghanistan. Its local name is Tāžī Spay', '1652837144Afghan_dog_-_cropped.jpg', 1, 0, 0, '2022-05-17 17:25:44', '2022-05-17 17:25:44'),
	(10, 1, 'lostandfound', 'dsadsa', 'Labrador', 'White', 'female', '7 months', 'dsadsad', '1652925173165292046116528362541200px-Male_fawn_Boxer_undocked.jpg', 1, 0, 0, '2022-05-18 17:52:53', '2022-05-18 17:52:53'),
	(11, 3, 'adopt', 'Naniiii', 'Puppy', 'White/Brown', 'male', '7 months', 'A hernia happens when the contents of a dog’s abdomen pushes through a hole or weak area in the muscle wall. Hernias can be congenital, which means the dog had the condition at birth. They can also be caused by a traumatic injury, such as getting hit by a car or being bitten by another dog. In addition, hernias can happen to female dogs during pregnancy.', '1652925532dogssss.jpg', 0, 0, 0, '2022-05-18 17:58:52', '2022-05-18 17:58:52'),
	(12, 1, 'adopt', 'Yatorooooo', 'Poodle', 'Light Brown', 'male', '1 year', 'A hernia happens when the contents of a dog’s abdomen pushes through a hole or weak area in the muscle wall. Hernias can be congenital, which means the dog had the condition at birth. They can also be caused by a traumatic injury, such as getting hit by a car or being bitten by another dog. In addition, hernias can happen to female dogs during pregnancy.', '1652925866labrador.jpg', 1, 0, 0, '2022-05-18 18:04:27', '2022-05-18 18:04:27'),
	(13, 2, 'adopt', 'Test x', 'Puppy x', 'White x', 'male', '3 months', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla', '1652963739labrador.jpg', 1, 0, 0, '2022-05-19 04:35:39', '2022-05-19 04:39:39');

-- Dumping structure for table db_spms.reacts
CREATE TABLE IF NOT EXISTS `reacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.reacts: ~0 rows (approximately)

-- Dumping structure for table db_spms.role
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.role: ~2 rows (approximately)
INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '2022-05-17 05:40:55', '2022-05-17 05:40:55'),
	(2, 'user', '2022-05-17 05:40:59', '2022-05-17 05:40:59');

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
  `is_approved` int(11) unsigned NOT NULL DEFAULT 0,
  `profile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_spms.users: ~8 rows (approximately)
INSERT INTO `users` (`id`, `role_id`, `email`, `password`, `fname`, `mname`, `lname`, `address`, `gender`, `birthday`, `contact`, `own_pet`, `status`, `is_approved`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 'saveapawmanagement@gmail.com', '$2y$10$WnvVdQ6XkofYOdlqHyd6pOtFoBVZgb7s.GQMNYyRFxglRQy4xwjke', 'Save', 'A', 'Paw', 'Cordova', 'male', '2022-05-17', '09223763288', 'no', 'active', 1, '1652886860dr_ben.jpg', 'dF4Xez3ZgTZd7pF2E70Nh5CZEQBl0ziQxysXIpajux7xZvd1t9SOi1tobwKL', '2022-05-17 05:41:40', '2022-05-18 07:14:20'),
	(2, 2, 'renan@gmail.com', '$2y$10$WnvVdQ6XkofYOdlqHyd6pOtFoBVZgb7s.GQMNYyRFxglRQy4xwjke', 'Renan', 'Nobleza', 'Escabas', 'Poblacion, Cordov', 'male', '1998-01-01', '0912345678', 'yes', 'active', 1, '1652887200maxresdefault.jpg', 'BRFYG4f9ZCyGS2NClVnzy4fi6XdnnWkALktbYEvrDKQyXhfhtnTKBpq9PJ7Q', '2022-05-17 05:42:35', '2022-05-19 04:34:03'),
	(3, 2, 'charlsdavidlagnason@yahoo.com', '$2y$10$NdBo5ZOg8R3ITKoD8N8ctuDfhYPgeI1TKojaekUSOD2biXHBD7bwW', 'Charles', 'Pagodpod', 'Magdayig', 'Babag, Lapu-lapu City', 'male', '1997-04-05', '0912321425', 'yes', 'active', 1, 'avatar.png', 'kAwSaeQaxy9DjxwRppattk10J13UqbXjUICV9tcttES47FH33NxwSO9vaxY1', '2022-05-17 01:49:08', '2022-05-18 06:38:45'),
	(4, 2, 'mark@gmail.com', '$2y$10$559ZTjflUNGPbJ3epSXMruTu1hborSIOfXE1uo.RXc6KK7QRAU.bO', 'Mark', 'Guino', 'Robredo', 'Agusan Del Norte', 'female', '1990-01-01', '3213213', 'yes', 'inactive', 0, 'avatar.png', NULL, '2022-05-17 01:53:00', '2022-05-18 06:38:25'),
	(8, 2, 'sheesh@gmail.com', '$2y$10$ZqGjNJrp2qla3zVNKNauPudpYPQNKdjcZvvQ58GUzWiaJ9xlGXjjK', 'Sees', 'sess', 'dsad', 'dsadsadas', 'female', '1993-03-21', 'dsadsa', 'yes', 'inactive', 0, 'avatar.png', NULL, '2022-05-17 18:34:29', '2022-05-18 05:25:56'),
	(9, 1, 'cel.saveapaw@gmail.com', '$2y$10$gA.bPGIN49sD4fivlnrQHu4E.3EDmI.GTOj9/va5sP43tkzbfFCgW', 'Cel', 'Fernandez', 'Moliva', 'Babag, Lapu-lapu City', 'male', '1999-01-01', '0916332323', 'yes', 'active', 1, 'avatar.png', NULL, '2022-05-17 18:37:17', '2022-05-18 05:25:45'),
	(10, 2, 'tata@gmail.com', '$2y$10$WnvVdQ6XkofYOdlqHyd6pOtFoBVZgb7s.GQMNYyRFxglRQy4xwjke', 'tasta', 'dsada', 'dsadsa', 'dsadsadsadas', 'female', '1111-11-11', '3123213213', 'yes', 'active', 1, 'avatar.png', 'aNaIeCPUZdKHkxPodfRLIFwc4II71RYpfwY4ktjCV1WkKczIHSJxwnua3YaR', '2022-05-18 18:05:11', '2022-05-18 18:05:11'),
	(11, 2, 'awaw@gmail.com', '$2y$10$nOnFr3oP.ZeeiS4.5Y8FPObX/eojXdUeeLgHtlbU9nXzFcAjcrmJa', 'aw', 'aw', 'aw', 'dsadsadas', 'female', '1333-11-23', 'dasdsad', 'yes', 'inactive', 0, 'avatar.png', NULL, '2022-05-18 18:06:11', '2022-05-18 18:06:11');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
