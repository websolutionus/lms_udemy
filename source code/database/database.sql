-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for edu_core
DROP DATABASE IF EXISTS `edu_core`;
CREATE DATABASE IF NOT EXISTS `edu_core` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `edu_core`;

-- Dumping structure for table edu_core.admins
DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.admins: ~0 rows (approximately)
DELETE FROM `admins`;
INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$RTxSTA0bti7Zd5wCqWyqCuC45.5FckPOt69raE3uguNRPk/LgLjya', NULL, '2024-09-11 00:13:30', '2024-09-11 00:13:30');

-- Dumping structure for table edu_core.cache
DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.cache: ~0 rows (approximately)
DELETE FROM `cache`;

-- Dumping structure for table edu_core.cache_locks
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.cache_locks: ~0 rows (approximately)
DELETE FROM `cache_locks`;

-- Dumping structure for table edu_core.courses
DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `instructor_id` bigint unsigned NOT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `course_type` enum('course') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'course',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_zone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demo_video_storage` enum('upload','youtube','vimeo','external_link') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demo_video_source` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `capacity` int DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `certificate` tinyint(1) DEFAULT '1',
  `qna` tinyint(1) DEFAULT '1',
  `message_for_reviewer` text COLLATE utf8mb4_unicode_ci,
  `is_approved` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `status` enum('active','inactive','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `course_level_id` bigint unsigned DEFAULT NULL,
  `course_language_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_instructor_id_foreign` (`instructor_id`),
  CONSTRAINT `courses_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.courses: ~6 rows (approximately)
DELETE FROM `courses`;
INSERT INTO `courses` (`id`, `instructor_id`, `category_id`, `course_type`, `title`, `slug`, `seo_description`, `duration`, `time_zone`, `thumbnail`, `demo_video_storage`, `demo_video_source`, `description`, `capacity`, `price`, `discount`, `certificate`, `qna`, `message_for_reviewer`, `is_approved`, `status`, `course_level_id`, `course_language_id`, `created_at`, `updated_at`) VALUES
	(1, 2, 12, 'course', 'Veniam aliquam qui', 'veniam-aliquam-qui', 'Eu in aut autem dist', '1333', NULL, '/uploads/educore_66ebd38426b02.png', 'upload', 'https://edu-core.test/files/2/test/Screenshot_55.png', 'Voluptate maiores qu', NULL, 632, NULL, 1, 0, NULL, 'pending', 'draft', 5, 7, '2024-09-19 01:32:20', '2024-09-22 21:59:53'),
	(2, 2, NULL, 'course', 'Autem illo repudiand', 'autem-illo-repudiand', 'Dolores sit ab ipsum', NULL, NULL, '/uploads/educore_66ebed6522b25.png', NULL, NULL, 'Doloremque ut esse', NULL, 594, NULL, 1, 1, NULL, 'pending', 'draft', NULL, NULL, '2024-09-19 03:22:45', '2024-09-19 03:22:45'),
	(3, 2, NULL, 'course', 'A iste nostrum rerum', 'a-iste-nostrum-rerum', 'Quae sunt sit sapie', NULL, NULL, '/uploads/educore_66ebefc275563.png', NULL, NULL, 'Officia aliquid tota', NULL, 641, NULL, 1, 1, NULL, 'pending', 'draft', NULL, NULL, '2024-09-19 03:32:50', '2024-09-19 03:32:50'),
	(4, 2, NULL, 'course', 'A iste nostrum rerum', 'a-iste-nostrum-rerum', 'Quae sunt sit sapie', NULL, NULL, '/uploads/educore_66ebeff1ea7f5.png', NULL, NULL, 'Officia aliquid tota', NULL, 641, NULL, 1, 1, NULL, 'pending', 'draft', NULL, NULL, '2024-09-19 03:33:37', '2024-09-19 03:33:37'),
	(5, 2, NULL, 'course', 'Ut impedit quia qua', 'ut-impedit-quia-qua', 'Velit vel harum qui', NULL, NULL, '/uploads/educore_66ebf008d054d.png', NULL, NULL, 'Ipsum sint minim ne', NULL, 370, NULL, 1, 1, NULL, 'pending', 'draft', NULL, NULL, '2024-09-19 03:34:00', '2024-09-19 03:34:00'),
	(6, 2, NULL, 'course', 'Ut impedit quia qua', 'ut-impedit-quia-qua', 'Velit vel harum qui', NULL, NULL, '/uploads/educore_66ebf0622b142.png', NULL, NULL, 'Ipsum sint minim ne', NULL, 370, NULL, 1, 1, NULL, 'pending', 'draft', NULL, NULL, '2024-09-19 03:35:30', '2024-09-19 03:35:30'),
	(7, 2, 13, 'course', 'Est laborum Tempore', 'est-laborum-tempore', 'Perferendis non est', '3000', NULL, '/uploads/educore_66ef9a756d875.png', NULL, NULL, 'Voluptate sed fugiat', 100, 905, NULL, 1, 1, NULL, 'pending', 'draft', 3, 6, '2024-09-21 22:17:58', '2024-09-21 22:32:05'),
	(8, 2, 12, 'course', 'Test Course', 'test-course', 'test course', '3000', NULL, '/uploads/educore_66f0f002e8656.png', 'youtube', 'https://yt.com', 'this is a test description', NULL, 100, 90, 1, 1, NULL, 'pending', 'draft', 3, 6, '2024-09-22 22:35:15', '2024-09-23 22:47:32');

-- Dumping structure for table edu_core.course_categories
DROP TABLE IF EXISTS `course_categories`;
CREATE TABLE IF NOT EXISTS `course_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint unsigned DEFAULT NULL,
  `show_at_trending` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_categories_name_unique` (`name`),
  UNIQUE KEY `course_categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.course_categories: ~4 rows (approximately)
DELETE FROM `course_categories`;
INSERT INTO `course_categories` (`id`, `image`, `icon`, `name`, `slug`, `parent_id`, `show_at_trending`, `status`, `created_at`, `updated_at`) VALUES
	(8, '/uploads/educore_66e9343f55cc9.png', 'Quasi magni sit dist', 'Sydney Owen', 'sydney-owen', NULL, 1, 1, '2024-09-17 01:48:15', '2024-09-17 01:48:15'),
	(9, '/uploads/educore_66e934b0599c1.png', 'fasf asfasdf', 'Web Development', 'web-development', NULL, 1, 1, '2024-09-17 01:50:08', '2024-09-17 05:06:51'),
	(10, '/uploads/educore_66e953c4b8ce7.png', 'ti ti-olympics', 'Grapics Design', 'grapics-design', NULL, 1, 1, '2024-09-17 04:02:44', '2024-09-17 04:02:44'),
	(12, NULL, 'ti ti-code', 'HTML', 'html', 9, 1, 1, '2024-09-18 01:39:34', '2024-09-18 01:41:21'),
	(13, NULL, 'ti ti-brand-figma', 'Figma Design', 'figma-design', 10, 1, 1, '2024-09-18 01:43:49', '2024-09-18 01:43:49');

-- Dumping structure for table edu_core.course_chapters
DROP TABLE IF EXISTS `course_chapters`;
CREATE TABLE IF NOT EXISTS `course_chapters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_id` bigint unsigned NOT NULL,
  `course_id` bigint unsigned NOT NULL,
  `order` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_chapters_instructor_id_foreign` (`instructor_id`),
  KEY `course_chapters_course_id_foreign` (`course_id`),
  CONSTRAINT `course_chapters_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `course_chapters_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.course_chapters: ~0 rows (approximately)
DELETE FROM `course_chapters`;
INSERT INTO `course_chapters` (`id`, `title`, `instructor_id`, `course_id`, `order`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'asfsadf', 2, 8, 1, 1, '2024-09-23 01:32:14', '2024-09-23 01:32:14'),
	(2, 'Introduction', 2, 8, 2, 1, '2024-09-23 23:26:33', '2024-09-23 23:26:33');

-- Dumping structure for table edu_core.course_chapter_lessions
DROP TABLE IF EXISTS `course_chapter_lessions`;
CREATE TABLE IF NOT EXISTS `course_chapter_lessions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_id` bigint unsigned NOT NULL,
  `course_id` bigint unsigned NOT NULL,
  `chapter_id` bigint unsigned NOT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `storage` enum('upload','youtube','vimeo','external_link') COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` enum('video','audio','doc','file') COLLATE utf8mb4_unicode_ci NOT NULL,
  `downloadable` tinyint(1) NOT NULL DEFAULT '0',
  `order` int NOT NULL,
  `is_preview` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `lesson_type` enum('lesson','live') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_chapter_lessions_instructor_id_foreign` (`instructor_id`),
  KEY `course_chapter_lessions_course_id_foreign` (`course_id`),
  KEY `course_chapter_lessions_chapter_id_foreign` (`chapter_id`),
  CONSTRAINT `course_chapter_lessions_chapter_id_foreign` FOREIGN KEY (`chapter_id`) REFERENCES `course_chapters` (`id`) ON DELETE CASCADE,
  CONSTRAINT `course_chapter_lessions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  CONSTRAINT `course_chapter_lessions_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.course_chapter_lessions: ~0 rows (approximately)
DELETE FROM `course_chapter_lessions`;
INSERT INTO `course_chapter_lessions` (`id`, `title`, `slug`, `description`, `instructor_id`, `course_id`, `chapter_id`, `file_path`, `storage`, `volume`, `duration`, `file_type`, `downloadable`, `order`, `is_preview`, `status`, `lesson_type`, `created_at`, `updated_at`) VALUES
	(1, 'In ad ullam accusant', 'in-ad-ullam-accusant', 'Minima laborum esse', 2, 8, 1, 'fasdfasd', 'vimeo', NULL, 'Anim deserunt conseq', 'file', 0, 1, 1, 1, 'lesson', '2024-09-24 05:55:47', '2024-09-24 05:55:47');

-- Dumping structure for table edu_core.course_languages
DROP TABLE IF EXISTS `course_languages`;
CREATE TABLE IF NOT EXISTS `course_languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_languages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.course_languages: ~2 rows (approximately)
DELETE FROM `course_languages`;
INSERT INTO `course_languages` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(6, 'English', 'english', '2024-09-19 06:12:53', '2024-09-19 06:12:53'),
	(7, 'Turkish', 'turkish', '2024-09-19 06:13:03', '2024-09-19 06:13:03'),
	(8, 'Arabic', 'arabic', '2024-09-19 06:13:11', '2024-09-19 06:13:11');

-- Dumping structure for table edu_core.course_levels
DROP TABLE IF EXISTS `course_levels`;
CREATE TABLE IF NOT EXISTS `course_levels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_levels_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.course_levels: ~2 rows (approximately)
DELETE FROM `course_levels`;
INSERT INTO `course_levels` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(3, 'test 1', 'test-1', '2024-09-16 05:36:56', '2024-09-16 05:36:56'),
	(4, 'test 2', 'test-2', '2024-09-16 05:37:05', '2024-09-16 05:37:05'),
	(5, 'test 3', 'test-3', '2024-09-16 05:37:13', '2024-09-16 05:37:13');

-- Dumping structure for table edu_core.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table edu_core.jobs
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.jobs: ~0 rows (approximately)
DELETE FROM `jobs`;

-- Dumping structure for table edu_core.job_batches
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.job_batches: ~0 rows (approximately)
DELETE FROM `job_batches`;

-- Dumping structure for table edu_core.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.migrations: ~7 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2024_09_08_065327_create_admins_table', 1),
	(5, '2024_09_16_051540_create_course_languages_table', 2),
	(6, '2024_09_16_051550_create_course_levels_table', 3),
	(8, '2024_09_17_043302_create_course_categories_table', 4),
	(10, '2024_09_19_043003_create_courses_table', 5),
	(11, '2024_09_23_071232_create_course_chapters_table', 6),
	(12, '2024_09_24_053058_create_course_chapter_lessions_table', 7);

-- Dumping structure for table edu_core.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table edu_core.sessions
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.sessions: ~4 rows (approximately)
DELETE FROM `sessions`;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('Z8swcKvzIroz3ReONKBpRaYeOQJBdXsVhKVfhw7Z', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:130.0) Gecko/20100101 Firefox/130.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiM29FeFlNMDZDSm5GaDV0ZHNFQkdyY0wwcFlvZndYOG1sbWdxekRtayI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1NDoiaHR0cHM6Ly9lZHUtY29yZS50ZXN0L2luc3RydWN0b3IvY291cnNlcy84L2VkaXQ/c3RlcD0zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE2OiJjb3Vyc2VfY3JlYXRlX2lkIjtpOjg7fQ==', 1727178947);

-- Dumping structure for table edu_core.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role` enum('instructor','student') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/default-files/avatar.png',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `x` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approve_status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `login_as` enum('student','instructor') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table edu_core.users: ~4 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `role`, `image`, `name`, `headline`, `email`, `bio`, `gender`, `document`, `email_verified_at`, `password`, `facebook`, `x`, `linkedin`, `website`, `github`, `approve_status`, `login_as`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'student', '/uploads/educore_66e68c56961f2.png', 'Jhon Deo', 'Developer', 'user@gmail.com', 'test about me', 'male', '', NULL, '$2y$12$U490487AQYzp/vbCW1Hh.e8tuyDhfMKray2kn0AppKdtgZbGx7oNa', 'https://facebook.com', NULL, NULL, NULL, NULL, 'approved', NULL, NULL, NULL, '2024-09-15 01:27:18'),
	(2, 'instructor', '/default-files/avatar.png', 'Instructor', 'Developer', 'instructor@gmail.com', NULL, NULL, NULL, NULL, '$2y$12$Z61sabXCBObEiBsn8wX7VurLBQKMAo5np.pZVuHZhre0NedruVmJW', NULL, NULL, NULL, NULL, NULL, 'approved', NULL, NULL, NULL, '2024-09-15 03:31:02'),
	(3, 'student', '/default-files/avatar.png', 'Anika Kirk', NULL, 'qolerewipa@mailinator.com', NULL, NULL, NULL, NULL, '$2y$12$TSVETlRhI6H5MxiKqVhd9O0U7iogcWnRZQRn3j5utAhSHT1zodXaO', NULL, NULL, NULL, NULL, NULL, 'approved', NULL, NULL, '2024-09-11 00:16:34', '2024-09-11 00:16:34'),
	(4, 'instructor', '/default-files/avatar.png', 'Fay Frederick', NULL, 'fukoxyfo@mailinator.com', NULL, NULL, NULL, NULL, '$2y$12$9sHqgCy6mBWL4jGjS2jNnOainnTUwd8KHPTmyrIl/m4c3hbicPw5S', NULL, NULL, NULL, NULL, NULL, 'approved', NULL, NULL, '2024-09-11 00:26:38', '2024-09-11 05:24:16'),
	(5, 'instructor', '/default-files/avatar.png', 'Cade Goodman', NULL, 'giperi@mailinator.com', NULL, NULL, '/uploads/educore_66e14aa220248.pdf', NULL, '$2y$12$RIX/vPZ8tNw2Tqv6.5otF.yJrmArTA.6mQIpmesNiRFzmt9zRSpey', NULL, NULL, NULL, NULL, NULL, 'approved', NULL, NULL, '2024-09-11 01:45:38', '2024-09-12 00:09:10'),
	(6, 'student', '/default-files/avatar.png', 'Ivory Sykes', NULL, 'xeji@mailinator.com', NULL, NULL, '/uploads/educore_66e28f99c04e8.png', NULL, '$2y$12$T9IMjI3Jr0WJyLSEKra8pOC/CLmAwU2KwTvyinU5Kygkf7fQJn7xi', NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, '2024-09-12 00:52:10', '2024-09-12 00:52:10');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
