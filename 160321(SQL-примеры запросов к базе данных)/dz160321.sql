-- Сама база данных в которой мы создаем эти запросы.
-- База данных: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `shop`;

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
                             `CNUM` int(11) NOT NULL,
                             `CNAME` varchar(50) COLLATE utf8_bin NOT NULL,
                             `CITY` varchar(50) COLLATE utf8_bin NOT NULL,
                             `RATING` int(11) NOT NULL,
                             `SNUM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`CNUM`, `CNAME`, `CITY`, `RATING`, `SNUM`) VALUES
(2001, 'Hoffman', 'London', 100, 1001),
(2002, 'Giovanni', 'Rome', 200, 1003),
(2003, 'Liu', 'San Jose', 200, 1002),
(2004, 'Grass', 'Berlin', 300, 1002),
(2006, 'Clemens', 'London', 100, 1001),
(2008, 'Cisneros', 'San Jose', 300, 1007),
(2007, 'Pereira', 'Rome', 100, 1004);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
                          `ONUM` int(11) NOT NULL,
                          `AMT` float NOT NULL,
                          `ODATE` date NOT NULL,
                          `CNUM` int(11) NOT NULL,
                          `SNUM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`ONUM`, `AMT`, `ODATE`, `CNUM`, `SNUM`) VALUES
(3001, 18.69, '1990-03-10', 2008, 1007),
(3003, 767.19, '1990-03-10', 2001, 1001),
(3002, 1900.1, '1990-03-10', 2007, 1004),
(3005, 5160.45, '1990-03-10', 2003, 1002),
(3006, 1098.16, '1990-03-10', 2008, 1007),
(3009, 1713.23, '1990-03-10', 2002, 1003),
(3007, 75.75, '1990-03-10', 2004, 1002),
(3008, 4723, '1990-05-10', 2006, 1001),
(3010, 1309.95, '1990-06-10', 2004, 1002),
(3011, 9891.88, '1990-06-10', 2006, 1001);

-- --------------------------------------------------------

--
-- Структура таблицы `salespeople`
--

CREATE TABLE `salespeople` (
                               `SNUM` int(11) DEFAULT NULL,
                               `SNAME` varchar(50) COLLATE utf8_bin DEFAULT NULL,
                               `CITY` varchar(50) COLLATE utf8_bin DEFAULT NULL,
                               `COMM` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `salespeople`
--

INSERT INTO `salespeople` (`SNUM`, `SNAME`, `CITY`, `COMM`) VALUES
(1001, 'Peel', 'London', 0.12),
(1002, 'Serres', 'San Jose', 0.13),
(1004, 'Motika', 'London', 0.11),
(1007, 'Rifkin', 'Barcelona', 0.15),
(1003, 'Axelrod', 'New York', 0.1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;





   -- ЗАДАНИЯ


-- Вывести средний размер комиссионных в каждом городе, кроме Нью Йорка
SELECT `CITY` as "Город", round(AVG(`COMM`),3) as "Средний размер комиссионных"
FROM `salespeople`
WHERE `CITY` NOT IN ("New York")
GROUP BY `CITY`

-- Вывести заказы всех клиентов из Рима и Берлина
SELECT *
FROM `orders`
WHERE CNUM IN (SELECT CNUM FROM `customers` WHERE `CITY` IN ("Berlin","Rome"))
