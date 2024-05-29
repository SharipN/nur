-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 28 2024 г., 15:13
-- Версия сервера: 5.7.39
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `filename`) VALUES
(1, 'О нас', 'Текст', 'ezhik-v-tumane-skazka2.jpg.webp');

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `date`, `filename`, `description`) VALUES
(1, 'Как писать комментарии к JavaScript-коду', '25.05.24', 'fon.png', 'Вы не хотите, чтобы кто угодно мог получить доступ к вашему приложению и создавать отчеты о расходах или просматривать уже существующие. Вам нужно ограничить доступ к приложению только авторизованными пользователями. Кто эти пользователи? Это пользователи, которых ваше приложение распознает как аутентифицированных.  Если пользователь предоставляет действительные учетные данные (т. е. проходит аутентификацию), то он получает <h2>право доступа к вашему приложению. </h2>'),
(2, 'Асинхронные итераторы в JavaScript', '02.05.24', 'info2.jpg', 'Сортировка веток Git\nОт Редакция techrocks.ru / 04.03.2024\nЗапустив git branch в репозитории, вы обычно получаете список веток в алфавитном порядке. Это может раздражать, когда у вас много веток (если только у вас нет очень жесткой системы именования по номеру тикета или чего-то подобного).\n<br>\nНо это можно изменить!\n<br>\nВыполните в вашем репозитории следующую команду:\n<br>\ngit branch --sort=-committerdate\nЭто отсортирует все ваши ветки по дате их последнего коммита!\n<br>\nДля сортировки доступны следующие опции:\n<br>\nauthordate\ncommitterdate\ncreatordate\nobjectsize\ntaggerdate\nКроме того, если хотите всегда сортировать по одному из этих параметров, можно установить это в настройках:\n<br>\ngit config --global branch.sort -committerdate\nТакже можно задать псевдоним:\n<br>\ngit config --global alias.brcd \"branch --sort=-committerdate\".\nУспешных коммитов!\n<br>\nОт редакции Techrocks: о работе с ветками можно почитать в статьях:'),
(3, 'Проверка пользовательского ввода в Python', '03.05.24', 'info3.jpg', 'Тройка'),
(4, 'Управление GitHub-репозиториями: best practices', '04.05.24', 'info4.jpg', 'Четверка'),
(5, 'Управление GitHub-репозиториями: best practices', '05.05.24', 'info4.jpg', 'Четверка'),
(6, 'Управление GitHub-репозиториями: best practices', '06.05.24', 'info4.jpg', 'Четверка'),
(7, 'Управление GitHub-репозиториями: best practices', '07.05.24', 'info4.jpg', 'Четверка'),
(8, 'Управление GitHub-репозиториями: best practices', '08.05.24', 'info4.jpg', 'Четверка'),
(9, 'Управление GitHub-репозиториями: best practices', '09.05.24', 'info4.jpg', 'Четверка'),
(10, 'Управление GitHub-репозиториями: best practices', '10.05.24', 'info4.jpg', 'Четверка'),
(11, 'Управление GitHub-репозиториями: best practices', '11.05.24', 'info4.jpg', 'Четверка'),
(12, 'Управление GitHub-репозиториями: best practices', '12.05.24', 'info4.jpg', 'Четверка');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `articleid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `articleid`, `name`, `email`, `text`, `date`) VALUES
(1, '1', 'asdasd', 'asdads', 'asdasd', '2024-05-24 00:00:00'),
(2, '1', 'asdasd', 'asdads', 'asdasd', '2024-05-24 00:00:00'),
(30, '8', 'Предпоследний', '.asdasd@mail.ru', '123', '2024-05-28 09:39:09'),
(29, '11', 'Предпоследний', '.dasda@mail.ru', '123', '2024-05-26 18:46:53'),
(28, '1', 'Имя', 'фывфыв', 'Для 12', '2024-05-26 18:42:50'),
(27, '3', 'Имя', 'фывфыв', 'Для 12', '2024-05-25 18:47:15'),
(26, '12', 'Имя', 'фывфыв', 'Для 12', '2024-05-25 18:41:28'),
(25, '6', 'N SH', 'asdads@mail.ru', '123', '2024-05-24 18:49:06'),
(24, '4', 'N SH', 'asdad@mail.ru', '123', '2024-05-24 14:54:01'),
(23, '3', 'N SH', 'asdasda@mail.ru', '123', '2024-05-24 14:53:43');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `city`, `phone`, `email`, `filename`, `title`, `description`) VALUES
(1, 'Павлодар', '+7182805', 'Pav@email.com', 'fon.jpg', 'Заголовок страницы', 'https://yandex.kz/');

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE `header` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `header`
--

INSERT INTO `header` (`id`, `name`, `filename`) VALUES
(1, 'Tech_News_Forum', 'fon2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `header`
--
ALTER TABLE `header`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `header`
--
ALTER TABLE `header`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
