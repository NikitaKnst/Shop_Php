-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 20 2021 г., 08:39
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ida-tecnology_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `Id_Category` int(11) NOT NULL COMMENT 'Id категории товара/продукта',
  `Category` varchar(35) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Имя категории'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Таблица с именем категории и id категории';

-- --------------------------------------------------------

--
-- Структура таблицы `comment_in_news`
--

CREATE TABLE `comment_in_news` (
  `id_Comment_News` int(20) NOT NULL,
  `id_User_Comment` int(20) NOT NULL,
  `NameCategory` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Descripton` text COLLATE utf8_unicode_ci NOT NULL,
  `Data_Burn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Таблица коментариев к новостям';

-- --------------------------------------------------------

--
-- Структура таблицы `comment_in_product`
--

CREATE TABLE `comment_in_product` (
  `id_Comment` int(20) NOT NULL,
  `id_User_Product` int(20) NOT NULL,
  `id_Product` int(11) NOT NULL,
  `Descripton` text COLLATE utf8_unicode_ci NOT NULL,
  `Data_Burn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Комментарии к продукту таблица';

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `Id_News` int(11) NOT NULL,
  `id_Users` int(20) NOT NULL,
  `Titel` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `id_Category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Новости на странице';

-- --------------------------------------------------------

--
-- Структура таблицы `newscategore`
--

CREATE TABLE `newscategore` (
  `id_CategoryNews` int(20) NOT NULL,
  `NameCategory` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Ид категорий';

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id_Product` int(11) NOT NULL,
  `id_Category` int(11) NOT NULL,
  `Name_Product` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Таблица продуктов';

-- --------------------------------------------------------

--
-- Структура таблицы `productorder`
--

CREATE TABLE `productorder` (
  `id_Order` int(11) NOT NULL,
  `id_Product` int(11) NOT NULL,
  `id_Users` int(20) NOT NULL,
  `ListOrder` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SummaAllList` float NOT NULL,
  `Date` date NOT NULL,
  `Status_User` int(1) NOT NULL COMMENT 'Role',
  `Status_Order` int(1) NOT NULL COMMENT '1-Dev 2-NO dev',
  `Status_Pay` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Таблица заказа продукта';

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id` int(1) NOT NULL,
  `role` enum('moderator','admin','client','guest') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `Id_Users` int(20) NOT NULL,
  `NumberTel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Second_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `NickName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Rolle` int(1) NOT NULL,
  `Address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Post_index` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Таблица с профилями пользователей';

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id_Category`);

--
-- Индексы таблицы `comment_in_news`
--
ALTER TABLE `comment_in_news`
  ADD PRIMARY KEY (`id_Comment_News`),
  ADD KEY `id_User_Comment` (`id_User_Comment`),
  ADD KEY `id_News` (`NameCategory`);

--
-- Индексы таблицы `comment_in_product`
--
ALTER TABLE `comment_in_product`
  ADD PRIMARY KEY (`id_Comment`),
  ADD KEY `id_Product` (`id_Product`),
  ADD KEY `id_User_Product` (`id_User_Product`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id_News`),
  ADD KEY `id_Users` (`id_Users`),
  ADD KEY `id_Category` (`id_Category`);

--
-- Индексы таблицы `newscategore`
--
ALTER TABLE `newscategore`
  ADD PRIMARY KEY (`id_CategoryNews`),
  ADD KEY `NameCategory` (`NameCategory`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_Product`),
  ADD KEY `id_Category` (`id_Category`);

--
-- Индексы таблицы `productorder`
--
ALTER TABLE `productorder`
  ADD PRIMARY KEY (`id_Order`),
  ADD KEY `id_Product` (`id_Product`),
  ADD KEY `id_Users` (`id_Users`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_Users`),
  ADD KEY `Id_Rolle` (`Id_Rolle`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `Id_Category` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id категории товара/продукта';

--
-- AUTO_INCREMENT для таблицы `comment_in_news`
--
ALTER TABLE `comment_in_news`
  MODIFY `id_Comment_News` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `comment_in_product`
--
ALTER TABLE `comment_in_product`
  MODIFY `id_Comment` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `Id_News` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `newscategore`
--
ALTER TABLE `newscategore`
  MODIFY `id_CategoryNews` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_Product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `productorder`
--
ALTER TABLE `productorder`
  MODIFY `id_Order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `Id_Users` int(20) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comment_in_news`
--
ALTER TABLE `comment_in_news`
  ADD CONSTRAINT `comment_in_news_ibfk_1` FOREIGN KEY (`id_User_Comment`) REFERENCES `users` (`Id_Users`);

--
-- Ограничения внешнего ключа таблицы `comment_in_product`
--
ALTER TABLE `comment_in_product`
  ADD CONSTRAINT `comment_in_product_ibfk_1` FOREIGN KEY (`id_Product`) REFERENCES `product` (`id_Product`),
  ADD CONSTRAINT `comment_in_product_ibfk_2` FOREIGN KEY (`id_User_Product`) REFERENCES `users` (`Id_Users`);

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_Users`) REFERENCES `users` (`Id_Users`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`id_Category`) REFERENCES `newscategore` (`id_CategoryNews`);

--
-- Ограничения внешнего ключа таблицы `newscategore`
--
ALTER TABLE `newscategore`
  ADD CONSTRAINT `newscategore_ibfk_1` FOREIGN KEY (`NameCategory`) REFERENCES `comment_in_news` (`NameCategory`);

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_Category`) REFERENCES `category` (`Id_Category`);

--
-- Ограничения внешнего ключа таблицы `productorder`
--
ALTER TABLE `productorder`
  ADD CONSTRAINT `productorder_ibfk_1` FOREIGN KEY (`id_Product`) REFERENCES `product` (`id_Product`),
  ADD CONSTRAINT `productorder_ibfk_2` FOREIGN KEY (`id_Users`) REFERENCES `users` (`Id_Users`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Id_Rolle`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
