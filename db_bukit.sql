-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_bukit.books
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_bukit.books: ~5 rows (approximately)
INSERT INTO `books` (`id`, `name`, `author`, `date`, `description`, `created_at`, `updated_at`) VALUES
	(2, 'Shift 3', 'Rohmat Maulana Ishaq', '2023-09-22 00:00:00', 'Test\r\n1\r\n2\r\n3\r\n4', '2023-09-21 10:18:18', '2023-09-22 07:22:48'),
	(4, 'Shift 2', 'Rohmat Maulana Ishaq', '2023-09-22 00:00:00', 'test', '2023-09-21 18:51:05', '2023-09-21 19:17:16'),
	(5, 'Shift 3', 'Rohmat', '2023-09-23 00:00:00', '1\r\n2\r\n3\r\n4', '2023-09-21 19:18:24', '2023-09-22 07:21:01'),
	(6, 'Non Shift', 'Rohmat Maulana Ishaq', '2023-09-22 00:00:00', '1. Membuat Template \r\n2. Memperbaiki PC', '2023-09-22 03:54:11', '2023-09-22 04:25:24'),
	(10, 'Non Shift', 'Muhammad Diki Dwi Nugraha', '2023-09-23 00:00:00', '1.\r\n2.\r\n3.', '2023-09-22 04:29:51', '2023-09-22 07:20:43'),
	(11, 'Non Shift', 'Rohmat Maulana Ishaq', '2023-09-22 00:00:00', '1.\r\n2.', '2023-09-22 07:29:50', '2023-09-22 07:30:56'),
	(12, 'Non Shift', 'Rohmat Maulana Ishaq', '2023-09-22 00:00:00', 'Bekerja dengan ikhlas\r\nBerusaha baik bos', '2023-09-22 09:57:55', '2023-09-22 09:57:55');

-- Dumping structure for table db_bukit.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_bukit.migrations: ~2 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(4, '2023_09_20_162121_create_books_table', 1);

-- Dumping structure for table db_bukit.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_bukit.personal_access_tokens: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
