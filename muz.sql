-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 18 2021 г., 20:21
-- Версия сервера: 8.0.20
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `muz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `song`
--

CREATE TABLE `song` (
  `SongID` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Album` varchar(255) NOT NULL,
  `Time` text NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `song`
--

INSERT INTO `song` (`SongID`, `Name`, `Author`, `Album`, `Time`, `Image`) VALUES
(1, 'Диссонанс', 'ATL', 'Кривой эфир', '00:03:39', 'https://upload.wikimedia.org/wikipedia/ru/a/a6/ATL_%E2%80%94_%D0%9A%D1%80%D0%B8%D0%B2%D0%BE%D0%B9_%D0%AD%D1%84%D0%B8%D1%80.jpg'),
(2, 'Браслеты', 'ATL', 'Радио Апокалипсис', '00:03:48', 'https://i.scdn.co/image/ab67616d0000b273a9cc976f6591901bc8cdc0b6'),
(8, 'Некрасиво', 'Радиопомехи', 'Юность', '00:02:42', 'http://sun9-37.userapi.com/impf/c639631/v639631511/63002/95LqEGqltWU.jpg?size=604x604&quality=96&sign=4d94abd95bb8b909ae8f9b36a37fb889&type=album'),
(9, 'Верните мой 2017', 'GSPD', 'Верните мой 2017', '00:03:52', 'https://i1.sndcdn.com/artworks-mVX4zpwCrBTvIGqt-4GaCHg-t500x500.jpg'),
(15, 'Toxic', 'BoyWithUke', 'Faded', '00:02:48', 'https://images.genius.com/f6602345185ca07251cb059bdbe053b6.750x750x1.jpg'),
(16, '32525', '25636', '2456436', '20:42:48', 'https://static.wikia.nocookie.net/madeinabyss/images/c/c3/Anime_Reg_Square.png/revision/latest?cb=20190326030012'),
(17, 'tryjryj', 'ertheh', 'bwergre', '00:44:57', 'https://images.genius.com/f6602345185ca07251cb059bdbe053b6.750x750x1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `UserID` int NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`UserID`, `Login`, `Password`) VALUES
(1, '123', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`SongID`),
  ADD KEY `SongID` (`SongID`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `song`
--
ALTER TABLE `song`
  MODIFY `SongID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
