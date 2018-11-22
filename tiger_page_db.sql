-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 22 2018 г., 18:31
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tiger_page_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `offer` text NOT NULL,
  `img` text NOT NULL,
  `text_title` text NOT NULL,
  `content` text NOT NULL,
  `tag` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Таблица страниц';

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `offer`, `img`, `text_title`, `content`, `tag`, `description`) VALUES
(1, 'Test', 'Test offer', 'img url', 'Test text title', 'Test content', '#tag', 'description'),
(2, 'Test2', 'Offer', 'IMG', 'Text Title', 'COnten', 'Tag', 'Descr'),
(4, '2', 'qweqwe', '347573-19.jpg', 'qwqwe', 'qweqwe', 'qweqwe', 'ewewe'),
(6, '3', 'qweqwe', '', 'qweqwe', 'qweqwe', 'qweqwe', 'qweqwe'),
(7, 'Changed', 'sdasd', '', 'asdasd', 'sadasd', 'asdasd', 'asdasd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
