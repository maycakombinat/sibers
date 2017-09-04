-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 04 2017 г., 15:50
-- Версия сервера: 5.6.31-log
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `russibers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gerder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birsday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `fname`, `username`, `password`, `gerder`, `birsday`, `created_at`, `updated_at`, `remember_token`) VALUES
(14, 'Руслан', 'Бухаров', 'tetrapak', '$2y$10$mIb.29/zhtQP//z6lHxQyOog/iaWvgIK41IBg.aTyazXmjr6hqARS', 'Мужской', '09-25-91', '2017-09-04 09:43:06', '2017-09-04 09:44:31', '5m99vYj8Wxudli7knGYLGpoGzUDx9puX9pLjzvLH6zg3bvVFJUrnJGhtXloP'),
(18, 'David', 'Backham', 'david', '$2y$10$OUDMbnH25VM93wzA8ij9g.F58Om179kiwg7nSAsxqlLdEHyUFYE0W', 'Мужской', '09-19-63', '2017-09-04 09:46:11', '2017-09-04 09:46:11', NULL),
(19, 'David', 'Guetta', 'guetta', '$2y$10$BqspLwiMigZhui87OQbXE.M0AHa4u6oSWHueyf.qg6f84ng7fJYEK', 'Мужской', '09-25-85', '2017-09-04 09:46:36', '2017-09-04 09:46:36', NULL),
(20, 'Мария', 'Талыпова', 'talypova', '$2y$10$C0aoQP.htmERY7l7qO.Iu.hi80rAwwyL150Ikni5rltVwnCMKJro6', 'Женский', '09-25-95', '2017-09-04 09:47:22', '2017-09-04 09:47:22', NULL),
(21, 'Наташа', 'Аккозова', 'akkozova', '$2y$10$tv3jeElAtvBHAYgnVoLqzOnJUlcVcZ/Diba6jazMsrdRXUQXCXdUm', 'Женский', '09-26-17', '2017-09-04 09:47:57', '2017-09-04 09:47:57', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
