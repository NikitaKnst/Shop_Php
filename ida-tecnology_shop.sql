-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 06 2021 г., 09:11
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

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`Id_Category`, `Category`) VALUES
(1, 'Motherboard'),
(2, 'Videocard'),
(3, 'Procesor'),
(4, 'Operativ memory');

-- --------------------------------------------------------

--
-- Структура таблицы `comment_in_news`
--

CREATE TABLE `comment_in_news` (
  `id_Comment_News` int(20) NOT NULL,
  `id_User_Comment` int(20) NOT NULL,
  `Id_Category` int(20) NOT NULL,
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
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Изображение картинок',
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Таблица продуктов';

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id_Product`, `id_Category`, `Name_Product`, `images`, `Description`, `Price`, `Rating`) VALUES
(1, 1, 'ASUS PRIME Z490-A', 'Front.png', 'MSI B460M-A PRO \r\nSocket 10th gen Intel 1200 \r\nmATX MB \r\n4x DDR4 up to 2933 MHz \r\n6x SATA 6Gb/s 2x M.2 6x USB 3.2', '35', 0),
(2, 1, 'ASUS ROG Strix X570-E Gaming', 'Main.jpg', 'ASUS ROG Strix X570-E Gaming \r\nMotherboard ATX \r\nSocket AM4 \r\nAMD X570 Chipset \r\nUSB-C Gen2, USB 3.2 Gen 1, USB 3.2 Gen 2 Bluetooth, Gigabit LAN, \r\n2.5 Gigabit LAN, Wi-Fi - onboard graphics (CPU required) - HD Audio (8-channel)', '200', 0),
(3, 1, 'Intel H310 Express', 'Main_photo.png', 'Intel H310 Express \r\nLGA1151 slot\r\nMicroATX \r\n2xPCI-Express 2.0 1x слот \r\n1xPCI-Express 3.0 16x слот\r\nDDR4 2666/2400/2133 MHz слот Memory slots 2 slot\r\n1x15pin D-sub slot\r\n1xDVI 1xHDMI 2xUSB 2.0 2xUSB 3.1 1xPS/2 1xRJ45 3xAudio port USB 2.0 USB 3.1 slot', '26', 0),
(4, 1, 'MSI B460M-A', 'Main2.png', 'Bullet Points MSI B460M-A PRO motherboard Intel B460 LGA 1200 micro ATX :\r\n- Supports 10th Gen Intel® Core™ / Pentium® Celeron® processors for LGA 1200 socket\r\n- Supports DDR4 Memory, up to 2933(Max) MHz\r\n- Core Boost: With premium layout and digital power design to support more cores and provide better performance\r\n- DDR4 Boost: Advanced technology to deliver pure data signals for the best performance and stability\r\n- M.2 Shield Frozr: Strengthened built-in M.2 thermal solution. Keeps M.2 SSDs safe while preventing throttling, making them run faster\r\n- Turbo M.2: Running at PCI-E Gen3 x4 maximizes performance for NVMe based SSDs\r\n- Audio Boost: Reward your ears with studio grade sound quality\r\n- Steel Armor: Protecting VGA cards against bending and EMI for better performance, stability and strength\r\nLong product name MSI B460M-A PRO motherboard Intel B460 LGA 1200 micro ATX :\r\nMiro-ATX (23.6 x 19.2 cm), Intel B460, LGA1200, 2 x DDR4 DIMM, 64 GB max, 6 x SATA 6Gb/s, 1 x M.2 , DVI-D, HDMI, 2 x USB 2.0, 4 x USB 3.2 Gen1 Type-A\r\n<<<Less\r\nMSI B460M-A PRO motherboard Intel B460 LGA 1200 micro ATX:\r\nPRO series helps users work smarter by delivering an efficient and productive experience. Featuring stable functionality and high-quality assembly, PRO series motherboards provide not only optimized professional workflows but also less troubleshooting and longevity.\r\n\r\nM.2 SHIELD FROZR\r\nWorld’s fastest SSDs can start to lower performance when getting hot. Part of the motherboards heatsink design, M.2 SHIELD FROZR is the next generation M.2 thermal solution to avoid this by offering the best thermal protection to make sure that SSD maintains maximum performance.', '103', 0),
(5, 3, 'AMD Ryzen Threadripper 3990X', 'AMD-Ryzen-Threadripper-3990X-Installed-In-Socket-680x403.jpg', '\r\nПлатформа\r\nBoxed Processor\r\nСемейство продуктов\r\nAMD Ryzen™ Processors\r\nЛинейка продуктов\r\nAMD Ryzen™ Threadripper™ Processors\r\nЧисло ядер ЦП:64\r\nЧисло потоков:128\r\nМакс. частота До 4.3GHz\r\nБазовая частота 2.9GHz\r\nОбъем кэш-памяти первого уровня 4MB\r\nОбъем кэш-памяти второго уровня 32MB\r\nОбъем кэш-памяти третьего уровня 256MB\r\nВеличина отвода тепловой мощности по умолчанию / величина отвода тепловой мощности 280W\r\nТехпроцесс TSMC 7nm FinFET\r\nРазблок.Да\r\nСокетsTRX4\r\nЗащита от перегрева (PIB) Not included\r\nМакс. температура 95°C\r\nДата запуска 2/7/2020\r\n*Поддержка ОС Windows 10, 64-разрядная версия\r\n		RHEL x86 64-разрядная\r\n*Поддержка операционной системы (ОС) зависит от производителя.', '4350', 0),
(6, 3, 'i9-9700k', '01GqURlloXc0KBF7pppB7mF-1.fit_lim.size_1280x720.v_1581715930.jpg', 'Количество ядер 8\r\nКоличество потоков 8\r\nБазовая тактовая частота процессора 3.60 GHz\r\nМаксимальная тактовая частота в режиме Turbo 4.90 GHz\r\nКэш-память 12 MB Intel® Smart Cache\r\nЧастота системной шины 8 GT/s\r\nЧастота с технологией Intel® Turbo Boost 2.0‡ 4.90 GHz\r\nРасчетная мощность 95 W', '300', 0),
(7, 3, 'i9-9900k', 'intel-core-i9-9900k-hardware-review.jpg', 'Количество ядер 8.\r\nКоличество потоков 16.\r\nБазовая тактовая частота процессора 3,60 GHz.\r\nМаксимальная тактовая частота в режиме Turbo 5,00 GHz.\r\nКэш-память 16 MB Intel® Smart Cache.\r\nЧастота системной шины 8 GT/s.\r\nЧастота с технологией Intel® Turbo Boost 2.0‡ 5.00 GHz.\r\nРасчетная мощность 95 W.', '490', 0),
(8, 3, 'Ryzen Threadripper Pro 3995WX', 'TR_pro.jpg', 'Платформа\r\nНастольный ПК\r\nСемейство продуктов AMD Ryzen™ PRO Processors\r\nЛинейка продуктов AMD Ryzen™ Threadripper™ PRO Processors\r\nЧисло ядер ЦП 64\r\nЧисло потоков 128\r\nМакс. частота До 4.2GHz\r\nБазовая частота 2.7GHz\r\nОбъем кэш-памяти первого уровня 4MB\r\nОбъем кэш-памяти второго уровня 32MB\r\nОбъем кэш-памяти третьего уровня 256MB\r\nВеличина отвода тепловой мощности по умолчанию / величина отвода тепловой мощности 280W\r\nТехпроцесс TSMC 7nm FinFET\r\nРазблок. Нет\r\nСокет sWRX8\r\nКоличество разъемов 1P\r\nМакс. температура 90°C\r\nДата запуска 7/14/2020\r\n*Поддержка ОС\r\nWindows 10, 64-разрядная версия\r\n*Поддержка операционной системы (ОС) зависит от производителя.', '5200', 0),
(9, 4, '4GB PC12800 DDR3 SO DIMM KINGSTON', 'Main3.jpg', ' 4GB PC12800 DDR3SO DIMM KINGSTON', '32', 0),
(10, 4, 'Crucial Ballistix - DDR4 - module -', '1.jpg', 'Product Description\r\nBallistix - DDR4 - module - 8 GB - DIMM 288-pin - 2666 MHz / PC4-21300 - unbuffered\r\nProduct Type\r\nMemory module\r\nCapacity\r\n8 GB\r\nMemory Type\r\nDDR4 SDRAM - DIMM 288-pin\r\nUpgrade Type\r\nGeneric\r\nData Integrity Check\r\nNon-ECC\r\nSpeed\r\n2666 MHz (PC4-21300)\r\nLatency Timings\r\nCL16\r\nFeatures\r\nBlack PCB, anodized aluminum heatspreader, low profile heatspreader, Intel Extreme Memory Profiles (XMP 2.0), unbuffered\r\nVoltage\r\n1.35 V', '42', 0),
(11, 4, 'KINGSTON 2GB 1600MHz DDR3 Non-ECC C', '1 (1).jpg', 'KINGSTON 2GB 1600MHz DDR3 Non-ECC CL11 SODIMM', '16', 0),
(12, 4, 'KINGSTON 16GB 2666MHz DDR4 CL16 DIM', 'Main4.jpg', 'KINGSTON 16GB 2666MHz DDR4 CL16 DIMM HyperX FURY', '85', 0),
(13, 2, 'Asus 2080ti', 'f271912d609242bfd065b85a01140685.jpg', 'Спецификации видеопамяти\r\nОбъем видеопамяти \r\n11 ГБ\r\nТип памяти \r\nGDDR6\r\nЭффективная частота памяти \r\n14000 МГц\r\nРазрядность шины памяти \r\n352 бит\r\nМаксимальная пропускная способность памяти \r\n616 Гбайт/сек\r\nСпецификации видеопроцессора\r\nМикроархитектура\r\nTuring\r\nТехпроцесс \r\n12 нм\r\nШтатная частота работы видеочипа \r\n1350 МГц\r\nТурбочастота \r\n1665 МГц\r\nШейдерные ALU \r\n4352\r\nЧисло текстурных блоков \r\n272\r\nЧисло блоков растеризации \r\n88\r\nВерсия шейдеров \r\n6.1\r\nМаксимальная температура процессора (C) \r\n89°\r\nПоддержка трассировки лучей \r\nда', '1500', 0),
(14, 2, 'Asus 3060', '24676022_2.jpg', 'Спецификации видеопамяти\r\nОбъем видеопамяти \r\n8 ГБ\r\nТип памяти \r\nGDDR6\r\nПропускная способность памяти на один контакт \r\n14 Гбит/с\r\nРазрядность шины памяти \r\n256 бит\r\nМаксимальная пропускная способность памяти \r\n448 Гбайт/сек\r\nСпецификации видеопроцессора\r\nМикроархитектура\r\nAmpere\r\nКодовое название графического процессора\r\nGA104\r\nТехпроцесс \r\n8 нм\r\nШтатная частота работы видеочипа \r\n1410 МГц\r\nТурбочастота \r\n1740 МГц\r\nШейдерные ALU \r\n4864\r\nЧисло текстурных блоков \r\n152\r\nЧисло блоков растеризации \r\n38\r\nВерсия шейдеров \r\n6.4\r\nМаксимальная температура процессора (C) \r\n93°\r\nПоддержка трассировки лучей \r\nда\r\nАппаратное ускорение трассировки лучей (RT-ядра)\r\n38\r\nТензорные ядра\r\n152\r\nПиковая производительность чипов в FP32\r\n16200 GFLOPS', '999', 0),
(15, 2, 'Asus 3080', '2364177-n18.jpg', 'Спецификации видеопамяти\r\nОбъем видеопамяти \r\n10 ГБ\r\nТип памяти \r\nGDDR6X\r\nПропускная способность памяти на один контакт \r\n19 Гбит/с\r\nРазрядность шины памяти \r\n320 бит\r\nМаксимальная пропускная способность памяти \r\n780 Гбайт/сек\r\nСпецификации видеопроцессора\r\nМикроархитектура\r\nAmpere\r\nКодовое название графического процессора\r\nGA102\r\nТехпроцесс \r\n8 нм\r\nШтатная частота работы видеочипа \r\n1440 МГц\r\nТурбочастота \r\n1935 МГц\r\nШейдерные ALU \r\n8704\r\nЧисло текстурных блоков \r\n272\r\nЧисло блоков растеризации \r\n88\r\nВерсия шейдеров \r\n6.4\r\nМаксимальная температура процессора (C) \r\n93°\r\nПоддержка трассировки лучей \r\nда\r\nАппаратное ускорение трассировки лучей (RT-ядра)\r\n68\r\nТензорные ядра\r\n272\r\nПиковая производительность чипов в FP32\r\n29760 GFLOPS', '2300', 0),
(16, 2, 'Gigabyte 3070', 'videokarta-gigabyte-geforce-rtx-3070-gaming-oc-8g-1-1000x1000.jpg', 'Спецификации видеопамяти\r\nОбъем видеопамяти \r\n8 ГБ\r\nТип памяти \r\nGDDR6\r\nПропускная способность памяти на один контакт \r\n14 Гбит/с\r\nРазрядность шины памяти \r\n256 бит\r\nМаксимальная пропускная способность памяти \r\n448 Гбайт/сек\r\nСпецификации видеопроцессора\r\nМикроархитектура\r\nAmpere\r\nКодовое название графического процессора\r\nGA104\r\nТехпроцесс \r\n8 нм\r\nШтатная частота работы видеочипа \r\n1500 МГц\r\nТурбочастота \r\n1815 МГц\r\nШейдерные ALU \r\n5888\r\nЧисло текстурных блоков \r\n184\r\nЧисло блоков растеризации \r\n96\r\nВерсия шейдеров \r\n6.4\r\nМаксимальная температура процессора (C) \r\n93°\r\nПоддержка трассировки лучей \r\nда\r\nАппаратное ускорение трассировки лучей (RT-ядра)\r\n46\r\nТензорные ядра\r\n184\r\nПиковая производительность чипов в FP32\r\n20370 GFLOPS', '1700', 0);

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

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'moderator'),
(3, 'client'),
(4, 'guest');

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
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id_Users`, `NumberTel`, `Email`, `Password`, `Name`, `Second_Name`, `NickName`, `Id_Rolle`, `Address`, `Post_index`) VALUES
(1, '555555555', 'admin@news.ee', '$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u ', 'admin', 'sec', 'admin', 1, 'admin@news.ee', 151551);

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
  ADD KEY `Id_Category` (`Id_Category`);

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
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Id_Rolle` (`Id_Rolle`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `Id_Category` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id категории товара/продукта', AUTO_INCREMENT=5;

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
  MODIFY `id_Product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `productorder`
--
ALTER TABLE `productorder`
  MODIFY `id_Order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `Id_Users` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comment_in_news`
--
ALTER TABLE `comment_in_news`
  ADD CONSTRAINT `comment_in_news_ibfk_1` FOREIGN KEY (`id_User_Comment`) REFERENCES `users` (`Id_Users`),
  ADD CONSTRAINT `comment_in_news_ibfk_2` FOREIGN KEY (`Id_Category`) REFERENCES `newscategore` (`id_CategoryNews`);

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
