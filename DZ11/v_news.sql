-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 20 2017 г., 09:33
-- Версия сервера: 5.5.54
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `v_news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `v_news`
--

CREATE TABLE `v_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `vk_id` int(10) UNSIGNED DEFAULT NULL,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `marked_as_ads` int(11) DEFAULT NULL,
  `post_type` varchar(50) DEFAULT NULL,
  `text` longtext,
  `comments` int(11) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `reposts` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` text,
  `description` text,
  `preview_page` varchar(255) DEFAULT NULL,
  `preview_url` varchar(255) DEFAULT NULL,
  `image_big` varchar(255) DEFAULT NULL,
  `src_big` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Новости групп';

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `v_news`
--
ALTER TABLE `v_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `v_news`
--
ALTER TABLE `v_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
