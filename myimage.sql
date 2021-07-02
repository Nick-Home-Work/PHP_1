-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 01 2021 г., 20:30
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myimage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `image_id` int NOT NULL,
  `adress_image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Acounter` int NOT NULL,
  `shot_info` varchar(255) NOT NULL,
  `all_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`image_id`, `adress_image`, `price`, `name`, `Acounter`, `shot_info`, `all_info`) VALUES
(1, '//localhost/img/1.jpg', 1600, 'озеро', 4, 'коротко о товаре коротко о товаре коротко о товаре', 'все о товаре все о товаре все о товаре все о товаре все о товаре все о товаре все о товаре все о товаре'),
(2, '//localhost/img/2.jpg', 2500, 'гора', 13, 'коротко о товаре коротко о товаре коротко о товаре', 'все о товаре все о товаре все о товаре все о товаре все о товаре это круто'),
(3, '//localhost/img/3.jpg', 3000, 'лес', 6, 'коротенько о товаре коротенько о товаре коротенько о товаре', 'все о товаре все о товаре все о товаре все о товаре все о товаре все о товаре все о товаре берите'),
(4, '//localhost/img/4.jpg', 5000, 'каньон', 27, 'коротенько о товаре коротенько о товаре коротенько о товаре', 'Полная информация текст не важен учим то php\r\nПолная информация текст не важен учим то php'),
(5, '//localhost/img/5.jpeg', 2300, 'кпасрта', 4, 'коротко информация текст не важен учим то php\r\nкоротко информация текст не важен учим то php', 'Полная информация текст не важен учим то php\r\nПолная информация текст не важен учим то php');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
