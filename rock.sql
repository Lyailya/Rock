-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 21 2016 г., 10:25
-- Версия сервера: 10.1.8-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rock`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `img`, `text`) VALUES
(12, 'news1.jpg', 'Metallica have big plans for later in 2016, once their long-awaited new album is done. â€œI think it will be a pretty in-your-face year, at least the back half of it,â€ Lars Ulrich told Rolling Stone. â€œObviously, weâ€™ve gotta finish the new record now. But thankfully weâ€™re quite far along. Hopefully, we should be able to knock that on the head this spring, I would guess. So we will be gearing up and playing shows and doing all that fun stuff again soon.â€'),
(13, 'ACDC.jpg', 'hkh');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `birthday`, `email`, `password`, `type`) VALUES
(1, 'admin', 'female', '22.04.1998', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0),
(5, 'hi', 'male', '1999-04-12', 'hi@mail.ru', '202cb962ac59075b964b07152d234b70', 1),
(6, 'BibitoBarns', 'male', '1991-11-11', 'bibs@gmail.com', '7815696ecbf1c96e6894b779456d330e', 1),
(7, 'Linara', 'female', '1997-04-07', 'linara@gmail.com', 'a384b6463fc216a5f8ecb6670f86456a', 1),
(8, 'Elaman', 'male', '1997-09-22', 'elaman@gmail.com', '8100240622c5494b0cb9086f15957813', 1),
(10, 'Wyna', 'male', '1997-04-16', 'wyna@gmail.com', '6147a22d6106130ce396b65fd2d6413c', 1),
(12, 'Lyailya', 'female', '1997-04-22', 'atiposhka@gmail.com', '202cb962ac59075b964b07152d234b70', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
