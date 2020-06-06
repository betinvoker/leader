-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 06 2020 г., 19:17
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `leader_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `poll`
--

CREATE TABLE `poll` (
  `IDPoll` int(11) NOT NULL,
  `Thema` varchar(150) NOT NULL,
  `Name` varchar(150) CHARACTER SET utf32 NOT NULL,
  `Comment` text CHARACTER SET utf32 NOT NULL,
  `Photo` varchar(100) CHARACTER SET utf32 DEFAULT NULL,
  `Q1` varchar(250) DEFAULT '0',
  `Q2` varchar(250) DEFAULT '0',
  `Q3` varchar(250) DEFAULT '0',
  `CountQ1` int(11) DEFAULT 0,
  `CountQ2` int(11) DEFAULT 0,
  `CountQ3` int(11) DEFAULT 0,
  `DateBegin` date DEFAULT NULL,
  `DateEnd` date DEFAULT NULL,
  `Status` int(11) DEFAULT 0,
  `IDUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `poll`
--

INSERT INTO `poll` (`IDPoll`, `Thema`, `Name`, `Comment`, `Photo`, `Q1`, `Q2`, `Q3`, `CountQ1`, `CountQ2`, `CountQ3`, `DateBegin`, `DateEnd`, `Status`, `IDUser`) VALUES
(1, 'Образование', 'Есть ли жизнь на Марсе?', 'Есть ли жизнь на Марсе?', NULL, 'Да', 'Нет', 'Может быть', 0, 0, 1, '2020-06-04', NULL, 1, 1),
(2, 'Досуг', 'Детские площадки', 'Где Вы гуляете с детьми, когда площадки закрыты?', NULL, 'По улицам', 'Во дворе', 'Не гуляем', 0, 0, 1, '2020-06-04', NULL, 2, 5),
(3, 'Спорт', 'Где Вы тренируетесь во время самоизоляции?', 'Тренировки', NULL, 'Дома', 'На улице', 'Не тренируюсь', 0, 0, 0, '2020-06-04', NULL, 1, 1),
(4, 'Спорт', 'Где Вы тренируетесь во время самоизоляции?', 'Тренировки', NULL, 'Дома', 'На улице', 'Не тренируюсь', 0, 0, 0, '2020-06-04', NULL, 2, 1),
(5, 'Досуг', 'Детские площадки', 'Где Вы гуляете с детьми, когда площадки закрыты?', NULL, 'По улицам', 'Во дворе', 'Не гуляем', 1, 1, 2, '2020-06-04', NULL, 1, 1),
(6, 'Досуг', 'Детские площадки', 'Где Вы гуляете с детьми, когда площадки закрыты?', NULL, 'По улицам', 'Во дворе', 'Не гуляем', 0, 0, 0, '2020-06-04', NULL, 2, 1),
(7, 'Досуг', 'Детские площадки', 'Где Вы гуляете с детьми, когда площадки закрыты?', NULL, 'По улицам', 'Во дворе', 'Не гуляем', 0, 0, 0, '2020-06-04', NULL, 2, 1),
(8, 'Досуг', 'Детские площадки', 'Где Вы гуляете с детьми, когда площадки закрыты?', NULL, 'По улицам', 'Во дворе', 'Не гуляем', 0, 0, 0, '2020-06-04', NULL, 0, 1),
(9, 'Досуг', 'Детские площадки', 'Где Вы гуляете с детьми, когда площадки закрыты?', NULL, 'По улицам', 'Во дворе', 'Не гуляем', 0, 0, 0, '2020-06-04', NULL, 0, 1),
(10, 'Досуг', 'Детские площадки', 'Где Вы гуляете с детьми, когда площадки закрыты?', NULL, 'По улицам', 'Во дворе', 'Не гуляем', 0, 0, 0, '2020-06-04', NULL, 0, 1),
(11, 'Культура', 'Нужен ли в городе еще один кинотеатр?', 'Кинотеатр', NULL, 'Да', 'Нет', 'Не знаю', 0, 1, 1, '2020-06-04', NULL, 1, 1),
(12, 'Образование', 'Как вы относитесь к ЕГЭ? Вы считаете, что такая форма проверки знаний объективна?', 'Многие утверждают, что экзамен — это стрессовая ситуация для ребёнка. Конечно, экзамен – это всегда волнение. А разве когда мы сдавали экзамены экзаменационной комиссии в школе, а потом ещё и в вузе, это было менее волнительно? Педагогами, психологами школ организуются мероприятия по снижению психологической напряжённости выпускников к процедуре проведения экзаменов.', NULL, 'Да', 'Нет', 'Затрудняюсь ответить', 0, 0, 0, '2020-06-06', NULL, 0, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `problems`
--

CREATE TABLE `problems` (
  `IDProblem` int(11) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `Nameproblem` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Level` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `problems`
--

INSERT INTO `problems` (`IDProblem`, `IDUser`, `Nameproblem`, `Description`, `Photo`, `Status`, `Rating`, `Level`) VALUES
(1, 7, 'Транспортная реформа не смогла победить простои транспорта на остановках', 'Транспортная реформа не смогла победить простои транспорта на остановках. Пока власти устраивают проверки на некоторых маршрутах (дело хорошее, особенно если эти проверки неожиданные для перевозчиков), мы провели свою. Вывод — простои (явление, когда транспорт стоит на крупной остановке, «собирая» пассажиров) остались.', '\\images\\shop-item\\s8.jpg', 1, 4, 'Город');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `IDUser` int(11) NOT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `Firstname` varchar(50) DEFAULT NULL,
  `Fathername` varchar(50) DEFAULT NULL,
  `BirstDate` date DEFAULT NULL,
  `EMail` varchar(100) NOT NULL,
  `Edu` varchar(50) NOT NULL DEFAULT 'нет',
  `Reiting` int(11) NOT NULL DEFAULT 0,
  `Status` varchar(100) NOT NULL DEFAULT 'Студент',
  `Tel` varchar(30) NOT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `Username` varchar(100) NOT NULL,
  `Passw` varchar(100) NOT NULL,
  `CountGolos` int(11) DEFAULT 1,
  `CountPeredano` int(11) DEFAULT 0,
  `PeredahoIDUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`IDUser`, `Lastname`, `Firstname`, `Fathername`, `BirstDate`, `EMail`, `Edu`, `Reiting`, `Status`, `Tel`, `Photo`, `Username`, `Passw`, `CountGolos`, `CountPeredano`, `PeredahoIDUser`) VALUES
(1, 'Иванов', 'Иван', 'Иванович', '2000-06-01', '', 'нет', 115, 'Студент', '8909543535', '\\images\\q6.jpg', 'ivan', '111', 11, 5, 5),
(2, '', '', NULL, NULL, 'nttiarapova@mail.ru', 'нет', 0, '', '', NULL, 'manager', 'manager', 1, 0, NULL),
(3, 'Сидоров', 'Сидор', NULL, NULL, 'nttiarapova@gmail.com', 'нет', 0, 'Студент', '+79094130529', NULL, 'sidor', '222', 1, 0, NULL),
(4, 'Серова', 'Надежда', NULL, NULL, 'nttiarapova@gmail.com', 'нет', 0, 'Работаю', '890589879', '\\images\\q6.jpg', 'liza', 'liza', 1, 0, NULL),
(5, 'Ликова', 'Нина', NULL, NULL, 'nttiarapova@gmail.com', 'нет', 25, 'Работаю', '890589879', '\\images\\q7.jpg', 'lika', '4444', 0, 11, 1),
(6, 'Мушкетова', 'Евгения', NULL, NULL, 'nttiqq@gmail.com', 'нет', 0, 'Школьник', '890589879', NULL, 'evgen', '1212', 1, 0, NULL),
(7, 'Клименко', 'Владислав', 'Николаевич', '1999-04-21', 'vlad@gmail.com', 'нет', 4, 'Студент', '897718533', '\\images\\q8.jpg', 'vlad', 'vvvv', 1, 0, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`IDPoll`);

--
-- Индексы таблицы `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`IDProblem`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `poll`
--
ALTER TABLE `poll`
  MODIFY `IDPoll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `problems`
--
ALTER TABLE `problems`
  MODIFY `IDProblem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
