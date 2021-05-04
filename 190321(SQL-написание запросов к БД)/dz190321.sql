-- Дамп базы данных
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `shop`;

-- --------------------------------------------------------

--
-- РЎС‚СЂСѓРєС‚СѓСЂР° С‚Р°Р±Р»РёС†С‹ `customers`
--

CREATE TABLE `customers` (
                             `CNUM` int(11) NOT NULL,
                             `CNAME` varchar(50) COLLATE utf8_bin NOT NULL,
                             `CITY` varchar(50) COLLATE utf8_bin NOT NULL,
                             `RATING` int(11) NOT NULL,
                             `SNUM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Р”Р°РјРї РґР°РЅРЅС‹С… С‚Р°Р±Р»РёС†С‹ `customers`
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
-- РЎС‚СЂСѓРєС‚СѓСЂР° С‚Р°Р±Р»РёС†С‹ `orders`
--

CREATE TABLE `orders` (
                          `ONUM` int(11) NOT NULL,
                          `AMT` float NOT NULL,
                          `ODATE` date NOT NULL,
                          `CNUM` int(11) NOT NULL,
                          `SNUM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Р”Р°РјРї РґР°РЅРЅС‹С… С‚Р°Р±Р»РёС†С‹ `orders`
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
-- РЎС‚СЂСѓРєС‚СѓСЂР° С‚Р°Р±Р»РёС†С‹ `salespeople`
--

CREATE TABLE `salespeople` (
                               `SNUM` int(11) DEFAULT NULL,
                               `SNAME` varchar(50) COLLATE utf8_bin DEFAULT NULL,
                               `CITY` varchar(50) COLLATE utf8_bin DEFAULT NULL,
                               `COMM` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Р”Р°РјРї РґР°РЅРЅС‹С… С‚Р°Р±Р»РёС†С‹ `salespeople`
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


------------------------ЗАДАНИЯ--------------------*


-- 1.	Найти продавцов, которые обслуживали заказы 10/06/1990.
SELECT
    `salespeople`.`SNAME`,`orders`.`ODATE`
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM` AND `orders`.`ODATE`="1990-06-10"

--  2.	Подсчитать количество продавцов, которые работали с клиентами с самым низким рейтингом.
SELECT
    COUNT(DISTINCT(`salespeople`.`SNAME`))
FROM
    `orders`,
    `customers`,
    `salespeople`
WHERE
        `orders`.`CNUM` = `customers`.`CNUM` AND `orders`.`SNUM` = `salespeople`.`SNUM` AND `RATING` =(
    SELECT
        MIN(`RATING`)
    FROM
        `customers`
)

-- 3.	Найти города, в которых больше двух клиентов.
SELECT
    `customers`.`CITY`
FROM
    `orders`,
    `salespeople`,
    `customers`
WHERE
        `orders`.`CNUM` = `customers`.`CNUM` AND `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `customers`.`CITY`
HAVING
        COUNT(`customers`.`CNUM`) > 2

SELECT
    `CITY`,COUNT(*)
FROM
    `customers`
GROUP BY
    `CITY`
HAVING COUNT(*)>=2

-- 4.	Найти города, сумма заказов из которых больше, чем средняя сумма заказов за 10/03/1990.
SELECT
    `customers`.`CITY`
FROM
    `customers`,
    `orders`
WHERE
        `customers`.`CNUM` = `orders`.`CNUM`
GROUP BY
    `customers`.`CITY`
HAVING
        SUM(`orders`.`AMT`) >(
        SELECT
            AVG(AMT)
        FROM
            `orders`
        WHERE
                ODATE = "1990-03-10"
    )

