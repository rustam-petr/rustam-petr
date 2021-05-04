-- Дамп таблицы:

CREATE TABLE `auto_class` (
                              `id` int(10) UNSIGNED NOT NULL,
                              `Сar model` varchar(50) COLLATE utf8mb4_bin NOT NULL,
                              `Мileage` int(11) NOT NULL,
                              `Еngine volume` float NOT NULL,
                              `Color` varchar(50) COLLATE utf8mb4_bin NOT NULL,
                              `Year of issue` smallint(10) UNSIGNED NOT NULL,
                              `Fuel type` varchar(50) COLLATE utf8mb4_bin NOT NULL,
                              `Price` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='дом.зад.09032021';


INSERT INTO `auto_class` (`id`, `Сar model`, `Мileage`, `Еngine volume`, `Color`, `Year of issue`, `Fuel type`, `Price`) VALUES
(1, 'Toyota', 150250, 2.4, 'gray', 2015, 'petrol', 12000),
(2, 'Opel', 203000, 1.8, 'red', 2010, 'diesel', 8700),
(3, 'BMW', 89000, 3, 'black', 2012, 'diesel', 15000),
(4, 'Acura', 50000, 2.4, 'white', 2011, 'petrol', 17000),
(5, 'Volkswagen', 101000, 2, 'blue', 2010, 'diesel', 5000),
(6, 'Ford', 250000, 3.5, 'red', 2012, 'petrol', 22000),
(7, 'Mazda', 190000, 2.5, 'white', 2009, 'petrol', 10000),
(8, 'Volvo', 77000, 3, 'black', 2016, 'diesel', 18000),
(9, 'Audi', 130500, 2.7, 'gray', 2011, 'diesel', 13000),
(10, 'Honda', 35000, 2, 'black', 2017, 'petrol', 25000);

ALTER TABLE `auto_class`
    ADD PRIMARY KEY (`id`);


ALTER TABLE `auto_class`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

-- 1.  Найти все автомашины, которые начинаются на A и V.
SELECT *
FROM `auto_class`
WHERE `Сar model` LIKE "A%" OR `Сar model` LIKE "V%".

-- 2. Найти все автомашины с пробегом  от 50000 до 200000 т.км, с объемом двигателя от 2 до 3, дизельные и годом выпуска с 2010 по 2015.
SELECT *
FROM `auto_class`
WHERE `Мileage` BETWEEN 50000 and 200000 and `Еngine volume` BETWEEN 2 and 3 and `Fuel type`="diesel" and `Year of issue` BETWEEN 2010 and 2015

-- 3. Найти все автомашины с ценой 10000,15000,25000, бензиновые, белого и черного цвета.
SELECT *
FROM `auto_class`
WHERE `Price` IN (10000,15000,25000) AND `Fuel type`="petrol" AND (`Color`="white" or `Color`="black")

-- 4.  Выбрать все автомашины с пробегом более 100000 т.км., годом выпуска 2012 по 2020 и отсортировать их в порядке убывания по стоимости.
SELECT *
FROM `auto_class`
WHERE `Мileage`>100000 and `Year of issue` BETWEEN 2012 and 2020 ORDER BY `Price` DESC

-- 5.  Вывести марки автомашины, которые выпускались до 2014 года белого и красного цветов.
SELECT `Сar model`, `Color`, MIN(`Year of issue`)
FROM `auto_class`
WHERE `Color`="red" or `Color`="white" GROUP BY `Сar model` HAVING MIN(`Year of issue`)<2014

-- 6. Найти общий пробег автомашин красного и черного цветов с ценой свыше 15000.
SELECT SUM(`Мileage`) AS "Общий пробег"
FROM `auto_class`
WHERE (`Color`="red" OR `Color`="black") AND `Price`>15000

-- 7.  Найти все автомашины, название которых оканчивается на «а», белого и серого цвета, с объемом
-- от 1,8 до 2,5 и от 3 до 3,5, годом выпуска свыше 2010 и ценой от 5000 до 20000.
SELECT *
FROM `auto_class`
WHERE `Сar model` LIKE "%a" and (`Color`="white" or `Color`="gray") AND (`Еngine volume` BETWEEN 1.8 and
2.5 OR `Еngine volume` BETWEEN 3 and 3.5) and `Year of issue`>2010 and `Price` BETWEEN 5000 and 20000
