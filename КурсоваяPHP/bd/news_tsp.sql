-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 26 2023 г., 21:06
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `news_tsp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`admin_id`, `login`, `password`, `link`) VALUES
(1, 'admin', '123', 'sfsfd');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`categories_id`, `categories`) VALUES
(1, 'Новости'),
(2, 'Учеба'),
(3, 'Пркатика'),
(4, 'Спорт'),
(5, 'Олимпиады'),
(6, 'Конкурсы'),
(7, 'Проектный офис');

-- --------------------------------------------------------

--
-- Структура таблицы `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info_low` varchar(255) NOT NULL,
  `info_full` text NOT NULL,
  `date_add` date NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `information`
--

INSERT INTO `information` (`id`, `img`, `categories_id`, `name`, `info_low`, `info_full`, `date_add`, `link`) VALUES
(7, 'img/stud.jpg', 2, 'Учеба', 'Тут все про учебу', 'Полная информация об учебе', '2023-05-24', ''),
(9, 'img/pract.png', 3, 'Практика', 'Тут все про практику', 'Подробная информация', '2023-05-24', ''),
(11, 'img/olymp.png', 5, 'Олимпиада', 'Тут все про олимпиады школьников', '', '2022-03-29', ''),
(12, 'img/konk.png', 6, 'конкурс 1', 'Тут все про конкурсы', '', '2022-03-29', ''),
(13, 'img/pract.png', 7, 'Проектный офис', 'Тут все про проектный офис', '', '2022-03-29', ''),
(14, 'img/pract.png', 3, 'Практика2', 'Тут все про практику', 'Подробная информация будет здесь', '2023-05-24', ''),
(15, 'img/sport.jpg', 4, 'Спорт2', 'Тут все про спорт', '', '2022-03-28', ''),
(21, 'img/olymp.png', 5, 'Олимпиада', 'Тут все про олимпиады', '', '2023-05-24', ''),
(22, 'img/konk.png', 6, 'конкурс 3', 'Тут все про конкурсы', '', '2022-03-29', ''),
(23, 'img/pract.png', 7, 'Проектный офис 3', 'Тут все про проектный офис', '', '2022-03-29', ''),
(60, 'img/news.png', 1, 'Новость', 'первая новость на сайте', 'яыиымЫМ', '2023-06-26', '');

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `FIO` varchar(255) NOT NULL,
  `info_teach` text NOT NULL,
  `work` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `FIO`, `info_teach`, `work`, `img`) VALUES
(2, 'Марюнин Сергей Николаевич', 'На своих занятиях Сергей Николаевич рассказывает о основах разработки на платформе Unity. На дополнительных занятиях он знакомит студентов с технологией VR', 'Разработка игр', 'img/Serg.jpeg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Индексы таблицы `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Индексы таблицы `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT для таблицы `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`categories_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
