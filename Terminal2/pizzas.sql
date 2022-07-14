-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 10 2022 г., 23:19
-- Версия сервера: 5.7.36
-- Версия PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pizzas`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pizza_data`
--

DROP TABLE IF EXISTS `pizza_data`;
CREATE TABLE IF NOT EXISTS `pizza_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1413 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pizza_data`
--

INSERT INTO `pizza_data` (`id`, `item`, `price`) VALUES
(1, 'Pepperoni', 12),
(2, 'Village', 14),
(3, 'Gavai', 16),
(4, 'Mashroom', 18),
(5, '21', 5),
(6, '26', 6),
(7, '31', 7),
(8, '45', 8),
(9, 'Cheese sauce', 10),
(10, 'Sweet and sour', 11),
(11, 'Garlic sauce', 14),
(12, 'Barbeku', 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
