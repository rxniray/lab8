-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 11 2022 г., 03:20
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `autocompany`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id_car` int(11) NOT NULL,
  `mark` varchar(35) NOT NULL,
  `model` varchar(20) NOT NULL,
  `color` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id_car`, `mark`, `model`, `color`) VALUES
(1, 'Nissan', 'Skyline', 'Blue'),
(123, 'Toyota', 'Supra', 'Red');

-- --------------------------------------------------------

--
-- Структура таблицы `car_companys`
--

CREATE TABLE `car_companys` (
  `idcar_company` int(11) NOT NULL,
  `name_car_company` varchar(45) NOT NULL,
  `id_plant` int(11) NOT NULL,
  `id_dealer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `car_companys`
--

INSERT INTO `car_companys` (`idcar_company`, `name_car_company`, `id_plant`, `id_dealer`) VALUES
(1, 'Toyota', 12, 11),
(2, 'Nissan', 22, 21);

-- --------------------------------------------------------

--
-- Структура таблицы `car_com_dealers`
--

CREATE TABLE `car_com_dealers` (
  `idcar_company` int(11) NOT NULL,
  `id_dealer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `car_com_plants`
--

CREATE TABLE `car_com_plants` (
  `idcar_company` int(11) NOT NULL,
  `id_plant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `id_dealer` int(11) NOT NULL,
  `id_car` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id_client`, `name`, `lastname`, `id_dealer`, `id_car`) VALUES
(22, 'Олексій', 'Бульбаш', 21, 1),
(234, 'Анастасія', 'Офійчук', 11, 123);

-- --------------------------------------------------------

--
-- Структура таблицы `clients_has_cars`
--

CREATE TABLE `clients_has_cars` (
  `id_client` int(11) NOT NULL,
  `id_car` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `dealers`
--

CREATE TABLE `dealers` (
  `id_dealer` int(11) NOT NULL,
  `name_dealer` varchar(100) NOT NULL,
  `id_car` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dealers`
--

INSERT INTO `dealers` (`id_dealer`, `name_dealer`, `id_car`, `id_client`) VALUES
(11, 'Toyota_Lutsk', 123, 234),
(21, 'Nissan_Lutsk', 1, 22);

-- --------------------------------------------------------

--
-- Структура таблицы `dealers_has_cars`
--

CREATE TABLE `dealers_has_cars` (
  `id_dealer` int(11) NOT NULL,
  `id_car` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `plants`
--

CREATE TABLE `plants` (
  `id_plant` int(11) NOT NULL,
  `name_plant` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `plants`
--

INSERT INTO `plants` (`id_plant`, `name_plant`) VALUES
(12, 'Toyota_EU'),
(22, 'Nissan_EU');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id_car`);

--
-- Индексы таблицы `car_companys`
--
ALTER TABLE `car_companys`
  ADD PRIMARY KEY (`idcar_company`);

--
-- Индексы таблицы `car_com_dealers`
--
ALTER TABLE `car_com_dealers`
  ADD PRIMARY KEY (`idcar_company`,`id_dealer`);

--
-- Индексы таблицы `car_com_plants`
--
ALTER TABLE `car_com_plants`
  ADD PRIMARY KEY (`idcar_company`,`id_plant`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`,`id_dealer`),
  ADD UNIQUE KEY `id_car` (`id_car`);

--
-- Индексы таблицы `clients_has_cars`
--
ALTER TABLE `clients_has_cars`
  ADD PRIMARY KEY (`id_client`,`id_car`);

--
-- Индексы таблицы `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id_dealer`);

--
-- Индексы таблицы `dealers_has_cars`
--
ALTER TABLE `dealers_has_cars`
  ADD PRIMARY KEY (`id_dealer`,`id_car`);

--
-- Индексы таблицы `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id_plant`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT для таблицы `car_companys`
--
ALTER TABLE `car_companys`
  MODIFY `idcar_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT для таблицы `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id_dealer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `plants`
--
ALTER TABLE `plants`
  MODIFY `id_plant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
