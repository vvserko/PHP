-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 14 2022 г., 14:47
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
-- База данных: `vvs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `publications`
--

DROP TABLE IF EXISTS `publications`;
CREATE TABLE IF NOT EXISTS `publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `preview` varchar(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `publications`
--

INSERT INTO `publications` (`id`, `title`, `date`, `short_content`, `content`, `author_name`, `preview`, `type`) VALUES
(1, 'Аварии', '2022-06-19 18:10:20', 'Произошла авария', 'Произошла авария на кобринском мосту в г Бресие', 'Серко', '/images/1.jpg', 'NewsPublication'),
(2, 'Свадьба', '2022-06-19 18:12:07', 'В бресте свадьба', 'В выходные произошла свадьба на варшасвком мостк', 'Кузнецов', '/images/2.jpg', 'ArticlPublication'),
(3, 'Аварии', '2022-06-19 18:10:20', 'Ремонт дороги', 'Восстанавливают асфпльтовое апокрытие на Московской', 'Серко', '/images/3.jpg', 'NewsPublication'),
(4, 'разборки', '2022-06-19 18:10:20', 'Разборка бандиотов', 'Крутая разборка на Авеню произошла на развилке дорогшг', 'Верок', '/images/4.jpg', 'PhotoReportPublication'),
(5, 'Статиистика', '2022-06-19 18:10:20', 'Аналитика', 'Анализ больших массивов данных', 'Глушко', '/images/6.jpg', 'ArticlPublication'),
(6, 'ГАИ', '2022-06-19 18:10:20', 'Милиция на ддоорогах', 'Большой рецйд ГАИ по г. Брестку', 'Машков', '/images/5.jpg', 'PhotoReportPublication');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
