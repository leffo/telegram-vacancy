-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `answer` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `user_id` int DEFAULT NULL,
  `question_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `answers` (`id`, `answer`, `user_id`, `question_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	'This is an answer',	9,	1,	'2020-10-10 08:26:30',	'2020-10-10 08:26:30',	NULL),
(2,	'This is another answer',	10,	2,	'2020-10-10 08:29:34',	'2020-10-10 08:29:34',	NULL),
(3,	'This is another answer',	10,	2,	'2020-10-10 08:37:27',	'2020-10-10 08:37:27',	NULL);

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `question` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `questions` (`id`, `question`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	'Have you ever met your doppelganger?',	9,	'2020-10-10 06:42:59',	'2020-10-10 06:42:59',	NULL),
(2,	'Have you ever met your doppelganger?',	9,	'2020-10-10 08:26:30',	'2020-10-10 08:26:30',	NULL),
(3,	'Have you?',	10,	'2020-10-10 08:29:34',	'2020-10-10 08:29:34',	NULL),
(4,	'Have you?',	10,	'2020-10-10 08:37:27',	'2020-10-10 08:37:27',	NULL);

DROP TABLE IF EXISTS `upvotes`;
CREATE TABLE `upvotes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `answer_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `upvotes` (`id`, `answer_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	1,	10,	'2020-10-10 08:42:19',	'2020-10-10 08:42:19',	NULL),
(2,	1,	10,	'2020-10-10 08:43:03',	'2020-10-10 08:43:03',	NULL),
(3,	1,	10,	'2020-10-10 08:43:21',	'2020-10-10 08:43:21',	NULL),
(4,	1,	10,	'2020-10-10 12:24:54',	'2020-10-10 12:24:54',	NULL),
(5,	1,	10,	'2020-10-10 12:51:11',	'2020-10-10 12:51:11',	NULL);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9,	'leska',	'leskaalt@mail.ru',	NULL,	'2020-10-10 06:42:59',	'2020-10-10 06:42:59',	NULL),
(10,	'leff',	'lesff@mail.ru',	NULL,	'2020-10-10 08:29:34',	'2020-10-10 08:29:34',	NULL),
(11,	'leff',	'lesff@mail.ru',	NULL,	'2020-10-10 08:37:27',	'2020-10-10 08:37:27',	NULL);

-- 2020-10-14 13:56:39
